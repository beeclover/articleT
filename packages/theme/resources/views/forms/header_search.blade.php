<form role="search" method="get" class="search-form w-full" action="{{ home_url('/') }}">
  <div class="flex gap-x-[8px] items-center">
    <div class="relative flex-1">
      <label>
        <span class="sr-only">
          {{ _x('Search for:', 'label', 'sage') }}
        </span>
        <span class="text-[12px] text-raisinBlack absolute top-1/2 -translate-y-1/2 left-[20px]">콘텐츠 검색</span>
        <input
          type="search"
          class="min-w-[300px] w-full xl:w-[346px] h-[38px] pl-[110px] pr-[40px] text-[14px] border-[#e0e0e0] rounded-full !outline-none focus:border-primary focus:ring-0 transition-all"
          placeholder="{!! esc_attr_x('Search', 'placeholder', 'sage') !!}"
          value="{{ get_search_query() }}"
          name="s"
          no-times
          x-ref="searchInput"
        >
      </label>
      <button
        type="submit"
        class="icon-search pb-[2px] absolute right-[16px] top-1/2 -translate-y-1/2 transform"
        value="{{ esc_attr_x('Search', 'submit button', 'sage') }}"
      ><span class="hidden">Search</span></button>
    </div>
    <button @click.prevent="menuSelected = null" class="block sm:hidden btn-times" type="reset">Reset</button>
  </div>
</form>
