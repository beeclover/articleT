{{--
  Section Name: 탤런트뱅크 소개
--}}

<section class="bg-lighthouse overflow-hidden">
  <div class="container mx-auto sm:pt-[100px] py-[50px] sm:pb-[120px]">
    <h2 class="text-center text-[24px] sm:text-[48px] font-bold mb-[28px] sm:mb-[72px]">탤런트뱅크 소개</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2">
      <div class="mx-full sm:mx-0">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'front-01'])
      </div>
      <div class="sm:pl-[48px] relative grid">
        <p class="text-[14px] sm:text-[26px] text-carbon leading-loose">
          가장 가치 있는 지식은 경험을 기반으로 합니다.<br class="block sm:hidden" /> 하지만 경험을 <br class="hidden sm:block" />
          공유 하기 어렵습니다.<br class="block sm:hidden" /> 전통적인 지식공유 방법은 한계가 있습니다.<br />
          <span class="pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 99.9%">탤런트뱅크만이 혁신적인 테크놀로지와 프로세스</span>에서 경험지식을 <br class="hidden sm:block" />
          가진 전문가와 함께 기업의 고민을 해결해보세요.
        </p>
        <div class="order-first sm:absolute left-1/2 bottom-[80px] transform -translate-y-1/3 sm:translate-y-0 sm:-translate-x-1/2 sm:gap-x-[52px] gap-x-[8px] mx-auto flex">
          @for ($i = 0; $i < 3; $i++)
            <div class="w-[104px] sm:w-[280px] h-[104px] sm:h-[280px] text-white bg-aero rounded-full flex items-center justify-center flex-col">
              <img class="w-[48px] h-[48px] sm:w-auto sm:h-auto" src="{!! get_theme_file_uri('resources/images/main-icon-'.$i.'.svg') !!}" alt="">
              <div class="text-[12px] sm:text-[26px] mb-[10px] sm:mb-[30px]">talentbank</div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>