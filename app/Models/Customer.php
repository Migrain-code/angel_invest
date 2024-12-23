<?php

namespace App\Models;

use App\Services\Sms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    public function permissions()
    {
        return $this->hasOne(CustomerNotificationPermission::class, 'customer_id', 'id');
    }

    public function comments()
    {
       // return $this->hasMany(BusinessComment::class, 'customer_id', 'id');
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
