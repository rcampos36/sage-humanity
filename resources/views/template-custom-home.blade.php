{{--
  Template Name: Custom Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('blocks.ctas')
    @include('blocks.about-us')
    @include('blocks.volunteer')
    @include('blocks.what-we-do')
    @include('blocks.what-we-did')
    @include('blocks.testimonials')
    @include('blocks.team')
    @include('blocks.our-events')
  @endwhile
@endsection