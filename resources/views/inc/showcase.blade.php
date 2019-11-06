<?php

use App\Company;
use App\Catalogue;
$company = Company::all();
$catalogue = Catalogue::all();
$random = rand(1,5)
?>

<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
        <h2 class="display-5">Showcase</h2>
        <p class="lead">Today's pick: <a></a> </p>

    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; overflow: scroll;">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            </tr>
        </thead>
        <tbody>
        @foreach($catalogue->sortByDesc('created_at') as $cat)
            <tr>
            <td><a href="/product/{{$cat->productId}}">{{$cat->productName}}</a></td>
            <td>{{$cat->productPrice}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>

    </div>
</div>
<div>
</div>
