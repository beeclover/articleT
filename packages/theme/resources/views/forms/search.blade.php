<form role="search" method="get" class="search-form w-full" action="{{ home_url('/') }}">
  <div class="flex gap-x-[8px] items-center">
    <div class="relative flex-1">
      <label>
        <span class="sr-only">
          {{ _x('Search for:', 'label', 'sage') }}
        </span>

        <input
          type="search"
          class="px-[20px] sm:px-[32px] text-[16px] sm:text-[20px] pr-[44px] h-[40px] lg:h-[56px] w-full border rounded-full !outline-none focus:border-primary focus:ring-0"
          placeholder="{!! esc_attr_x('검색어를 입력하세요', 'placeholder', 'sage') !!}"
          value="{{ get_search_query() }}"
          name="s"
          no-times
          x-ref="searchInput"
        >
      </label>
      <button
        type="submit"
        class="btn-search absolute right-[16px] top-1/2 -translate-y-1/2 transform"
        value="{{ esc_attr_x('Search', 'submit button', 'sage') }}"
      >Search</button>
    </div>
    <button @click.prevent="menuSelected = null" class="block sm:hidden btn-times" type="reset">Reset</button>
  </div>
</form>
