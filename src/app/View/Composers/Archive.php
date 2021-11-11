<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Archive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive',
        'archive-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'pagination' => $this->pagination(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if (is_archive()) {
            return get_the_archive_title();
        }

        return get_the_title();
    }

    public function arrow($direction) {
      $class = '';
      if ($direction === 'prev') {
        $class = 'transform rotate-180';
      }
      return <<<EOD
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="$class hidden sm:block">
          <defs>
              <style>
                  .cls-2{fill:none;stroke:#707070;stroke-linecap:round;stroke-width:2px}
              </style>
          </defs>
          <g id="icon20_list_arr01" transform="translate(-1070 -3068)">
              <path id="선_40" data-name="선 40" class="cls-2" transform="translate(1076 3070)" d="m0 0 8 8"/>
              <path id="선_41" data-name="선 41" class="cls-2" transform="translate(1076 3078)" d="m0 8 8-8"/>
          </g>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.829" viewBox="0 0 12 12.829" class="$class block sm:hidden">
          <defs>
              <style>
                  .cls-2{fill:none;stroke:#707070;stroke-linecap:round;stroke-width:2px}
              </style>
          </defs>
          <g id="icon20_list_arr01" transform="translate(-.154 .115)">
              <path id="선_40" data-name="선 40" class="cls-2" transform="translate(4.154 1.299)" d="m0 0 5 5"/>
              <path id="선_41" data-name="선 41" class="cls-2" transform="translate(4.154 6.299)" d="m0 5 5-5"/>
          </g>
      </svg>
EOD;
    }

    public function pagination($range = 4)
    {
        $showitems = ($range * 2) + 1;

        global $paged;
        if (empty($paged)) {
            $paged = 1;
        }

        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }

        $prevArrow = $this->arrow('prev');
        $nextArrow = $this->arrow('next');
        $lastArrow = <<<EOD
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="hidden sm:block">
                          <defs>
                              <style>
                                  .cls-2{fill:none;stroke:#707070;stroke-linecap:round;stroke-width:2px}
                              </style>
                          </defs>
                          <g id="icon20_list_arr02" transform="translate(-1070 -3068)">
                              <path id="선_40" data-name="선 40" class="cls-2" transform="translate(1072 3070)" d="m0 0 8 8"/>
                              <path id="선_41" data-name="선 41" class="cls-2" transform="translate(1072 3078)" d="m0 8 8-8"/>
                              <path id="선_42" data-name="선 42" class="cls-2" transform="translate(1080 3070)" d="m0 0 8 8"/>
                              <path id="선_43" data-name="선 43" class="cls-2" transform="translate(1080 3078)" d="m0 8 8-8"/>
                          </g>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12.828" height="12.829" viewBox="0 0 12.828 12.829" class="block sm:hidden">
                          <defs>
                              <style>
                                  .cls-2{fill:none;stroke:#707070;stroke-linecap:round;stroke-width:2px}
                              </style>
                          </defs>
                          <g id="icon20_list_arr01" transform="translate(.26 .115)">
                              <path id="선_40" data-name="선 40" class="cls-2" transform="translate(1.154 1.299)" d="m0 0 5 5"/>
                              <path id="선_41" data-name="선 41" class="cls-2" transform="translate(1.154 6.299)" d="m0 5 5-5"/>
                              <path id="선_70" data-name="선 70" class="cls-2" transform="translate(6.154 1.299)" d="m0 0 5 5"/>
                              <path id="선_71" data-name="선 71" class="cls-2" transform="translate(6.154 6.299)" d="m0 5 5-5"/>
                          </g>
                      </svg>
EOD;

        $result = '';
        if ($pages > 1) {
            $prevlink = $paged > 1 ? get_pagenum_link($paged - 1) : '';
            $nextlink = $paged < $pages ? get_pagenum_link($paged + 1) : '';
            $lastlink = get_pagenum_link($pages);
            $of = $paged + $showitems;
            
            $result .= <<<HTML
            <div class="flex items-center justify-center border-t-[3px] border-carbon pt-[80px]">
              <div class="flex items-center justify-center">
                <div>
                  <nav class="relative z-0 inline-flex gap-x-[12px] rounded-[4px] shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="{$prevlink}" class="relative inline-flex w-[40px] h-[40px] lg:w-[60px] lg:h-[60px] justify-center items-center px-2 py-2 rounded-[4px] border border-cerebralGrey bg-white text-[14px] sm:text-[20px] font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Previous</span>
                      <!-- Heroicon name: solid/chevron-left -->
                      $prevArrow
                    </a>
HTML;
            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                    if ($paged === $i) {
                        $result .= "<span class=\"z-10 bg-black border-cerebralGrey relative inline-flex w-[40px] h-[40px] lg:w-[60px] lg:h-[60px] justify-center text-white items-center border rounded-[4px] text-[14px] sm:text-[20px] font-medium\">{$i}</span>";
                    } else {
                        $link = get_pagenum_link($i);
                        $result .= "<a href=\"{$link}\" class=\"bg-white border-cerebralGrey text-gray-500 hover:bg-gray-50 relative inline-flex w-[40px] h-[40px] lg:w-[60px] lg:h-[60px] justify-center items-center border text-[14px] sm:text-[20px] rounded-[4px] font-medium\">{$i}</a>";
                    }
                }
            }
            $result .= <<<HTML
                    <span class="relative inline-flex items-center justify-center border border-cerebralGrey bg-white text-[14px] sm:text-[20px] font-medium rounded-[4px] text-gray-700 w-[40px] h-[40px] lg:w-[60px] lg:h-[60px]">...</span>
                    <a href="{$nextlink}" class="relative inline-flex w-[40px] h-[40px] lg:w-[60px] lg:h-[60px] justify-center items-center px-2 py-2 rounded-[4px] border border-cerebralGrey bg-white text-[14px] sm:text-[20px] font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Next</span>
                      <!-- Heroicon name: solid/chevron-right -->
                      $nextArrow
                    </a>
                    <a href="{$lastlink}" class="bg-white border-cerebralGrey text-gray-500 hover:bg-gray-50 relative inline-flex justify-center items-center px-2 py-2 border text-[14px] sm:text-[20px] rounded-[4px] font-medium w-[40px] h-[40px] lg:w-[60px] lg:h-[60px]">
                      $lastArrow
                    </a>
                  </nav>
                </div>
              </div>
HTML;
        }

        return $result;
    }
}
