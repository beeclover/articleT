
<section class="overflow-hidden">
  <div id="swipercontainerS5" class="swiper-container">
    <div class="swiper-wrapper">
      @foreach ($posts as $post)
        <div id="cardWrap" class="swiper-slide max-w-[260px] xl:max-w-none md:w-auto">
          @include('partials.card.collection', 
          [
            'title' => $post->post_title,
            'permalink' => $post->permalink,
            'excerpt' => $post->excerpt,
            'thumbnail' => $post->thumbnail,
            'date' => $post->date,
            'term' => $post?->collection[0]?->children[0] ?? $post?->collection[0] ?? null,
          ]
          )
        </div>
      @endforeach
    </div>
  </div>
</section>