@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                @can('product-create')
                    <a href="{{ route('products.create') }}" class="btn btn-primary">create product</a>
                @endcan

                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                                    @can('product-edit')
                                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    @endcan

                                    @csrf
                                    @method('DELETE')
                                    @can('product-delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
