{{--
  Template Name: 뉴스레터
--}}

@extends('layouts.app')

@section('content')
  <section class="py-[40px] lg:py-[80px]">
    <div class="container mx-auto">
      <div class="text-center mb-[38px] sm:mb-[80px]">
        <h1 class="text-[36px] lg:text-[52px] font-bold mb-[32px]">뉴스레터 구독하기</h1>
        <div class="text-[20px] lg:text-[24px]">텔런트뱅크가 전하는 다양한 콘텐츠를<br class="block lg:hidden"/> 이메일로 구독해보세요</div>
      </div>
    </div>
    <div class="lg:container mx-auto">
      <div class="relative px-[var(--container-px)] py-[40px] lg:py-[86px] text-white text-center mb-[52px] md:mb-[104px]">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'img-1760-news', 'class' => 'absolute w-full h-full object-cover left-0 right-0 top-0 bottom-0'])
        <div class="relative">
          <div class="text-[22px] lg:text-[28px] leading-normal mb-[20px] lg:mb-[40px]">
            탤런트뱅크 뉴스레터는 빨르게 변하는 산업의 동향과 미래 전망,<br class="hidden lg:block" />
            변화의 중심에서도 흔들리지 않는 핵심 등 놓치기 아쉬운 <br class="hidden lg:block" />
            정보들만 모아 보내 드립니다.
          </div>
          <div class="text-[16px] lg:text-[20px] opacity-75">
            뉴스레터를 통해 가끔은 깜짝 선물도 하며, <br/>
            탤런트뱅크가 보내는 편지를 기다리는 일이 즐거운 일이 되도록 만들겠습니다.
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto">
      @include('forms.newsletter')
    </div>
  </section>
@endsection
