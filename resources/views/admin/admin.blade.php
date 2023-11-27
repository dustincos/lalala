@extends('layouts.app')
@section('title', 'Settings')
@section('content')


<div class="table-data">
    <div class="order">
        <div class="head">
            <table>
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>
                            <img src="{{asset('img/client1.jpg')}}" class="rounded-circle" width="40" height="40" />
                        </td>
                        <td>
                            {{ $user->name }}
                            </a></td>
                            <td>
                                {{ $user->username }}
                                </a></td>
                                <td>
                                    </a></td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
