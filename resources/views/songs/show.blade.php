@extends('layouts.master')
@section('content')
    <h1>{{ __('Detalles del Song') }}</h1>
        <p><strong>{{ __('ALBUM_ID') }}: </strong> {{ $song->album_id }}</p>
        
        <p><strong>{{ __('NAME') }}: </strong> {{ $song->name }}</p>
        
        <p><strong>{{ __('DURATION') }}: </strong> {{ $song->duration }}</p>
        
        <p><strong>{{ __('ORDER') }}: </strong> {{ $song->order }}</p>
        
        <a href="{{ route('songs.index') }}" class="btn btn-primary">{{ __('Volver') }}</a>
@endsection
