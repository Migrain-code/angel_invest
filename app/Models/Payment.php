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
            'text' => 'Onay Bekliyor',
            'class' => 'pending',
            "color" => "#fff04f"
        ],
        1 => [
            'text' => 'Onaylandı',
            'class' => 'approved',
            "color" => "#6aab73"
        ],
        2 => [
            'text' => 'İptal Edildi',
            'class' => 'cancelled',
            "color" => "#4a7750"
        ],

    ];

    public function status($type)
    {
        return self::STATUS_LIST[$this->status][$type] ?? null;
    }
}
