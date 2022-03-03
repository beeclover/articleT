<header id="header__root" x-data="{selected: @if(!empty($id)) {!! $id !!} @else null @endif}">
  <div id="headroom" :class="{'transform-none': menuSelected === 'menu'}">
    <header id="header__top" class="header__top" :class="{'sm:pr-[15px]': menuSelected === 'menu' || widget}">
      <div class="header__top-inner">
        <div class="listDivider__cols2 text-[14px] text-[#8b8b8b]">
          <div>아티클T는 탤런트뱅크의 검증된 전문가 콘텐츠 플랫폼입니다.</div>
          <a class="text-[#1973b9] flex items-center font-medium" href="https://www.talentbank.co.kr/" target="_blank" rel="noopener noreferrer">탤런트뱅크 바로가기 <i class="icon-right-open"></i></a>
        </div>
      </div>
    </header>
    <header class="header__main" :class="{'menu-open sm:pr-[15px]': menuSelected === 'menu' || widget}">
      <div class="header__main-inner">
        <div class="flex items-center gap-x-[81px] h-full">
          <div class="flex gap-x-[7px] items-end">
            <a class="homepage logo hidden lg:inline" href="/">
              <img src="{!! $siteLogo !!}" alt="homepage logo">
            </a>
            <button aria-label="로고 홈으로가기" class="homepage logo inline lg:hidden" @click.prevent="$store.modal.familySite.open()">
              <img src="{!! $siteLogo !!}" alt="homepage logo" >
            </button>
            <button class="w-[16px] h-[16px] lg:hidden" aria-label="패밀리 사이트 메뉴 열기" @click.prevent="$store.modal.familySite.open()">
              @include('partials.img', ['ex' => 'png', 'name' => 'icon-circle-down'])
            </button>
          </div>
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
