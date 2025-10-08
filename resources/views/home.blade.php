@extends('layouts.main')

@section('content')
  @include('partials.hero')

  <main id="main">
    @include('partials.get-started')
    @include('partials.constructions')
    @include('partials.services')
    @include('partials.alt-services')
    @include('partials.features')
    @include('partials.projects')
    @include('partials.testimonials')
    @include('partials.recent-blog-posts')
  </main><!-- End #main -->
@endsection