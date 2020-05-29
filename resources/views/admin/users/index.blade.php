@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <ul>
                        @foreach($users as $user)
                        <h4>Roles: {{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</h4>
                        <li>{{ $user->name }} , @can('edit-users') <a href="{{ route('admin.users.edit', $user->id) }}">Modifier</a> @endcan
                            @can('delete-users')
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            @endcan
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection