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
        <div class="icon-label text-[20px] font-bold icon-label-file">첨부파일</div>
        <div class="flex gap-x-[50px] gap-y-[16px] flex-wrap">
          @foreach ($attached as $item)
            @php($attached = $item['attached'])
            <a href="{!! $attached['url'] !!}" class="icon-label underline power icon-label-attached" style="--uph: 1px" download>{!! $attached['filename'] !!}</a>
          @endforeach
        </div>
      </div>
    @endif
    <div class="flex items-center justify-center">
      <div class="grid grid-cols-2 gap-x-[17px] items-center">
        <a href="" class="btn-black lg:w-[240px] text-center font-normal">
          <div class="icon-label-share">공유하기</div>
        </a>
        <a href="" class="btn-black lg:w-[240px] text-center font-normal">목록으로</a>
      </div>
    </div>
    <div class="mt-[52px] lg:mt-[150px] pt-[52px] lg:pt-[106px] border-t border-carbon">
      <div class="text-[24px] lg:text-[48px] font-bold text-center mb-[28px] lg:mb-[50px]">뉴스룸 더보기</div>
      <div class="mb-[70px]">
        <x-PostsCollection />
      </div>
    </div>
  </footer>
  <footer class="bg-lighthouse py-[60px] block lg:hidden">
    <div class="listDivider__rows1 gap-y-[64px] lg:gap-y-[120px]" style="--gap-y: 64px">
      <div class="container mx-auto after:!bg-black after:opacity-10">
        <div class="text-[20px] lg:text-[28px] font-medium lg:font-bold mb-[24px] sm:mb-[46px]">뉴스레터 구독하기</div>
        <form action="{!! $newsletterLink !!}" method="get" class="grid grid-cols-[auto,100px] lg:grid-cols-1 gap-y-[28px] gap-x-[14px]">
          <input type="text" id="email" name="email" class="py-[9px] lg:py-[14px] px-0 lg:text-[18px] btn bg-transparent border-0 border-b border-black w-full" placeholder="이메일 주소를 입력해주세요">
          <button type="submit" class="btn-black lg:w-full rounded-[8px] py-[10px] px-0 lg:px-[48px] font-normal text-[14px] sm:text-[20px]">구독하기</button>
        </form>
      </div>
      <div class="container mx-auto after:!bg-black after:opacity-10">
        <div class="text-[20px] lg:text-[28px] font-medium lg:font-bold mb-[24px] sm:mb-[46px]">PROJECT 무료의뢰</div>
        <div class="grid grid-cols-[auto,100px] lg:grid-cols-1 gap-y-[28px] gap-x-[14px] items-center">
          <div class="text-[14px] lg:text-[18px] lg:mb-[40px]">몇 개 항목만 작성하면 요청할 수 있어요</div>
          <a href="https://www.talentbank.co.kr/client/project/projectRegStart" target="_blank" rel="noopener noreferrer" class="btn-black lg:w-full rounded-[8px] py-[10px] px-0 lg:px-[48px] font-normal text-[14px] sm:text-[20px] text-center">의뢰하기</a>
        </div>
      </div>
      <div class="container mx-auto">
        <div class="mb-[16px] lg:mb-[28px] text-[20px] lg:text-[28px] font-medium lg:font-bold">최신글</div>
        <div class="grid gap-y-[28px]">
          <x-PostsRecent />
        </div>
      </div>
    </div>
  </footer>
</article>
<x-SidebarWidget />