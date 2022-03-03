<div id="bgMask" class="mt-[var(--bar-wp)] fixed top-0 bottom-0 left-0 right-0 w-full h-full bg-black opacity-80 z-[9010]" x-cloak x-show="$store.modal.familySite.on"></div>
<section
  class="modal__familySite fixed top-0 left-0 right-0 w-full z-[9020]"
  x-cloak
  x-show="$store.modal.familySite.on"
  @click.away="$store.modal.familySite.close()"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0 -translate-y-1/3"
  x-transition:enter-end="opacity-100 translate-y-0"
  x-transition:leave="transition ease-in duration-200"
  x-transition:leave-start="opacity-100 translate-y-0"
  x-transition:leave-end="opacity-0 -translate-y-1/3"
>
  <div class="modal__familySite-container container relative h-full mx-auto">
    <button aria-label="닫기" class="absolute top-[24px] right-[24px] fill-white" @click.prevent="$store.modal.familySite.close()">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M349.571 24L351 25.429 342.428 34 351 42.571 349.571 44 341 35.428 332.429 44 331 42.571 339.572 34 331 25.429 332.429 24 341 32.571 349.571 24z" transform="translate(-331 -24)"></path></svg>
    </button>
    <div class="modal__familySite-header">
      <div class="mb-[7px]">
        아티클T는 탤런트뱅크의<br/>
        검증된 전문가 콘텐츠 플랫폼입니다.
      </div>
      <b class="text-[21px]">탤런트뱅크 바로가기</b>
    </div>
    <div class="mx-auto w-[27px] h-[1px] bg-white my-[36px]"></div>
    <div class="flex flex-col gap-y-[37px] items-center">
      <a href="https://www.talentbank.co.kr/" target="_blank" rel="noopener noreferrer" class="btn-primary rounded-full text-[20px] pt-[9px] pb-[14px] w-full max-w-[260px] px-[20px] font-normal text-center">Talentbank</a>
      <a href="/" class="btn bg-white text-black rounded-full text-[20px] pt-[9px] pb-[14px] w-full max-w-[260px] px-[20px] font-normal text-center">articleT</a>
    </div>
  </div>
</section>
