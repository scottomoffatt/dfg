{{--
  Template Name: Front-page
--}}

@extends('layouts.app')

@section('content')
  @include('partials.content-front')
  @while(have_posts()) @php the_post() @endphp
  @endwhile
@endsection
