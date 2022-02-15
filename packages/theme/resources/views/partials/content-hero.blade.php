<article class="content__hero">
  <div class="content__hero-thumbnail">
    <a href="{!! $post->permalink !!}">
      <img src="{!! $post->thumbnail !!}" class="w-full h-full object-cover">
    </a>
    <a href="{!! $post->postTypeLink !!}" class="content__hero-thumbnail-label btn-primary">
      {!! $post->postTypeLabel !!}
    </a>
  </div>
  <div class="content__hero-meta listDivider__cols2">
    <time datetime="{!! $post->date !!}"></time>
    @if (!empty($post->hashtag) && count($post->hashtag) > 0)
      @foreach ($post->hashtag as $term)
        <div class="content__hero-meta-term">
          <a href="{!! $term->link !!}" class="btn-seaSerpent" @if (!empty($term->color)) style="background-color: {!! $term->color !!}" @endif>{!! $term->name !!}</a>
          @if (!empty($term->children) && count($term->children) > 0)
              @foreach ($term->children as $child)
                  <a href="{!! $child->link !!}">{!! $child->name !!}</a>
              @endforeach
          @endif
        </div>
      @endforeach
    @elseif(!empty($post->category) && count($post->category) > 0)
      @foreach ($post->category as $term)
        <div class="content__hero-meta-term">
          <a href="{!! $term->link !!}" class="content__hero-meta-term">{!! $term->name !!}</a>
        </div>
      @endforeach
    @endif
  </div>
  <div class="content__hero-main">
    <div class="content__hero-title">
      <a href="{!! $post->permalink !!}">{!! $post->post_title !!}</a>
    </div>
    <div class="prose">
      {!! $post->excerpt !!}
    </div>
  </div>
</article>
