@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('admin.includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header d-flex justify-content-between">All Products
                    <a class="btn btn-primary" href="{{ route('product.create') }}">Add Products</a>
                </div>

                <div class="card-body">
                    @if (count($products) == 0)
                    <h4>No Products to display!</h4>
                    @else
                    <table class="table table-hover">
                        <thead>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->subcategory->name }} {{ $product->category($product->subcategory->category_id)->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td><a class="btn btn-sm btn-outline-primary"
                                        href="{{ route('product.edit', ['product' => $product]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>

                                <td>
                                    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm btn-outline-danger"><i
                                                class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
