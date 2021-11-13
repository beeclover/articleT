{{--
  Template Name: 컬렉션
--}}

@extends('layouts.app')
@section('content')
  @include('partials.banner.header', [
    'label' => $title,
    'labelBg' => null,
    'title' => $description, 
    'content' => <<<EOD
    #탤런트뱅크서비스소개  #100%활용방법  #뉴스룸 #웨비나
EOD,
  ])
  <div class="container mx-auto pt-[100px] pb-[100px]">
    @while (have_posts()) @php(the_post())
        @include('partials.content-page')
    @endwhile
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
@endsection

@php(wp_reset_query())