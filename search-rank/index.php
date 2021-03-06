<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>

<body>
    <header>
      <nav class="nav-top-wrap">
        <div class="nav-top">
          <div class="nav-left">
            <p class="admin-logo"><a href="#">월간식단연구소</a></p>
            <p class="nav-datalab"><a href="/">Data Lab.</a></p>
          </div>
        </div>
      </nav>
      <nav class="nav-bottom">
        <div class="tab_admenu">
          <ul>
            <li class="menu_01 tab-menu">
              <a href="/" class="menu">월간식단 랭크</a>
            </li>
            <li class="menu_02 tab-menu active">
              <a href="/search-rank/" class="menu">검색어 트렌드 랭크</a>
            </li>
            <li class="menu_03 tab-menu">
              <a href="/popular-rank/" class="menu">
                인기 레시피 랭크
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="sec-2">
      <div class="title-wrap">
          <div class="datalab-title active">
            <a href="#">인기 레시피 랭킹</a>
          </div>
          <div class="datalab-title"><a href="#">레시피 인사이트</a></div>
        </div>


        <div class="rank-content-wrap hide-contents">
          <p class="datalab-subtitle">
            여러 매체에서 인기 있는 검색어를 볼 수 있습니다.
          </p>
          <div class="select-wrap">
            <div class="option-select">
              <div class="select-type">
                <ul>
                  <li>
                    <label class="container-radio"
                      >통합
                      <input
                        type="radio"
                        checked="checked"
                        name="media"
                        value="combine"
                      />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >공공
                      <input type="radio" name="media" value="public" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >구글
                      <input type="radio" name="media" value="google" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >인스타
                      <input type="radio" name="media" value="insta" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >유튜브
                      <input type="radio" name="media" value="youtube" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >네이버TV
                      <input type="radio" name="media" value="navertv" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >네이버 블로그
                      <input type="radio" name="media" value="naverblog" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container-radio"
                      >다음TV
                      <input type="radio" name="media" value="daum" />
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>

            <div class="select-date">
              <select name="year" id="select-year">
                <option value="2020">2020년</option>
                <option value="2021">2021년</option>
                <option value="2022">2022년</option>
              </select>
              <select name="month" id="select-month">
                <option value="1">1월</option>
                <option value="2">2월</option>
                <option value="3">3월</option>
                <option value="4">4월</option>
                <option value="5">5월</option>
                <option value="6">6월</option>
                <option value="7">7월</option>
                <option value="8">8월</option>
                <option value="9">9월</option>
                <option value="10">10월</option>
                <option value="11">11월</option>
                <option value="12">12월</option>
              </select>
            </div>
          </div>

          <<!-- 전국포함 17개 교육청 데이터가 보여지게 해주세요 -->
          <div class="rank-wrap">

          <!-- 교육청 반복 -->
            <?php for($i=0; $i<18; $i++) { ?>
            <div class="region">
              <div class="region-title">전국</div>
              <!-- 각 교육청 내 순위도 버튼을 누르면 바뀔 수 있게 해주세요 -->
              <div class="food-rank">
                <ul>
                  <!-- 순위 반복 -->
                  <?php for($j=0; $j<10; $j++) { ?>
                  <li><a herf="#"><span>10 </span>스파게티</a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="btn-other">
                <i class="fa-solid fa-angle-left"></i>
                <p><span>1</span>/20</p>
                <i class="fa-solid fa-angle-right"></i>
              </div>
            </div>
            <?php } ?>          
          </div>
        </div>

        <!-- 인사이트 부분 -->
        <div class="insight-content-wrap hide-contents">
          <p class="datalab-subtitle">
            다양한 분야에서 검색어의 검색량 추이 및 연령별/성별 정보를 상세하게
            조회할 수 있습니다.
          </p>
          <div class="index-box-wrap">
            <div class="index-box">
              <div class="index-row"></div>
              <div class="index-row">
                <div class="index-title">
                  <h4>기간</h4>
                </div>
                <div class="period-input-btn">
                  <button class="period-select">1개월</button>
                  <button class="period-3month">3개월</button>
                  <button class="period-1year">1년</button>
                  <button class="period-custom period-active">직접입력</button>
                </div>
                <div class="period-input">
                  <div class="start-date">
                    <select name="start-year" id="select-year">
                      <option value="2020">2020년</option>
                      <option value="2021">2021년</option>
                      <option value="2022">2022년</option>
                    </select>
                    <select name="start-month" id="select-month">
                      <option value="01">1월</option>
                      <option value="02">2월</option>
                      <option value="03">3월</option>
                      <option value="04">4월</option>
                      <option value="05">5월</option>
                      <option value="06">6월</option>
                      <option value="07">7월</option>
                      <option value="08">8월</option>
                      <option value="09">9월</option>
                      <option value="10">10월</option>
                      <option value="11">11월</option>
                      <option value="12">12월</option>
                    </select>
                  </div>

                  <span class="hypen"> </span>

                  <div class="end-date">
                    <select name="end-year" id="select-year">
                      <option value="2020">2020년</option>
                      <option value="2021">2021년</option>
                      <option value="2022">2022년</option>
                    </select>
                    <select name="end-month" id="select-month">
                      <option value="01">1월</option>
                      <option value="02">2월</option>
                      <option value="03">3월</option>
                      <option value="04">4월</option>
                      <option value="05">5월</option>
                      <option value="06">6월</option>
                      <option value="07">7월</option>
                      <option value="08">8월</option>
                      <option value="09">9월</option>
                      <option value="10">10월</option>
                      <option value="11">11월</option>
                      <option value="12">12월</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="index-row"></div>
            </div>
            <a href="#" class="btn-submit">
              <i class="fa-solid fa-magnifying-glass"></i>
              <span>조회하기</span>
            </a>
          </div>

          <div class="insight-box-wrap">

            <!-- 왼쪽 차트 -->
            <div class="insight-left-box">
              <div class="click-number-wrap">
                <div class="click-number-title">
                  <h4><span class="clicked-food">돈까스 </span>검색량 추이</h4>
                  <span class="click-period">
                    <span class="start-year">2022</span>
                    .
                    <span class="start-month">02</span>
                    ~
                    <span class="end-year">2022</span>
                    .
                    <span class="end-month">02</span>
                  </span>
                </div>
                <div class="click-number-chart">
                  <canvas id="line-chart"></canvas>
                </div>
              </div>
              <div class="ratio-chart-wrap">
                <h4 class="ratio-chart-title">지역별/학교별 비중(기간합계)</h4>
                <div class="ratio-chart">
                  <div class="ratio-chart-1">
                    <canvas id="bar-chart-grouped"></canvas>
                  </div>
                  <div class="ratio-chart-2">
                    <canvas id="pie-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- 오른쪽 순위 -->
            <div class="insight-right-box">
              <div class="detail-rank-title">
                <div class="rank-title-wrap">
                  <h4><span class="clicked-food">돈까스 </span>검색량 추이</h4>
                  <span class="click-period">
                    <span class="start-year">2022</span>
                    .
                    <span class="start-month">02</span>
                    ~
                    <span class="end-year">2022</span>
                    .
                    <span class="end-month">02</span>
                  </span>
                </div>
              </div>
              <div class="detail-rank">
                <div class="detail-rank-top">
                  <h4><strong>TOP 500</strong></h4>
                  <span>조회수</span>
                </div>
                <div class="rank-list">
                  <ul>
                    <!-- 선택된 카테고리 내 세부 메뉴 순위를 보여주세요 -->
                    <?php for($j=0; $j<20; $j++) { ?>
                    <li>
                      <a herf="#"><span>15 </span>소불고기</a>
                      <p class="view-count">999</p>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="btn-other">
                  <i class="fa-solid fa-angle-left"></i>
                  <p><span>1</span>/20</p>
                  <i class="fa-solid fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>