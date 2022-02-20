<header id="header__root" x-data="{selected: @if(!empty($id)) {!! $id !!} @else null @endif}">
  <div id="headroom" :class="{'transform-none': menuSelected === 'menu'}">
    <header id="header__top" class="header__top" :class="{'sm:pr-[15px]': menuSelected === 'menu' || widget}">
      <div class="header__top-inner">
        {!! $tnb !!}
      </div>
    </header>
    <header class="header__main" :class="{'menu-open sm:pr-[15px]': menuSelected === 'menu' || widget}">
      <div class="header__main-inner">
        <div class="flex items-center gap-x-[20px] h-full">
          <a class="homepage logo" href="https://www.talentbank.co.kr/" target="_blank" rel="noopener noreferrer">
            <img src="{!! $siteLogo !!}" alt="homepage logo">
          </a>
          <div class="hidden lg:block h-full">
            {!! $gnb !!}
          </div>
        </div>
        <div class="flex gap-x-[17px] lg:gap-x-[32px] items-center">
          <div class="relative flex items-center">
            <div class="hidden xl:block">
              @include('forms.header_search')
            </div>
            {{-- 중간 사이즈 검색 최소화 --}}
            <div class="block xl:hidden">
              <button
                class="btn-search"
                @click.prevent="
                  menuSelected === 'search' ? menuSelected = null : menuSelected = 'search';
                  $nextTick(() => $refs.searchInput.focus());
                  selected = null;
              "><span class="hidden">search</span></button>
              <div class="hidden lg:block header__main-search absolute right-[-16px] top-1/2 transfrom -translate-y-1/2 w-[640px]"
                x-show="menuSelected === 'search'"
                x-cloak
                @click.away="menuSelected = null"
                @keydown.escape.window="menuSelected = null"
              >
                @include('forms.header_search')
              </div>
            </div>
          </div>
          <a href="{!! $newsletterLink !!}" class="hidden lg:block py-[10px] px-[20px] btn-blackOut font-normal text-[14px]">
            뉴스레터 구독
          </a>
          <button
            class="block lg:hidden btn-menu"
            @click.prevent="
              menuSelected === 'menu' ? menuSelected = null : menuSelected = 'menu';
              selected = null;
          ">menu</button>
        </div>
      </div>
      <div class="block lg:hidden relative">
        <div :class="{'hidden': menuSelected === 'menu' || menuSelected === 'search'}">
          {!! $m_gnb !!}
        </div>
        <div class="header__m_main-search"
          x-show="menuSelected === 'search'"
          x-cloak
          @click.away="menuSelected = null"
          @keydown.escape.window="menuSelected = null"
        >
          @include('forms.header_search')
        </div>
      </div>
    </header>
  </div>
  <div
    class="menu__cover"
    x-show="menuSelected === 'menu'"
    x-cloak
  >
    {!! $gnc !!}
  </div>
</header>
