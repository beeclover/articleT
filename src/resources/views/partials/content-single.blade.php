<article @php(post_class('entry-root'))>
  <div class="container mx-auto xl:max-w-desktop xl:px-[80px]">
    <header class="entry-header">
      <div class="entry-category">
        <a href="#" class="underline power" style="--uph: 1px">혁신 브리핑</a>
      </div>
      <div class="entry-snsShare">
        <x-sns-share />
      </div>

      <div class="entry-meta listDivider__cols2">
        <time datetime="{!! get_the_date('Y/m/d') !!}"></time>
        <span>
          탤런트뱅크 소식
        </span>
      </div>
      
      <h1 class="entry-title">
        {!! $title !!}
      </h1>

      <div class="entry-tags">
        #자동차  #금융서비스  #미디어
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
      <div class="grid grid-cols-[200px,1fr] gap-x-[20px] py-[80px] border-t border-b border-cerebralGrey mb-[60px]">
        <div class="icon-label text-[20px] font-bold" data-icon="file">첨부파일</div>
        <div class="flex gap-x-[50px]">
          @foreach ($attached as $item)
            @php($attached = $item['attached'])
            <a href="{!! $attached['url'] !!}" class="icon-label underline power" style="--uph: 1px" data-icon="attached" download>{!! $attached['filename'] !!}</a>
          @endforeach
        </div>
      </div>
    @endif
    <div class="flex items-center justify-center">
      <div class="grid grid-cols-2 gap-x-[17px] items-center">
        <a href="" class="btn-black w-[240px] text-center font-normal">
          <div class="icon-label" data-icon="share">공유하기</div>
        </a>
        <a href="" class="btn-black w-[240px] text-center font-normal">목록으로</a>
      </div>
    </div>
    <div class="mt-[150px] pt-[106px] border-t border-carbon">
      <div class="text-[48px] font-bold text-center mb-[50px]">뉴스룸 더보기</div>
      <x-PostsRecent />
    </div>
  </footer>
</article>
