@extends('app')

@section('content')
    <h1 class="page-heading">Cadastrar novo registro de horas</h1>

    {!! Form::open(['action' => 'HoursController@store']) !!}

    <div class="form-group">
        {!! Form::label('date', 'Data:') !!}
        {!! Form::text('date', null, ['class' => 'form-control']) !!}
        <span class="error">{!! $errors->first('date') !!}</span>
    </div>

    <div class="form-group">
        {!! Form::label('time', 'Hora:') !!}
        {!! Form::text('time', null, ['class' => 'form-control']) !!}
        <span class="error">{!! $errors->first('time') !!}</span>
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop