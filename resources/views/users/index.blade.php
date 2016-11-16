@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Usuários</h1></div>

            <div class="panel-body">
                <h2>Este conteúdo está vindo da View!</h2>
                <table class="table table-bordered table-stripped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
