@extends('layouts.master')
@section('content')
    <h1>{{ __('Detalles del Artist') }}</h1>
        <p><strong>{{ __('NAME') }}: </strong> {{ $artist->name }}</p>
        
        <a href="{{ route('artists.index') }}" class="btn btn-primary">{{ __('Volver') }}</a>
@endsection
