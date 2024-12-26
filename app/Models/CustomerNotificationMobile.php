<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CustomerNotificationMobile extends Model
{
    use HasFactory, HasTranslations;
    protected $translatable = ['title', 'content'];

    public function getTitle()
    {
        return $this->translate('title');
    }

    public function getDescription()
    {
        return $this->translate('content');
    }

    public function markAsRead()
    {
        $this->status = 1;
        $this->save();
    }
}
