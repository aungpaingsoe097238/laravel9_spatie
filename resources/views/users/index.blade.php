@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                @can('user-create')
                <a href="{{ route('users.create') }}" class="btn btn-primary">create user</a>
                @endcan
                <table class="table table-bordered">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th width="280px">Action</th>
                    </tr>
                    @foreach ($data as $key => $user)
                     <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>
                         @if(!empty($user->getRoleNames()))
                           @foreach($user->getRoleNames() as $v)
                              {{ $v }}
                           @endforeach
                         @endif
                       </td>
                       <td>
                          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                          @can('user-list')
                          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                               {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                           {!! Form::close() !!}
                           @endcan
                       </td>
                     </tr>
                    @endforeach
                   </table>
                   {{  $data->links() }}
            </div>
        </div>
    </div>

@endsection
