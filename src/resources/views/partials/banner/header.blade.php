<div class="header__page">
  <div class="header__page-inner relative">
    <div class="header__page-main">
      <h1 class="header__page-title">{!! $title !!}</h1>
      <div class="header__page-subtitle">{!! $content !!}</div>
    </div>
    <div class="absolute w-full h-full left-0 top-0 right-0 bottom-0">
      @if(empty($bgImg) || is_null($bgImg))
        @include('partials.img', ['ex' => 'jpg', 'name' => 'header-03', 'class' => 'header__page-bg'])
      @elseif(!empty($bgUrl))
        <img src="{!! $bgUrl !!}" class="header__page-bg" alt="">
      @else
        {!! $bgImg !!}
      @endif
      @isset($dimBg)
        <div class="bg-black bg-opacity-[0.55] absolute w-full h-full left-0 top-0 right-0 bottom-0"></div>
      @endisset
    </div>
  </div>
</div>
