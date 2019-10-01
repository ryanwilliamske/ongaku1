<?php
use App\Catalogue;
$products = Catalogue::all();
?>
@if(count($products)>1)
    @foreach($products as $product)
    <div class="text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <img width="140" height="140" class="rounded-circle" 
                alt="Generic placeholder image" 
                src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
            
                <h5 class="card-title">{{$product->productName}}</h5>
                <!-- <small>{{$product->prodDescription}}</small> -->
                <a href="/product/{{$product->productId}}" class="btn btn-dark">View More</a>
            </div>
        </div>
    </div>
    @endforeach
@endif

