{{--
  Section Name: 고정, 인기 포스트
--}}

<section id="swiper-hero" class="overflow-hidden">
  <div class="swiper-wrapper">
    @foreach ([1,2,3] as $item)
      <div class="swiper-slide">
        <div class="container mx-auto min-h-[400px] flex items-center relative z-10 py-[80px]">
          <div class="px-[50px]">
            <h1 class="text-[color:#242424] text-[48px] leading-[68px] mb-[16px]">
              기업 고민,<br/>
              전문가가 직접 해결 합니다.
            </h1>
            <p class="text-[20px] text-[color:#3b3b3b] mb-[33px]">
              필요한 순간, 필요한 전문가를<br/>
              탤런트뱅크에서 만날 수 있습니다.
            </p>
            <button class="btn-deepSpaceRodeo rounded-full text-[18px] font-normal px-[28px]">test</button>
          </div>
        </div>
        <img class="absolute w-full h-full object-cover position-center" src="https://picsum.photos/1920/1080?random={!! $item !!}">
      </div>
    @endforeach
  </div>
</section>
