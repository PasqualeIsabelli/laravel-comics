@extends('layouts.public')

@section ('title', 'DC Comic - Homepage')

@section('content')

  <div class="container-fluid content">
    <div class="container">
      <div class="bg-primary d-inline-block cs-banner"><h4 class="text-white fw-bold">CURRENT SERIES</h4></div>
      <div class="row row-cols-6">
        @foreach ($comics as $comic)
          <a class="text-decoration-none" href="{{ route('comic_page') }}">
            <div class="card border-0">
              <img src="{{ $comic['thumb'] }}">
              <div class="card-body text-white fs-5">{{ $comic['series'] }}</div>
            </div>
          </a>
        @endforeach
      </div>
      <div class="text-center mt-4">
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0">LOAD MORE</button>
      </div>
    </div>
  </div>

@endsection