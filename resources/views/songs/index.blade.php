
@extends('layouts.master')

@section('content')




<div class="container">
    <h2>{{ __('Listado de Canciones del album ' ) }}</h2>
    <ul class="list-group">

        
        @foreach ($songs as $element)
        <?php 
            $minutos = floor($element->duration / 60); // Obtener los minutos
            $segundos = $element->duration % 60;
        ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <button class="btn" data-src="cancion2.mp3"><i class="bi bi-play-circle" style="font-size: 2rem; color: cornflowerblue;"></i></button>
            {{ $element->order }} |  {{ $element->name }} 
            <span>{{ __($minutos.':'.($segundos < 10 ? '0'.$segundos : $segundos)) }}</span>
          </li>
            @endforeach
        
      </ul>
</div>
@endsection
