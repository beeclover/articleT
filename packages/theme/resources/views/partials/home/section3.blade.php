{{--
  Section Name: 뉴스레터 배너
--}}

<section class="bg-primary py-[28px] lg:py-[55px]">
  <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-x-[80px] gap-y-[28px]">
    <div class="text-white text-center lg:text-left">
      <div class="text-[22px] sm:text-[28px] mb-[16px] sm:mb-[12px]">
        새로운 소식을 놓치지 마세요
      </div>
      <div class="text-[12px] sm:text-[14px] opacity-80">
        탤런트뱅크의 뉴스레터를 구독하시면<br class="block lg:hidden"/> 새로운 소식을 주기적으로 업데이트해 드립니다.
      </div>
    </div>
    <form action="{!! $newsletterLink !!}" method="get" class="grid grid-cols-1 lg:grid-cols-[8fr,3fr] gap-x-[32px] gap-y-[28px] lg:gap-y-[16px] self-center justify-center sm:justify-self-end">
      <input type="text" id="email" name="email" class="py-[10px] px-[24px] text-[14px] lg:text-[16px] btn border-none" placeholder="Email Address">
      <div class="justify-self-center">
        <button type="submit" class="btn-black py-[10px] px-[48px] font-medium text-[16px] lg:text-[16px]">뉴스레터 구독</button>
      </div>
    </form>
  </div>
</section>
