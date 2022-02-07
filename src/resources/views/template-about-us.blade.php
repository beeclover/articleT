{{--
  Template Name: 회사소개
--}}

@extends('layouts.app')

@section('content')
  <div id="Talentbank" class="scrollmargintop">
    @include('partials.banner.header', [
      'label' => 'TalentBank',
      'labelBg' => 'bg-deepSpaceRodeo',
      'title' => '기업과 전문가를 연결하여 더 큰 가치를 만들어 내는 곳',
      'bgUrl' => get_theme_file_uri('resources/images/header-01@3x.jpg'),
      'content' => <<<EOD
        탤런트뱅크는 기업이 필요로 하는 비즈니스 전문가를 일 단위(자문, 프로젝트 단위)로 연결하여 실제 업무수행과 함께 <br/>
        전문가의 경험, 전문지식, 네트워크를 제공하는 전문가 매칭 플랫폼입니다.
EOD,
    ])
  </div>
  <section class="pt-[40px] lg:pt-[86px] pb-[52px] lg:pb-[120px]">
    <div class="container mx-auto">
      <div class="text-center">
        <h2 class="text-[26px] font-bold mb-[20px]">
          “Paper Work로 끝나지 않습니다.<br/>
          <span class="text-deepSpaceRodeo">탤런트뱅크 전문가는 함께 문제를 해결</span>해 나갑니다.”
        </h2>
        <div class="prose">
          <p>
            탤런트뱅크 전문가는 컨설턴트와 다릅니다.
            <br/>
            컨설팅 회사가 제시하는 전략 방향과 프로세스 수립 자체보다 경험을 통한 실제 사업 및 프로젝트 이행 노하우와
            <br/>
            구체적 이슈 해결 능력을 갖춘 인재가 현장에서 직접 문제를 해결합니다.
            <br/>
            뿐만 아니라 프로젝트를 통해 기업에 확장된 사고와 전문지식을 직접 전수할 수 있습니다.
          </p>
        </div>
      </div>

      <div class="divier w-full h-[2px] bg-carbon mt-[87px] mb-[93px]"></div>

      <div class="mb-[90px]">
        <div class="text-center">
          <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">탤런트뱅크만의 차별점</h3>
          <div class="text-[16px] text-davyGrey mb-[56px]">
            <p>
              탤런트뱅크의 차별화된 서비스를 직접 경험해보세요.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-[12px] gap-x-[52px] listDivider__middle">
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">1</div>
                <span class="text-[18px] lg:text-[22px] font-bold">합리적인 비용</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-0'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p class="mb-[14px]">
                  대기업 팀장/중소기업 임원 이상 경력의 전문가를 일(단기자문, 프로젝트 외) 단위로 계약할 수 있습니다.
                </p>
                <p>
                  탤런트뱅크에서 전문가 대금을 사전에 확인한 후 프로젝트를 의뢰할 수 있습니다.
                </p>
              </div>
            </div>
          </div>
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">2</div>
                <span class="text-[18px] lg:text-[22px] font-bold">기업 맞춤형 서비스</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-1'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p class="mb-[14px]">
                  프로젝트를 의뢰하면, 전문가 출신 BD가 배정되어 사전 면담을 통해 기업의 상황을 체크하고 꼭 필요한 전문가를 매칭해 드립니다.
                </p>
                <p>
                  단기 자문, 프로젝트, 헤드헌팅, Functional Work 등 기업이 원하는 기간과 조건으로 확실하게 비즈니스 문제 해결을 지원합니다.
                </p>
              </div>
            </div>
          </div>
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">3</div>
                <span class="text-[18px] lg:text-[22px] font-bold">세부단계를 통해 검증된 전문가</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-2'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p>
                  탤런트뱅크는 서류 심사 및 심층 인터뷰를 통해 선별된 산업별 Top-Class 전문가 그룹과 함께 하고 있습니다.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="text-center mb-[56px]">
          <h3 class="text-[34px] text-black font-semibold">탤런트뱅크 성과</h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-[12px] gap-x-[52px] listDivider__middle">
          <div class="py-[20px] lg:py-[60px] px-[20px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid justify-center">
              <div class="justify-self-center mb-[25px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-3', 'class' => 'w-[80px] lg:w-auto'])
              </div>
              <div class="justify-self-center mb-[17px]">
                <span class="text-[18px] lg:text-[22px] font-bold">4천명 이상의 고급 인재풀</span>
              </div>
              <div class="text-center leading-normal text-[14px] text-carbon tracking-[-0.28px]">
                <p>
                  까다로운 검증 절차를 통과한 대기업 팀장, 중소기업<br/>
                  임원 이상의 <span class="font-semibold pointUnderLine ring-aero ring-opacity-20" style="--h: 50%">고급 인재 수가 4천명</span>을 넘어섰습니다.
                </p>
              </div>
            </div>
          </div>
          <div class="py-[20px] lg:py-[60px] px-[20px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid justify-center">
              <div class="justify-self-center mb-[25px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-4', 'class' => 'w-[80px] lg:w-auto'])
              </div>
              <div class="justify-self-center mb-[17px]">
                <span class="text-[18px] lg:text-[22px] font-bold">높은 Project 재의뢰율</span>
              </div>
              <div class="text-center leading-normal text-[14px] text-carbon tracking-[-0.28px]">
                  <p>
                  기업 고객 5곳 중 3개 기업은 TalentBank 전문가에 대한
                  만족도가 높아 <span class="font-semibold pointUnderLine ring-aero ring-opacity-20" style="--h: 50%">Project를 추가로 의뢰</span>합니다.
                </p>
              </div>
            </div>
          </div>
          <div class="py-[20px] lg:py-[60px] px-[20px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid justify-center">
              <div class="justify-self-center mb-[25px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-5', 'class' => 'w-[80px] lg:w-auto'])
              </div>
              <div class="justify-self-center mb-[17px]">
                <span class="text-[18px] lg:text-[22px] font-bold">비즈니스 전문가 매칭 선두</span>
              </div>
              <div class="text-center leading-normal text-[14px] text-carbon tracking-[-0.28px]">
                <p>
                  TalentBank는 <span class="font-semibold pointUnderLine ring-aero ring-opacity-20" style="--h: 50%">비즈니스 이슈 해결에 특화된 플랫폼</span>으로<br class="hidden lg:block"/>
                  각 산업 군 전문가들을 언제든 쉽게 만나볼 수 있습니다.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="For_Client" class="scrollmargintop">
    @include('partials.banner.header', [
      'label' => 'For Client',
      'labelBg' => 'bg-deepSpaceRodeo',
      'title' => <<<EOD
      경험이 풍부한 전문인력을 바로 업무에 투입해<br/>
      단기간 고효율의 성과를 달성하세요.
  EOD,
      'bgUrl' => get_theme_file_uri('resources/images/header-02@3x.jpg'),
      'content' => <<<EOD
      탤런트뱅크 전문가와 함께라면 동종 산업 내에서의 경쟁을 넘어, 미래를 선도하는 기업으로 변화할 수 있습니다.
EOD,
    ])
  </div>
  <section>
    <div class="container mx-auto lg:mt-[80px] my-[52px] lg:mb-[100px]">
      <div class="text-center mb-[28px] lg:mb-[56px]">
        <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">탤런트뱅크의 문제해결</h3>
        <div class="text-[16px] text-davyGrey">
          <p>
            비즈니스 문제 해결과 동시에 외부 전문가의 전문성을 우리 기업에 내재화 할 수 있습니다.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[12px] lg:gap-[40px]">
        <div class="border border-cerebralGrey grid grid-rows-[auto,auto] lg:grid-rows-[2fr,1fr]">
          <div class="grid grid-cols-[auto,1fr] py-[28px] lg:py-[48px] px-[12px] lg:px-[60px] gap-x-[16px] lg:gap-x-[48px]">
            <div class="self-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'about-us-6', 'class' => 'w-[100px] lg:w-auto'])
            </div>
            <div class="lg:text-center self-center">
              <div class="text-[12px] lg:text-[14px] font-bold mb-[12px] lg:mb-[23px]">[A여행사]</div>
              <div class="text-[16px] lg:text-[19px] font-extrabold font-mj">
                “코로나로 인해 여행 사업이<br class="hidden lg:block" />
                큰 피해를 입어<br class="hidden lg:block" />
                <span class="break-all text-[#483aa4]">신사업을 추진</span>하고 있습니다.”
              </div>
            </div>
          </div>
          <div class="bg-lighthouse px-[12px] py-[28px] lg:py-[33px] flex flex-col items-center border-t border-cerebralGrey">
            <div class="text-[16px] lg:text-[19px] font-semibold pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%">20년 경력의 COO출신 신사업 전문가 매칭</div>
            <div class="prose text-[12px] lg:text-[14px]">
              <ul>
                <li>비즈니스 모델 분석을 보강을 통해 성공적인 신사업 추진</li>
                <li>효과적인 시장 진입을 위한 홍보, 마케팅 전략 수립</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey grid grid-rows-[auto,auto] lg:grid-rows-[2fr,1fr]">
          <div class="grid grid-cols-[auto,1fr] py-[28px] lg:py-[48px] px-[12px] lg:px-[60px] gap-x-[16px] lg:gap-x-[48px]">
            <div class="self-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'about-us-7', 'class' => 'w-[100px] lg:w-auto'])
            </div>
            <div class="lg:text-center self-center">
              <div class="text-[12px] lg:text-[14px] font-bold mb-[12px] lg:mb-[23px]">[J메디컬사]</div>
              <div class="text-[16px] lg:text-[19px] font-extrabold font-mj">
                “신제품 개발 자금 마련을 위해<br class="hidden lg:block" />
                <span class="break-all text-[#4586b8]">국가과제를 꼭 획득해야 하는<br class="hidden lg:block" />
                상황</span>입니다.”
              </div>
            </div>
          </div>
          <div class="bg-lighthouse px-[12px] py-[28px] lg:py-[33px] flex flex-col items-center border-t border-cerebralGrey">
            <div class="text-[16px] lg:text-[19px] font-semibold pointUnderLine ring-aero ring-opacity-20" style="--h: 50%">국가과제 심사 담당관 출신의 R&D 전문가 매칭</div>
            <div class="prose text-[12px] lg:text-[14px]">
              <ul>
                <li>국가과제 전반을 담당하며 개발 방향 검토 및 신청 자료 작성 </li>
                <li>신제품 개발을 위한 자금 획득 성공</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey grid grid-rows-[auto,auto] lg:grid-rows-[2fr,1fr]">
          <div class="grid grid-cols-[auto,1fr] py-[28px] lg:py-[48px] px-[12px] lg:px-[60px] gap-x-[16px] lg:gap-x-[48px]">
            <div class="self-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'about-us-8', 'class' => 'w-[100px] lg:w-auto'])
            </div>
            <div class="lg:text-center self-center">
              <div class="text-[12px] lg:text-[14px] font-bold mb-[12px] lg:mb-[23px]">[G 자동차 부품 제조사]</div>
              <div class="text-[16px] lg:text-[19px] font-extrabold font-mj">
                “확실한 기술력이 있음에도<br class="hidden lg:block" />
                번번히 <span class="break-all text-[#bf745a]">해외 판로 개척에<br class="hidden lg:block" />
                실패</span>하고 있습니다.”
              </div>
            </div>
          </div>
          <div class="bg-lighthouse px-[12px] py-[28px] lg:py-[33px] flex flex-col items-center border-t border-cerebralGrey">
            <div class="text-[16px] lg:text-[19px] font-semibold pointUnderLine ring-[#cc8b74] ring-opacity-20" style="--h: 50%">현대차 그룹 30년 경력의 해외 영업 전문가 매칭</div>
            <div class="prose text-[12px] lg:text-[14px] tracking-[-1px]">
              <ul>
                <li>해외 영업 노하우 및 개인 네트워크 공유를 통해 수출 판로 개척</li>
                <li>해외 영업 및 고객사 관리 프로세스 내재화를 위한 매뉴얼 정립</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey bg-lighthouse flex flex-col items-center justify-center px-[12px] py-[28px]">
          <div class="prose text-davyGrey">
            <div class="text-[14px] lg:text-[19px] font-mj font-bold text-black">그 외</div>
            <ul class="text-[12px] lg:text-[14px]">
              <li class="lg:underline">신규 브랜드 이커머스 진출 및 온라인 마케팅 전략</li>
              <li class="lg:underline">콜센터 운영 체계화를 통한 업무 효율 개선</li>
              <li class="lg:underline">스타트업 JV설립을 위한 투자 및 협력 방안 수립</li>
              <li class="lg:underline">BSC설계를 통한 기업 맞춤형 인사평가 및 인센티브 제도 수립</li>
              <li class="lg:underline">3PL Warehouse 효율화 및 매장 inventory 관리</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-lighthouse">
      <div class="container mx-auto py-[52px] lg:pt-[109px] lg:pb-[120px]">
        <div class="text-center mb-[56px]">
          <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">탤런트뱅크 서비스 이용 후기</h3>
          <div class="text-[14px] lg:text-[16px] text-davyGrey">
            <p>
              많은 기업들이 탤런트뱅크를 통해 성장하고 있습니다.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[40px] gap-x-[40px] mb-[40px] lg:mb-[88px]">
          <div>
            <div class="aspect-w-16 aspect-h-9 mb-[44px]">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/9A_2Y1K6-8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="text-[16px] lg:text-[23px] font-mj font-extrabold mb-[28px]">
                “고퀄리티의 인재들을 큰 비용 안들이고 활용하여<br/>
                사업에 도움이 될 수 있습니다.”
              </div>
              <div class="listDivider__cols2 text-basaltGrey text-[14px] lg:text-[17px] after:bg-lighthouse leading-none">
                <span class="text-carbon font-bold">김윤현</span>
                <span class="after:bg-steam">HS하이테크 부사장</span>
              </div>
            </div>
          </div>
          <div>
            <div class="aspect-w-16 aspect-h-9 mb-[44px]">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/MUhx8CvlSno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="text-[16px] lg:text-[23px] font-mj font-extrabold mb-[28px]">
                “실제 그 업무를 했던 분이 직접<br/>
                프로젝트를 수행해 주시니 너무 좋았습니다.”
              </div>
              <div class="listDivider__cols2 text-basaltGrey text-[14px] lg:text-[17px] after:bg-lighthouse leading-none">
                <span class="text-carbon font-bold">최준혁</span>
                <span class="after:bg-steam">캐스팅엔 대표</span>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="https://www.talentbank.co.kr/menu/projectCaseInfo?caseTypeCode=ALL" target="_blank" rel="noopener noreferrer" class="inline-block btn-carbon py-[23px] lg:py-[28px] rounded-[4px] font-normal text-[18px] lg:text-[20px] mx-auto max-w-[400px] w-full" href="#" target="_blank" rel="noopener noreferrer">
            성공사례 더 알아보기
          </a>
        </div>
      </div>
    </div>
    <div class="container mx-auto mt-[90px] mb-[52px] lg:mb-[120px]">
      <div class="text-center mb-[56px]">
        <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">Project 진행 프로세스</h3>
        <div class="text-[16px] text-davyGrey">
          <p>
            TalentBank 전문가 매칭은 기존 채용 방식보다 빠릅니다.<br/>
            우리 기업에 딱 맞는 전문가를 지금 만나보세요.
          </p>
        </div>
      </div>
      <ul class="grid lg:flex flex-wrap gap-x-[60px] justify-center mb-[40px] lg:mb-[80px]">
        <li class="flex gap-[16px] relative items-center mb-[16px] lg:mb-0">
          <div class="text-white bg-deepSpaceRodeo w-[80px] h-[80px] lg:w-[180px] lg:h-[180px] xl:w-[200px] xl:h-[200px] flex rounded-full items-center justify-center text-center">
            <div class="lg:absolute left-1/2 top-[36px] lg:-translate-x-1/2 opacity-75 text-[12px] lg:text-[16px]">STEP 1</div>
            <div class="hidden lg:block underline text-[20px] font-bold whitespace-nowrap">
              Project<br/>
              무료 의뢰
            </div>
          </div>
          <div class="text-[16px] lg:text-[60px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-x-1/2 lg:translate-x-[40px] lg:-translate-y-1/2 icon-label-arrowNext rotate-90 lg:rotate-0"></div>
          <div class="block lg:hidden underline text-[16px] font-bold">
            Project 무료 의뢰
          </div>
        </li>
        <li class="flex gap-[16px] relative items-center mb-[16px] lg:mb-0">
          <div class="text-white bg-[#57BAD4] w-[80px] h-[80px] lg:w-[180px] lg:h-[180px] xl:w-[200px] xl:h-[200px] flex rounded-full items-center justify-center text-center">
            <div class="lg:absolute left-1/2 top-[36px] lg:-translate-x-1/2 opacity-75 text-[12px] lg:text-[16px]">STEP 2</div>
            <div class="hidden lg:block underline text-[20px] font-bold whitespace-nowrap">
              BD 배정 및<br/>
              사전 미팅
            </div>
          </div>
          <div class="text-[16px] lg:text-[60px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-x-1/2 lg:translate-x-[40px] lg:-translate-y-1/2 icon-label-arrowNext rotate-90 lg:rotate-0"></div>
          <div class="block lg:hidden underline text-[16px] font-bold">
            BD 배정 및 사전 미팅
          </div>
        </li>
        <li class="flex gap-[16px] relative items-center mb-[16px] lg:mb-0">
          <div class="text-white bg-deepSpaceRodeo w-[80px] h-[80px] lg:w-[180px] lg:h-[180px] xl:w-[200px] xl:h-[200px] flex rounded-full items-center justify-center text-center">
            <div class="lg:absolute left-1/2 top-[36px] lg:-translate-x-1/2 opacity-75 text-[12px] lg:text-[16px]">STEP 3</div>
            <div class="hidden lg:block underline text-[20px] font-bold whitespace-nowrap">
              전문가 선정
            </div>
          </div>
          <div class="text-[16px] lg:text-[60px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-x-1/2 lg:translate-x-[40px] lg:-translate-y-1/2 icon-label-arrowNext rotate-90 lg:rotate-0"></div>
          <div class="block lg:hidden underline text-[16px] font-bold">
            전문가 선정
          </div>
        </li>
        <li class="flex gap-[16px] relative items-center mb-[16px] lg:mb-0">
          <div class="text-white bg-[#57BAD4] w-[80px] h-[80px] lg:w-[180px] lg:h-[180px] xl:w-[200px] xl:h-[200px] flex rounded-full items-center justify-center text-center">
            <div class="lg:absolute left-1/2 top-[36px] lg:-translate-x-1/2 opacity-75 text-[12px] lg:text-[16px]">STEP 4</div>
            <div class="hidden lg:block underline text-[20px] font-bold whitespace-nowrap">
              3자 미팅 및 <br/>
              계약
            </div>
          </div>
          <div class="text-[16px] lg:text-[60px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-x-1/2 lg:translate-x-[40px] lg:-translate-y-1/2 icon-label-arrowNext rotate-90 lg:rotate-0"></div>
          <div class="block lg:hidden underline text-[16px] font-bold">
            3자 미팅 및 계약
          </div>
        </li>
        <li class="flex gap-[16px] relative items-center mb-[16px] lg:mb-0">
          <div class="text-white bg-deepSpaceRodeo w-[80px] h-[80px] lg:w-[180px] lg:h-[180px] xl:w-[200px] xl:h-[200px] flex rounded-full items-center justify-center text-center">
            <div class="lg:absolute left-1/2 top-[36px] lg:-translate-x-1/2 opacity-75 text-[12px] lg:text-[16px]">STEP 5</div>
            <div class="hidden lg:block underline text-[20px] font-bold whitespace-nowrap">
              Project 시작
            </div>
          </div>
          <div class="block lg:hidden underline text-[16px] font-bold">
            Project 시작
          </div>
        </li>
      </ul>
      <div class="text-center">
        <a href="https://www.talentbank.co.kr/client/project/projectRegStart" target="_blank" rel="noopener noreferrer" class="inline-block btn-carbon py-[23px] lg:py-[28px] rounded-[4px] font-normal text-[18px] lg:text-[20px] mx-auto max-w-[400px] w-full" href="#" target="_blank" rel="noopener noreferrer">
          프로젝트 무료 의뢰하기
        </a>
      </div>
    </div>
  </section>
  <div id="For_Expert" class="scrollmargintop">
    @include('partials.banner.header', [
      'label' => 'For Expert',
      'labelBg' => 'bg-deepSpaceRodeo',
      'title' => <<<EOD
        아직도 많은 기업들에겐 당신의 ‘내공’이 필요합니다.
EOD,
      'bgUrl' => get_theme_file_uri('resources/images/header-03@3x.jpg'),
      'content' => <<<EOD
        다년간 다져온 전문성과 노하우를 꼭 필요로 하는 다양한 기업들에게 전수하며<br/>
        원하는 만큼의 일과 보수를 받을 수 있습니다.
EOD,
  ])
  </div>
  <section>
    <div class="container mx-auto my-[52px] lg:mt-[90px] lg:mb-[100px]">
      <div class="text-center mb-[56px]">
        <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">이런 전문가를 찾습니다</h3>
        <div class="text-[16px] text-davyGrey">
          <p>
            딱 필요한 시간만큼, 자유롭게 일할 수 있는 산업별 고경력 전문가를 모집합니다.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-y-[12px] gap-x-[30px]">
        <div class="border border-cerebralGrey rounded-[4px] p-[16px] lg:p-[24px] lg:pt-[30px] lg:pb-[41px] grid lg:grid-row-[320px,1fr] grid-cols-2 lg:grid-cols-1 gap-y-[24px] gap-x-[12px]">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-9'])
          <div class="lg:text-center">
            <div class="underline text-[16px] lg:text-[24px] mb-[13px] font-bold">01</div>
            <div class="text-carbon text-[13px] lg:text-[16px] mb-[8px] lg:mb-0">
              ‘퇴직’ 개념 없이 내 전문성으로
            </div>
            <div class="text-[18px] lg:text-[22px] text-black font-bold lg:tracking-[-1.4px]">
              평생 일하고 싶은 분
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey rounded-[4px] p-[16px] lg:p-[24px] lg:pt-[30px] lg:pb-[41px] grid lg:grid-row-[320px,1fr] grid-cols-2 lg:grid-cols-1 gap-y-[24px] gap-x-[12px]">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-10'])
          <div class="lg:text-center">
            <div class="underline text-[16px] lg:text-[24px] mb-[13px] font-bold">02</div>
            <div class="text-carbon text-[13px] lg:text-[16px] mb-[8px] lg:mb-0">
              대기업 팀장, 중소기업 임원 이상의
            </div>
            <div class="text-[18px] lg:text-[22px] text-black font-bold lg:tracking-[-1.4px]">
              비즈니스 베테랑
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey rounded-[4px] p-[16px] lg:p-[24px] lg:pt-[30px] lg:pb-[41px] grid lg:grid-row-[320px,1fr] grid-cols-2 lg:grid-cols-1 gap-y-[24px] gap-x-[12px]">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-11'])
          <div class="lg:text-center">
            <div class="underline text-[16px] lg:text-[24px] mb-[13px] font-bold">03</div>
            <div class="text-carbon text-[13px] lg:text-[16px] mb-[8px] lg:mb-0">
              현재 비즈니스 베테랑으로서
            </div>
            <div class="text-[18px] lg:text-[22px] text-black font-bold lg:tracking-[-1.4px]">
              이미 활동하고 계신 분
            </div>
          </div>
        </div>
        <div class="border border-cerebralGrey rounded-[4px] p-[16px] lg:p-[24px] lg:pt-[30px] lg:pb-[41px] grid lg:grid-row-[320px,1fr] grid-cols-2 lg:grid-cols-1 gap-y-[24px] gap-x-[12px]">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-12'])
          <div class="lg:text-center">
            <div class="underline text-[16px] lg:text-[24px] mb-[13px] font-bold">04</div>
            <div class="text-carbon text-[13px] lg:text-[16px] mb-[8px] lg:mb-0">
              내 경험과 노하우로
            </div>
            <div class="text-[18px] lg:text-[22px] text-black font-bold lg:tracking-[-1.4px]">
              기업성장에 기여하고 싶은 분
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-lighthouse">
      <div class="container mx-auto py-[52px] lg:pt-[110px] lg:pb-[120px]">
        <div class="text-center mb-[28px] lg:mb-[56px]">
          <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">전문가가 일하는 방식</h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[12px] gap-x-[30px]">
          <div class="border border-cerebralGrey bg-white px-[24px] lg:px-[45px] py-[36px] pt-[52px] lg:pb-[65px] lg:pt-[84px] relative">
            <div class="bg-deepSpaceRodeo text-white text-[13px] lg:text-[17px] px-[19px] lg:px-[45px] py-[13px] lg:py-[30px] grid place-content-center top-0 right-[24px] lg:right-[38px] absolute">사례 A</div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[20px] gap-x-[34px]">
              <div class="lg:col-span-2 text-[18px] lg:text-[25px] font-bold mb-[8px] lg:mb-[36px]">
                <span class="font-semibold pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%">식자재 HMR</span><br/>
                국내외 영업 전문가가 필요합니다.
              </div>
              <div>
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px] lg:text-[16px]">기업고객의 니즈</div>
                <div class="text-[12px] lg:text-[13px] text-carbon tracking-[-0.26px] leading-relaxed">
                  서울 소재 외식업체이며, 그동안 해왔던 캡티브 마켓
                  중심의 식자재 사업에서 외부 식자재 사업으로 적극
                  전개하려고 함. 시장분석 및 유통 거래선 발굴,
                  개척(B2B,B2C)전문가 필요
                </div>
              </div>
              <div>
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px] lg:text-[16px]">프로젝트 성과</div>
                <div class="text-[12px] lg:text-[13px] text-carbon tracking-[-0.26px] leading-relaxed">
                  <span class="text-aero">
                    대상(주)에서 B2B식자재 유통사업전략 수립 및
                    실행 경험의 전문가 매칭
                  </span><br/>
                  B2B,B2C 시장진출 가능 업체 및 잠재 업체 리스트업에
                  더해 HMR년도별 판매채널 구축 및 마케팅 전략 수집
                </div>
              </div>
              <div class="lg:col-span-2 mt-[8px] lg:mt-[30px] mb-[4px] lg:mb-[25px] h-px bg-cerebralGrey"></div>
              <div class="lg:col-span-2">
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px]">근무형태</div>
                <div class="lg:text-[19px] tracking-[-0.56px]">
                  <b>주 1일</b> / 6시간 상근(3개월)
                </div>
              </div>
            </div>
          </div>
          <div class="border border-cerebralGrey bg-white px-[24px] lg:px-[45px] py-[36px] pt-[52px] lg:pb-[65px] lg:pt-[84px] relative">
            <div class="bg-deepSpaceRodeo text-white text-[13px] lg:text-[17px] px-[19px] lg:px-[45px] py-[13px] lg:py-[30px] grid place-content-center top-0 right-[24px] lg:right-[38px] absolute">사례 B</div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[20px] gap-x-[34px]">
              <div class="lg:col-span-2 text-[18px] lg:text-[25px] font-bold mb-[8px] lg:mb-[36px]">
                <span class="font-semibold pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%">신사업 시장조사 및 사업 타당성</span>을<br/>
                검토해줄 전문가를 모십니다.
              </div>
              <div>
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px] lg:text-[16px]">기업고객의 니즈</div>
                <div class="text-[12px] lg:text-[13px] text-carbon tracking-[-0.26px] leading-relaxed">
                  글로벌 기업으로부터 한국 내 H/W 제품 사업 관련하여
                  제휴를 제안 받은 상황으로 사업에 필요한 시장 및
                  경쟁사 조사, SWOT분석, 사업 타당성 검토가 가능한
                  전문가 요청
                </div>
              </div>
              <div>
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px] lg:text-[16px]">프로젝트 성과</div>
                <div class="text-[12px] lg:text-[13px] text-carbon tracking-[-0.26px] leading-relaxed">
                  <span class="text-aero">
                    넷마블, 한빛소프트 출신 20년 경력<br/>
                    게임 사업 전문가 매칭
                  </span><br/>
                  게임 산업에 대한 글로벌/국내 트렌드 및 시장규모,
                  향후 전망 자문 및 사업화 전략 보고서 제공
                </div>
              </div>
              <div class="lg:col-span-2 mt-[8px] lg:mt-[30px] mb-[4px] lg:mb-[25px] h-px bg-cerebralGrey"></div>
              <div class="lg:col-span-2">
                <div class="text-deepSpaceRodeo font-bold mb-[11px] text-[14px]">근무형태</div>
                <div class="lg:text-[19px] tracking-[-0.56px]">
                  <b>주 1~2회</b> / 비상근(3개월)
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative">
    <div class="container mx-auto py-[52px] lg:pt-[109px] lg:pb-[105px] relative z-10">
      <div class="text-center mb-[56px]">
        <h3 class="text-[24px] lg:text-[34px] text-white mb-[8px] font-semibold">
          <b>탤런트뱅크를택한</b><br/>
          전문가들의 리얼 인터뷰
        </h3>
        <div class="text-[14px] lg:text-[20px] text-white">
          <p>
            당신은 탤런트뱅크에서 더 많은 영향력을 발휘할 수 있습니다.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-[56px] gap-x-[30px] mb-[60px]">
        <div class="px-[21px] pb-[52px] lg:p-[40px] bg-white rounded-[20px]">
          <div class="grid grid-cols-[2fr,1fr] lg:grid-cols-[163px,1fr] grid-row-2 mb-[32px] lg:mb-[41px] gap-x-[30px] gap-y-[18px] lg:gap-y-[21px]">
            <div class="row-span-2 col-span-2 lg:col-span-1 self-center pt-[76px] lg:pt-0 relative">
              @include('partials.img', ['ex' => 'png', 'name' => 'about-us-13', 'class' => 'absolute lg:static w-[100px] lg:w-auto left-1/2 -translate-x-1/2 lg:translate-x-0 bottom-0'])
            </div>
            <div class="col-span-2 lg:col-span-1 pt-[10px] grid grid-cols-2 items-center">
              <div class="text-deepSpaceRodeo text-[13px]">Expert interview</div>
            </div>
            <div class="col-span-2 lg:col-span-1">
              <div class="text-[22px] lg:text-[26px] mb-[16px] lg:mb-[19px]">
                <span class="font-semibold pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%"><b>김경희</b> 전문가</span>
              </div>
              <div class="tracking-[-0.32px] text-[13px]">
                現 이화창의 경영센터 대표<br/>
                前 삼성SDS 엔터프라이즈 솔루션 사업팀 부장
              </div>
            </div>
          </div>
          <div class="text-[13px] tracking-[-0.36px] text-davyGrey">
            지인의 추천으로 탤런트뱅크를 처음 알게 되었으며 중소기업 입장에서는 전문적인 영역의 인력 확보가
            어려운 실정인데 전문가는 필요한 시간만큼만 제공하고 기업입장에서는 부담 없어 모두 만족스러운
            매칭이라고 생각합니다.<br/>
            처음 매칭이 되고 어떻게 시작해야 되는지 몰랐는데 탤런트뱅크PM이 체계적으로 관리를 잘 해주셨습니다.
            계약도 온라인을 통해 쉽게 할 수 있어서 좋았습니다.
          </div>
        </div>
        <div class="px-[21px] pb-[52px] lg:p-[40px] bg-white rounded-[20px]">
          <div class="grid grid-cols-[2fr,1fr] lg:grid-cols-[163px,1fr] grid-row-2 mb-[32px] lg:mb-[41px] gap-x-[30px] gap-y-[18px] lg:gap-y-[21px]">
            <div class="row-span-2 col-span-2 lg:col-span-1 self-center pt-[76px] lg:pt-0 relative">
              @include('partials.img', ['ex' => 'png', 'name' => 'about-us-14', 'class' => 'absolute lg:static w-[100px] lg:w-auto left-1/2 -translate-x-1/2 lg:translate-x-0 bottom-0'])
            </div>
            <div class="col-span-2 lg:col-span-1 pt-[10px] grid grid-cols-2 items-center">
              <div class="text-deepSpaceRodeo text-[13px]">Expert interview</div>
            </div>
            <div class="col-span-2 lg:col-span-1">
              <div class="text-[22px] lg:text-[26px] mb-[16px] lg:mb-[19px]">
                <span class="font-semibold pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%"><b>김지석</b> 전문가</span>
              </div>
              <div class="tracking-[-0.32px] text-[13px]">
                現 탤런트뱅크 전문가
              </div>
            </div>
          </div>
          <div class="text-[13px] tracking-[-0.36px] text-davyGrey">
            저는 대기업 임원으로 15년, 중소기업 COO로 11년을 근무한 경영전략 전문가 입니다.<br>다양한 기업에서 내가 원하는 만큼 자유롭게 일할 수 있다는 지인의 소개로 합류하여 오전에는 A기업에서 <br>비용절감 TFT멤버로 일하고, 오후에는 취미생활인 테니스를 즐기며 오후 5시부터 B기업 정기 임원 회의에 <br>
            참석해 경영 전반에 관한 자문 역할을 수행하고 있습니다. 탤런트뱅크를 통해 제 경력과 경험이 아직도<br>누군가에게 큰 도움이 될 수 있다는 것을 느껴 매우 보람차게 일하고 있습니다.
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="https://article.talentbank.co.kr/hashtag/archive/expert-interview/" target="_blank" rel="noopener noreferrer" class="inline-block btn-carbon bg-transparent border-[1px] lg:border-[2px] border-white py-[23px] lg:py-[28px] rounded-[4px] font-normal text-[18px] lg:text-[20px] mx-auto max-w-[400px] w-full" href="#" target="_blank" rel="noopener noreferrer">
          전문가 등록 바로가기
        </a>
      </div>
    </div>
    @include('partials.img', ['ex' => 'jpg', 'name' => 'about-001',
    'class' => 'absolute w-full h-full object-cover top-0 left-0 right-0 bottom-0'])
  </section>
  <section>
    <div class="container mx-auto py-[52px] lg:pt-[109px] lg:pb-[120px]">
      <div class="text-center mb-[28px] lg:mb-[56px]">
        <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">전문가 혜택</h3>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[53px] gap-y-[36px]">
        <div>
          <div class="aspect-w-16 aspect-h-9 mb-[20px] lg:mb-[35px]">
            @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-15'])
          </div>
          <div class="text-center">
            <div class="text-[18px] lg:text-[23px] font-bold mb-[13px] tracking-[-0.46px]">
              전문가 매니저의 <br/>
              밀착 관리
            </div>
            <div class="text-davyGrey text-[13px] lg:text-[14px]">
              TalentBank 전문가 매니저가 매니저 메시지, <br/>
              정기 레터 등을 통해 끊임없이 전문가님과 소통합니다.
            </div>
          </div>
        </div>
        <div>
          <div class="aspect-w-16 aspect-h-9 mb-[20px] lg:mb-[35px]">
            @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-16'])
          </div>
          <div class="text-center">
            <div class="text-[18px] lg:text-[23px] font-bold mb-[13px] tracking-[-0.46px]">
              6,000만원 상당의 <br/>
              온라인 교육과정 무료 수강
            </div>
            <div class="text-davyGrey text-[13px] lg:text-[14px]">
              전문가 전용 연수원에서 651개 이상의 교육과정을 <br/>
              무료로 만나보실 수 있습니다.
            </div>
          </div>
        </div>
        <div>
          <div class="aspect-w-16 aspect-h-9 mb-[20px] lg:mb-[35px]">
            @include('partials.img', ['ex' => 'jpg', 'name' => 'about-us-17'])
          </div>
          <div class="text-center">
            <div class="text-[18px] lg:text-[23px] font-bold mb-[13px] tracking-[-0.46px]">
              최신 지식 콘텐츠 <br/>
              휴넷 CEO 이용권 증정
            </div>
            <div class="text-davyGrey text-[13px] lg:text-[14px]">
              대면 인터뷰 참여시 25만원 상당의<br/>
              경영/리더십/트렌드 콘텐츠 이용권을 무료로 드립니다.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto w-full h-px bg-[#aaaaaa]"></div>
    <div class="container mx-auto py-[52px] lg:pt-[90px] lg:pb-[120px]">
      <div class="text-center mb-[56px]">
        <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">전문가 인증 절차</h3>
        <div class="text-[16px] text-davyGrey">
          <p>
            전문가 인증이 완료된 후에는 Project를 지원하거나, Project를 직접 의뢰받을 수 있습니다.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-x-[35px] mb-[40px] lg:mb-[80px] gap-y-[32px]">
        <div class="border border-cerebralGrey py-[44px] px-[20px] relative rounded-[4px] grid grid-cols-[auto,1fr] lg:grid-cols-1 items-center gap-x-[16px]">
          <div class="flex place-content-center lg:mb-[31px]">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-us-18', 'class' => 'max-w-[60px] lg:max-w-[90px]'])
          </div>
          <div class="text-[19px] font-bold tracking-[-0.56px] lg:text-center">
            회원가입 후 Profile 작성
          </div>
          <div class="text-[40px] lg:text-[44px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-y-1/2 -translate-x-1/2 lg:translate-x-1/2 lg:-translate-y-1/2 icon-label-circleArrowNext rotate-90 lg:rotate-0 z-10"></div>
        </div>
        <div class="border border-cerebralGrey py-[44px] px-[20px] relative rounded-[4px] grid grid-cols-[auto,1fr] lg:grid-cols-1 items-center gap-x-[16px]">
          <div class="flex place-content-center lg:mb-[31px]">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-us-19', 'class' => 'max-w-[60px] lg:max-w-[90px]'])
          </div>
          <div class="text-[19px] font-bold tracking-[-0.56px] lg:text-center">
            서류 심사
          </div>
          <div class="text-[40px] lg:text-[44px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-y-1/2 -translate-x-1/2 lg:translate-x-1/2 lg:-translate-y-1/2 icon-label-circleArrowNext rotate-90 lg:rotate-0 z-10"></div>
        </div>
        <div class="border border-cerebralGrey py-[44px] px-[20px] relative rounded-[4px] grid grid-cols-[auto,1fr] lg:grid-cols-1 items-center gap-x-[16px]">
          <div class="flex place-content-center lg:mb-[31px]">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-us-20', 'class' => 'max-w-[60px] lg:max-w-[90px]'])
          </div>
          <div class="text-[19px] font-bold tracking-[-0.56px] lg:text-center">
            인터뷰
          </div>
          <div class="text-[40px] lg:text-[44px] absolute lg:right-0 top-full left-1/2 lg:left-auto lg:top-1/2 transfrom -translate-y-1/2 -translate-x-1/2 lg:translate-x-1/2 lg:-translate-y-1/2 icon-label-circleArrowNext rotate-90 lg:rotate-0 z-10"></div>
        </div>
        <div class="border border-cerebralGrey py-[44px] px-[20px] relative rounded-[4px] grid grid-cols-[auto,1fr] lg:grid-cols-1 items-center gap-x-[16px]">
          <div class="flex place-content-center lg:mb-[31px]">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-us-21', 'class' => 'max-w-[60px] lg:max-w-[90px]'])
          </div>
          <div class="text-[19px] font-bold tracking-[-0.56px] lg:text-center">
            전문가인증 완료
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="https://www.talentbank.co.kr/login/joinForm1?serviceTypeCode=SVC_TY003" target="_blank" rel="noopener noreferrer" class="inline-block btn-carbon py-[23px] lg:py-[28px] rounded-[4px] font-normal text-[18px] lg:text-[20px] mx-auto max-w-[400px] w-full" href="#" target="_blank" rel="noopener noreferrer">
          전문가 등록하기
        </a>
      </div>
    </div>
  </section>
@endsection
