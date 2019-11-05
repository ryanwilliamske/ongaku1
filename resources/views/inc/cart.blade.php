<?php
use App\Catalogue;
$product = Catalogue::all();

$total = 0;
?>


    <h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">Your cart</span>
    <a class="small" href="/clear-cart">Remove everything</a>
{{--    <span class="badge badge-secondary badge-pill">2</span>--}}
    </h4>
@if(session('cart'))
    <ul class="list-group mb-3">
 @foreach(session('cart') as $id=>$pr)

    <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
        <h6 class="my-0">{{$pr['name']}}</h6>
        </div>
        <span class="text-muted">${{$pr['price']}} x{{$pr['quantity']}}</span>
        <a href="/add-item-cart/{{$id}}"><p style="color: green;">+1</p></a>
        @if($pr['quantity'] != 1)
            <a href="/remove-item-cart/{{$id}}"><p style="color: red;">-1</p></a>
        @endif
        <a href="/delete-item-cart/{{$id}}"><p style="color: darkred;">Delete</p></a>
    </li>

        <?php
        ?>
    {{$total += $pr['price'] * $pr['quantity'] }}
@endforeach
@else
    <h1>No  items in your cart</h1>
@endif
{{--        <li class="list-group-item d-flex justify-content-between bg-light">--}}
{{--            <div class="text-success">--}}
{{--                <h6 class="my-0">Promo code</h6>--}}
{{--                <small>EXAMPLECODE</small>--}}
{{--            </div>--}}
{{--            <span class="text-success">-$5</span>--}}
{{--        </li>--}}
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>{{$total}}</strong>
        </li>
    </ul>

{{--    <form class="card p-2">--}}
{{--        <div class="input-group">--}}
{{--            <input class="form-control" type="text" placeholder="Promo code">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-secondary" type="submit">Redeem</button>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </form>--}}
