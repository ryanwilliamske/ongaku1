@extends('layouts.app')

@section('content')
    <div class="container">
  <div class="py-5 text-center">
<h2>Checkout form</h2>
</div>

  <div class="row">
  <div class="col-md-4 order-md-2 mb-4">
  @include('inc.cart')
  </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing</h4>
      <form action="/buy" method="post" class="form-group needs-validation" novalidate="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay With M-Pesa</button>
      </form>
    </div>
  </div>
</div>
@endsection
