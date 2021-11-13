<header id="header__root" x-data="{selected: @if(!empty($id)) {!! $id !!} @else null @endif}">
  <div id="headroom">
    <header id="header__top" class="header__top">
      <div class="header__top-inner">
        {!! $tnb !!}
        <div class="listDivider__cols1 header__top-menu">
          <a class="header__top-menu-item" href="https://www.talentbank.co.kr/client/project/projectRegStart" target="_blank" rel="noopener noreferrer">
            <svg class="i-crossbox" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><g><polygon fill="#404040" points="6,3 5,3 5,6 2,6 2,7 5,7 5,10 6,10 6,7 9,7 9,6 6,6 	"></polygon><path fill="#404040" d="M12,3h-1V2V1H0v1v9v1h2v1v1h1h10v-1V4V3H12z M1,11V2h9v1v1v7H1z M12,13H3v-1h8v-1V4h1V13z"></path></g></svg>
            <span>PROJECT 무료의뢰</span>
          </a>
          <a class="header__top-menu-item" href="https://www.talentbank.co.kr/common/announceList" target="_blank" rel="noopener noreferrer"></a>
            공지사항
          </a>
        </div>
      </div>
    </header>
    <header class="header__main" :class="{'menu-open': menuSelected === 'menu'}">
      <div class="header__main-inner">
        <div class="flex items-center gap-x-[20px]">
          <a href="/" class="header__main-logo">
            <img src="{!! $siteLogo !!}" alt="homepage logo">
          </a>
          <div class="hidden lg:block">
            {!! $gnb !!}
          </div>
        </div>
        <div class="flex gap-x-[17px] lg:gap-x-[36px] items-center">
          <a href="{!! $newsletterLink !!}" class="hidden lg:block py-[11px] px-[28px] btn-blackOut">
            뉴스레터 구독
          </a>
          <div class="hidden lg:block w-[1px] h-[60px] bg-steam"></div>
          <button 
            class="btn-search" 
            @click.prevent="
              menuSelected === 'search' ? menuSelected = null : menuSelected = 'search';
              $nextTick(() => $refs.searchInput.focus());
              selected = null;
          ">search</button>
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
          {!! get_search_form(false) !!}
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