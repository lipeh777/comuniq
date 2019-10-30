@extends('layouts.app')

@section('content')

<div class="row container">
  <div class="col s10 m12">
    <div class="card darken-1">
      <div class="card-header center"><h5>{{ __('Cadastro de Itens') }}</h5></div>
      <div class="card-content">
        <div class="row">


<div class="center container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post" action="{{url('/create/ticket')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="input-field col s12">
                                <i class="material-icons prefix" id="icone">border_color</i>
            <label for="title">Número de Tombamento</label>
            <input type="text" class="form-control" name="title"/>
        </div>
       
        <button type="submit" class="btn btn-primary green accent-4">Cadastre</button>
        </form>


</div>

</div>
      </div>
    </div>
  </div>
</div>
@endsection













