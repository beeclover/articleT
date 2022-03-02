<div class="header__section">
  <div class="header__section-inner relative">
    <div class="header__section-labelWrap {!! $labelBg !!}">
      <div class="header__section-label">
        {!! $label !!}
      </div>
    </div>
    <div class="header__section-main">
      <div class="text-center">
        <h1 class="header__section-title">{!! $title !!}</h1>
        <div class="header__section-subtitle">
          {!! $content !!}
        </div>
      </div>
    </div>
    <div class="absolute w-full h-full left-0 top-0 right-0 bottom-0">
      @if(empty($bgImg) || is_null($bgImg))
        @include('partials.img', ['ex' => 'jpg', 'name' => 'header-03', 'class' => 'header__section-bg'])
      @elseif(!empty($bgUrl))
        <img src="{!! $bgUrl !!}" class="header__section-bg" alt="">
      @else
        {!! $bgImg !!}
      @endif
      @isset($dimBg)
        <div class="{!! $labelBg !!} @if($labelBg === 'bg-black') bg-opacity-60 @else bg-opacity-80 @endif brightness-[0.6] absolute w-full h-full left-0 top-0 right-0 bottom-0"></div>
      @endisset
    </div>
  </div>
</div>
