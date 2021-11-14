<article @php(post_class('entry-root'))>
  <div class="container mx-auto xl:max-w-desktop xl:px-[80px]">
    <header class="entry-header">
      <div class="entry-category">
        @isset($taxonomy)
          <a href="{!! $taxonomy->link !!}" class="underline power" style="--uph: 1px">{!! $taxonomy->name !!}</a>
        @endisset
      </div>
      <div class="entry-snsShare">
        <x-sns-share />
      </div>

      <div class="entry-meta">
        <div class="listDivider__cols2">
          <time datetime="{!! get_the_date('Y/m/d') !!}"></time>
          @isset($collection)
            <a href="{!! $collection->link !!}">{!! $collection->name !!}</a>
          @endisset
        </div>
      </div>
      
      <h1 class="entry-title">
        {!! $title !!}
      </h1>

      <div class="entry-tags">
        @if(has_tag())
          @foreach(get_the_tags() as $tag)
          <a href="{!! get_term_link($tag) !!}">#{!! $tag->name !!}</a>
          @endforeach
        @endif
      </div>
  
    </header>
    <div class="entry-thumbnail">
      {!! $thumbnail !!}
    </div>
  </div>

  <div class="container mx-auto">
    <div class="entry-content prose">
      @php(the_content())
    </div>
  </div>

  <footer class="container mx-auto xl:max-w-desktop xl:px-[80px] entry-footer">
    @if ($attached)
      <div class="grid lg:grid-cols-[200px,1fr] gap-y-[21px] gap-x-[20px] py-[28px] lg:py-[80px] border-t border-b border-cerebralGrey mb-[28px] lg:mb-[60px]">
        <div class="icon-label text-[20px] font-bold" data-icon="file">첨부파일</div>
        <div class="flex gap-x-[50px] gap-y-[16px] flex-wrap">
          @foreach ($attached as $item)
            @php($attached = $item['attached'])
            <a href="{!! $attached['url'] !!}" class="icon-label underline power" style="--uph: 1px" data-icon="attached" download>{!! $attached['filename'] !!}</a>
          @endforeach
        </div>
      </div>
    @endif
    <div class="flex items-center justify-center">
      <div class="grid grid-cols-2 gap-x-[17px] items-center">
        <a href="" class="btn-black lg:w-[240px] text-center font-normal">
          <div class="icon-label" data-icon="share">공유하기</div>
        </a>
        <a href="" class="btn-black lg:w-[240px] text-center font-normal">목록으로</a>
      </div>
    </div>
    <div class="mt-[52px] lg:mt-[150px] pt-[52px] lg:pt-[106px] border-t border-carbon">
      <div class="text-[48px] font-bold text-center mb-[50px]">뉴스룸 더보기</div>
      <x-PostsCollection />
    </div>
  </footer>
</article>
