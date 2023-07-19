<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $keyType = "string";
    protected $primaryKey = "id_kelurahan";
    protected $guarded = [];

    public $incrementing = false;

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         if (empty($model->{$model->getKey()})) {
    //             $model->{$model->getKeyName()} = $model->generateUid();
    //         }
    //     });
    // }

    public static function generateUid($limit = 16)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
