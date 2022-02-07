{{--
  Section Name: 최신 포스트
--}}

<section class="overflow-hidden">
  <div class="container mx-auto sm:py-[80px] pt-[10px] lg:pt-[50px] pb-[50px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[48px] leading-none">최신 포스트</h2>
    <div class="mb-[76px]">
      <x-PostsHashtag />
    </div>
    <div class="text-center">
      <a href="{!! $hashtagLink !!}" class="btn-black mx-auto py-[14px] px-[60px] font-semibold text-[17px] whitespace-nowrap">더보기</a>
    </div>
  </div>
</section>
