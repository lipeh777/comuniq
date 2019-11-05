@extends('layouts.app')

@section('content')

<div class="row container">
  <div class="col s10 m12">
    <div class="card darken-1">
      <div class="card-header center"><h5>{{ __('Cadastro de Itens') }}</h5></div>
      <div class="card-content">
 <!-- @yield('form') -->

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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection













