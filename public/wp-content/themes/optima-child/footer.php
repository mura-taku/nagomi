        </div><!-- .main_wrapper -->
	</div><!-- .site_wrapper -->
	<footer>
    <section class="footer-sec01">
      <div class="inner">
        <div class="sec-ttl">
          <span>access & time</span>
          <h2>アクセス・診療時間</h2>
        </div>
        <div class="sec-content">
          <div class="righter">
            <p><img src="<?php echo esc_url(get_theme_file_uri('images/common/ping.png')); ?>" alt="">住所が入ります住所が入ります住所が入ります住所が入ります</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13026.24301433179!2d135.1453946!3d35.2920457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4ee14aff19f77a!2z5qCq5byP5Lya56S-IOOCs-ODvOOCr-OCuQ!5e0!3m2!1sja!2sjp!4v1640954190406!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="lefter">
            <div class="timetable">
              <div class="t-inner">
                <div class="t-ttl">診療時間</div>
                <div class="t-content">
                  <table>
                    <tr>
                      <th></th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th><th>祝</th>
                    </tr>
                    <tr>
                      <td class="shin">10:00～13:00</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td>×</td><td>×</td>
                    </tr>
                    <tr>
                      <td class="shin">14:30～17:30</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td class="orange">〇</td><td>×</td><td>×</td><td>×</td>
                    </tr>
                  </table>
                  <p>休診日：日曜、祝日</p>
                </div>
              </div>
            </div>
            <div class="contact-parts">
              <div class="reserve">
                <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/common/reserve.png')); ?>" alt="">24時間 WEB予約<span>▶</span></a>
              </div>
              <div class="tel">
                <span>予約・お問い合わせ</span>
                <a href="">000-000-0000</a>
              </div>
            </div>
            <div class="caution">
              <div class="c-inner">
                <p>※ テキストが入りますテキストが入りますテキストが入ります</p>
                <p>※ テキストが入りますテキストが入りますテキストが入ります</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-sec02">
      <div class="inner">
        <div class="lefter">
          <div class="footer-logo">
            <img src="<?php echo esc_url(get_theme_file_uri('images/common/logo.png')); ?>">
            <span>うつ・不安・不眠のご相談は大阪市の心療内科・精神科「植家クリニック」</span>
          </div>
        </div>
        <div class="righter">
          <ul>
            <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url('guide')); ?>">初めての方へ</a></li>
            <li><a href="<?php echo esc_url(home_url('medical')); ?>">診療について</a>
              <ul>
                <li class="none"><a class="shin" href="<?php echo esc_url(home_url('fee')); ?>"><span><img src="<?php echo esc_url(get_theme_file_uri('images/common/L.png')); ?>" alt=""></span>自立支援医療について</a></li>
              </ul>
            </li>
            <li><a href="<?php echo esc_url(home_url('counseling')); ?>">カウンセリングについて</a></li>
            <li><a href="<?php echo esc_url(home_url('about')); ?>">クリニックについて</a></li>
          </ul>
          <ul>
            <li><a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a></li>
            <li><a href="<?php echo esc_url(home_url('column')); ?>">コラム</a></li>
            <li><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
            <li><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
            <li><a href="<?php echo esc_url(home_url('privacy')); ?>">プライバシーポリシー</a></li>
          </ul>
        </div>
        <div class="copy">Copyright © Ueka mental clinic.</div>
      </div>
    </section>
  </footer>
    <?php 		
		wp_footer();
    ?>
</body>
</html>