<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $keyType = "string";
    protected $primaryKey = "id_patient";
    protected $fillable = [
        'name',
        'phone',
        'address',
        'rt',
        'rw',
        'id_kelurahan',
        'birth_date',
        'gender',
    ];

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKey()})) {
                $model->{$model->getKeyName()} = $model->generateUid();
            }
        });
    }

    public static function generateUid($limit = 16)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
