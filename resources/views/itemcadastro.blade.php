@extends('layouts.app')

@section('content')

<div class="row container">
  <div class="col s10 m12">
    <div class="card darken-1">
      <div class="card-header center"><h5>{{ __('Cadastro de Itens') }}</h5></div>
      <div class="card-content">
        <div class="row">

    <!--  -->

    <form method="post" action="{{ route('itemcadastro.store') }}"> <!-- {{url('/create/ticket')}} -->
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
        <div class="container">
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Funções</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach($item as $itens)
                            <tr>
                                <th>{{$itens->id}}</th>
                                <td>{{ $itens->numero_tombamento }}</td>
                                <td>
                                    <a href="">Vizualizar</a>
                                    <a href="">Editar</a>
                                    <a href="">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection













