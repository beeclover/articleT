<div class="card__hashtag">
  <div class="card__hashtag-thumbnail">
    <a href="{!! $permalink !!}">
      {!! $thumbnail !!}
    </a>
  </div>
  <div class="card__hashtag-title">
    <a href="{!! $permalink !!}">{!! $title !!}</a>
  </div>
  <div class="card__hashtag-footer">
    <div class="card__hashtag-meta card__hashtag-swiper swiper-container">
      <div class="swiper-wrapper">
        @if (!empty($hashtag) && count($hashtag) > 0)
          @foreach ($hashtag as $term)
            <div class="swiper-slide card__hashtag-meta-term">
              <a href="{!! $term->link !!}" class="btn-gray">{!! $term->name !!}</a>
            </div>
            @if (!empty($term->children) && count($term->children) > 0)
                @foreach ($term->children as $child)
                  <div class="swiper-slide card__hashtag-meta-term">
                    <a href="{!! $child->link !!}" class="btn-gray">{!! $child->name !!}</a>
                  </div>
                @endforeach
            @endif
          @endforeach
        @elseif(!empty($category) && count($category) > 0)
          @foreach ($category as $term)
            <div class="swiper-slide card__hashtag-meta-term">
              <a href="{!! $term->link !!}" class="btn-gray">{!! $term->name !!}</a>
            </div>
          @endforeach
        @endif
      </div>
    </div>
    <div class="card__hashtag-readmore">
      <a href="{!! $permalink !!}">
        <span class="sr-only">Read more</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="59.871" height="15.501" viewBox="0 0 59.871 15.501">
          <defs>
              <clipPath id="b">
                  <use xlink:href="#a"/>
              </clipPath>
          </defs>
          <g data-name="사각형 47" transform="translate(0 7.381)" style="stroke:#707070;fill:#fff">
              <path id="a" style="stroke:none" d="M0 0h59.089v.74H0z"/>
              <path d="M0 .24h59.09m-.5-.24v.74m.5-.24H0m.5.24V0" style="clip-path:url(#b);fill:none"/>
          </g>
          <path data-name="패스 13" d="m0 0 10.406.053.053 10.406" transform="rotate(45 25.455 62.667)" style="fill:none;stroke:#707070"/>
        </svg>
      </a>
    </div>
  </div>
</div>
