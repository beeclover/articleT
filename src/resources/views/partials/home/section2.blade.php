{{--
  Section Name: 최신 포스트
--}}

<section class="overflow-hidden">
  <div class="container mx-auto sm:py-[80px] py-[50px] sm:mb-[30px] sm:mt-[16px]">
    <div class="flex justify-center">
      <ul id="swiper-hashtagPost-pagination" class="hashtagPost__pagination">
        @php($index = 0)
        @foreach ($hashtagPostPagination as $t)
          <li>
            <button id="bullet" class="btn @if($index === 0) active @endif" data-slide-to="{!! $index !!}">{!! $t->name !!}</button>
          </li>
          @php($index++)
        @endforeach
      </ul>
    </div>
    <div id="swiper-hashtagPost" class="swiper-container relative">
      <div class="swiper-wrapper">
        @foreach ($hashtagPosts as $tag => $posts)
          <div id="{!! $tag !!}" class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[32px] gap-y-[71px]">
              @foreach ($posts as $key => $post)
                <div class="lg:-card__s3 lg:!card__s2 lg:after:hidden">
                  @include('partials.card.template', [
                    'title' => $post->post_title,
                    'permalink' => $post->permalink,
                    'thumbnail' => $post->thumbnail,
                    'date' => $post->date,
                    'excerpt' => $post->excerpt,
                    'hashtag' => $post->hashtag,
                    'category' => $post->category,
                  ])
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
      <div class="btn-group">
        <button id="prev" class="btn absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 xl:-translate-x-[100%] z-10 filter disabled:brightness-95 disabled:cursor-default">
          <img class="w-[60px] h-[60px]" src="{!! get_theme_file_uri('resources/images/btn-80-prew.svg') !!}" alt="">
        </button>
        <button id="next" class="btn absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 xl:translate-x-[100%] z-10 filter disabled:brightness-95 disabled:cursor-default">
          <img class="w-[60px] h-[60px]" src="{!! get_theme_file_uri('resources/images/btn-80-next.svg') !!}" alt="">
        </button>
      </div>
    </div>
  </div>
</section>
