<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    // Указываем, что ключ не автоинкрементный
    public $incrementing = false;

    // Тип ключа — строка
    protected $keyType = 'string';

    public $guarded=[];

}
