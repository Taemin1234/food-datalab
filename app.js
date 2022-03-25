// 슬릭 슬라이더
$(function () {
  $(".rank-wrap").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
  });
});

// 본문 탭메뉴

$(function () {
  var idx;
  $(".datalab-title").click(function () {
    idx = $(this).index();

    // 메뉴바 UI 변경
    $(".datalab-title").removeClass("active");
    $(".datalab-title").eq(idx).addClass("active");

    // 필요화면 전환
    $(".hide-contents").hide();
    $(".hide-contents").eq(idx).show();
  });
});

//  클릭량 추이 선차트

$(function () {
  new Chart(document.getElementById("line-chart"), {
    type: "line",
    data: {
      //x축 목록
      labels: [
        21.06,
        21.07,
        21.08,
        21.09,
        "21.10",
        21.11,
        21.12,
        22.01,
        22.02,
        22.03,
      ],
      // y축 값
      datasets: [
        {
          data: [70, 60, 50, 55, 80, 100, 84, 74, 100, 94],
          label: "Pork cutlet",
          borderColor: "#f76d00",
          fill: false,
        },
      ],
    },
    options: {
      // 범례 설정
      legend: {
        display: false,
      },
    },
  });
});

// 지역별 비중 막대 차트

$(function () {
  new Chart(document.getElementById("bar-chart-grouped"), {
    type: "bar",
    data: {
      labels: [
        "서울",
        "경기",
        "인천",
        "강원",
        "충북",
        "충남",
        "대전",
        "세종",
        "경북",
        "대구",
        "경남",
        "울산",
        "부산",
        "전북",
        "전남",
        "광주",
        "제주",
      ],
      datasets: [
        {
          label: "Pork cutlet",
          backgroundColor: "#f76d00",
          data: [
            133, 221, 783, 247, 342, 235, 432, 642, 234, 124, 325, 654, 433,
            333, 546, 433, 541,
          ],
        },
      ],
    },
    options: {
      // 제목 설정
      title: {
        display: true,
        text: "지역",
      },
      legend: {
        display: false,
      },
    },
  });
});

// 학교별 비중 파이 차트
$(function () {
  new Chart(document.getElementById("pie-chart"), {
    type: "pie",
    data: {
      labels: ["초등학교", "중학교", "고등학교"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
          data: [2478, 5267, 734],
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: "학교",
      },
      legend: {
        position: "bottom",
        labels: {
          boxWidth: 12,
          boxHeight: 12,
        },
      },
    },
  });
});

// 인사이트 기간 설정 버튼
$(function () {
  var idx;
  $(".period-input-btn button").click(function () {
    idx = $(this).index();

    // 메뉴바 UI 변경
    $(".period-input-btn button").removeClass("period-active");
    $(".period-input-btn button").eq(idx).addClass("period-active");
  });
});

//인사이트 기본 날짜 설정

// 올해 월이 x월이라면 end-date에서 select option의 월을 x월로 기본설정해두어라
// 년도도 같이

$(function () {
  var now = new Date();

  var year = now.getFullYear();
  var month = now.getMonth() + 1;

  for (var i = 0; i < 12; i++) {
    if ($(".end-date #select-month option").eq(i).val() == month) {
      $(".end-date #select-month option")
        .eq(i - 1)
        .prop("selected", true);
    }

    if ($(".start-date #select-month option").eq(i).val() == month) {
      $(".start-date #select-month option")
        .eq(i - 1)
        .prop("selected", true);
    }
  }

  for (var i = 0; i < ".end-date #select-year option".length; i++) {
    if ($(".end-date #select-year option").eq(i).val() == year) {
      $(".end-date #select-year option").eq(i).prop("selected", true);
    }

    if ($(".start-date #select-year option").eq(i).val() == year) {
      $(".start-date #select-year option").eq(i).prop("selected", true);
    }
  }

  // 올해 날짜가 선택되었으면 날짜는 저번달까지만 보이게 해라
  // start date보다 end date의 년도가 같거나 커야한다.
});

$(function () {
  var now = new Date();

  var year = now.getFullYear();
  var month = now.getMonth() + 1;

  $(".period-3month").on("click", function () {
    // 현재 날짜에서 3개월을 빼고 만약 3월 이하라면 10더하기
    for (var i = 0; i < 12; i++) {
      if ($(".end-date #select-month option").eq(i).val() == month) {
        $(".end-date #select-month option")
          .eq(i - 1)
          .prop("selected", true);
      }

      if ($(".end-date #select-month option").eq(i).val() < 3) {
        $(".start-date #select-month option")
          .eq(i + 10)
          .prop("selected", true);
      } else {
        $(".start-date #select-month option")
          .eq(i - 2)
          .prop("selected", true);
      }
    }

    for (var i = 0; i < ".end-date #select-year option".length; i++) {
      if ($(".end-date #select-year option").eq(i).val() == year) {
        $(".end-date #select-year option").eq(i).prop("selected", true);
      }
    }
  });
});

// 셀렉트 박스에서 날짜를 선택하고 조회하기를 누르면 날짜 변경
$(function () {
  $(".btn-submit").click(function () {
    $(".start-year").text($("select[name=start-year] option:selected").val());
    $(".start-month").text($("select[name=start-month] option:selected").val());
    $(".end-year").text($("select[name=end-year] option:selected").val());
    $(".end-month").text($("select[name=end-month] option:selected").val());
  });

  //조회하기를 클릭이 아닌 박스가 변경될 때 바로 같이 변경

  // $("select[name=start-year]").change(function () {
  //  $(".start-year").text($(this).val()); value값 출력
  //  $("select[name=start-year] option:selected").text(); text값 출력
  // });

  // $("select[name=start-month]").change(function () {
  //   $(".start-month").text($(this).val());
  // });

  // $("select[name=end-year]").change(function () {
  //   $(".end-year").text($(this).val());
  // });

  // $("select[name=end-month]").change(function () {
  //   $(".end-month").text($(this).val());
  // });
});
