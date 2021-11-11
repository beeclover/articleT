
@extends('layouts.app')

@section('content')
@include('partials.banner.header', [
  'label' => $title,
  'title' => '기업과 전문가를 연결하여 더 큰 가치를 만들어 내는 곳', 
  'bgImg' => get_theme_file_uri('resources/images/header-01@3x.jpg'),
  'content' => <<<EOD
    탤런트뱅크는 기업이 필요로 하는 비즈니스 전문가를 일 단위(자문, 프로젝트 단위)로 연결하여 실제 업무수행과 함께 <br/>
    전문가의 경험, 전문지식, 네트워크를 제공하는 전문가 매칭 플랫폼입니다.
EOD,
])
  <div class="container mx-auto pt-[100px] pb-[100px]">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[70px] gap-y-[56px] lg:gap-y-[85px]">
      @while(have_posts()) @php(the_post())
        <div class="!card__s2">
          @includeFirst(['partials.content-card2', 'partials.content'])
        </div>
      @endwhile
    </div>
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
@endsection
