
@extends('layouts.master')

@section('content')
    <h1>{{ __('Listado de de songs') }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>album_id</th>
                <th>name</th>
                <th>duration</th>
                <th>order</th>
                <th>Acción</th>
    </tr>
        </thead>
        <tbody>
            @foreach ($songs as $element)
            <tr>
                <td>{{ $element->album_id }}</td>
                <td>{{ $element->name }}</td>
                <td>{{ $element->duration }}</td>
                <td>{{ $element->order }}</td>
                <td>
                    <a href="{{ route('songs.show', $element->id) }}" class="btn btn-info">{{ __('Ver') }}</a>
                    
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
