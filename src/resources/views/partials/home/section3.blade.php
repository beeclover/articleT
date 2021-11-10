{{--
  Section Name: 최신 포스트
--}}

<section>
  <div class="container mx-auto sm:pt-[100px] py-[50px] sm:pb-[120px]">
    <h2 class="text-center text-[24px] sm:text-[48px] font-bold mb-[28px] sm:mb-[72px] max:sm:hidden">최신 포스트</h2>
    {{-- <div class="flex justify-center">
      <ul id="swiper-recentPost-pagination" class="recentPost__pagination">
        @php($index = 0)
        @foreach ($recentTagsPosts as $tag => $posts)
          <li>
            <button id="bullet" class="btn" data-slide-to="{!! $index !!}">{!! $tag !!}</button>
          </li>
          @php($index++)
        @endforeach
      </ul>
    </div> --}}
    <div id="swiper-recentPost" class="swiper-container relative">
      <div class="swiper-wrapper">
        @foreach ($recentTagsPosts as $tag => $posts)
          <div id="{!! $tag !!}" class="swiper-slide">
            <div class="grid grid-cols-3 gap-x-[70px]">
              @foreach ($posts as $post)
                @include('partials.content-c1r3', ['post' => $post])
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
      <button id="prev" class="btn absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 z-10 filter disabled:brightness-95 disabled:cursor-default">
        <img src="{!! get_theme_file_uri('resources/images/btn-80-prev.svg') !!}" alt="">
      </button>
      <button id="next" class="btn absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 z-10 filter disabled:brightness-95 disabled:cursor-default">
        <img src="{!! get_theme_file_uri('resources/images/btn-80-next.svg') !!}" alt="">
      </button>
    </div>
  </div>
</section>