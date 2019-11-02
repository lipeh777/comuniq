@extends('layouts.app')

@section('content')
<div class="row">

<form method="post" action="{{ route('itemcadastro.store') }}"> <!-- {{url('/create/ticket')}} -->
    @csrf
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
@endsection