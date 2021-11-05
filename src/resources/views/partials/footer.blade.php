<footer id="footer__main" class="footer__main">
  <div class="footer__main-1">
    <div class="footer__main-inner grid grid-cols-[1fr,736px]">
      <div class="flex">
        {!! wp_nav_menu([
          'menu' => 'footer-1',
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-1-nav',
          ]) !!}
      </div>
      <div>
      </div>
    </div>
  </div>
  <div class="footer__main-2">
  </div>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
