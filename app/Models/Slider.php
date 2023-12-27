<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'image',
        'content_en',
        'content_hi',
        'content_gu',
        'status'
    ];

    public function getNameAttribute($value)
    {
        return $this->{'content_' . app()->getLocale()};
    }
    public function setNameAttribute($value)
    {
        $this->{'content_' . app()->getLocale()} = $value;
    }
}
