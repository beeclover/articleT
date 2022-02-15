

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
              <input id="input_{!! $key !!}" value="O" x-model="value" aria-describedby="interest_0{!! $key !!}-description" type="checkbox" class="focus:ring-primary w-[22px] h-[22px] text-primary border-gray-300 rounded">
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
          <input type="text" name="name" id="stb_name" class="shadow-sm focus:ring-primary focus:border-primary block w-full border-gray-300 rounded-[4px]" required>
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
        @endif class="shadow-sm focus:ring-primary focus:border-primary block w-full border-gray-300 rounded-[4px]" required>
        </div>
        <div class="grid grid-cols-[80px,1fr] gap-x-[8px] items-center">
          <label for="stb_company" class="text-[18px] flex after:content-['*']">회사명</label>
          <input type="text" name="company" id="stb_company" class="shadow-sm focus:ring-primary focus:border-primary block w-full border-gray-300 rounded-[4px]" required>
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
      <div class="shadow-sm sm:text-sm border border-cerebralGrey rounded-[4px] bg-cultured prose prose-sm p-[20px] lg:p-[40px] text-davyGrey h-[340px] overflow-y-scroll mb-[34px]">
          <h2>개인정보 수집 • 이용 동의</h2>
          <p>탤런트뱅크는 article T 뉴스레터 발송을 위해 최소한의 개인정보를 수집하고 이용합니다.</p>
          <h3>수집 • 이용 목적</h3>
          <ul>
            <li>탤런트뱅크 이벤트 참여기회 제공</li>
            <li>Article T 뉴스레터 발송</li>
          </ul>
          <h3>수집 • 이용 항목</h3>
          <ul>
            <li>설명, 이메일, 회사명</li>
          </ul>
          <h3>보유 • 이용 기간</h3>
          <ul>
            <li>서비스 종료 시 또는 뉴스레터 구독 해지 시 즉시 파기</li>
          </ul>
          <h3>동의를 거부하는 경우에 대한 안내</h3>
          <p>동의하지 않을 경우 개인정보 수집•이용 동의를 거부할 권리가 있습니다. 거부할 경우 뉴스레터 구독 서비스를 이용할 수 없습니다.</p>
          <h2>개인정보 처리 위탁•수탁</h2>
          <p>회사는 서비스 제공 및 향상을 위해서 아래와 같이 개인정보를 위탁하고 있으며, 관계 법령에 따라 위탁 계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사랑을 규정하고 있습니다.</p>
          <ol class="mb-2">
            <li><b>수탁업체</b></li>
            <li><b>수탁업무 내용</b></li>
            <li><b>개인정보의 보유 및 이용기간</b></li>
          </ol>
          <ul>
            <li>스티비
              <ul>
                <li>뉴스레터 또는 광고가 포함된 뉴스레터 발송, 서비스 이용 통계 및 분석</li>
                <li>구독해지 시 또는 위탁계약 종료시</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>
              <span>NAVER CLOUD</span>
              <ul>
                <li>개인정보가 저장된 국내 클라우드 서버 운영 및 관리</li>
                <li>구독해지 시 또는 위탁계약 종료시</li>
              </ul>
            </li>
          </ul>
      </div>
      <div class="relative flex items-center">
        <div class="flex items-center text-[18px] text-gray-700">
          <input id="stb_policy" name="stb_policy_true" type="checkbox" class="focus:ring-primary w-[22px] h-[22px] text-primary border-gray-300 rounded" required>
          <label for="stb_policy" class="ml-3 text-[18px] leading-snug text-gray-700">위와 같은 개인정보 수집 및 이용 및 취급위탁에 동의하십니까? (필수)</label>
        </div>
      </div>
    </div>
    <div class="cols-span-1 md:col-span-2 h-px bg-carbon"></div>
    <div class="cols-span-1 md:col-span-2 justify-self-center">
      <button type="submit" class="w-[360px] lg:w-[500px] text-[20px] lg:text-[28px] btn-primary rounded-[12px] mb-[40px] py-[20px] sm:py-[40px] font-medium">구독 신청 완료</button>
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
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
<script type="text/javascript" src="https://s3.ap-northeast-2.amazonaws.com/resource.stibee.com/subscribe/stb_subscribe_form.js"></script>
