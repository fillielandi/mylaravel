@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users<br>
                <a href="/users/create">Add User</a>
                </div>

                <div class="card-body">
                    <h3>Registered Users of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">System #</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user['name'] }} </td>
                                <td>{{ $user['email'] }} </td>
                                <td>{{ $user['systemID'] }} </td>
                                <td><a href='/users/edit/{{ $user['id'] }}'>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

