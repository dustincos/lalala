@extends('layouts.app')
@section('title', 'Item Preview')
@section('content')
<div class="table-data">
    <div class="row justify-content-center">
        <div class="col-sm-6 mt-4">
            <div class="card p-4">
                <p>Name : <b>{{ $product->name }}</b></p>
                <p>Price : <b>{{ $product->price }}</b></p>
                <p>Description : <b>{{ $product->description }}</b></p>
                <p>Image : <b>{{ $product->description }}</b></p>
                <img src="/products/{{$product->image}}"class="rounded" width="100%" max-width:"400px" height="100%"/>
            </div>
        </div>
    </div>
</div>
@endsection
