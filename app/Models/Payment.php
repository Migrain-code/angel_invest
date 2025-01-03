<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_LIST = [
        0 => [
            'html' => '<span class="badge badge-warning">Onay Bekliyor</span>',
            'text' => 'Onay Bekliyor',
            'class' => 'warning',
            "color" => "#fff04f"
        ],
        1 => [
            'html' => '<span class="badge badge-success">Onaylandı</span>',
            'text' => 'Onaylandı',
            'class' => 'success',
            "color" => "#6aab73"
        ],
        2 => [
            'html' => '<span class="badge badge-danger">İptal Edildi</span>',
            'class' => 'danger',
            "color" => "#4a7750"
        ],

    ];
    public function user()
    {
        return $this->hasOne(Customer::class, 'id', 'user_id');
    }
    public function status($type)
    {
        return self::STATUS_LIST[$this->status][$type] ?? null;
    }
}
