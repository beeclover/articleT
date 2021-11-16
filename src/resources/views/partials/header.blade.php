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
          <div class="relative">
            <button 
              class="btn-search" 
              @click.prevent="
                menuSelected === 'search' ? menuSelected = null : menuSelected = 'search';
                $nextTick(() => $refs.searchInput.focus());
                selected = null;
            ">search</button>
            <div class="hidden lg:block header__main-search absolute right-[-16px] top-1/2 transfrom -translate-y-1/2 w-[640px]"
              x-show="menuSelected === 'search'"
              x-cloak
              @click.away="menuSelected = null"
              @keydown.escape.window="menuSelected = null"
            >
              {!! get_search_form(false) !!}
            </div>
          </div>
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
<button id="prev" class="btn fixed right-0 top-3/4 transform -translate-y-1/2 scale-x-[-1]">
  <img src="{!! get_theme_file_uri('resources/images/btn-80.svg') !!}" alt="">
</button>
<nav class="fixed right-0 top-0 h-screen shadow-2xl w-[400px] z-[9001] bg-lighthouse py-[80px] overflow-y-scroll">
  <div class="px-[40px] mb-[60px]">
    <button class="w-[52px] h-[52px]">
      <svg id="svg8" viewBox="0 0 8.4666665 8.4666669" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><g id="layer1"><g id="g1704" transform="matrix(0 1 1 0 0 0)"><path id="path5134" d="m15.996094-38c-7.7201426 0-13.996094 6.275951-13.996094 13.996094 0 7.720142 6.2759514 14.003906 13.996094 14.003906 7.720142 0 14.003906-6.283764 14.003906-14.003906 0-7.720143-6.283764-13.996094-14.003906-13.996094zm0 2.001953c6.639261 0 12.003906 5.354879 12.003906 11.994141 0 6.639261-5.364645 12.003906-12.003906 12.003906-6.6392616 0-11.9941409-5.364645-11.9941409-12.003906 0-6.639262 5.3548793-11.994141 11.9941409-11.994141zm2.716795 7.667969 3.029299 3.330078h-13.7402349c-.5522864-.0022-1.0017529.443808-1.0039062.996094-.00217.55534.4485665 1.006079 1.0039062 1.003906h13.7343749l-3.023437 3.330078c-.370077.408097-.340388 1.038642.06641 1.410156.409131.375349 1.045708.345541 1.417969-.06641l4.539062-4.998047c.350482-.382356.350482-.969206 0-1.351562l-4.539062-4.996094c-.407239-.456561-1.015868-.577883-1.4874-.106351-.471533.471533-.398817.968977.003 1.448152z" transform="matrix(0 .265 .265 0 10.583 0)" font-variant-ligatures="normal" font-variant-position="normal" font-variant-caps="normal" font-variant-numeric="normal" font-variant-alternates="normal" font-variant-east-asian="normal" font-feature-settings="normal" font-variation-settings="normal" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="rgb(0,0,0)" text-transform="none" text-orientation="mixed" white-space="normal" shape-padding="0" shape-margin="0" inline-size="0" isolation="auto" mix-blend-mode="normal" solid-color="rgb(0,0,0)" solid-opacity="1" vector-effect="none" paint-order="stroke fill markers"/></g></g></svg>
    </button>
  </div>
  <div class="listDivider__rows1 gap-y-[120px]" style="--gap-y: 120px">
    <div class="px-[40px] after:!bg-black after:opacity-10">
      <div class="text-[28px] font-bold mb-[46px]">뉴스레터 구독하기</div>
      <form action="{!! $newsletterLink !!}" method="get" class="grid grid-cols-1 gap-y-[28px]">
        <input type="text" id="email" name="email" class="py-[14px] px-0 lg:text-[18px] btn bg-transparent border-0 border-b border-black" placeholder="이메일 주소를 입력해주세요">
        <button type="submit" class="btn-black w-full rounded-[8px] py-[10px] px-[48px] font-normal text-[20px]">구독하기</button>
      </form>
    </div>
    <div class="px-[40px] after:!bg-black after:opacity-10">
      <div class="text-[28px] font-bold mb-[20px]">PROJECT 무료의뢰</div>
      <div class="text-[18px] mb-[40px]">몇 개 항목만 작성하면 요청할 수 있어요</div>
      <a href="https://www.talentbank.co.kr/client/project/projectRegStart" target="_blank" rel="noopener noreferrer" class="btn-black w-full rounded-[8px] py-[10px] px-[48px] font-normal text-[20px] text-center">의뢰하기</a>
    </div>
    <div class="px-[40px]">
      <div class="mb-[28px] text-[28px] font-bold">최신글</div>
      <div class="grid gap-y-[28px]">
        <x-PostsRecent />
      </div>
    </div>
  </div>
</nav>