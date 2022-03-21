
@extends('layouts.app')

@section('content')
@if (!have_posts())
  <div class="container mx-auto py-[120px] flex flex-col justify-center items-center">
  <div class="mb-[28px]">
    <img src="{!! get_theme_file_uri('resources/images/not-found.jpg') !!}" alt="" class="max-w-[90%] sm:max-w-[600px] mx-auto">
  </div>
  <div class="text-davyGrey text-[24px] mb-[60px] text-center">
    이용에 불편을 드려 죄송합니다.<br/>
    페이지에 아티클이 존재하지 않습니다.
  </div>
  <div class="my-[80px] w-[64px] h-[2px] rounded-full bg-davyGrey mx-auto"></div>
  <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[48px] leading-none">추천 아티클</h2>
  <x-PostsRecommendation />
</div>
@else
  @include('partials.banner.header', [
    'title' => $title,
    'bgImg' =>  $bgImg,
    'content' => $content ?? $description ?? $tags ?? '',
    'dimBg' => true
  ])
  <div class="container mx-auto py-[50px] sm:py-[60px]">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[26px] lg:gap-x-[50px] gap-y-[50px]">
      @while(have_posts()) @php(the_post())
        <div class="!card__s2 h-full">
          @includeFirst(['partials.content-card', 'partials.content'])
        </div>
        @php( $tags = get_the_tags( get_the_ID() ) )
      @endwhile
    </div>
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
  @endif
@endsection
