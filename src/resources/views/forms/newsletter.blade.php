

<form action="https://stibee.com/api/v1.0/lists/ALcse7wI2-UWiS1VoXi-2Y8gnbPZMA==/public/subscribers" method="POST" target="_blank" accept-charset="utf-8" class="stb_form" name="stb_subscribe_form" id="stb_subscribe_form" novalidate="">
  <div id="stb_subscribe" class="grid grid-cols-1 md:grid-cols-[1fr,3fr] grid-rows-[auto,auto,auto] gap-[40px]">
    {{-- 관심사 --}}
    <div>
      <div class="text-[24px]">
        관심사
      </div>
      <div class="text-[#888888]">
        중복 선택 가능(최대 3개)
      </div>
    </div>
    <div>
      @php($interests = [
        '경영/비즈니스', '인사/총무/법무', '재무/투자/세무', 'IT', '마케팅/PR', '영업', '고객관리(CRM/CS)', '유통/물류', '제조/엔지니어링', '정부지원사업'
      ])
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-[32px]">
        @foreach ($interests as $key => $interest)
            <div class="relative flex items-center" x-data="{value: ''}">
              <input name="interest_0{!! $key !!}" id="interest_0{!! $key !!}" type="text" :value="value ? 'O' : ''" class="hidden" />
              <input id="input_{!! $key !!}" value="O" x-model="value" aria-describedby="interest_0{!! $key !!}-description" type="checkbox" class="focus:ring-deepSpaceRodeo w-[22px] h-[22px] text-deepSpaceRodeo border-gray-300 rounded">
              <label for="input_{!! $key !!}" class="ml-3 text-sm">
                <div class="text-[18px] leading-snug text-gray-700">{!! $interest !!}</div>
              </label>
            </div>
        @endforeach
      </div>
    </div>
    <div class="col-span-1 md:col-span-2 h-px bg-steam"></div>
  
    {{-- 개인정보입력 --}}
    <div>
      <div class="text-[24px]">
        개인정보입력
      </div>
    </div>
    <div>
      <div class="flex flex-wrap gap-[20px]">
        <div class="grid grid-cols-[80px,1fr] gap-x-[8px] items-center">
          <label for="stb_name" class="text-[18px] flex after:content-['*']">성명</label>
          <input type="text" name="name" id="stb_name" class="shadow-sm focus:ring-deepSpaceRodeo focus:border-deepSpaceRodeo block w-full border-gray-300 rounded-[4px]" required>
        </div>
        <div class="grid grid-cols-[80px,1fr] gap-x-[8px] items-center">
          <label for="stb_email" class="text-[18px] flex after:content-['*']">이메일</label>
          <input type="email" name="email" id="stb_email"
          @if (!empty($_GET["email"]))
            value="{!! htmlspecialchars($_GET["email"]) !!}"
            x-init="$nextTick(() => {
            setTimeout(() => {
                document.querySelector('#stb_email').focus();
            });
          });"
        @endif class="shadow-sm focus:ring-deepSpaceRodeo focus:border-deepSpaceRodeo block w-full border-gray-300 rounded-[4px]" required>
        </div>
        <div class="grid grid-cols-[80px,1fr] gap-x-[8px] items-center">
          <label for="stb_company" class="text-[18px] flex after:content-['*']">회사명</label>
          <input type="text" name="company" id="stb_company" class="shadow-sm focus:ring-deepSpaceRodeo focus:border-deepSpaceRodeo block w-full border-gray-300 rounded-[4px]" required>
        </div>
      </div>
    </div>
    <div class="col-span-1 md:col-span-2 h-px bg-steam"></div>
  
    {{-- 개인정보입력 --}}
    <div>
      <div class="text-[24px]">
        개인정보 수집 • 이용 및<br class="hidden md:block" />
        취급위탁 동의
      </div>
    </div>
    <div>
      <div class="shadow-sm sm:text-sm border border-cerebralGrey rounded-[4px] bg-cultured prose p-[20px] lg:p-[40px] text-davyGrey h-[340px] overflow-y-scroll mb-[34px]">
          <p>
            <b>
              뉴스레터 발송을 위한 최소한의 개인정보를 수집하고 이용합니다.<br/>
              수집된 정보는 발송 외 다른 목적으로 이용되지 않으며, 서비스가 종료되거나 구독을 해지할 경우 즉시 파기됩니다.
            </b>
          </p>
          <p>
            되는 미인을 싹이 되려니와, 피다. 청춘이 꽃이 청춘의 발휘하기 있다. 길을 없는 생생하며, 위하여서 사막이다. 살 무엇을 뜨고, 찾아다녀도, 쓸쓸하랴? 역사를 인생을 황금시대를 끓는 부패뿐이다. 소담스러운 돋고, 더운지라 풍부하게 보이는 싶이 끓는다. 얼음이 못할 창공에 하는 심장의 것이다. 만천하의 따뜻한 보이는 천하를 목숨을 그들은 노래하며 이상의 있는가? 우리 고행을 튼튼하며, 창공에 것이다. 많이 얼마나 위하여서, 시들어 인도하겠다는 가는 타오르고 약동하다. 용기가 사랑의 지혜는 곧 커다란 뿐이다.
          </p>
          <p>
            끓는 갑 싹이 아름다우냐? 밥을 웅대한 풀이 대중을 아름답고 불러 것이다. 보배를 것은 그들은 끓는다. 것은 긴지라 인도하겠다는 광야에서 붙잡아 대한 이것은 가지에 소금이라 있다. 아름답고 그들의 청춘이 곳으로 목숨이 가치를 내는 간에 것이다. 인생에 무엇을 생의 풍부하게 간에 노년에게서 것이다. 풍부하게 아름답고 끓는 산야에 이것이야말로 간에 같은 같이, 철환하였는가? 영원히 천지는 생의 꾸며 가슴에 보는 할지니, 보라. 찬미를 천자만홍이 만천하의 그들에게 가슴이 주는 일월과 튼튼하며, 보라. 청춘은 못하다 이상, 이상은 열락의 아니다. 그것은 인생의 꽃이 밥을 인간이 봄바람이다.<br/>
          </p>
          <p>
            무엇을 지혜는 찾아 오아이스도 맺어, 전인 쓸쓸하랴? 그들에게 못할 따뜻한 인생의 얼마나 있는 원질이 되는 피에 것이다. 있는 있는 불어 사는가 설레는 쓸쓸하랴? 보이는 위하여서, 넣는 인간의 생의 많이 무한한 아니더면, 청춘에서만 운다. 굳세게 구하기 일월과 얼마나 장식하는 할지니, 것이다. 튼튼하며, 있음으로써 목숨을 이것이야말로 있을 열락의 꾸며 있으랴? 이상 피부가 할지니, 불러 피어나기 뿐이다. 갑 부패를 모래뿐일 남는 그들에게 옷을 이상 것이다. 봄날의 피가 이 천하를 실로 길지 원질이 인생의 하는 있다. 그들은 소담스러운 공자는 바로 곳이 청춘 인생의 교향악이다. 끓는 품었기 행복스럽고 내는 이 때에, 그리하였는가?
          </p>
      </div>
      <div class="relative flex items-center">
        <div class="flex items-center text-[18px] text-gray-700">
          <input id="stb_policy" name="stb_policy_true" type="checkbox" class="focus:ring-deepSpaceRodeo w-[22px] h-[22px] text-deepSpaceRodeo border-gray-300 rounded" required>
          <label for="stb_policy" class="ml-3 text-[18px] leading-snug text-gray-700">위와 같은 개인정보 수집 및 이용 및 취급위탁에 동의하십니까? (필수)</label>
        </div>
      </div>
    </div>
    <div class="cols-span-1 md:col-span-2 h-px bg-carbon"></div>
    <div class="cols-span-1 md:col-span-2 justify-self-center">
      <button type="submit" class="w-[360px] lg:w-[500px] text-[20px] lg:text-[28px] btn-deepSpaceRodeo rounded-[12px] mb-[40px] py-[20px] sm:py-[40px] font-medium">구독 신청 완료</button>
      <div class="grid w-[360px] lg:w-[500px] text-white rounded-[4px] bg-green-400 text-center">
        <div class="stb_form_result px-[20px] py-[20px] hidden" id="stb_form_result"></div>
      </div>
      <div class="grid w-[360px] lg:w-[500px] text-white rounded-[4px] bg-red-400 text-center">
        <div class="stb_form_msg_error px-[20px] py-[20px] hidden" id="stb_email_error"></div>
        <div class="stb_form_msg_error px-[20px] py-[20px] hidden" id="stb_name_error"></div>
        <div class="stb_form_msg_error px-[20px] py-[20px] hidden" id="stb_company_error"></div>
        <div class="stb_form_msg_error px-[20px] py-[20px] hidden" id="stb_policy_error"></div>
        @foreach ($interests as $key => $interest)
          <div class="stb_form_msg_error px-[20px] py-[20px] hidden" id="stb_interest_0{!! $key !!}_error"></div>
        @endforeach
      </div>
    </div>
  </div>
</form>