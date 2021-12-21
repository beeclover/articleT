<button id="prev" @click.prevent="widget = true" class="btn fixed hidden sm:block right-[20px] top-3/4 transform -translate-y-1/2 scale-x-[-1] z-[8000]">
  <img src="{!! get_theme_file_uri('resources/images/btn-80.svg') !!}" alt="">
</button>
<nav 
    id="sidebar-widget"
    x-show="widget"
    x-cloak
    @click.away="widget = false"
    :class="{'!translate-x-0': widget}"
    class="hidden lg:block transfrom transition-all translate-x-[500px] fixed right-0 top-0 h-screen shadow-2xl w-[400px] z-[9001] bg-lighthouse py-[80px] overflow-y-scroll" no-scrollbar>
  <div class="px-[40px] mb-[60px]">
    <button @click.prevent="widget = false" class="btn w-[52px] h-[52px]">
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