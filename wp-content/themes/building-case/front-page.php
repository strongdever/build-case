<?php

	/*
	Template Name: Front Page Template
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

    <main id="main">
        <div class="container">
            <div class="top-img-wrapper">
                <span class="obj1 obj luxy-el" data-speed-y="-90" data-offset="0" data-horizontal='1' data-speed-x="-30"></span>
                <span class="obj2 obj luxy-el" data-speed-y="-90" data-offset="0" data-horizontal='1' data-speed-x="-50"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview01.webp" alt=""></span>
                <span class="obj3 obj luxy-el" data-speed-y="40" data-offset="0" data-horizontal='1' data-speed-x="-10"></span>
                <span class="obj4 obj luxy-el" data-speed-y="80" data-offset="0" data-horizontal='1' data-speed-x="-80"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview05.webp" alt=""></span>
                <span class="obj5 obj luxy-el" data-speed-y="-20" data-offset="0" data-horizontal='1' data-speed-x="30"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview03.webp" alt=""></span>
                <span class="obj6 obj luxy-el" data-speed-y="-90" data-offset="0" data-horizontal='1' data-speed-x="50"></span>
                <span class="obj7 obj luxy-el" data-speed-y="60" data-offset="0" data-horizontal='1' data-speed-x="20"><a href="#incentive"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview04.webp" alt=""></a></span>
                <span class="obj8 obj luxy-el" data-speed-y="-50" data-offset="0" data-horizontal='1' data-speed-x="40"></span>
                <span class="obj9 obj luxy-el" data-speed-y="-60" data-offset="0" data-horizontal='1' data-speed-x="20">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview02.webp">
                </span>
                <div class="top-img-catch">
                    <h1 class="">
                        <p class="subtitle">建物事例データを募集します。</p>
                        <p class="maintitle"><span>高額</span>の<a href="#incentive"><span>インセンティブ</span></a>を取得しませんか？</p>
                    </h1>
                </div>
                <p class="move-text">建物事例データを募集中！&nbsp;&nbsp;&nbsp;あなたの建物の写真や図面を共有していただければ、素晴らしいインセンティブが待っています！当選された方には、なんと5000～10000万円相当のAmazonギフト券をプレゼントいたします。
                    <span class="sphidden"></span></p>
            </div>
            <div class="page-content">
                <div class="top-philosophy">
                    <div class="top-philosophy-wrapper content">
                        <div class="common-title" data-aos="fade-up">
                            <h2>建物事例調査募集について</h2>
                            <!-- <span>フィロソフィー</span> -->
                        </div>
                        <div class="contents" data-aos="fade-up">
                            <h3>一緒に建築の未来を創りましょう！</h3>
                            <p>
                                弊社では、建築に関する事例データを募集しています。<br>
                                <br>
                                建築に関わる皆様へのご協力をお願いします。<br>
                                家を建てる妻も、建設を専門とする方も、私たちと一緒に民間建設業界に貢献しましょう！<br>
                                退屈せずに、建設のプロセスを楽しめるサイトをご用意しました。
                                <br><br>
                                私たちは、建物の見積もりや写真、図面など、<br>建物に関する詳細な情報を提供していただける方々を募集しています<br>
                                あなたの建物が他の方々のインスピレーションの源となり、<br>建築界に新たなアイデアと情報を提供できるかもしれません。<br>
                                ぜひお気軽にご<a href="#applying" class="apply">応募</a>ください。<br>
                                当選された方には高額な<a href="#incentive" class="incentive">インセンティブ</a>も進呈いたします。<br>
                            </p>
                        </div>
                        <span class="viewmore-btn" data-aos="fade-out">
                            <p>詳細はこちら</p>
                        </span>
                    </div>
                </div>
                <div class="common-service" id="incentive">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>Incentive</h2>
                            <span>インセンティブ</span>
                        </div>
                        <ul>
                            <li data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/service#works">
                                    <figure class="luxy-el" data-speed-y="-3" data-offset="150"><img src="https://www.nextstep-tec.com/sys/wp-content/themes/next-step/common/images/service1.jpg" alt="" class="ofi-img"></figure>
                                    <div class="contents">
                                        <h4>システムにおける<br>
                                            コンサルティング業務および支援
                                        </h4>
                                        <p>
                                            システムの導入における具体的な提案や、導入済みのシステムで発生した問題点についての改善提案など、DX ,RPAを実現するための構想部分を現実解に落とし込むエンジニアリング面の支援までを対応いたします。
                                        </p>
                                        <span class="viewmore-btn">
                                            <p>more</p>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="img_position" data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/service#support">
                                    <figure class="luxy-el" data-speed-y="-3" data-offset="150"><img src="https://www.nextstep-tec.com/sys/wp-content/themes/next-step/common/images/service2.jpg" alt="" class="ofi-img"></figure>
                                    <div class="contents">
                                        <h4>システム開発支援</h4>
                                        <p>
                                            webアプリケーションの設計・開発、インフラの設計・構築・保守、業務運用設計・開発、C/Sシステム、汎用機の環境作成から開発、スマートフォンアプリケーションの設計・開発サイトのデザインなどにおいて支援いたします。
                                        </p>
                                        <span class="viewmore-btn">
                                            <p>more</p>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/service#plan">
                                    <figure class="luxy-el" data-speed-y="-3" data-offset="150"><img src="https://www.nextstep-tec.com/sys/wp-content/themes/next-step/common/images/service3.jpg" alt="" class="ofi-img"></figure>
                                    <div class="contents">
                                        <h4>サービスの企画・開発</h4>
                                        <p>
                                            スマートフォンアプリケーションで業務系からエンタメ系まで枠にとらわれないサービスを考えて実現していくことを目指します。
                                        </p>
                                        <span class="viewmore-btn">
                                            <p>more</p>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p class="move-text">建物事例データを募集中！&nbsp;&nbsp;&nbsp;あなたの建物の写真や図面を共有していただければ、素晴らしいインセンティブが待っています！当選された方には、なんと5000～10000万円相当のAmazonギフト券をプレゼントいたします。
                        <span class="sphidden"></span></p>
                </div>
                <div class="top-company-recruit" id="applying">
                    <div class="top-company-wrapper cr-common">
                        <div class="title-area">
                            <div class="common-title" data-aos="fade-up">
                                <h2>Comapny</h2>
                                <span>会社概要</span>
                            </div>
                            <p data-aos="fade-up">NextStep TECHNOLOGIES株式会社は、システムにおける<br>
                                様々な課題に対して、 培ってきた知見と技術を<br class="tab-block">適用して解決への道を図り、<br>
                                あらたなるサービスを知恵を出し合いながら創出します。
                            </p>
                            <span class="viewmore-btn white" data-aos="fade-up">
                            <a href="https://www.nextstep-tec.com/company">more</a>
                            </span>
                        </div>
                    </div>
                    <div class="top-recruit-wrapper cr-common">
                        <div class="title-area">
                            <div class="common-title" data-aos="fade-up">
                                <h2>Recruit</h2>
                                <span>採用情報</span>
                            </div>
                            <p data-aos="fade-up">これからIT業界を選ぶ方、<br class="tab-block">いままでの会社とは違った<br class="pclarge-block">
                                ビジネスをやってみようと思う方、<br class="tab-block">新しいビジネスを育ててみたいと思う方、<br>
                                ぜひお力を貸してください。一緒に育てていきましょう。<br>
                            </p>
                            <span class="viewmore-btn white" data-aos="fade-up">
                            <a href="https://www.nextstep-tec.com/recruit">more</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="news-wrapper">
                        <div class="common-title" data-aos="fade-up">
                            <h2 data-aos="fade-up">Blog</h2>
                            <span>ブログ</span>
                        </div>
                        <div class="news__card-wrapper" id="js-slider-1">
                            <div class="news__card" data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/ict%e7%94%a3%e6%a5%ad%e5%8d%94%e5%90%8c%e7%b5%84%e5%90%88%e3%81%ab%e5%8a%a0%e5%85%a5%e3%81%84%e3%81%9f%e3%81%97%e3%81%be%e3%81%97%e3%81%9f%e3%80%82/">
                                    <figure>
                                        <img src="https://www.nextstep-tec.com/sys/wp-content/themes/next-step/images/noimage.png" />
                                    </figure>
                                    <div class="title">
                                        ICT産業協同組合に加入いたしました。              
                                    </div>
                                    <div class="cont">
                                        2023/2/1よりICT産業協同組合への加入申請が認可されました。
                                        …              
                                    </div>
                                </a>
                            </div>
                            <div class="news__card" data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/%e3%82%a8%e3%83%b3%e3%82%b8%e3%83%8b%e3%82%a2%e5%8b%9f%e9%9b%86%e3%81%97%e3%81%a6%e3%81%84%e3%81%be%e3%81%99%e3%80%82/">
                                    <figure>
                                        <img width="150" height="94" src="https://www.nextstep-tec.com/sys/wp-content/uploads/2023/01/nextstep-150x94.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://www.nextstep-tec.com/sys/wp-content/uploads/2023/01/nextstep-150x94.jpg 150w, https://www.nextstep-tec.com/sys/wp-content/uploads/2023/01/nextstep-300x188.jpg 300w, https://www.nextstep-tec.com/sys/wp-content/uploads/2023/01/nextstep-768x480.jpg 768w, https://www.nextstep-tec.com/sys/wp-content/uploads/2023/01/nextstep.jpg 820w" sizes="(max-width: 150px) 100vw, 150px" />                            
                                    </figure>
                                    <div class="title">
                                        エンジニア募集しています。              
                                    </div>
                                    <div class="cont">
                                        弊社では随時エンジニアを募集しております。現在社員数は２名まで増えました。下記サイ…              
                                    </div>
                                </a>
                            </div>
                            <div class="news__card" data-aos="fade-up">
                                <a href="https://www.nextstep-tec.com/%e3%81%8a%e3%81%97%e3%82%89%e3%81%9b%e6%a9%9f%e8%83%bd%e8%bf%bd%e5%8a%a0/">
                                    <figure>
                                        <img src="https://www.nextstep-tec.com/sys/wp-content/themes/next-step/images/noimage.png" />
                                    </figure>
                                    <div class="title">
                                        おしらせ機能追加              
                                    </div>
                                    <div class="cont">
                                        これから弊社に関するお知らせやイベント、日記などをこちらに追加してまいります。
                                        …              
                                    </div>
                                </a>
                            </div>
                        </div>
                        <span class="viewmore-btn" data-aos="fade-up">
                        <a href="https://www.nextstep-tec.com/archive">more</a>
                        </span>
                    </div>
                </div>
                <div class="common-contact">
                    <div class="common-contact-wrapper">
                        <div class="common-title" data-aos="">
                            <h2>Contact</h2>
                        </div>
                        <p data-aos="">NextStep TECHNOLOGIES株式会社への<br class="tab-block">お問い合わせはこちらから</p>
                        <span class="viewmore-btn" data-aos="">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScdtNRiJd2kM1AKmFp-QuGjPEoA-sVfZYWYwif4hCoWHC6swg/viewform?pli=1&pli=1" target="_blank">more</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>