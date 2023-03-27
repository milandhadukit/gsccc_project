<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\TranslationLoader\LanguageLine;

use Laravel\Sanctum\HasApiTokens;

class Translation extends LanguageLine
{
    use HasApiTokens, HasFactory;

    protected $table      = 'translation';
    public    $timestamps = true;
}
