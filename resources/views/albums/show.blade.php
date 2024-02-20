@extends('layouts.master')
@section('content')
    <h1>{{ __('Detalles del Album') }}</h1>
        <p><strong>{{ __('ARTIST_ID') }}: </strong> {{ $album->artist_id }}</p>
        
        <p><strong>{{ __('NAME') }}: </strong> {{ $album->name }}</p>
        
        <p><strong>{{ __('YEAR') }}: </strong> {{ $album->year }}</p>
        
        <a href="{{ route('albums.index') }}" class="btn btn-primary">{{ __('Volver') }}</a>
@endsection
