{{--
  Section Name: 고정, 인기 포스트
--}}

<section id="swiper-hero" class="overflow-hidden">
  <div class="swiper-wrapper">
    @foreach ($bannerMain as $post)
      <div class="swiper-slide">
        <div class="container mx-auto min-h-[325px] lg:min-h-[400px] flex items-center relative z-10">
          <div class="lg:px-[50px] w-full">
            <h1 class="@if($post->isBlackText) text-[color:#242424] @else text-white @endif text-[26px] lg:text-[48px] font-bold leading-[40px] lg:leading-[68px] mb-[16px]">
              {!! $post->banner_title !!}
            </h1>
            <p class="text-[16px] lg:text-[20px] @if($post->isBlackText) text-[color:#3b3b3b] @else text-white @endif mb-[16px] lg:mb-[33px]">
              {!! $post->banner_content !!}
            </p>
            <div class="flex gap-[8px] flex-wrap">
              @foreach ($post->buttons as $button)
                <a href="{!! $button['b_button_link'] !!}" class="btn-deepSpaceRodeo rounded-full text-[16px] lg:text-[18px] font-normal px-[28px]" @if($button['b_button_link_target'])target="_blank"@endif>{!! $button['b_button_text'] !!}</a>
              @endforeach
            </div>
          </div>
        </div>
        @if ($post->thumbnail_uri)
          <img class="absolute w-full h-full object-cover position-center" src="{!! $post->thumbnail_uri !!}">
        @else
          <img class="absolute w-full h-full object-cover position-center" src="/wp-content/uploads/2022/01/4263.jpg">
        @endif
      </div>
    @endforeach
  </div>
</section>
