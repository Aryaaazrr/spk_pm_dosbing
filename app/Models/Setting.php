<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public const ABOUT_US = 'about_us';
    public const PRIVACY_POLICY = 'privacy_policy';
    public const LEGALITY = 'legality';
    public const DOCUMENT_PROCESSING = 'document_processing';
    public const ID = 'id';
    public const EN = 'en';
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const PHONE = 'phone';
    public const ADDRESS = 'address';
    public const META_DESCRIPTION = 'meta_description';
    public const EMAIL_SETTING = 'email_setting';
    public const EMAIL_INVITATION = 'email_invitation';
    public const EXCELLENCE = 'excellence';
    public const TITLE = 'title';
    public const KEYWORD = 'keyword';
    public const DESCRIPTION = 'description';
    public const LOGO = 'logo';

    protected $fillable = [
        'key',
        'locale',
        'value',
        'additional_value',
        'json_value',
        'additional_json_value',
    ];

    public function scopeKey($query, $key)
    {
        return $query->where('key', $key);
    }

    public function scopeLocale($query, $lang)
    {
        return $query->whereLocale($lang);
    }

    public function getJsonValueAttribute($value)
    {
        return json_decode($value);
    }

    public function getAdditionalJsonValueAttribute($value)
    {
        return json_decode($value);
    }
}