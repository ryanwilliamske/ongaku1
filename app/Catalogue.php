<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public $table = 'catalogues';
    public $primaryKey = 'productId';
    public $timestamps = true;

    use Searchable;
    public function searchableAs()
    {

    }
}
