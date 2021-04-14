@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a>
            <br><br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-dev">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                    <img width="270px" src="{{ $item->gallery }}" alt="">
                    </a>

                </div>
                <div class="col-sm-3">
                        <div>
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>
                    </a>

                </div>
                <div class="col-sm-6">
                    <a href="/removecart/{{ $item->cart_id}}" class="btn btn-warning">Remove from cartlist</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Order Now</a>
    <br><br>
</div>
@endsection