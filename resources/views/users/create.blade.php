@extends('users.layout')
@section('content')
    <div class="card">
        <div class="card-header">
                Adicionar novo usuário
        </div>
        <div class="card-body">
            <form action="{{ url('user') }}" method='POST'>
                    {!! csrf_field() !!}
                    <div>
                        <label for='name'>Name</label>
                        <input type="text" name='name' id='name' class='form-control'>
                    </div>
                    <div>
                        <label for='email'>Email</label>
                        <input type="email" name='email' id='email' class='form-control'>
                    </div>

                    <input type="submit" value="Adicionar" class='btn btn-success'>
                </form>
        </div>
    </div>
@stop