@extends('layouts.app')

@section('content')

    <div class="row right">
        <div class="col s12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    
@if ($chamado ?? "")
    <table class="table table-bordered">
        <tr>
            <th>Quantidade</th>
            <th>Número do Tombamento</th>
            <th>Descrção</th>
        </tr>
        <?php $q=1; ?>
        @foreach ($chamado as $key => $value)
          <tr>
            <td>{{$q++}}</td>
            <td>{{ $value->tombamento }}</td>
            <td>{{ $value->descricao }}</td>
          </tr>
        @endforeach
    </table>
@endif


@endsection
