@extends('layouts.app')

@section('content')

<section>
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-[1fr,1px,1fr] gap-x-[52px]">
    <div class="sm:py-[100px] mb-[52px] sm:mb-0">
      @include('partials.content-hero')
      <div class="sm:h-px bg-steam w-full mt-[60px] sm:mb-[36px]"></div>
      <div class="py-[20px] sm:py-0 bg-[#f7f7f7] sm:bg-transparent px-[var(--container-px)] sm:px-0 mx-full sm:mx-0">
        @include('partials.banner.client_announcement')
      </div>
    </div>
    <div class="hidden sm:block bg-steam"></div>
    <div class="sm:py-[100px]">
      <div class="text-[32px] font-bold mb-[72px]">인기 포스트</div>
      <ul class="listDivider__rows1">
        <li>
          @include('partials.content-c2r2')
        </li>
        <li>
          @include('partials.content-c2r2')
        </li>
        <li>
          @include('partials.content-c2r2')
        </li>
      </ul>
    </div>
  </div>
</section>
<div class="bg-blue-500 h-[400px]">

</div>

@endsection