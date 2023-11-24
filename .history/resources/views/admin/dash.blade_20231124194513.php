@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="table-data">
  <div class="order">
      <div class="head">
          <h3>Store</h3>
          <i class="fas fa-shopping-cart"></i>
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
                     <a href="products/{{ $product->id }}/edit" class ="btn btn-dark btn-sm">Edit</a>


                     <form method="post" class="d-inline" action="products/{{ $product->id }}/delete">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="fa fa-trash">Delete</button>
                     </form>
                  </td>

              </tr>
              @endforeach
          </tbody>
      </table>
      <h5>Next Page:</h5>
      {{-- {{ $products->links() }} --}}
  </div>
</div>
@endsection
