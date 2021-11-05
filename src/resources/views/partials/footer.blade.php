<footer id="footer__main" class="footer__main">
  <div class="footer__main-1">
    <div class="footer__main-inner grid grid-cols-1 sm:grid-cols-[1fr,736px] container mx-auto">
      <div class="flex order-2 sm:order-2">
        {!! wp_nav_menu([
          'menu' => 'footer-1',
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-1-nav',
          ]) !!}
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-[600px,1fr] order-1 sm:order-2">
        <div>
          <h2 class="h2">Help & Support</h2>
          <div class="grid grid-cols-3 sm:grid-cols-[123px,1fr] gap-[20px]">
            <div class="icon-label" data-icon="fap">
              FAQ
            </div>
            <div class="hidden sm:block prose">
              <p>
                가장 많이 문의 주셨던 사항을 정리했습니다.
              </p>
            </div>
            <div class="icon-label" data-icon="call">
              1833-4730
            </div>
            <div class="hidden sm:block prose">
              <p>
                AM 9:00 ~ PM 5:00 (토/일/공휴일 휴무)
              </p>
            </div>
            <div class="icon-label" data-icon="mail">
              1:1 문의
            </div>
            <div class="hidden sm:block prose">
              <p>
                문의사항을 남겨주시면, 신속하게 응대해 드립니다.
              </p>
            </div>
          </div>
        </div>
        <div class="justify-items-start hidden sm:block">
          <button class="btn-darkSilver text-[14px] font-medium">뉴스레터 구독</button>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__main-2">
  </div>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
