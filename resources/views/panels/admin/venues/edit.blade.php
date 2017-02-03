@extends('layouts.app')

@section('content')

    <div class="card">
        <h4 class="card-header bg-primary white-text">Edit {{ $venue->venue_name }}</h4>
        <div class="card-block">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input:<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::model($venue, ['route' => ['venues.update', $venue->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                @include('panels.admin.venues.form')
            {!! Form::close() !!}

        </div>
    </div>

@stop