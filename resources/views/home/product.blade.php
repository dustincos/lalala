@section('title', 'Store')
<x-home>
<section class="productList">
@foreach($products as $product)
{{-- {{ $loop->index+1 }} --}}
<div class="product">
    <h3>{{$product->name}}</h3>
    <h5>Rs: {{$product->price}}</h5>
    <img src="products/{{ $product->image }}" width="200px" height="200px">
    <button class="h-btn">Buy Now</button>
</div>
@endforeach
</section>

</x-home>
