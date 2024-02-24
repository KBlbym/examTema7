
@extends('layouts.master')
@section("title", "albumes del $artist->name" )

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('artists.show', $artist->id) }}">{{$artist->name}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">Albumes</li>
    </ol>
  </nav>
 
    @if (count($artist->albums) > 0)
    <div class="row d-flex justify-content-center align-items-center">
        @foreach ($artist->albums as $element) 
        <div class="col">
            <div class="card mb-3" style="border-radius: 15px;">
            <div class="card-body p-4">
                <div class="d-flex text-black">
                <div class="flex-shrink-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/1754/1754224.png"
                    alt="Generic placeholder image" class="img-fluid"
                    style="width: 180px; border-radius: 10px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mb-1">{{ $element->name }}</h5>
                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                        {{ $artist->name }}
                    </p>
                    <div class="d-flex justify-content-around rounded-3 p-2 mb-2"
                    style="background-color: #efefef;">
                    <div>
                        <p class="small text-muted mb-1">
                        Canciones
                        </p>
                        <p class="mb-0">{{count($element->songs)}}</p>
                    </div>
                    <div class="px-3">
                        <p class="small text-muted mb-1">
                        Año
                        </p>
                        <p class="mb-0">{{$element->year}}</p>
                    </div>
                    </div>
                    <div class="d-flex pt-1">
                        @if (count($element->songs) == 0)
                        <div class="alert alert-danger flex-grow-1" role="alert">
                            No hay canciones
                           </div>
                        @else
                        <a href="{{ route('songs.index', $element->id) }}" class="btn btn-primary flex-grow-1">{{ __('Ver canciones') }}</a>
                        @endif
                    </div>
                </div>
                </div>
            </div>
            </div>
            
        </div>
        @endforeach
        </div>
    @else
        <div class="alert alert-danger" role="alert">
           No hay albumes
          </div>
    @endif


@endsection
