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

        $result = '';
        if ($pages > 1) {
            $prevlink = $paged > 1 ? get_pagenum_link($paged - 1) : '';
            $nextlink = $paged < $pages ? get_pagenum_link($paged + 1) : '';
            $lastlink = get_pagenum_link($pages);
            $of = $paged + $showitems;
            
            $result .= <<<HTML
            <div class="flex items-center justify-center border-t-[3px] border-carbon mt-[105px] pt-[80px]">
              <div class="flex items-center justify-center">
                <div>
                  <nav class="relative z-0 inline-flex gap-x-[12px] rounded-[4px] shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="{$prevlink}" class="relative inline-flex w-[60px] h-[60px] justify-center items-center px-2 py-2 rounded-[4px] border border-cerebralGrey bg-white text-[20px] font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Previous</span>
                      <!-- Heroicon name: solid/chevron-left -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="transform rotate-180">
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
                    </a>
HTML;
            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                    if ($paged === $i) {
                        $result .= "<span class=\"z-10 bg-black border-cerebralGrey relative inline-flex w-[60px] h-[60px] justify-center text-white items-center px-4 py-2 border rounded-[4px] text-[20px] font-medium\">{$i}</span>";
                    } else {
                        $link = get_pagenum_link($i);
                        $result .= "<a href=\"{$link}\" class=\"bg-white border-cerebralGrey text-gray-500 hover:bg-gray-50 relative inline-flex w-[60px] h-[60px] justify-center items-center px-4 py-2 border text-[20px] rounded-[4px] font-medium\">{$i}</a>";
                    }
                }
            }
            $result .= <<<HTML
                    <span class="relative inline-flex items-center px-4 py-2 border border-cerebralGrey bg-white text-[20px] font-medium rounded-[4px] text-gray-700">...</span>
                    <a href="{$lastlink}" class="bg-white border-cerebralGrey text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-[20px] rounded-[4px] font-medium">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
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
                    </a>
                    <a href="{$nextlink}" class="relative inline-flex w-[60px] h-[60px] justify-center items-center px-2 py-2 rounded-[4px] border border-cerebralGrey bg-white text-[20px] font-medium text-gray-500 hover:bg-gray-50">
                      <span class="sr-only">Next</span>
                      <!-- Heroicon name: solid/chevron-right -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
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
                    </a>
                  </nav>
                </div>
              </div>
HTML;
        }

        return $result;
    }
}
