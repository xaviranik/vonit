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
                <div class="card-header">Update Sub Category: {{ $subcategory->name }}</div>

                <div class="card-body">
                    <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST">
                        <input name="_method" type="hidden" value="put">
                        @csrf
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id == $subcategory->category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}">
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Update Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
