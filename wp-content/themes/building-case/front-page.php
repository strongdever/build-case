<?php

	/*
	Template Name: Front Page Template
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

    <main id="front-page">
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
                    <a href="#incentive"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview02.webp"></a>
                </span>
                <div class="top-img-catch">
                    <h1 class="">
                        <p class="subtitle">建物事例データを募集します。</p>
                        <p class="maintitle"><span>高額</span>の<a href="#incentive"><span>インセンティブ</span></a>を取得しませんか？</p>
                    </h1>
                </div>
                <!-- <p class="move-text">建物事例データを募集中！&nbsp;&nbsp;&nbsp;あなたの建物の写真や図面を共有していただければ、素晴らしいインセンティブが待っています！当選された方には、なんと5000～10000万円相当のAmazonギフト券をプレゼントいたします。
                    <span class="sphidden"></span></p> -->
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
                            私たちは、建物の見積もりや写真、図面など、<br>
                            建物に関する詳細な情報を提供していただける方々を募集しています。<br><br>
                            建築に関わる皆様へのご協力をお願いします。<br>
                            家を建てる主婦も、建設を専門とする方も、<br>私たちと一緒に民間建設業界に貢献しましょう！<br>
                            退屈せずに、建設のプロセスを楽しめるサイトをご用意しました。<br><br>
                            あなたの建物が他の方々のインスピレーションの源となり、<br>
                            建築界に新たなアイデアと情報を提供できるかもしれません。<br>
                            あなたの建物の写真や図面を共有していただければ、<br>
                            素晴らしい<a href="#incentive" class="href-incentive">インセンティブ</a>が待っています！<br>
                            当選された方には、なんと5000～10000万円相当の<br>Amazonギフト券をプレゼントいたします。<br>
                            ぜひお気軽にご<a href="#applying" class="href-apply">応募</a>ください。<br>
                            </p>
                        </div>
                        <span class="viewmore-btn" data-aos="fade-out">
                            <p>詳細はこちら</p>
                        </span>
                    </div>
                </div>
                <div class="common-service incentive" id="incentive">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>インセンティブ</h2>
                            <span>Incentive</span>
                        </div>
                        <ul>
                            <li data-aos="fade-up">
                                <div class="item-wrapper">
                                    <figure class="luxy-el" data-speed-y="-3" data-offset="150"><a href="<?php echo HOME . 'incentive'; ?>"><img src="<?php echo T_DIRE_URI; ?>/assets/img/incentive01.webp" alt="" class="ofi-img"></a></figure>
                                    <div class="contents">
                                        <p>
                                            当会では見積や写真、図面を過不足なく提出いただけるとAmazon商品券5000円~1万程度の謝礼を進呈しています
                                            <br>
                                            建築または購入された実際の建物の情報を提供していただける方に、以下のインセンティブをご用意しています。
                                        </p>
                                        <h4>1. インセンティブA（報酬：10,000円相当のAmazonギフト券）</h4>
                                        <p>
                                            実際の建物の見積もり、写真、および図面を過不足なく提出していただいた場合に、10,000円相当のAmazonギフト券を進呈いたします。
                                        </p>
                                        <h4>2. インセンティブB（報酬：5,000円相当のAmazonギフト券）</h4>
                                        <p>
                                            実際の建物の一部の情報（見積もり、写真、図面など）を提出していただいた場合には、5,000円相当のAmazonギフト券を進呈いたします。
                                        </p>
                                        <a class="btn" href="<?php echo HOME . 'incentive'; ?>">
                                            <span class="viewmore-btn">
                                                <p>詳細はこちら</p>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="img_position" data-aos="fade-up">
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
                            </li> -->
                        </ul>
                    </div>
                    <img class="background" src="<?php echo T_DIRE_URI; ?>/assets/img/incentive-bg.webp">
                </div>
                <div class="common-service flow">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>建物事例調査募集流れ</h2>
                            <span>Flow</span>
                        </div>
                        <ul>
                            <li data-aos="fade-up">
                                <div class="item-wrapper">
                                    <div class="contents">
                                        <p class="desc-16-normal step-head-text">当社の建物事例調査応募サイトでは、以下の流れで業務が進行します。</p>
                                        <ul class="flow-steps">
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">01</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        調査協力に<a href="#applying" class="href-apply">応募</a>していただく
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">02</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        【物調】応募内容の確認と当選者への連絡
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">03</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        提出物のアップロード
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">04</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        【物調】提出物の確認と<a href="#incentive" class="href-incentive">インセンティブ</a>提供
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">05</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        追加の提出物のアップロード
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">06</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        4と5を繰り返し、調査を完了させる
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="each-step">
                                                <div class="step-wrapper">
                                                    <div class="step-number">
                                                        <div class="label">STEP</div>
                                                        <div class="num">07</div>
                                                    </div>
                                                    <div class="step-content">
                                                        <h3 class="step-title">
                                                        【物調】調査完了とインセンティブの送付
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/flow01.webp">
                                </div>
                            </li>
                        </ul>
                        <a href="<?php echo HOME . 'flow'; ?>">
                            <span class="viewmore-btn">
                                <p>詳細はこちら</p>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="objects" id="objects">
                    <div class="objects-wrapper">
                        <div class="common-title" data-aos="fade-up">
                            <h2 data-aos="fade-up">調査対象建物</h2>
                            <span>Objects</span>
                        </div>
                        <div class="objects__card-wrapper" id="js-slider-1">
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house001.webp" />
                                    </figure>
                                    <div class="title">
                                    戸建住宅              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house002.webp" />
                                    </figure>
                                    <div class="title">
                                    アパート              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house003.webp" />
                                    </figure>
                                    <div class="title">
                                    マンション              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house004.webp" />
                                    </figure>
                                    <div class="title">
                                    店舗              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house005.webp" />
                                    </figure>
                                    <div class="title">
                                    事務所              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house006.webp" />
                                    </figure>
                                    <div class="title">
                                    倉庫              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house007.webp" />
                                    </figure>
                                    <div class="title">
                                    工場              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house008.webp" />
                                    </figure>
                                    <div class="title">
                                    学校              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house009.webp" />
                                    </figure>
                                    <div class="title">
                                    病院              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house010.webp" />
                                    </figure>
                                    <div class="title">
                                    福祉施設              
                                    </div>
                                </a>
                            </div>
                            <div class="objects__card" data-aos="fade-up">
                                <a>
                                    <figure>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/house011.webp" />
                                    </figure>
                                    <div class="title">
                                    宿泊施設              
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="content-wrapper content1100">
                            <div class="validate-object" data-aos="fade-up">
                                <h4 class="desc-20-bold">- 調査対象の建物</h4>
                                <ul class="objects-list desc-16-normal">
                                    <li class="object-item">
                                    ・建物まるまる1棟（区分所有は対象外）
                                    </li>
                                    <li class="object-item">
                                    ・対象用途<br>
                                    <b>戸建住宅、アパート、マンション、店舗、事務所、倉庫、工場、学校、病院、福祉施設、宿泊施設、他</b>
                                    </li>
                                    <li class="object-item">
                                    ・2020年以降に着工・契約した建物
                                    </li>
                                    <li class="object-item">
                                    ・当会が実施した過去の事例調査に参加していない物件であること。
                                    </li>
                                </ul>
                            </div>
                            <div class="unvalidate-object" data-aos="fade-up">
                                <h4 class="desc-20-bold">- 以下は本調査の対象外となります。</h4>
                                <ul class="objects-list desc-16-normal">
                                    <li class="object-item">
                                    ・【1住戸】マンション（マンション1棟は対象）
                                    </li>
                                    <li class="object-item">
                                    ・中古住宅（売買金額ではなく、建設費を調査している）
                                    </li>
                                    <li class="object-item">
                                    ・土地の金額と分離できないもの（建売住宅）
                                    </li>
                                    <li class="object-item">
                                    ・増改築、リフォーム工事
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-service submissions">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>提出物について</h2>
                            <span>Submissions</span>
                        </div>
                        <div class="content-wrapper">
                            <div class="left-wrapper" data-aos="fade-up">
                                <p class="desc-16-normal">- 書類はPDFデータまたは、JPEG（写真）での提供をお願いします。</p>
                                <div class="desc-16-normal caution">
                                    <div class="label desc-16-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.2 17.6334L14.0016 3.39563C13.7967 3.04681 13.5042 2.75758 13.1532 2.55662C12.8021 2.35566 12.4046 2.24994 12 2.24994C11.5955 2.24994 11.198 2.35566 10.8469 2.55662C10.4958 2.75758 10.2033 3.04681 9.99847 3.39563L1.80003 17.6334C1.60291 17.9708 1.49902 18.3546 1.49902 18.7453C1.49902 19.1361 1.60291 19.5198 1.80003 19.8572C2.00228 20.2081 2.29425 20.4989 2.64599 20.6997C2.99773 20.9006 3.39658 21.0042 3.80159 21H20.1985C20.6032 21.0039 21.0016 20.9001 21.353 20.6993C21.7044 20.4985 21.9961 20.2078 22.1982 19.8572C22.3956 19.52 22.4998 19.1363 22.5001 18.7456C22.5004 18.3548 22.3969 17.971 22.2 17.6334ZM20.8997 19.1063C20.8282 19.2282 20.7256 19.3289 20.6024 19.3981C20.4792 19.4673 20.3398 19.5024 20.1985 19.5H3.80159C3.66029 19.5024 3.52088 19.4673 3.39765 19.3981C3.27442 19.3289 3.17181 19.2282 3.10034 19.1063C3.0356 18.9966 3.00145 18.8717 3.00145 18.7444C3.00145 18.6171 3.0356 18.4921 3.10034 18.3825L11.2988 4.14469C11.3717 4.02335 11.4748 3.92295 11.598 3.85324C11.7212 3.78354 11.8603 3.7469 12.0019 3.7469C12.1435 3.7469 12.2826 3.78354 12.4058 3.85324C12.529 3.92295 12.6321 4.02335 12.705 4.14469L20.9035 18.3825C20.9676 18.4924 21.0011 18.6176 21.0005 18.7449C20.9998 18.8722 20.965 18.997 20.8997 19.1063ZM11.25 13.5V9.75C11.25 9.55109 11.329 9.36032 11.4697 9.21967C11.6104 9.07902 11.8011 9 12 9C12.1989 9 12.3897 9.07902 12.5304 9.21967C12.671 9.36032 12.75 9.55109 12.75 9.75V13.5C12.75 13.6989 12.671 13.8897 12.5304 14.0303C12.3897 14.171 12.1989 14.25 12 14.25C11.8011 14.25 11.6104 14.171 11.4697 14.0303C11.329 13.8897 11.25 13.6989 11.25 13.5ZM13.125 16.875C13.125 17.0975 13.059 17.315 12.9354 17.5C12.8118 17.685 12.6361 17.8292 12.4305 17.9144C12.225 17.9995 11.9988 18.0218 11.7806 17.9784C11.5623 17.935 11.3619 17.8278 11.2045 17.6705C11.0472 17.5132 10.9401 17.3127 10.8966 17.0945C10.8532 16.8762 10.8755 16.65 10.9607 16.4445C11.0458 16.2389 11.19 16.0632 11.375 15.9396C11.56 15.816 11.7775 15.75 12 15.75C12.2984 15.75 12.5845 15.8685 12.7955 16.0795C13.0065 16.2905 13.125 16.5766 13.125 16.875Z" fill="#333333"/>
                                        </svg>
                                        写真の注意
                                    </div>
                                ・ピントが合い、全面の文字が明確に読める画質であること。<br>
                                ・折り目等に文字が隠れていない事。(伸ばして撮影して下さい)<br>
                                ・全体を撮影して下さい。<br>
                                    <span>
                                    ・ページ番号等がある場合、そこも含め写真を撮影して下さい。<br>
                                    ・見切れた部分が無い事。
                                    </span>
                                </div>
                                <p class="desc-16-normal">- 見積などの個人情報は利用しませんが、気になる場合は墨消しいただいて構いません。<br>
                                &nbsp;&nbsp;※(写真に住所や表札がある場合、こちらで綺麗にボカシ処理をしますので墨消しをしないでください)
                                </p>
                                <p class="desc-16-normal">- 不要なもの<br>
                                ローン計画書、土地測量図面、契約書、契約者氏名
                                </p>
                            </div>
                            <div class="right-wrapper" data-aos="fade-up">
                                <h4 class="desc-20-bold">
                                書類共通事項
                                </h4>
                                <ul class="items-list desc-16-normal">
                                    <li class="item">
                                        <a class="nav-exterior-photo" href="<?php echo HOME; ?>submissions#exterior-photo">建物外観写真</a>
                                    </li>
                                    <li class="item">
                                        <a class="nav-drawings" href="<?php echo HOME; ?>submissions#drawings">図面</a>
                                    </li>
                                    <li class="item">
                                        <a class="nav-estimates" href="<?php echo HOME; ?>submissions#estimates">見積書（建物の見積書）</a>
                                    </li>
                                    <li class="item">
                                        <a class="nav-specifications" href="<?php echo HOME; ?>submissions#specifications">仕様書</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="<?php echo HOME . 'flow'; ?>" data-aos="fade-up">
                            <span class="viewmore-btn">
                                <p>詳細はこちら</p>
                            </span>
                        </a>
                    </div>
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