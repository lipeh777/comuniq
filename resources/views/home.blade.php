@extends('layouts.app')

@section('content')

<div class="row container">
    <div class="card">
        <table class="highlight centered">
            <thead>
            <tr>
                <th>Quantidade</th>
                <th>Descrição</th>
            </tr>
            </thead>
            <?php $q=1; ?>
            @foreach ($chamado as $key => $value)
            <tbody>
                <tr>
                    <td>{{$q++}}</td>
                    <td>{{ $value->descricao }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <div class="row center">
        <a class="btn-large waves-effect waves-light  green accent-4 lighten-1" href="{{ url('chamado') }}">{{ __('Chamado') }}</a>
    </div>
</div>

@endsection
