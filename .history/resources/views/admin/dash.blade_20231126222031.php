@extends('layouts.app')
@section('title', 'My Store')
@section('content')
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Store</h3>
            <i class="fas fa-shopping-cart"></i>
        </div>


        <div>
            @if (session()->has('message'))
                {{session()->get('message')}}
            @endif
        </div>


        <table>
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>
                        <a href="products/{{$product->id}}/show" class="text-dark">{{ $product->name }}
                        </a></td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img src="products/{{ $product->image }}" class="rounded-circle" width="40" height="40" />
                    </td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                       <a href="products/{{ $product->id }}/edit" class ="">Edit</a>
                       <form method="post" id="onclick" class="d-inline" action="products/{{ $product->id }}/delete">
                        @csrf
                        @method('DELETE')
                        <i class="fa-solid fa-trash"></i>
                        <a href="#" onclick="myFunction()">delete</a>
                       </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- <div class="row">
    {{ $products->links() }}
</div> --}}
@endsection
