<div class="content__c1r3">
  <div class="content__c1r3-inner">
    <div class="content__c1r3-thumbnail">
      <img src="{!! $post->thumbnail !!}">
    </div>
    <div>
      <div class="content__c1r3-meta listDivider__cols2">
        <time datetime="{!! $post->date !!}">{!! $post->date !!}</time>
        @if (!empty($post->collection) && count($post->collection) > 0)
          @foreach ($post->collection as $term)
            <div class="content__c1r3-meta-term">
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
            <div class="content__c1r3-meta-term">
              <a href="{!! $term->link !!}">{!! $term->name !!}</a>
            </div>
          @endforeach
        @endif
      </div>
      <div class="content__c1r3-title">
        <a href="{!! $post->permalink !!}">{!! $post->post_title !!}</a>
      </div>
    </div>
    <div class="content__c1r3-main">
      <div class="prose text-[14px] sm:text-[18px]">
        {!! $post->post_excerpt !!}
      </div>
    </div>
  </div>
  <div>
    <a href="{!! $post->permalink !!}" class="underline power" style="--uph: 1px">Read on</a>
  </div>
</div>
