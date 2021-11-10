<article class="content__hero">
  <div class="content__hero-thumbnail">
    <img src="{!! $post->thumbnail !!}">
    <a href="" class="content__hero-thumbnail-label btn-deepSpaceRodeo">
      {!! $post->postTypeLabel !!}
    </a>
  </div>
  <div class="content__hero-meta listDivider__cols2">
    <time datetime="{!! $post->date !!}">{!! $post->date !!}</time>
    @if (count($post->category) > 0)
      @php($cat = $post->category[0])
      <a href="{!! $cat->link !!}" class="content__hero-meta-term">{!! $cat->name !!}</a>
    @endif
  </div>
  <div class="content__hero-main">
    <div class="content__hero-title">
      <a class="underline power" href="{!! $post->permalink !!}">{!! $post->post_title !!}</a>
    </div>
    <div class="prose">
      {!! $post->post_excerpt !!}
    </div>
  </div>
</article>