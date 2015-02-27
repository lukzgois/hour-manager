@extends('app')

@section('content')
    <h1 class="page-heading">Registros de Horas</h1>

    <a href="{{ url('hours/create') }}" class="btn btn-success">
        Registrar horário
    </a>
    <br />

    <table class="table">
        <thead>
            <tr>
                <th>Data</th>
                <th colspan="100">Registro de Horas</th>
            </tr>
        </thead>
    @foreach($hours as $date => $times)
        <tr>
            <td>{{ $date }}</td>


            @foreach($times as $time)
                <td>{{ $time }}</td>
            @endforeach

        </tr>
    @endforeach
    </table>
@stop