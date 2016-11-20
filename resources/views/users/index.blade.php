@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <h1>
                  <div class="col-md-7">
                    Usuários <small>- Cadastrados</small>
                  </div>
                  <div class="col-md-5">
                    <div class="btn-group pull-right" >
                      <a href="{{ route("$actionLinks[0]") }}" class="btn btn-default" >
                        <i class="fa fa-plus fa-fw"></i>
                        {{ $actionNames[0] }}
                      </a>
                      <a href="{{ route("$actionLinks[1]") }}" class="btn btn-default" >
                        <i class="fa fa-plus fa-fw"></i>
                        {{ $actionNames[1] }}
                      </a>
                    </div>
                  </div>
                </h1>
              </div>
            </div>

            <div class="panel-body">
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
                <div class="text-center">
                  {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
