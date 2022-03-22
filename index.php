
  <? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
  
  <body>
    <header>
      <nav class="nav-top-wrap">
        <div class="nav-top">
          <div class="nav-left">
            <p class="admin-logo"><a href="#">월간식단연구소</a></p>
            <p class="nav-datalab">데이터랩</p>
          </div>
          <div class="nav-right">
            <!-- 로그인했을때 보여지는 상단 글입니다. 로그아웃도 가능해야합니다 -->
            <p><span class="user-name">관리자</span>님 환영합니다</p>
            <span class="content-bar">|</span>
            <a href="#">로그아웃</a>
          </div>
        </div>
      </nav>
      <nav class="nav-bottom">
        <div class="tab_admenu">
          <ul>
          <li class="menu_01 tab-menu active">
              <a href="#" class="menu">회원관리</a>
            </li>
            <li class="menu_02 tab-menu">
              <a href="#" class="menu">컨텐츠관리</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <section class="sec-1">
        <div class="title-wrap">
          <div class="datalab-title">식단 인사이트</div>
          <p class="datalab-subtitle">
            식단별 클릭 추이와 분야별 검색어 현황을 확인 할수 있습니다.
          </p>
        </div>
        <div class="select-wrap">
        <div class="option-select">
            <div class="select-type">
              <ul>
                <li>
                  <label class="container-radio"
                    >전체
                    <input type="radio" checked="checked" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >주식
                    <input type="radio" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >주찬
                    <input type="radio" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >반찬
                    <input type="radio" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >국/찌개
                    <input type="radio" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >디저트
                    <input type="radio" name="food-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>

            <span class="option-content">|</span>

            <div class="select-type">
              <ul>
                <li>
                  <label class="container-radio"
                    >전체
                    <input type="radio" checked="checked" name="school-type" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >초등학교
                    <input type="radio" name="school-type" value="초등학교" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >중학교
                    <input type="radio" name="school-type" value="중학교" />
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container-radio"
                    >고등학교
                    <input type="radio" name="school-type" value="고등학교" />
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

        <!-- 전국포함 17개 교육청 데이터가 보여지게 해주세요 -->
        <div class="rank-wrap">

        <!-- 교육청 반복 -->
        <?php for($i=0; $i<18; $i++) { ?>
          <div class="region">
            <div class="region-title">전국</div>
            <!-- 각 교육청 내 순위 페이지 반복 -->
            <?php for($k=0; $k<20; $k++) { ?>
            <div class="food-rank">
              <ul>
                <!-- 순위 반복 -->
                <?php for($j=0; $j<10; $j++) { ?>
                <li><span>1 </span>  스파게티</li>
                <?php } ?>
              </ul>
            </div>
            <?php } ?>
            <div class="btn-other">
              <i class="fa-solid fa-angle-left"></i>
              <p><span>1</span>/20</p>
              <i class="fa-solid fa-angle-right"></i>
            </div>
          </div>
          <?php } ?>
          
        </div>
      </section>
    </main>
  </body>
</html>

<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>
