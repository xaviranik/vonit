@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('admin.includes.sidebar')
        </div>
        <div class="col-md-8">
            @include('admin.includes.errors')

            <div class="card">
                <div class="card-header">Update Product: {{ $product->name }}</div>

                <div class="card-body">
                    <form action="{{ route('product.update', ['product' => $product]) }}" method="POST">
                        <input name="_method" type="hidden" value="put">
                        @csrf
                        <div class="form-group">
                            <label for="subcategory">Category</label>
                            <select class="form-control" id="subcategory" name="subcategory">
                                @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }} <span>{{ $subcategory->category->name }}</span>
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="7" id="description">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
