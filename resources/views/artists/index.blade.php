
@extends('layouts.master')

@section('content')
    <h1>{{ __('Listado de de artista ' ) }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>Acción</th>
    </tr>
        </thead>
        <tbody>
            @foreach ($artists as $element)
            <tr>
                <td>{{ $element->name }}</td>
                <td>
                    <a href="{{ route('artists.show', $element->id) }}" class="btn btn-info">{{ __('Ver') }}</a>
                    <a href="{{ route('albums.index', $element->id) }}" class="btn btn-info">{{ __('Ver Albumes') }}</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
