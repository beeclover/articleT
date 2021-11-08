@extends('layouts.app')

@section('content')

<section>
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-[1fr,1px,1fr] gap-x-[52px]">
    <div class="sm:py-[100px] mb-[54px] sm:mb-0">
      @include('partials.content-hero', ['post' => $heroPost])
      <div class="sm:h-px bg-steam w-full mt-[60px] sm:mb-[36px]"></div>
      <div class="py-[20px] sm:py-0 bg-[#f7f7f7] sm:bg-transparent px-[var(--container-px)] sm:px-0 mx-full sm:mx-0">
        @include('partials.banner.client_announcement')
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
@endsection