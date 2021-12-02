@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <div class="container mx-auto py-[120px] flex flex-col justify-center items-center text-center">
      <div class="mb-[28px]">
        @include('partials.img', ['ex' => 'png', 'name' => 'img-404', 'p-[40px] max-w-[90%]'])
      </div>
      <div class="text-[44px] mb-[48px]">
        자세히 살펴보았지만,<br/>
        요청하신 페이지를 찾을 수 없습니다.
      </div>
      <div class="text-davyGrey text-[24px] mb-[60px]">
        이용에 불편을 드려 죄송합니다.<br/>
        페이지가 존재하지 않거나, 사용할 수 없는 페이지입니다.<br/>
        입력하신 주소가 정확한지 다시 한 번 확인해 주세요.
      </div>
      <div class="flex flex-wrap gap-[24px] justify-center">
        <a href="javascript:history.back();" class="btn-black w-[300px] py-[24px] font-normal text-[26px]">이전 페이지</a>
        <a href="/" class="btn-black w-[300px] py-[24px] font-normal text-[26px]">홈페이지</a>
      </div>
    </div>
  @endif
@endsection
