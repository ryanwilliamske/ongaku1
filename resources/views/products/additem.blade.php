@extends('layouts.app')

@section('content')
    <form class="form-group">
        <input type="text" class="form-control" name="productName" placeholder="Product name">
        <input type="text" class="form-control" name="price" placeholder="Price (Dollars)">
        <input type="file" class="form-control" name="image" >
        <button type="submit">Add item</button>
    </form>
@endsection
