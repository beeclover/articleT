<div class="header__page">
  <div class="header__page-inner">
    <div class="header__page-labelWrap {!! $labelBg !!}">
      <div class="header__page-label">
        {!! $label !!}
      </div>
    </div>
    <div class="header__page-main">
      <div class="text-center">
        <h1 class="header__page-title">{!! $title !!}</h1>
        <div class="header__page-subtitle">
          {!! $content !!}
        </div>
      </div>
    </div>
    @if(empty($bgImg) || is_null($bgImg))
      @include('partials.img', ['ex' => 'jpg', 'name' => 'header-03', 'class' => 'header__page-bg'])
    @elseif(!empty($bgUrl))
      <img src="{!! $bgUrl !!}" class="header__page-bg" alt="">
    @else
      {!! $bgImg !!}
    @endif
  </div>
</div>
