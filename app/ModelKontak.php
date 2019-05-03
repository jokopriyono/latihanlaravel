<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string|null nama
 * @property array|string|null email
 * @property array|string|null nohp
 * @property array|string|null alamat
 */
class ModelKontak extends Model
{
    protected $table = 'kontak';
}
