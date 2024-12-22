<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Spatie\Translatable\HasTranslations;

class RoadMap extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['title', 'description'];

    public function getDescription()
    {
        return $this->translate('description');
    }
    public function getTitle()
    {
        return $this->translate('title');
    }
}
