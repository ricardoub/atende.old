@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><h1>Usuários <small>- Criar novo</small></h1></div>

      <div class="panel-body">
        {{ Form::open(['route' => 'users.store']) }}

        <div class="form-group">
          {{ Form::label('name', 'Nome completo', ['class' => 'form-label']) }}
          {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome completo']) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', 'E-mail', ['class' => 'form-label']) }}
          {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email@exemplo.com']) }}
        </div>

        <div class="form-group">
          {{ Form::label('password', 'Senha', ['class' => 'form-label']) }}
          {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'secret93$#']) }}
        </div>

        <div class="form-group">
          {{ Form::label('password_confirmation', 'Confirmar senha', ['class' => 'form-label']) }}
          {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'secret93$#']) }}
        </div>

        <hr>

        <div class="text-center">
          {{ Form::submit('Criar usuário', ['class' => 'form-control btn btn-primary']) }}
        </div>



        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection
