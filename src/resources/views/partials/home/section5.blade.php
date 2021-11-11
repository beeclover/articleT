{{--
  Section Name: 뉴스룸
--}}

<section>
  <div class="container mx-auto sm:pt-[60px] py-[50px] sm:pb-[150px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[49px]">뉴스룸 더보기</h2>
    <div>
      <div id="originalS5" class="hidden sm:grid grid-cols-5 gap-x-[27px]">
        @foreach ($collectionPosts as $post)
          <div class="">
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
      <div id="swipercontainerS5" class="block sm:hidden overflow-hidden">
        <div class="swiper-pagination s3 pagination__s1 static mt-7 pt-0.5"></div>
      </div>
    </div>
  </div>
</section>