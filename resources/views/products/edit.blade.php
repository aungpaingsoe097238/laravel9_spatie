@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                {!! Form::model($product,[ 'route' => ['products.update',$product->id] , 'method' => 'PUT' ] ) !!}

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        {!! Form::textarea('detail', null, ['placeholder' => 'detail', 'class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
