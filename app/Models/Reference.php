<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Reference extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'slug', 'meta_title', 'meta_description', 'description', 'content'];

    public function getName()
    {
        return $this->translate('name');
    }

    public function getSlug()
    {
        return $this->translate('slug');
    }

    public function getMetaTitle()
    {
        return $this->translate('meta_title');
    }

    public function getMetaDescription()
    {
        return $this->translate('meta_description');
    }

    public function getDescription()
    {
        return $this->translate('description');
    }
    public function getContent()
    {
        return $this->translate('content');
    }
}
