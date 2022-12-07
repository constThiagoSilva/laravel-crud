@extends('users.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            User Page
        </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">
                    Name: {{ $user->name }}
                </h5>
                <h5>
                    Email: {{ $user->email }}
                </h5>
            </div>
            <hr>
        </div>
    </div>
@stop