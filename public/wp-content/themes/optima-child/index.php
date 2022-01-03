<?php
    get_header();
    ?>

    <section class="top-mainvisual">
        <div class="main-content">
            <div class="catchcopy">
                もう一人で悩まないで
            </div>
            <div class="top-feature">
                <div class="box">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/top/f-1.png')); ?>" alt="各線京橋駅から徒歩2分">
                </div>
                <div class="box">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/top/f-2.png')); ?>" alt="薬なしカウンセリングのみも可能">
                </div>
                <div class="box">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/top/f-3.png')); ?>" alt="子供から高齢者まで診療">
                </div>
            </div>
            <div class="top-cat">
                <div class="cat-ttl">診療科目</div>
                <h1>
                    <p>心療内科</p>
                    <p>精神科</p>
                </h1>
            </div>
        </div>
        <div class="wave">
        </div>
    </section>
    <section class="top-sec01">
        <div class="inner">
            <div class="righter">
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
                        </div>
                    </div>
                    <div class="deco deco-1"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-deco01.png')); ?>" alt=""></div>
                    <div class="deco deco-2"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-deco02.png')); ?>" alt=""></div>
                </div>
            </div>
            <div class="lefter">
                <div class="news">
                    <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/news-ico.png')); ?>"></div>
                    <?php 
                    $arg = array(
                        'post_type' => 'news',
                        'posts_per_page' => 1,
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($arg);
                    if($the_query -> have_posts()):while($the_query -> have_posts()):$the_query -> the_post();
                    ?>
                    <div class="news-main"><a href="<?php the_permalink(); ?>"><span><?php the_time('Y.m.d'); ?></span><?php the_title(); ?></a></div>
                    <?php endwhile;endif; ?>
                    <div class="news-archive sp-none tb-none"><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ一覧へ</a></div>
                </div>
                <div class="prevention">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/deco.png')); ?>" alt=""></div>
                    <a href="">当院の感染予防について<img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="top-sec02">
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">仕事、学校に<br>行くのが<br class="pc-none tb-none">つらいあなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-1.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">うつ、不安が<br>強いあなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-2.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">人間関係に<br>悩むあなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-3.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">ストレスで<br>身体が不調な<br class="tb-none pc-none">あなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-4.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">物忘れが<br>気になる<br class="tb-none pc-none">あなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-5.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="box">
            <div class="box-content">
                <div class="box-ttl">子育てに<br>悩むあなたへ</div>
                <p class="sp-none tb-none">
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト<br>
                </p>
                <div class="regular-btn sp-none tb-none"><a href="">詳しく見る<span>▶</span></a></div>
            </div>
            <div class="ico"><img src="<?php echo esc_url(get_theme_file_uri('images/top/t-6.png')); ?>" alt=""></div>
            <div class="arrow pc-none"><img src="<?php echo esc_url(get_theme_file_uri('images/common/arrow.png')); ?>" alt=""></div>
            <a class="pc-none cover" href=""></a>
        </div>
        <div class="wave sp-none tb-none"></div>
    </section>
    <section class="top-sec03">
        <div class="sec-ttl">
            <span>診療方針</span>
            <h2>
                <img src="<?php echo esc_url(get_theme_file_uri('images/top/ico-1.png')); ?>"><p>植家クリニック<br class="tb-none pc-none"><span class="orange"><span class="big">5</span>つ</span>の特徴</p>
            </h2>
        </div>
        <div class="inner">
            <div class="sec-content">
                <div class="box">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/f-1.jpg')); ?>" alt=""></div>
                        <div class="text">
                            <div class="text-inner">
                            <h3>24時間ネット予約、<br>その日の来院も可能</h3>
                            <p>
                                WEBから問診票を記入すれば、伝えにくい内容でも伝えられます。是非ご活用ください。
                            </p>
                        </div>
                    </div>
                    <div class="number"><img src="<?php echo esc_url(get_theme_file_uri('images/top/1.png')); ?>" alt="1"></div>
                </div>
                <div class="box">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/f-2.jpg')); ?>" alt=""></div>
                        <div class="text">
                            <div class="text-inner">
                            <h3>カウンセリングを重視</h3>
                            <p>
                            とにかく悩みを聞いてほしい方は、カウンセリングをオススメします。お試しでも可能なので、気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                    <div class="number"><img src="<?php echo esc_url(get_theme_file_uri('images/top/2.png')); ?>" alt="1"></div>
                </div>
                <div class="box">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/f-3.jpg')); ?>" alt=""></div>
                        <div class="text">
                            <div class="text-inner">
                            <h3>薬の希望を尊重</h3>
                            <p>
                            薬は希望しない、漢方薬のみを希望するなどにも対応できます。また当院では、患者様1人に対して処方する薬の種類を制限しております。
                            </p>
                        </div>
                    </div>
                    <div class="number"><img src="<?php echo esc_url(get_theme_file_uri('images/top/3.png')); ?>" alt="1"></div>
                </div>
                <div class="box">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/f-4.jpg')); ?>" alt=""></div>
                        <div class="text">
                            <div class="text-inner">
                            <h3>診断書はその日に発行</h3>
                            <p>
                                休職の診断書、傷病手当金の診断書などはその日に発行できます。
                            </p>
                        </div>
                    </div>
                    <div class="number"><img src="<?php echo esc_url(get_theme_file_uri('images/top/4.png')); ?>" alt="1"></div>
                </div>
                <div class="box">
                    <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/f-5.jpg')); ?>" alt=""></div>
                        <div class="text">
                            <div class="text-inner">
                            <h3>訪問診療を実施</h3>
                            <p>
                            中学生以下、65歳以上の方で、当院まで行くことが難しい方は、ご自宅で診察を受けられます。
                            </p>
                        </div>
                    </div>
                    <div class="number"><img src="<?php echo esc_url(get_theme_file_uri('images/top/5.png')); ?>" alt="1"></div>
                </div>
            </div>
            <div class="regular-btn"><a href="<?php echo esc_url(home_url('medical')); ?>">診療について<span>▶</span></a></div>
        </div>
    </section>
    <section class="top-sec04">
        <div class="inner">
            <div class="righter">
                <div class="sec-ttl">
                    <span>私たちの想い</span>
                    <h2>
                        <p>むすびメンタルクリニックでは、<br>1人で悩むあなたに寄り添い、<br>一緒に解決方法を見つけて<br>いくような治療を心掛けています。</p>
                    </h2>
                </div>
                <div class="sec-content">
                    <p>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス                    
                    </p>
                    <div class="regular-btn"><a href="<?php echo esc_url(home_url('about')); ?>">クリニックについて<span>▶</span></a></div>
                </div>
            </div>
            <div class="lefter">
                <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/soul.jpg')); ?>" alt=""></div>
            </div>
        </div>
    </section>
    <section class="top-sec05">
        <div class="inner">
            <div class="sec-ttl">
                <span>medical subjects</span>
                <h2>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/top/ico-2.png')); ?>"><p>診療科目</p>
                </h2>
            </div>
            <div class="sec-content">
                <h3>精神科/心療内科</h3>
                <div class="container">
                    <div class="box">
                        <span>うつ病</span>
                    </div>
                    <div class="box">
                        <span>躁うつ病</span>
                    </div>
                    <div class="box">
                        <span>適応障害</span>
                    </div>
                    <div class="box">
                        <span>不眠症</span>
                    </div>
                    <div class="box">
                        <span>自律神経失調症</span>
                    </div>
                    <div class="box">
                        <span>パニック障害</span>
                    </div>
                    <div class="box">
                        <span>強迫性障害</span>
                    </div>
                    <div class="box">
                        <span>社交不安障害</span>
                    </div>
                    <div class="box">
                        <span>神経性過食症</span>
                    </div>
                    <div class="box">
                        <span>神経性やせ症</span>
                    </div>
                    <div class="box">
                        <span>PTSD</span>
                    </div>
                    <div class="box">
                        <span>解離性障害</span>
                    </div>
                    <div class="box">
                        <span>ADHD</span>
                    </div>
                    <div class="box">
                        <span>自閉症スペクトラム障害</span>
                    </div>
                    <div class="box">
                        <span>認知症</span>
                    </div>
                    <div class="box">
                        <span>月経前不快気分障害</span>
                    </div>
                    <div class="box">
                        <span>産後うつ</span>
                    </div>
                    <div class="box">
                        <span>ゲーム依存症</span>
                    </div>
                    <div class="box">
                        <span>アルコール依存症</span>
                    </div>
                    <div class="box">
                        <span>ギャンブル依存症</span>
                    </div>
                    <div class="box">
                        <span>パーソナリティ障害</span>
                    </div>
                    <div class="box">
                        <span>総合失調症</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-sec06">
        <div class="inner">
            <div class="sec-ttl">
                <span>medical subjects</span>
                <h2>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/top/ico-3.png')); ?>"><p>スタッフ採用情報</p>
                </h2>
            </div>
            <div class="sec-content">
                <div class="container">
                    <div class="box">
                        <a href="<?php echo esc_url(get_theme_file_uri()); ?>">
                            <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/r-ico1.png')); ?>" alt=""></div>
                            <div class="text">臨床心理士<span>（公認心理士）</span></div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="<?php echo esc_url(get_theme_file_uri()); ?>">
                            <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/r-ico2.png')); ?>" alt=""></div>
                            <div class="text">精神保健福祉士</div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="<?php echo esc_url(get_theme_file_uri()); ?>">
                            <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/r-ico3.png')); ?>" alt=""></div>
                            <div class="text">看護師</div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="<?php echo esc_url(get_theme_file_uri()); ?>">
                            <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/r-ico4.png')); ?>" alt=""></div>
                            <div class="text">医療事務</div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="<?php echo esc_url(get_theme_file_uri()); ?>">
                            <div class="image"><img src="<?php echo esc_url(get_theme_file_uri('images/top/r-ico5.png')); ?>" alt=""></div>
                            <div class="text">医師</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php
    get_footer();
 ?>