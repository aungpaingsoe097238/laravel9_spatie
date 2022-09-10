@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

                {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::text('name',null,[ 'placeHolder' => 'Role Name' , 'class' => 'form-control' ]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permissions:</strong>
                        <br>
                        @foreach ($permissions as $permission)
                            <label for="">
                                {!! Form::checkbox('permission[]' , $permission->id , false  ) !!}
                                {{ $permission->name }}
                            </label>
                        @endforeach
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
