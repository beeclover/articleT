{{--
  Section Name: 뉴스룸
--}}

<section class="overflow-hidden">
  <div class="container mx-auto sm:pt-[60px] py-[50px] sm:pb-[150px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[49px]">뉴스룸 더보기</h2>
    <div id="swipercontainerS5" class="swiper-container mb-[70px]">
      <div class="swiper-wrapper">
        @foreach ($collectionPosts as $post)
          <div id="cardWrap" class="swiper-slide max-w-[260px] xl:max-w-none md:w-auto">
            @include('partials.card.collection', 
            [
              'title' => $post->post_title,
              'permalink' => $post->permalink,
              'excerpt' => $post->excerpt,
              'thumbnail' => $post->thumbnail,
              'date' => $post->date,
              'term' => $post->collection[0]->children[0],
            ]
            )
          </div>
        @endforeach
      </div>
    </div>
    <div class="text-center">
      <a href="{!! $collectionLink !!}" class="btn-black mx-auto py-[14px] px-[60px] font-semibold text-[17px]">BROWSE ALL POSTS</a>
    </div>
  </div>
</section>