@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('admin.includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">All Categories 
                        <a class="btn btn-primary" href="{{ route('category.create') }}">Add Category</a>
                    </div>
                 
                    <div class="card-body">
                        @if (count($categories) == 0)
                            <h4>No categories to display!</h4>
                        @else
                            <table class="table table-hover">
                                <thead>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                               
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td><a class="btn btn-sm btn-outline-primary" href="{{ route('category.edit', $category->id) }}"><i class="fa fa-edit"></i></a></td>
                                             
                                            <td>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o"></i></button>
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