<footer id="footer__main" class="footer__main">
  <div class="footer__main-1">
    <div class="footer__main-inner grid grid-cols-1 xl:grid-cols-2 gap-y-[40px] gap-x-[40px] container mx-auto xl:max-w-desktop xl:px-[80px]">
      <div class="flex order-2 sm:order-2">
        {!! wp_nav_menu([
          'menu' => 'footer-1',
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-1-nav',
          ]) !!}
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-[auto,auto] order-1 sm:order-2">
        <div>
          <h2 class="h2">Help & Support</h2>
          <div class="grid grid-cols-3 sm:grid-cols-[123px,1fr] gap-[20px]">
            <div class="icon-label" data-icon="fap">
              FAQ
            </div>
            <div class="hidden sm:block">
              가장 많이 문의 주셨던 사항을 정리했습니다.
            </div>
            <div class="icon-label" data-icon="call">
              1833-4730
            </div>
            <div class="hidden sm:block">
              AM 9:00 ~ PM 5:00 (토/일/공휴일 휴무)
            </div>
            <div class="icon-label" data-icon="mail">
              1:1 문의
            </div>
            <div class="hidden sm:block">
              문의사항을 남겨주시면, 신속하게 응대해 드립니다.
            </div>
          </div>
        </div>
        <div class="justify-self-end hidden lg:block self-end xl:self-start">
          <a href="{!! $newsletterLink !!}" class="btn-darkSilver text-[14px] font-medium">뉴스레터 구독</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__main-2">
    <div class="footer__main-inner container mx-auto grid grid-cols-1 gap-x-[40px] lg:grid-cols-2 xl:max-w-desktop xl:px-[80px]">
      <div class="grid gap-y-[20px] sm:gap-y-[24px] mb-[64px] lg:mb-0">
        {!! wp_nav_menu([
          'menu' => 'footer',
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-2-nav order-2 lg:order-1',
          ]) !!}
          <div class="order-3 lg:order-2">Copyright© TalentBank. 2021 ~ All Rights reserved.</div>
          <div class="order-1 lg:order-3 sm:mt-[4px] mb-[4px] sm:mb-0 flex">
            <a href="/">
              <img src="{!! get_theme_file_uri('resources/images/logo-02.svg') !!}" alt="">
            </a>
          </div>
      </div>
      <div class="grid gap-y-[30px]">
        <div class="grid gap-y-[8px]">
          <div class="icon-label text-[#888]" data-icon="award-2">모바일 어워드 코리아 2019 구인플랫폼 부문 대상</div>
          <div class="icon-label text-[#888]" data-icon="award-1">제8회 모바일브랜드대상 인재매칭 플랫폼 부문 수상</div>
          <div class="icon-label text-[#888]" data-icon="award-3">2019 소비자의 선택 인재매칭 플랫폼 부문 수상</div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-1">
          {!! wp_nav_menu([
            'menu' => 'sns',
            'container' => false,
            'echo' => false,
            'depth' => 1,
            'menu_class' => 'flex gap-x-[20px]',
            ]) !!}
            <div class="w-full flex justify-end">
              <a href="{!! $newsletterLink !!}" class="block sm:hidden btn-darkSilver text-[14px] font-medium">뉴스레터 구독</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
