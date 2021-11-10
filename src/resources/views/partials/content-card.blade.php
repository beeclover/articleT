<div class="content__card">
  <div class="content__card-meta listDivider__cols2">
    <time datetime="{!! $post->date !!}">{!! $post->date !!}</time>
    @if (count($post->collection) > 0)
      @foreach ($post->collection as $term)
        <div class="content__card-meta-term">
          <a href="{!! $term->link !!}" class="btn-seaSerpent">{!! $term->name !!}</a>
          @if (count($term->children) > 0)
              @foreach ($term->children as $child)
                  <a href="{!! $child->link !!}">{!! $child->name !!}</a>
              @endforeach
          @endif
        </div>
      @endforeach
    @elseif(count($post->category) > 0)
      @foreach ($post->category as $term)
        <div class="content__card-meta-term">
          <a href="{!! $term->link !!}">{!! $term->name !!}</a>
        </div>
      @endforeach
    @endif
  </div>
  <div class="content__card-body">
    <div class="content__card-title">
      <a href="{!! $post->permalink !!}">{!! $post->post_title !!}</a>
    </div>
  </div>
  <div class="content__card-thumbnail">
    {{-- <img src="{!! $post->thumbnail !!}"> --}}
    <img src="https://picsum.photos/1920?random=0">
  </div>
  <div class="content__card-main col-span-2">
    <div class="prose">
      {!! $post->post_excerpt !!}
    </div>
    <div class="hidden mt-[16px]">
      <a href="{!! $post->permalink !!}" class="underline power" style="--uph: 1px">Read on</a>
    </div>
  </div>
</div>