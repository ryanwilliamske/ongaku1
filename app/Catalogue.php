<?php

namespace App;

//use Spatie\Searchable\Searchable;
//use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
//    implements Searchable
{
    public $table = 'catalogues';
    public $primaryKey = 'productId';
    public $timestamps = true;

//    public function category(){
//        return $this->belongsTo('App\ProductCategory');
//    }
//    public function getSearchResult(): SearchResult
//    {
//        $url = route('');
//        // TODO: Implement getSearchResult() method.
//    }
}
