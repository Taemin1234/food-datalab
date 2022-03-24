<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>

<body>
    <header>
      <nav class="nav-top-wrap">
        <div class="nav-top">
          <div class="nav-left">
            <p class="admin-logo"><a href="#">월간식단연구소</a></p>
            <p class="nav-datalab">Data Lab.</p>
          </div>
        </div>
      </nav>
      <nav class="nav-bottom">
        <div class="tab_admenu">
          <ul>
            <li class="menu_01 tab-menu">
              <a href="/" class="menu">월간식단 랭크</a>
            </li>
            <li class="menu_02 tab-menu">
              <a href="/search-rank/" class="menu"
                >검색어 트렌드 랭크</a
              >
            </li>
            <li class="menu_03 tab-menu active">
              <a href="/popular-rank/" class="menu">인기 레시피 랭크</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="sec-3">
        <div class="title-wrap">
          <div class="datalab-title"><a href="#">인기 레시피 랭크</a></div>
          <p class="datalab-subtitle">
            여러 매체에서 인기 있는 레시피를 볼 수 있습니다.
          </p>
        </div>
        <div class="rank-content-wrap">
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

          <!-- 전국포함 17개 교육청 데이터가 보여지게 해주세요 -->
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
                    <li><a herf="#"><span>1 </span>스파게티</a></li>
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
      </section>
    </main>
  </body>

  <? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>