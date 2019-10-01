<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public $table = 'catalogues';
    public $primaryKey = 'productId';
    public $timestamps = true;
}
