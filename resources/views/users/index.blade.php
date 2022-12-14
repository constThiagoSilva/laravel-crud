@extends('users.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastro de Usuários</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title='add-user'>Adicionar usuário</a>
                    </div>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user) 
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ url('/users/' . $user->id) }}" title='view-user'><button class="btn btn-info btn-sm">Ver</button></a>
                                    <a href="{{ url('/users/' . $user->id . '/edit') }}" title='edit-user'><button class="btn btn-primary btn-sm">Editar</button></a>

                                    <form action="{{ url('users/' . $user->id) }}" method='POST' style='display:inline'>
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button  type='submit' class="btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                                    </form>
                                </td>
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