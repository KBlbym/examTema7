
@extends('layouts.master')

@section('content')
    <h1>{{ __('Listado de de albums') }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>artist_id</th>
                <th>name</th>
                <th>year</th>
                <th>Acción</th>
    </tr>
        </thead>
        <tbody>
            @foreach ($albums as $element)
            <tr>
                <td>{{ $element->artist_id }}</td>
                <td>{{ $element->name }}</td>
                <td>{{ $element->year }}</td>
                <td>
                    <a href="{{ route('albums.show', $element->id) }}" class="btn btn-info">{{ __('Ver') }}</a>
                    <a href="{{ route('songs.index', $element->id) }}" class="btn btn-info">{{ __('Ver canciones') }}</a>

                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
