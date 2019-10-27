@extends('layouts.app')

@section('content')

  @if ($message = Session::get('message'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
  @endif

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'chamado.store', 'method'=>'POST']) }}
        @include('chamado.form')
      {{ form::close() }}
    </div>
  </div>

@endsection