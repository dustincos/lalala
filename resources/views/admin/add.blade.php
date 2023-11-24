@extends('layouts.app')
@section('title', 'Add Item')
@section('content')
<div id="block" class="table-data">
        <div class="container">
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-25">
                            <label>Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" class="form-control" value="{{ old('name')}}" />
                            @if($errors->has('name'))
                            <span class="text-danger">{{  $errors->first('name')}}</span>
                            @endif
                        </div></div>

                        <div class="row">
                            <div class="col-25">
                            <label>Price</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="price" class="form-control" value="{{ old('price')}}" />
                            @if($errors->has('price'))
                            <span class="text-danger">{{  $errors->first('price')}}</span>
                            @endif
                        </div></div>

                        <div class="row">
                            <div class="col-25">
                            <label>Description</label>
                        </div>
                        <div class="col-75">
                            <textarea class="form-control" name="description">{{ old('description')}}</textarea>
                            @if($errors->has('description'))
                            <span class="text-danger">{{  $errors->first('description')}}</span>
                            @endif
                        </div></div>

                        <div class="row">
                            <div class="col-25">
                            <label>Image</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="image" class="form-control" value="{{ old('image')}}" />
                            @if($errors->has('image'))
                            <span class="text-danger">{{  $errors->first('image')}}</span>
                            @endif
                        </div></div><br>
                        <div class="row">
                        <input type="submit" class="form-submit"></button>
                        </div>
                    </form>
        </div>
</div>
@endsection