@if ($script)
  <script>
    function share_fb(url) {
      window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
    }
    function new_window(url) {
      window.open(url,'_blank', "width=626, height=436")
    }
  </script>
@endif

<div class="sns flex text-[24px] justify-center">
  <a href="javascript:;" id="share-kakao"
    data-title="{!! $title !!}"
    data-description="{!! $description !!}"
    data-imageUrl="{!! $img !!}"
    data-link="{!! $link !!}"
    class="w-[35px] h-[35px] m-[4px]"
    >
    <svg class="w-full h-full" width="49" height="48" viewBox="0 0 49 48">
      <g transform="translate(-1533 -220)">
          <ellipse cx="24.5" cy="24" rx="24.5" ry="24" transform="translate(1533 220)" style="fill:#f8eca9"/>
          <g transform="translate(504.093 -463.762)">
              <path d="M1053.365 698.154c-5.776 0-10.458 3.7-10.458 8.268 0 2.972 1.984 5.577 4.961 7.034-.219.817-.792 2.959-.907 3.417-.141.569.209.561.438.408.18-.12 2.866-1.946 4.025-2.734a13.232 13.232 0 0 0 1.941.143c5.776 0 10.458-3.7 10.458-8.268s-4.682-8.268-10.458-8.268" style="fill:#2a1415"/>
              <g transform="translate(1045.578 703.914)">
                  <path fill="#f8d311" d="M1095.788 805.811h-3.058a.52.52 0 1 0 0 1.04h.994v3.664a.509.509 0 0 0 .507.507h.111a.508.508 0 0 0 .507-.507v-3.664h.939a.52.52 0 1 0 0-1.04z" transform="translate(-1092.209 -805.738)"/>
                  <path fill="#f8d311" d="M1249.393 808.765h-1.422v-3.742a.564.564 0 1 0-1.129 0v4.033a.547.547 0 0 0 .009.09.489.489 0 0 0-.009.09.472.472 0 0 0 .472.473h2.078a.472.472 0 0 0 0-.944z" transform="translate(-1238.464 -804.458)"/>
                  <path fill="#f8d311" d="m1312.216 808.936-1.585-2.082 1.432-1.432a.5.5 0 1 0-.7-.7l-1.773 1.773v-1.47a.564.564 0 1 0-1.129 0v4.157a.564.564 0 1 0 1.129 0V807.9l.322-.322 1.5 1.967a.5.5 0 1 0 .807-.606z" transform="translate(-1296.743 -804.458)"/>
                  <path fill="#f8d311" d="m1159.772 809.071-1.524-4.169h-.005a.749.749 0 0 0-.714-.439.727.727 0 0 0-.741.525.664.664 0 0 0-.029.068l-1.5 4.02a.506.506 0 1 0 .954.335l.259-.74h2.086l.259.74a.506.506 0 1 0 .954-.335zm-2.968-1.35.7-2h.023l.7 2z" transform="translate(-1151.817 -804.458)"/>
              </g>
          </g>
      </g>
  </svg>
  </a>
  {!! do_shortcode('[Sassy_Social_Share]') !!}
</div>