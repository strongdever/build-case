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
                <span class="obj9 obj luxy-el" data-speed-y="-60" data-offset="0" data-horizontal='1' data-speed-x="20"><img src="<?php echo T_DIRE_URI; ?>/assets/img/mainview02.webp"></span>
                <div class="top-img-catch">
                    <h1 class="">
                        <img class="subtitle" src="<?php echo T_DIRE_URI; ?>/assets/img/main-text.png" alt="建物事例データを募集します。"></img>
                    </h1>
                </div>
                <!-- <p class="move-text">建物事例データを募集中！あなたの建物の写真や図面を共有していただければ、素晴らしいインセンティブが待っています！当選された方には、なんと5000～10000万円相当のAmazonギフト券をプレゼントいたします。
                    <span class="sphidden"></span></p> -->
            </div>
            <div class="page-content">
                <div class="common-service flow aboutus" id="aboutus">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>建物事例調査募集について</h2>
                            <span>About Us</span>
                        </div>
                        <p class="desc-18-normal" data-aos="fade-up">
                            建設物価調査会は、公共に寄与することを目的として、建物資料集の基礎資料収集を行っています。<br>
                            ご提供いただいた資料は、建物の統計データおよび「事例データ」を作成するための基礎資料として利用させていただきます。
                        </p>
                        <p class="desc-18-normal header-text" data-aos="fade-up">
                            一般の方で、自身が家を建てた経験がある方、建物を建てるお仕事をされている方（設計者、工務店、ゼネコンなど）<br>
                            ぜひお気軽にご<a href="#applying" class="href-apply nav-applying">応募</a>ください。<br>
                            当選されたデータ提供者の方には、なんと5000～10000円相当のAmazonギフト券をプレゼントさせていただきます。
                        </p>
                        <div class="content-wrapper">
                            <div class="contents left-wrapper" data-aos="fade-up">
                                <div class="usage-part">
                                    <a href="<?php echo HOME . 'aboutus/#usage'; ?>" class="nav-usage"><p class="top-subtitle title-26-bold">データの利用用途</p></a>
                                    <p class="desc-16-normal">
                                        ・提供資料を基に、実際に建築された建物の外観、図面（間取り）、価格等の情報を整理した基礎資料として各種統計データ、また掲載例のような事例データ、建物調査分析の基礎資料として活用いたします。<br>
                                        ・ご提出資料をそのまま公開することはございません。<br>
                                        （見積、仕様書のカタチでの公開は致しません。写真に関しては必要なぼかし処理、トリミング等を行ったうえで公開する場合がございます）
                                    </p>
                                </div>
                                <div class="privacy-part">
                                    <a href="<?php echo HOME . 'aboutus/#privacy'; ?>"  class="nav-privacy"><p class="top-subtitle title-26-bold">個人情報の扱い</p></a>
                                    <p class="desc-16-normal">
                                        ・個人情報は本調査のインセンティブ付与及び、資料に対する質問・確認等の為だけに利用いたします。<br>
                                        ・ご提供いただいた個人情報は、当調査を実施運営する目的にのみ使用し、ご本人の事前の同意を得ることなく、他の目的のために利用することはありません。<br>
                                        （個人情報を営業的行為等で、使用することは一切ございません。）<br>
                                        ・見積書等の書類上の個人情報は墨塗等して消した状態で送付いただいてかまいません。
                                    </p>
                                </div>
                                <div class="picture-part">
                                    <a href="<?php echo HOME . 'aboutus/#picture'; ?>"  class="nav-picture"><p class="top-subtitle title-26-bold">写真の扱い</p></a>
                                    <p class="desc-16-normal">
                                        ・写真は、パース（掲載例の建物の絵）を作成する際の基礎資料に利用いたします。<br>
                                        ・一部の写真は、“建物資料集”実際の例として利用いたします。
                                    </p>
                                </div>
                                <div class="others-part">
                                    <a href="<?php echo HOME . 'aboutus/#others'; ?>"  class="nav-others"><p class="top-subtitle title-26-bold">その他</p></a>
                                    <p class="desc-16-normal">
                                        ・ご提供いただいた資料は、返却いたしません。<br>
                                        ・ご提供いただける情報（写真含む）は、権利の全てが情報提供者様に帰属しているもの、または、当該権利者(建物所有者等)様より、事前許諾・承認を受けたうえで、提供されるものとします。<br>
                                        ・提供された情報及び写真は提供時点でその使用権は当会が有し、分析用のデータ、事例データ、事例データの広告等として利用できるものとします。<br>
                                        ・本調査にご参加され、資料をご提供された場合、当会に本資料の利用を許可（利用許諾）したものとします。
                                    </p>
                                </div>
                            </div>
                            <div class=" flow-wrapper right-wrapper" data-aos="fade-up" id="flow">
                                <a href="<?php echo HOME . 'flow'; ?>"><p class="top-subtitle title-26-bold">募集の流れ</p></a>
                                <p class="desc-16-normal">
                                調査内容の説明をよく読み、「事例調査への参加」より必要事項を記入し、応募してください。<br>
                                容を確認の上、調査へご協力をお願いする方には、やり取りできるメールアドレスの確認も踏まえ、ご記入いただきましたメールアドレスに対して、データアップロード用のURLをお送りいたします。
                                </p>
                                <p class="desc-16-normal">
                                【事例調査】参加の可否は、ご記入いただきました内容より、必要とされている事例データであるか？等を加味して建設物価調査会にて判断させていただきます。
                                </p>
                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/flow01.webp">
                            </div>
                        </div>
                        <!-- <a href="<?php echo HOME . 'flow'; ?>">
                            <span class="viewmore-btn">
                                <p>詳細はこちら</p>
                            </span>
                        </a> -->
                    </div>
                </div>
                <!-- <div class="common-service flow" id="flow">
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
                                                        <span class="user">【応募者】</span>調査協力に<a href="#applying" class="href-apply nav-applying">応募</a>していただく
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
                                                        <span class="manager">【物調】</span>応募内容の確認と当選者への連絡
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
                                                        <span class="user">【応募者】</span>提出物のアップロード
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
                                                        <span class="manager">【物調】</span>提出物の確認、必要に応じて追加、修正提出依頼
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
                                                        <span class="user">【応募者】</span>追加の提出物のアップロード
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
                                                        STEP04とSTEP05を繰り返し、調査を完了させる。
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
                                                        <span class="manager">【物調】</span>調査完了と<a href="#incentive" class="href-incentive nav-incentive">インセンティブ</a>の送付
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
                </div> -->
                
                <div class="common-service submissions" id="submissions">
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
                        <span class="viewmore-btn">
                            <a href="<?php echo HOME . 'flow'; ?>">
                                <p>詳細はこちら</p>
                            </a>
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
                                        <h4>1. インセンティブA（10,000円相当の報酬）</h4>
                                        <p>
                                            -資料が全て提出されており、抜けが無い事。<br>
                                            <strong>
                                            &nbsp;&nbsp;見積書に科目毎（以下参照）の金額が明確に記載されているもの総額、基礎、躯体、内装、外装、設備、諸経費等がそれぞれ記載されており、<br>
                                            &nbsp;&nbsp;それぞれの金額が確認できる事。
                                            </strong>
                                        </p>

                                        <h4>2. インセンティブB（5,000円相当の報酬）</h4>
                                        <p>
                                            資料が全て提出されており、抜けが無い事。<br>
                                            <strong>
                                                見積に科目毎の価格が出ていない、確認できないもの。一括見積。<br>
                                                建物本体価格の内訳が（基礎、躯体、内装、外装、設備等）に分かれていない見積<br>
                                                （一部のハウスメーカ等にあるような平米単価＋オプションの見積含む）
                                            </strong>
                                        </p>

                                        <!-- <h4>3. 適用外（報酬なし）</h4>
                                        <p>
                                            資料がそろっていない場合。<br>
                                            資料に不備があり、再提出いただけない場合。<br>
                                            以前に、当会主催の同様の調査にて同じ建物情報が提供されている場合。
                                        </p> -->
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

                <!-- <div class="common-service objects" id="objects">
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
                </div> -->

                <div class="top-company-recruit" id="applying">
                    <div class="top-company-wrapper cr-common">
                        <div class="title-area">
                            <div class="common-title">
                                <h2>戸建住宅</h2>
                            </div>
                            <p class="desc-16-normal top-desc">住宅用の建物、2世帯（複数世帯）住宅、アパート・マンション併用、事務所併用、店舗併用等<br>
                            応募前に必ず以下の内容をご確認お願いします。
                            </p>
                            <ul class="confirm-list desc-16-normal">
                                <li class="confirm-item">
                                    <a href="#flow">募集の流れ</a>
                                </li>
                                <li class="confirm-item">
                                    <a href="#objects">調査対象建物</a>
                                    <div class="card-container">
                                        <div class="card">
                                            <p class="card__title">住宅用の建物</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house001.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">2世帯（複数世帯）住宅</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/2世帯（複数世帯）住宅.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">アパート・マンション併用</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/アパート・マンション併用.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">事務所併用</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/事務所併用.webp" />
                                        </div>
                                    </div>
                                </li>
                                <li class="confirm-item">
                                    <a href="#submissions">提出物について</a>
                                </li>
                            </ul>
                        </div>
                        <span class="viewmore-btn white">
                            <a class="single-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScdtNRiJd2kM1AKmFp-QuGjPEoA-sVfZYWYwif4hCoWHC6swg/viewform?pli=1&pli=1" target="_blank">事例調査への参加</a>
                        </span>
                        <div class="checkbox-wrapper desc-16-normal">
                            <div class="checkbox-item">
                                <input type="checkbox" id="single-check" name="single-check">
                                <label for="single-check"><span><a href="<?php echo HOME . 'rule-privacy'; ?>" target="_blank">資料の利用方法</a></span>と<span><a href="<?php echo HOME . 'regarding-point'; ?>" target="_blank">応募に際しての注意点</a></span>を読み、同意します。</label>
                                <div class="single-error error-msg">この項目は必須項目です。</div>
                            </div>
                        </div>
                    </div>
                    <div class="top-recruit-wrapper cr-common">
                        <div class="title-area">
                            <div class="common-title">
                                <h2>事業用建物</h2>
                            </div>
                            <p class="desc-16-normal top-desc">主として事業の要に供する建物。（一般住宅以外です）<br>
                            応募前に必ず以下の内容をご確認お願いします。
                            </p>
                            <ul class="confirm-list desc-16-normal">
                                <li class="confirm-item">
                                    <a href="#flow">募集の流れ</a>
                                </li>
                                <li class="confirm-item">
                                    <a href="#objects">調査対象建物</a>
                                    <div class="card-container">
                                        <div class="card">
                                            <p class="card__title">アパート</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house002.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">マンション</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house003.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">店舗</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house004.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">事務所</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house005.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">倉庫</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house006.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">工場</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house007.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">学校</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house008.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">病院</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house009.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">福祉施設</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house010.webp" />
                                        </div>
                                        <div class="card">
                                            <p class="card__title">宿泊施設</p>
                                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/house011.webp" />
                                        </div>
                                    </div>
                                </li>
                                <li class="confirm-item">
                                    <a href="#submissions">提出物について</a>
                                </li>
                            </ul>
                        </div>
                        <span class="viewmore-btn white">
                            <a class="business-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScdtNRiJd2kM1AKmFp-QuGjPEoA-sVfZYWYwif4hCoWHC6swg/viewform?pli=1&pli=1" target="_blank">事例調査への参加</a>
                        </span>
                        <div class="checkbox-wrapper desc-16-normal">
                            <div class="checkbox-item">
                                <input type="checkbox" id="business-check" name="business-check">
                                <label for="business-check"><span><a href="<?php echo HOME . 'rule-privacy'; ?>" target="_blank">資料の利用方法</a></span>と<span><a href="<?php echo HOME . 'regarding-point'; ?>" target="_blank">応募に際しての注意点</a></span>を読み、同意します。</label>
                                <div class="business-error error-msg">この項目は必須項目です。</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-service news">
                    <div class="common-service-wrapper content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>新着情報</h2>
                            <span>News</span>
                        </div>
                        <?php
                        $args = [
                            'post_type' => 'news',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                        ];
                        $custom_query = new WP_Query( $args );
                        if( $custom_query->have_posts() ) :
                        ?>
                        <div class="news-wrapper" data-aos="fade-up">
                            <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <div class="news-item">
                                <div class="item">
                                    <li>
                                        <span class="date"><?php the_time('Y.m.d'); ?></span>
                                    </li>
                                    <?php
                                    $post_cats = get_the_terms(get_the_ID(), 'news-category');
                                    if( $post_cats) :
                                        foreach($post_cats as $post_cat) :
                                    ?>
                                    <li>
                                        <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                                    </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <li>
                                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <a href="<?php echo HOME . 'news'; ?>" data-aos="fade-up">
                            <span class="viewmore-btn">
                                <p>記事一覧</p>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- <div class="common-service case">
                    <div class="content content1100">
                        <div class="common-title" data-aos="fade-up">
                            <h2>募集事例</h2>
                            <span>Case</span>
                        </div>
                        <ul class="case-list" data-aos="fade-up">
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case002.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                            <li class="case-item">
                                <figure>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.jpg" alt="">
                                </figure>
                                <div class="content-wrapper desc-16-normal">
                                    <span>延床3,582㎡</span><span>S造</span><br>
                                    <span>13階建</span><span>竣工2010年</span>
                                </div>
                            </li>
                        </ul>
                        <a href="<?php echo HOME . 'news'; ?>" data-aos="fade-up">
                            <span class="viewmore-btn">
                                <p>記事一覧</p>
                            </span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </main>

    <script type="text/javascript">
        !(function ($) {
            $(document).ready(function(e){
                $('.single-btn').click(function() {
                    if($('#single-check').is(":checked")) {
                        $('.single-error').hide();
                    } else {
                        event.preventDefault();
                        $('.single-error').show();
                        console.log('asdfasdfasdf');
                    }
                });
                $('#single-check').change(function() {
                    if($(this).is(":checked")) {
                        $('.single-error').hide();
                    } else {
                        event.preventDefault();
                        $('.single-error').show();
                    }
                });

                $('.business-btn').click(function() {
                    if($('#business-check').is(":checked")) {
                        $('.business-error').hide();
                    } else {
                        event.preventDefault();
                        $('.business-error').show();
                    }
                });
                $('#business-check').change(function() {
                    if($(this).is(":checked")) {
                        $('.business-error').hide();
                    } else {
                        event.preventDefault();
                        $('.business-error').show();
                    }
                });
            });
        })(jQuery);
    </script>

<?php get_footer(); ?>



//abouus page
// 弊社では、建築に関する事例データを募集しています。
// 建物の設計やデザインの参考としてではなく、主に建設計画の概算金額把握や既存建物の価値判断に活用されています。
// プロフェッショナルな方々（不動産鑑定士、設計・建設会社、リートなど）からのご応募お待ちしています。
// 一般の方でも興味を持たれた方は是非ご応募いただけます。
// デザインに関する情報よりも、主に金額の把握が重視されています。
// 事例データは類似の建物を探し、価値判断の基準とするために活用されています。

// 当選された方には、なんと5000～10000円相当の
// Amazonギフト券をプレゼントいたします。
// ぜひお気軽にご応募ください。