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

    $(".datalab-title").removeClass("active");

    $(".datalab-title").eq(idx).addClass("active");
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
