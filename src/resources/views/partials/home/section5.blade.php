{{--
  Section Name: 뉴스룸
--}}

<section class="overflow-hidden">
  <div class="container mx-auto sm:pt-[60px] py-[50px] sm:pb-[150px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[49px]">뉴스룸 더보기</h2>
    <x-PostsCollection />
    <div class="text-center">
      <a href="{!! $collectionLink !!}" class="btn-black mx-auto py-[14px] px-[60px] font-semibold text-[17px]">BROWSE ALL POSTS</a>
    </div>
  </div>
</section>