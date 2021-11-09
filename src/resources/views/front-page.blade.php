@extends('layouts.app')

@section('content')

<section>
  <div class="container mx-auto grid grid-cols-1 desktop:grid-cols-[1fr,1px,735px] lg:grid-cols-[1fr,1px,1fr] gap-x-[52px]">
    <div class="sm:py-[100px] mb-[54px] sm:mb-0 flex flex-col justify-between">
      @include('partials.content-hero', ['post' => $heroPost])
      <div>
        <div class="sm:h-px bg-steam w-full sm:w-[calc(100%+52px+var(--container_px))] mt-[60px] sm:mb-[36px] ml-full"></div>
        <div class="py-[20px] sm:py-0 bg-[#f7f7f7] sm:bg-transparent px-[var(--container_px)] sm:px-0 mx-full sm:mx-0">
          @include('partials.banner.client_announcement')
        </div>
      </div>
    </div>
    <div class="hidden sm:block bg-steam"></div>
    <div class="sm:py-[100px] mb-[54px] sm:mb-0">
      <div class="text-[24px] sm:text-[32px] font-bold mb-[45px] sm:mb-[72px]">인기 포스트</div>
      <ul class="sm:listDivider__rows1 grid gap-y-[54px] sm:gap-y-[88px]">
        @foreach ($popularityPosts as $post)
          <li>
            @include('partials.content-c2r2', ['post' => $post])
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
<section class="bg-lighthouse">
  <div class="container mx-auto pt-[100px] pb-[120px]">
    <h2 class="text-center text-[48px] font-bold mb-[72px]">탤런트뱅크 소개</h2>
    <div class="grid grid-cols-2">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'front-01'])
      <div class="pl-[48px] relative">
        <p class="text-[26px] text-carbon leading-loose">
          가장 가치 있는 지식은 경험을 기반으로 합니다. 하지만 경험을 <br/>
          공유 하기 어렵습니다. 전통적인 지식공유 방법은 한계가 있습니다.<br/>
          <span class="pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 99.9%">탤런트뱅크만이 혁신적인 테크놀로지와 프로세스</span>에서 경험지식을 <br/>
          가진 전문가와 함께 기업의 고민을 해결해보세요.
        </p>
        <div class="absolute left-1/2 bottom-[80px] transform -translate-x-1/2 flex gap-x-[52px]">
          @for ($i = 0; $i < 3; $i++)
            <div class="w-[280px] h-[280px] text-white bg-aero rounded-full flex items-center justify-center flex-col">
              <img src="{!! get_theme_file_uri('resources/images/main-icon-'.$i.'.svg') !!}" alt="">
              <div class="text-[26px] mb-[30px]">talentbank</div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>
@endsection