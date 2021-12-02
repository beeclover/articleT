
@extends('layouts.app')

@section('content')
@if (!have_posts())
  <div class="container mx-auto py-[120px] flex flex-col justify-center items-center text-center">
  <div class="mb-[28px]">
    <img src="{!! get_theme_file_uri('resources/images/not-found.jpg') !!}" alt="" class="max-w-[90%] sm:max-w-[600px] mx-auto">
  </div>
  <div class="text-davyGrey text-[24px] mb-[60px]">
    이용에 불편을 드려 죄송합니다.<br/>
    페이지에 포스트가 존재하지 않습니다.
  </div>
  <div class="flex flex-wrap gap-[24px] justify-center">
    <a href="javascript:history.back();" class="btn-black w-[300px] py-[24px] font-normal text-[26px]">이전 페이지</a>
    <a href="/" class="btn-black w-[300px] py-[24px] font-normal text-[26px]">홈페이지</a>
  </div>
</div>
@else
  @include('partials.banner.header', [
    'label' => $title,
    'labelBg' => $labelBg,
    'title' => $description, 
    'bgImg' =>  $bgImg,
    'content' => $obTags ?? $tags ?? '',
  ])
  <div class="container mx-auto py-[40px] sm:py-[100px]">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[70px] gap-y-[56px] lg:gap-y-[85px]">
      @while(have_posts()) @php(the_post())
        <div class="!card__s2">
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
