@extends('users.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Edit User
        </div>
        <div class="card-body">
            <form action="{{ url('users/' . $user->id) }}" method='POST'>
                    {!! csrf_field() !!}

                    @method('PATCH')
                    <div>
                        <input type="hidden" name='id' id='id' value="{{ $user->id }}"/>
                    </div>
                    <div>
                        <label for="name">Nome: </label>
                        <input type="text" name='name' id='name' value="{{ $user->name }}" class='form-control'/>
                    </div>
                    <div>
                        <label for="email">Email: </label>
                        <input type="email" name='email' id='email' value="{{ $user->email }}" class='form-control'/>
                    </div>
                    <div>
                        <label for="password">Senha: </label>
                        <input type="password" name='password' id='password' value="{{ $user->password }}" class='form-control'/>
                    </div>
                    <input type="submit" value='Editar usuário' class='btn  btn-success'>
            </form>
        </div>
    </div>
@stop