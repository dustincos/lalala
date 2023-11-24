@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card mt-3 p-3">
                    <h3>Product Edit #{{$product->name}}</h3>
                    <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-25">
                                <label>Name</label>
                            </div>
                            <div class="col-75">
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}" />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-25">
                            <label>Price</label>
                            </div>
                            <div class="col-75">
                            <input type="number" name="price" class="form-control"
                                value="{{ old('price', $product->price) }}" />
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div></div>

                        <div class="row">
                            <div class="col-25">
                            <label>Description</label>
                        </div>
                        <div class="col-75">
                            <textarea class="form-control" name="description" style="height:200px">{{ old('description', $product->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div></div>

                        <div class="row">
                            <div class="col-25">
                            <label>Image</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}" />
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div></div>

                        <div class="row">
                        <input type="submit" class="form-submit"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
@endsection