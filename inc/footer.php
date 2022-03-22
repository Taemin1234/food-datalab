<!-- 서브페이지 상단 걸리는 부분 -->
<script>
    jQuery(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            $('#backToTop').fadeIn(500);
            $('.fixwrap').css('position','fixed');
            $('.fixwrap2').css('position','fixed');
            $('.fixwrap2').css('top','79px');
            $('.sub_menu').css('position','fixed');
          } else {
            $('#backToTop').fadeOut('slow');
            $('.fixwrap').css('position','relative');
            $('.fixwrap2').css('position','relative');
            $('.fixwrap2').css('top','0');
            $('.sub_menu').css('position','absolute');
          }
        });
        $('#backToTop').click(function (e) {
          e.preventDefault();
          $('html, body').animate({scrollTop: 0}, 200);
        });
      });
</script>

<!-- 로딩페이지 -->
<script>
$(document).ready(function() {
    $('#loading').hide();
    $('#next').click(function(){
        $('#loading').show();
        return true;
    });
});
</script>


<a id="backToTop" class="scrolltop" href="#">
    <img src="/img/ico_arrow.svg">
</a>


<!-- 푸터 -->
<footer>
  <div id="fnb">
    <div class="inner_scroll">
      <div class="fnb_l">
        <ul>
              <li><a href="/etc/notice.php">공지사항</a></li>
              <li><a href="/etc/service.php">이용약관</a></li>
              <li><a href="/etc/privacy.php">개인정보처리방침</a></li>
              <li><a href="/etc/center.php">커뮤니티</a></li>
        </ul>
      </div>
      <div class="fnb_r">
      </div>
    </div>
  </div>
  <div id="copyright">
    <div class="inner">
      <div class="cr_l">
        <ul>
          <li>페이잇주식회사(대표:박진성)<span>|</span>경상북도 경산시 대학로 280, 창업보육센터 신관 212호(대동, 영남대학교)<br>
            사업자번호: 176-88-01702<span>|</span>통신판매업신고: 제2021-대구수성구-0014호<span>|</span>개인정보관리책임자: 박진성<br>
            전화: 1544-5202<span>|</span>팩스: 0504-390-7321<span>|</span>이메일: help@payeat.co.kr </li>
          <li>ⓒ <strong>월간식단연구소</strong> 2021 All rights reserved.</li>
        </ul>
      </div>
      <div class="cr_r">
        <ul>
          <li><img src="/img/glogo.svg"></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>