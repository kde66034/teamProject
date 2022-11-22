const quizData = [
    {
        num : 1,
        question : "기후변화는 시시각각 변하는 기상 상태를 말한다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "X"
    },
    {
        num : 2,
        question : "온실가스는 이산화탄소가 가장 큰 비중을 차지한다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 3,
        question : "무인도에 불어닥친 태풍으로 나무 50여 그루가 쓰러졌다면 이를 자연재해라고 한다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "X"
    },
    {
        num : 4,
        question : "바다는 식물성 플랑크톤의 활동으로 산소를 공급받고 있고, 생산한 산소는 그대로 해양 생물에 의해 흡수된다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "X"
    },
    {
        num : 5,
        question : "지구가 원래 1년에 재생할 수 있는 자연 자원은 한정적이다, 1년에 지구가 재생해서 만들어줄 수 있는 양을 ‘지구생태용량’이라고 하는데 인간은 1.7배의 지구를 소모하고 있다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 6,
        question : "'탄소예산'이란, 파리협정에서 체결한 기후 상승 1.5도 도달까지 배출될 온실가스량을 추산한 것이다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 7,
        question : "RE100은 기업활동에 사용되는 모든 에너지를 재생에너지로 사용하겠다고 선언하고 실천하는 기업네트워크이다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 8,
        question : "탄소발자국(carbon footprint)은 개인/단체가 직.간접적으로 발생시키는 온실가스 총량을 말한다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 9,
        question : "지구온난화는 이산화탄소 등이 축척되어 지구의 평균 온도가 상승해서 생기는 현상으로, 겨울철 추위와 같은 일상 기상 변화와 혼돈하여 정치적으로 악용한 사례가 있었다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    {
        num : 10,
        question : "지구 기후는 이미 산업화 이전 대비 1도 이상 상승하였다. 이로 인해 척추동물의 개체수 68% 감소하였고, 산호초 70%가 사라졌으며, 잦은 태풍과 산불도 기후 상승으로 인한 것이다.",
        answerChoice : { 1: "O", 2: "X"},
        answerResult : "O"
    },
    // {
    //     num : 11,
    //     question : "개인이 일상에서 실천할 수 있는 것으로 줄이기, 재사용, 재활용, 거절하기 등이 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 12,
    //     question : "오존층은 태양에서 방출되는 강하고 유해한 자외선을 흡수함으로써 인간을 포함한 지구상의 생명체를 보호해주는 역할을 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 13,
    //     question : "오존층이 파괴되면 자외선 유입의 증가로 인한 온실효과와 함께 지구 기온이 올라가기 때문에 기후변화와도 밀접한 연관이 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 14,
    //     question : "기후변화는 인간의 활동으로 인해 발생한느 온실가스 때문에 심화된다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 15,
    //     question : "사용하지 않는 전자기기의 플러그를 뽑으면 전기를 아낄 수 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 16,
    //     question : "데스크탑과 노트북의 전력소모량은 같다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 17,
    //     question : "신호대기 시 변속기어를 중립으로 놓으면 연료가 절약된다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 18,
    //     question : "제품이 생산에서 폐기될 때까지 발생하는 탄소의 양을 인증하는 제도가 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 19,
    //     question : "가정에서 전기, 가스, 수도를 절약한 만큼 인센티브를 받을 수 있는 제도가 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 20,
    //     question : "온실가스를 줄이기 위한 방법으로 CO2를 포집한 후에 땅 속 깊은 곳에 묻는 방법이 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 21,
    //     question : "화분은 일반쓰레기로 분리 배출하여 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 22,
    //     question : "고추장, 간장, 쌈장 등의 장류는 음식물 쓰레기로 분리 배출하여 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 23,
    //     question : "칫솔은 플라스틱 재활용 쓰레기로 분리 배출하여 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 24,
    //     question : "도자기, 사기는 재활용 쓰레기로 분리 배출하여 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 25,
    //     question : "패스트푸드 음료컵의 뚜껑과 빨대는 모두 플라스틱으로 분리 배출하여 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 26,
    //     question : "도시 공간의 미화로서 빌딩 옥상에 정원을 만드는 일이 많아지고 있는데, 이 정원을 '도심정원'이라고 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 27,
    //     question : "폐형광등, 건전지는 일반 쓰레기로 분류해서 버려야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 28,
    //     question : "환경 운동의 3R은 Reuse, Recycle, Reform 이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 29,
    //     question : "우리가 일상 생활을 하면서 나오는 쓰레기들을 '일반 폐기물' 이라고 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 30,
    //     question : "생활에서 깨진 유리변은 신문지로 잘 감싸서 유리로 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 31,
    //     question : "뜨거운 사막일수록 태양광 발전량이 높아진다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 32,
    //     question : "기업이나 개인이 발생시킨 이산화탄소 배출량만큼 흡수량도 늘려 실직적 배출량을 '0'으로 만든다는 개념을 '탄소중립'이라고 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 33,
    //     question : "탄소 중립사회는 한국판 뉴딜 종합계획의 목표 중 하나이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 34,
    //     question : "식자재인 육류를 섭취하기 위해 사육하는 동물은 온실가스를 배출한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 35,
    //     question : "우리나라는 '폐페트병'을 해외에 돈을 받고 수출중에 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 36,
    //     question : "김과 같은 해조류는 지구의 환경을 살리는데 도움이 된다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 37,
    //     question : "넷플OO, 유튜O 등 온라인으로 동영상을 시청하는 것은 환경을 지키는 일에 도움을 준다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 38,
    //     question : "뽁뽁이라고 불리는 에어캡은 일반쓰레기로 재활용이 불가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 39,
    //     question : "공기가 오염되는 가장 큰 이유는 쓰레기를 태우기 때문이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 40,
    //     question : "우리가 버리는 음식물 쓰레기는 재활용할 수 없으므로 모두 수거하여 땅에 묻어야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 41,
    //     question : "공기, 물, 흙, 빛 등 우리 주변을 둘러싼 자연을 환경이라고 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 42,
    //     question : "재활용 종이(폐휴지)를 재활용하면 나무와 물을 절약할 수 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "o"
    // },
    // {
    //     num : 43,
    //     question : "땅 속에 사는 미생물처럼 지렁이, 달팽이와 같은 땅 속 작은 동물들도 땅을 기름지게 도와준다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 44,
    //     question : "사용하고 난 폐건전지는 재활용품 수거 시 깡통류로 분리해서 버린다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 45,
    //     question : "비타민이 함유된 음식을 섭취하면 몸에 흡수된 오염물질을 없애는 데 도움이 된다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 46,
    //     question : "자원 재활용을 위해 투명 페트병은 따로 분리 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 47,
    //     question : "카드 전표나 영수증은 종이로 재활용이 가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 48,
    //     question : "금속캔 분리 배출 시 플라스틱 뚜껑 등 다른 재질은 제거한 후 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 49,
    //     question : "투명 페트병은 라벨을 제거하고 압착한 후 소재가 다른 뚜껑과 분리 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 50,
    //     question : "금속 스프링이 있는 펌프형 플라스틱 용기(샴푸, 주방세제 등)는 스프링을 제거한 후 플라스틱으로 분리배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 51,
    //     question : "깨진 유리병도 재활용이 가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 52,
    //     question : "음료를 담아 사용한 종이컵은 재활용이 불가능하므로 종량제 봉투에 버려야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 53,
    //     question : "물로 씻을 수 없는 치약 용기는 재활용이 불가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 54,
    //     question : "CD나 DVD는 개인정보보호를 위해 물리적으로 파쇄한 후 플라스틱으로 분리 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 55,
    //     question : "음식을 포장한 비닐랩의 경우 이물질을 제거해도 재활용이 불가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 56,
    //     question : "과일 포장 시 완충용으로 사용한 일명 '꽃받침'은 재활용이 불가능하므로 종량제 봉투에 버려야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 57,
    //     question : "TV 등 전자제품 구입시 완충재로 사용한 발포합성수지(스티로폼) 포장재는 가급적 구입처로 반납해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 58,
    //     question : "종이팩 전용 수거함이 없는 경우 우유 등 종이팩은 종이류 폐기물과 섞어 배출할 수 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 59,
    //     question : "종이박스에 다른 종이 폐기물을 담아 배출하는 것이 효율적이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 60,
    //     question : "신문지 폐기물 배출시 코팅된 광고지 비닐 오물류 등은 섞이지 않도록 해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 61,
    //     question : "김장에 사용한 대형 비닐은 폐비닐로 분리 배출해야 한다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 62,
    //     question : "알루미늄 호일은 재활용이 불가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 63,
    //     question : "택배용 보냉 상자류 가운데 내부 알루미늄박, 비닐 등이 분리가 되지 않을 경우 재활용이 불가능하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 64,
    //     question : "세탁소에서 제공하는 옷걸이는 고철류로 배출할 수 없다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 65,
    //     question : "탈성장이란, 모든 성장을 거부하는 실천적 주장이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 66,
    //     question : "기후 위기는 집의 컨디션과 상관 없이 모두에게 똑같이 위험하다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 67,
    //     question : "기후 위기를 예방하기 위한 소송이 성공한 사례는 아직 한 건도 없다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 68,
    //     question : "'2050 탄소중립 위원회'는 '탄소중립 시나리오'에서 '진정한 탄소중립'을 이뤄냈다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 69,
    //     question : "현재 제정 중인 탄소립 녹색성장 법에 따르면 우리나라는 기후 위기 대응을 위한 탄소 중립을 달성해야 할 의무가 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 70,
    //     question : "기후위기 문제 해결을 요구하며 등교나 출근을 거부하는 사람들이 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 71,
    //     question : "쓰레기로 이루어진 정식 국가가 있다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "O"
    // },
    // {
    //     num : 78,
    //     question : "우리나라는 분리배출 모범구이자, 플라스틱 재활용을 통해 플라스틱 사용량을 줄인 모범국이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },
    // {
    //     num : 79,
    //     question : "국내에서 모니터링된 해양쓰레기 중 가장 큰 분포를 차지하는 쓰레기는 '유리'이다.",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : "X"
    // },


    // 데이터 형식
    // {
    //     question : "",
    //     answerChoice : { 1: "O", 2: "X"},
    //     answerResult : ""
    // }
];

// 선택자
const quizQuestion = document.querySelector(".quiz__question");         // 퀴즈 질문
const quizNumber = quizQuestion.querySelector(".quiz__number");         // 퀴즈 번호
const quizAsk = quizQuestion.querySelector(".quiz__ask");               // 퀴즈 질문
const quizView = document.querySelector(".quiz__view");                 // 정답 오답 알림 전체 박스
const quizViewTrue = quizView.querySelector(".quiz__view .true");       // 정답 알림
const quizViewFalse = quizView.querySelector(".quiz__view .false");     // 오답 알림
const quizSelects = document.querySelector(".quiz__selects");           // O X 보기
const quizSelectO = quizSelects.querySelector(".quiz__selects choice img1");    // O
const quizSelectX = quizSelects.querySelector(".quiz__selects choice img2");    // X
const quizResult = document.querySelector(".quiz__result");             // 정답 확인
const quizConfirm = document.querySelector(".quiz__confirm");           // 다음 버튼
const quizStart = document.querySelector(".quiz__start");               // 시작 버튼
const finishResult = document.querySelector(".finish");                 // 결과 박스
const finishConstents = document.querySelector(".finishCont");          // 결과 내용
const Restart = document.querySelector(".restart");                     // 다시 풀어보기


let quizCount = 0,          // 총 문제 갯수
    quizScore = 0;          // 맞춘 문제 갯수


const updateQuiz = (index) => {

    // let randomIndex = Math.floor(Math.random() * quizData.length + 1);  // 랜덤 인덱스 생성


    const questionTag = `
        <div class="quiz__number">${quizData[index].num}.</div>
        <div class="quiz__ask">${quizData[index].question}</div>
    `;

    const choiceTag = `
    <label for="select1">
        <input type="radio" id="select1" class="select" name="select" value="1">
        <span class="choice img1">${quizData[index].answerChoice[1]}</span>
    </label>
    <label for="select2">
        <input type="radio" id="select2" class="select" name="select" value="2">
        <span class="choice img2">${quizData[index].answerChoice[2]}</span>
    </label>
    `;


    // 문제 번호와 질문 출력
    quizQuestion.innerHTML = questionTag;

    // O X 보기 출력
    quizSelects.innerHTML = choiceTag;

    // 정답 출력
    quizResult.innerHTML = `정답 : ${quizData[index].answerResult}`;

    // 정답 확인 선택자 (위쪽에 적을 수 없어서 아래에 적어줌)
    const quizChoice = quizSelects.querySelectorAll(".choice");

    // 보기를 클릭하면 정답 확인 과정으로 넘기기
    for(let i=0; i<quizChoice.length; i++){
        quizChoice[i].setAttribute("onclick", "choiceSelected(this)")
        // alert("확인")
        // console.log(this)
        // select[i].disabled = true;
        // document.getElementById('select').disabled = true;
    }

    // 띄워놓기
    quizSelects.style.display = "flex";

    // 숨겨놓기
    quizViewTrue.style.display = "none";            // 정답 알림
    quizViewFalse.style.display = "none";           // 오답 알림
    quizResult.style.display = "none";              // 정답 확인
    quizConfirm.style.display = "none";             // 다음 버튼
    finishResult.style.display = "none";            // 결과 박스

}
updateQuiz(quizCount);


// 보기 선택했을 때, 중복 선택되지 않도록 설정
// document.querySelectorAll(".choice").forEach((e,i) => {
//     // console.log(e);
//     e.addEventListener("click", (e) => {
//         e.preventDefault();
//         // console.log(e)
//         //alert("dd")
//     })
// })


// 정답 확인 및 결과 출력
const choiceSelected = (answer) => {
    // alert(answer.textContent);   //사용자가 클릭한 답을 창 메시지로 띄워줌
    // document.getElementById('choice').disabled = true;

    let userAnswer = answer.textContent;                    // 사용자가 체크한 정답
    let currentAnswer = quizData[quizCount].answerResult;   // 문제 정답

    if(userAnswer == currentAnswer){
        quizScore++;
        // console.log("정답")
        quizViewTrue.style.display = "block";   
        quizViewFalse.style.display = "none";

        
    } else {
        // console.log("오답")
        quizViewTrue.style.display = "none";
        quizViewFalse.style.display = "block";

    }
    quizSelects.style.display = "none";
    quizResult.style.display = "block";     // 정답 확인
    quizConfirm.style.display = "block";    // 다음 버튼
}

// 결과 출력
const answerQuiz = () => {
    if(quizData.length -1 == quizCount){
        finishResult.style.display = "block";        // 결과 박스
        finishConstents.textContent = `총 ${quizData.length} 개의 문제 중에서 🤔 ${quizScore} 개를 맞추었습니다.`
    }

    quizCount++;
    updateQuiz(quizCount);
    quizViewTrue.style.display = "none";        // 정답 알림
    quizViewFalse.style.display = "none";       // 오답 알림
    quizConfirm.style.display = "none";         // 다음 버튼

}

quizConfirm.addEventListener("click", answerQuiz);

quizStart.addEventListener("click", () => {
    quizStart.style.display = "none";
});

Restart.addEventListener("click", () => {
    finishResult.style.display = "none";
    location.reload();
});
