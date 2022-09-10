@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                       <th>#</th>
                       <th>Name</th>
                       <th width="280px">Action</th>
                    </tr>
                      @foreach ($roles as $key => $role)
                      <tr>
                          <td>{{ $role->id }}</td>
                          <td>{{ $role->name }}</td>
                          <td>
                              <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                              @can('role-edit')
                                  <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                              @endcan
                              @can('role-delete')
                                  {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                  {!! Form::close() !!}
                              @endcan
                          </td>
                      </tr>
                      @endforeach
                  </table>

                  {!! $roles->render() !!}
            </div>
        </div>
    </div>

@endsection
