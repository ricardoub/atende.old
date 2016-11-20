@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <h1>
            <div class="col-md-7">
              Usuários <small>- Incluir</small>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right" >
                <a href="{{ route("$actionLinks[0]") }}" class="btn btn-default" >
                  <i class="fa fa-plus fa-fw"></i>
                  {{ $actionNames[0] }}
                </a>
              </div>
            </div>
          </h1>
        </div>
      </div>

      <div class="panel-body">
        {{ Form::open(['route' => "$actionLinks[1]"]) }}

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
          <div class="btn-group" >
            <a href="{{ route("$actionLinks[0]") }}" class="btn btn-default" >
              <i class="fa fa-plus fa-fw"></i>
              {{ $actionNames[0] }}
            </a>
            <button class="btn btn-primary">
              {{ $actionNames[1] }}
            </button>
          </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection
