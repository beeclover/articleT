@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container mx-auto py-[120px] flex flex-col justify-center items-center text-center">
    <div class="mb-[28px]">
      <img src="{!! get_theme_file_uri('resources/images/not-found.jpg') !!}" alt="" class="max-w-[600px]">
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
  @endif

  <div class="container mx-auto pt-[100px] pb-[100px]">
    <div class="grid gap-y-[52px] lg:gap-y-[121px]">
      @while(have_posts()) @php(the_post())
        <div class="xl:-card__s2 xl:!card__s4">
          @includeFirst(['partials.content-search', 'partials.content'])
        </div>
      @endwhile
    </div>
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
  <x-SidebarWidget />
@endsection
