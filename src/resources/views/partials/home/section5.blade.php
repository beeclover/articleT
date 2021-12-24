{{--
  Section Name: 뉴스룸
--}}

<section class="overflow-hidden">
  <div class="container mx-auto sm:py-[80px] py-[50px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[32px] leading-none">컬렉션</h2>
    <div class="mb-[32px]">
      <x-PostsCollection />
    </div>
    <div class="text-center">
      <a href="{!! $collectionLink !!}" class="btn-black mx-auto py-[14px] px-[60px] font-semibold text-[17px] whitespace-nowrap">컬렉션 더보기</a>
    </div>
  </div>
</section>