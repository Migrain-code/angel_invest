<?php

namespace App\Models;

use App\Services\Sms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;


class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name', 'email', 'password'
    ];
    public function addToken($payment)
    {
        if ($this->checkToken($payment)){
            return;
        }
        $userToken = new UserToken();
        $userToken->user_id = $this->id;
        $userToken->payment_id = $payment->id;
        $userToken->token = $payment->token;
        $userToken->save();
    }

    public function cryptoTokens()
    {
        return $this->hasMany(UserToken::class, 'user_id', 'id');
    }

    public function totalToken()
    {
        return $this->cryptoTokens()->sum('token');
    }

    public function totalTokenPrice()
    {
        return $this->totalToken() * 0.005;
    }
    public function checkToken($payment)
    {
        return $this->cryptoTokens()->where('payment_id', $payment->id)->exists();
    }
    public function device()
    {
        return $this->hasOne(Device::class, 'customer_id', 'id');
    }

    public function campaigns()
    {
        return $this->hasMany(CampaignCustomer::class, 'customer_id', 'id');
    }
    public function notifications()
    {
        return $this->hasMany(CustomerNotificationMobile::class, 'customer_id', 'id')->latest();
    }

    public function readNotifications()
    {
        return $this->notifications()->where('status', 1)->get();
    }
    public function unreadNotifications()
    {
        return $this->notifications()->where('status', 0)->get();
    }
    public function permissions()
    {
        return $this->hasOne(CustomerNotificationPermission::class, 'customer_id', 'id');
    }

    public function payments()
    {
       return $this->hasMany(Payment::class, 'user_id', 'id');
    }
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id')->withDefault([
            'id' => 1,
            'name' => "Şehir Bulunamadı"
        ]);
    }
    public function district()
    {
        return $this->hasOne(District::class, 'id', 'district_id')->withDefault([
            'id' => 1,
            'name' => "İlçe Bulunamadı"
        ]);
    }

    public function sendNotification($title, $message)
    {
        $notification = new CustomerNotificationMobile();
        $notification->customer_id  = $this->id;
        $notification->slug = Str::random(10);
        $notification->title = $title;
        $notification->content = $message;
        $notification->status = 0;
        $notification->save();
    }
    public function sendSms($message)
    {
        Sms::send(clearPhone($this->phone), $message);
        return true;
    }

    protected static function booted()
    {
        static::deleted(function ($customer) {
            $customer->permissions()->delete();
            $customer->device()->delete();
            $customer->notifications()->delete();
        });
    }
}
