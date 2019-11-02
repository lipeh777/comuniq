@extends('layouts.app')

@section('content')

<div class="row container">
    <div class="card">
        <table class="highlight">
            <tr>
                <th>Quantidade</th>
                <th>Número do Tombamento</th>
                <th>Descrição</th>
            </tr>
            <?php $q=1; ?>
            @if ($chamado ?? "")
                @foreach ($chamado as $key => $value)
                  <tr>
                    <td>{{$q++}}</td>
                    <td>{{ $value->tombamento }}</td>
                    <td>{{ $value->descricao }}</td>
                  </tr>
                @endforeach
            @endif
        </table>
    </div>

    <div class="row center">
        <a class="btn-large waves-effect waves-light  green accent-4 lighten-1" href="{{ url('chamado') }}">{{ __('Chamado') }}</a>
    </div>
</div>

@endsection
