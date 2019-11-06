<?php

namespace App;

//use Spatie\Searchable\Searchable;
//use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Catalogue extends Model implements Searchable
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
    public function getSearchResult(): SearchResult
    {
//        $url = route('/search',$this->primaryKey);
        return new SearchResult(
            $this,
            $this->productName,$this->dp
//            $url
        );
        // TODO: Implement getSearchResult() method.
    }
}
