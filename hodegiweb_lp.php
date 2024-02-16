<?php
/*
Template Name: hodegiweb テンプレート 
*/
//chatplus別,URL別,noindex

// セッションの開始
session_start();
//var_dump($_POST);
$url = '';
if (isset($_SERVER['HTTPS'])) {
    $url .= 'https://';
} else {
    $url .= 'http://';
}
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parameter = parse_url($url, PHP_URL_QUERY);
?>
<!DOCTYPE html>
<html lang="en">


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="保険見直しの決定版！AIがあなたに最適な保険を瞬時に選ぶ" />
    <link rel="icon" href="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegilp_favicon.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover">
    <meta property="og:title" content="〔保デジWEB〕保険見直しの決定版！">
    <meta property="og:description" content="保険選びをデジタル化 保険のコスパ×AIテクノロジー 保険は節約できる！”ピッタリ”がわかる！">
    <meta property="og:image" content="<?php echo home_url(); ?>/wp-content/uploads/2024/02/ogp.png" />
    <meta property="og:type" content="website">
    <title>必要保障額シミュレーション「保デジWEB」</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hodegiweb_lp.css">
    <!-- GA Google Analytics @ https://m0n.co/ga -->
    <script>(function (i, s, o, g, r, a, m) { i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga'); ga('create', 'UA-79269172-1', 'auto'); ga('send', 'pageview');</script>
        <!-- Google Tag Manager for WordPress by gtm4wp.com -->
        <!-- GTM Container placement set to automatic -->
        <script data-cfasync="false"
        data-pagespeed-no-defer>var dataLayer_content = { "pagePostType": "page", "pagePostType2": "single-page", "pagePostAuthor": "fa_service_admin" }; dataLayer.push(dataLayer_content);</script>
        <script
        data-cfasync="false">(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-NXX8WRP');</script>
        <!-- End Google Tag Manager -->
        <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
        
</head>

<body>
<div class="wrapper">
    <header>
        <div class="header_inner">
            <div class="header_logo">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/12/fa_logo.png">
            </div>
        </div>
    </header>
    <section class="first_view">
        <div class="fv_header_bar">
            <div class="fv_header_bar_title">
                <h1 class="fvh1">保険見直しの決定版！</h1>
            </div>
        </div>
        <div class="fv_content_back">
            <div class="fv_content_back_texts">
                <p class="fv_backtext_insurance">INSURANCE</p>
                <p class="fv_backtext_digital">DIGITAL</p>
            </div>
        </div>
        <div class="fv_content_front">
            <div class="fv_hodegi_logo">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegi_logo.webp">
            </div>
            <h2 class="fvh2">AIがあなたに<br>
                最適な保険を瞬時に選ぶ</h2>
            <img class="fv_image"
                src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/fv_image.webp">
            <div class="fv_CTA">
                <p class="CTA_describe">
                    <span class="diagonal_line1"></span>
                    <img
                        src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/robot_icon.png">質問に答えるだけカンタン40秒！
                    <span class="diagonal_line2"></span>
                </p>
                <div class="CTA_btn">
                    <a href="https://www.fa-simulation.com/?partner=hodegiweb_lp&inflow=organic" class="CTA_btn" target="_blank"
                        rel="noopene">AI保険診断スタート</a>
                </div>
            </div>

        </div>
    </section>
    <section class="situations">
        <div class="situations_background">
            <div class="situations_content">
                <h2 class="situations_title">SITUATIONS</h2>
                <h2 class="situations_title_jpns">保険のお悩みは？</h2>
                <div class="situations_ex">
                    <div class="situations_ex1">
                        <p>自分に必要な保障内容や金額が<span>わからない</span></p>
                        <img
                            src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/situations_images1.webp">
                    </div>
                    <div class="situations_ex2">
                        <p>物価高騰で生活が苦しく<span>節約したい</span></p>
                        <img
                            src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/situations_images2.webp">
                    </div>
                    <div class="situations_ex3">
                        <p><span>営業マンに言われるがまま</span>入ってしまった</p>
                        <img
                            src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/situations_images3.webp">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="solution">
        <div class="solution_title">
            <h2 class="sth2">
                <img class="solution_logo"
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegi_logo.webp"
                    alt="保デジ">
                で解決！
            </h2>
            <hr class="solution_title_underbar" noshade>
        </div>
        <p class="solution_describe">最大10個のカンタンな質問に答えるだけで必要な保障をAIが計算し、20社以上の保険会社から最安値の保険を瞬時にセレクトします！</p>
        <div class="solution_flow">
            <video class="pc solution_flow_video" autoplay loop muted playsinline>
                <source
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegiweb_simulationflow-1.mov">
            </video>
            <img class="sp video_gif" src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegiweb_simulationflow.gif">
            <div class="solution_flow_step">
                <div class="sf_step1">
                    <p class="step1_back">01</p>
                    <p class="step1_front">回答</p>

                </div>
                <div class="sf_step2">
                    <p class="step2_back">02</p>
                    <p class="step2_front">結果</p>
                </div>
                <div class="sf_step3">
                    <p class="step3_back">03</p>
                    <p class="step3_front">保存</p>
                </div>
            </div>
        </div>
    </section>
    <section class="strength">
        <h2 class="strength_title">STRENGTH</h2>
        <h2 class="strength_title_jpns">保デジの特徴</h2>
        <div class="strength_contents">
            <div class="strength_01">
                <div class="str_first_harf">
                    <p class="str_no01">
                        01
                    </p>
                    <hr class="str_contents_hr" noshade>
                    <p class="str_describe str_describe_no01">年齢・性別等から備えておくべき保障額をAIが算出</p>
                </div>
                <div class="str_latter_half">
                    <img class="str01_img"
                        src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/strength01_img.webp">
                    <p class="str_no1_point">
                        備えるべき保障<br>額がわかる
                    </p>
                </div>
            </div>
            <div class="strength_02">
                <div class="str_first_harf">
                    <p class="str_no02">
                        02
                    </p>
                    <hr class="str_contents_hr" noshade>
                    <p class="str_describe str_describe_no02">AIによる診断で現在の保険料から同世代の平均と節約可能額を算出</p>
                </div>
                <div class="str_latter_half">
                    <img class="str02_img"
                        src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/strength02_img.webp">
                    <p class="str_no2_point">
                        節約可能額を<br>瞬時に判定
                    </p>
                </div>
            </div>
            <div class="strength_03">
                <div class="str_first_harf">
                    <p class="str_no03">
                        03
                    </p>
                    <hr class="str_contents_hr" noshade>
                    <p class="str_describe str_describe_no03">AIが保険種類ごとに最大で約100商品の中から最安値を選び、あなた専用の見積もりを作成</p>
                </div>
                <div class="str_latter_half">
                    <img class="str03_img"
                        src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/strength03_img.webp">
                    <p class="str_no3_point">
                        20社以上から<br>最適を提案
                    </p>
                </div>
            </div>
            <h3 class="required_amount_of_coverage_Q">必要保障額とは</h3>
            <p class="required_amount_of_coverage_A">対象者が亡くなった場合、遺されたご家族に必要となるお金のこと。つまり、遺すべき生命保険の保障額です。</p>
        </div>
    </section>
    <section class="new_function">
        <h2 class="new_function_title">NEW FUNCTIONS</h2>
        <h2 class="new_function_title_jpns">新機能の追加</h2>
        <div class="new_function_contents">
            <div class="compare_products">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/compare_products_image.webp">
                <div class="compare_products_right">
                    <h4 class="compare_products_title">商品の比較</h4>
                    <p>約100商品の中から保障を検索・比較！あなた好みのプランにカスタマイズできる</p>
                </div>
            </div>
            <div class="saving_diagnosis_results">
                <div class="saving_diagnosis_results_left">
                    <h4 class="saving_diagnosis_results_title">診断結果の保存</h4>
                    <p>AI保険診断の結果を保存して、いつでもどこでもスマホやPCで見返せる</p>
                </div>
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/saving_diagnosis_results_image.webp">
            </div>
        </div>
    </section>
    <section class="cases">
        <h2 class="cases_title">CASES</h2>
        <h2 class="cases_title_jpns">見積もり事例</h2>
        <div class="cases_contents_area">
            <section class="variable slider">
                <div>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/cases_30m_married-1.webp">
                </div>
                <div>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/cases_20f_single.webp">
                </div>
                <div>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/cases_50f_married.webp">
                </div>
                <div>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/cases_30m_single.webp">
                </div>
              </section>
        </div>

    </section>
    <section class="experience">
        <h2 class="experience_title">EXPERIENCE</h2>
        <h2 class="experience_title_jpns">体験する</h2>
        <p class="experience_describe">最大10個のカンタンな質問に答えて、あなたの悩みを解決しよう！</p>
        <div class="experience_video">
            <video class="pc solution_flow_video ex_video" autoplay loop muted playsinline>
                <source
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegiweb_simulationflow-1.mov">
            </video>
            <img class="sp video_gif" src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/hodegiweb_simulationflow.gif">
            <p>完全<br>無料</p>
        </div>
        <div class="ex_CTA_area">
            <p class="CTA_describe">
                <span class="diagonal_line1"></span>
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/robot_icon.png">質問に答えるだけカンタン40秒！
                <span class="diagonal_line2"></span>
            </p>
            <div class="CTA_btn">
                <a href="https://www.fa-simulation.com/?partner=hodegiweb_lp&inflow=organic" class="CTA_btn" target="_blank" rel="noopene">今すぐチェック！
                </a>
            </div>
        </div>
        <div class="experience_points">
            <div class="experience_points_inner">
                <h4 class="exh4">
                    「保デジ」だからできる！
                </h4>
                <hr class="ex_hr" noshade>
                <ul class="ex_point_list">
                    <li>必要な保険がわかる</li>
                    <li>最大約100商品からAIが見積もり作成</li>
                    <li>節約できる金額がわかる</li>
                    <li>商品をカンタンに比較</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="FAQ">
        <h2 class="FAQ_title">FAQ</h2>
        <h2 class="FAQ_title_jpns">よくある質問</h2>
        <div class="FAQ_contents">
            <div class="FAQ1">
                <input type="checkbox" id="toggle1" class="toggle" checked="">
                <label class="question_title" for="toggle1">
                    <p class="Q">Q.</p>
                    <p class="question">利用は無料ですか</p>
                </label>
                <div class="answerarea content">
                    <p class="A">A.</p>
                    <p class="answer">はい。無料でご利用いただけます。<br>
                        ※ご利用時のパケット通信料はお客様のご負担となります。</p>
                </div>
            </div>
            <div class="FAQ2">
                <input type="checkbox" id="toggle2" class="toggle">
                <label class="question_title" for="toggle2">
                    <p class="Q">Q.</p>
                    <p class="question">サービスを利用したら保険契約しなくてはいけませんか？</p>
                </label>
                <div class="answerarea content">
                    <p class="A">A.</p>
                    <p class="answer">
                        いいえ。当サービスは、あくまでもお客様にとって必要な保険を知っていただく為のサービスです。現在のプランが適切かどうかを判断していただく為にお気軽にご利用いただけます。
                        また、その結果がお客様にとって総合的にプラスとなる事、かつお客様のご意向がある場合は、新しいプランのご契約もいただける体制は整っておりますので、ご希望があればお申し付けください。</p>
                </div>
            </div>
            <div class="FAQ3">
                <input type="checkbox" id="toggle3" class="toggle">
                <label class="question_title" for="toggle3">
                    <p class="Q">Q.</p>
                    <p class="question">診断結果で提示されたプランに入ることも可能ですか？</p>
                </label>
                <div class="answerarea content">
                    <p class="A">A.</p>
                    <p class="answer">はい、見積もり体験で表示されたプランは実際に存在するプランです。加入可否は保険会社の審査次第ですが、お申し込みは可能です。その際、誕生月や告知によっては保険料が変わる可能性がございます。</p>
                </div>
            </div>
            <div class="FAQ4">
                <input type="checkbox" id="toggle4" class="toggle">
                <label class="question_title" for="toggle4">
                    <p class="Q">Q.</p>
                    <p class="question">なぜ複数の保険商品からシミュレーションが出来るのですか？</p>
                </label>
                <div class="answerarea content">
                    <p class="A">A.</p>
                    <p class="answer">
                        「保デジ」を運営する株式会社フィナンシャル・エージェンシーは約50社の保険会社の商品を取り扱う総合保険代理店です。全国300名以上のFPが在籍し、コンサルティングからアフターフォローまで幅広くサービスを提供しています。<br>(在籍数2024年2月現在)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="pc fixed_qrcode">
        <p class="qr_text1"><span class="diagonal_line1"></span>カンタン40秒！<span class="diagonal_line2"></span></p>
        <div class="qr_are">
            <p class="qr_text2">スマホが便利！</p>
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/02/fa-simulation_qrcode.webp">
            <p class="qr_text3">診断スタート</p>
        </div>
    </div>
    <footer>
        <div class="footer_inner">
            <p>＜お問い合わせ先＞</p>
            <p>
                募集代理店：株式会社フィナンシャル・エージェンシー<br>
                <a href="tel:0120-687-124">TEL：0120-406-672</a><br>
                受付時間：平日9:30~19:00
            </p>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>

    <script>$(function(){if(window.matchMedia('(max-width: 768px)').matches){$('.cases .slider').slick({dots:true,slidesToShow:2,slidesToScroll:1,prevArrow:'<p class="slide-arrow prev-arrow"></p>',nextArrow:'<p class="slide-arrow next-arrow"></p>',responsive:[{breakpoint:767,settings:{slidesToShow:2,slidesToScroll:1,dots:true,},breakpoint:460,settings:{slidesToShow:1,slidesToScroll:1,dots:true,},},],});}});</script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).on('ready', function() {
        $(".variable").slick({
          dots: true,
          infinite: true,
          variableWidth: true
        });
      });
  </script>
</body>

</html>