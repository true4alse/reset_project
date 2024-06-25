<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');
?>

<div class="wrap">
        <main>
            <!-- 메인배너 -->
            <div class="main_station swiper">
                <ul class="swiper-wrapper train">
                    <li class="swiper-slide train_item slide1">
                        <div class="img_box" >
                            <img src="./img/main_bg.png" class="bn_pc" alt="메인배너1">
                            <img src="./img/main_bgm.png" class="bn_m" alt="메인배너1">
                        </div>
                        <div class="slide1_txt ">
                            <div class="content">
                                <div class="slide1_tit">
                                    <div data-aos="fade-down" >당신의 몸을</div>
                                    <div data-aos="fade-down" data-aos-delay="200"><i>리셋</i>합니다.</div>
                                </div>
                                <p data-aos="fade-down" data-aos-delay="400">RESET DERMATOLOGY CLINIC</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
            <!-- s1-->
            <section class="s1 page">
                <div class="content innertop  innerbot">
                    <h3>
                        <span>PROFESSIONAL CLINIC</span>
                        <i>
                            오직 리셋에서만! <br>
                            <em class="pink_line"><b>맞춤 다이어트 클리닉</b></em>
                        </i>
                    </h3>
                    <ul class="s1_ul">
                        <li data-aos="fade-up">
                            <a href="menu2_7.php">
                                <img src="./img/s1_1.png" alt="웨딩플래너">
                                <div class="li_wrap">
                                    <div class="s1_tit">웨딩플래너</div>
                                    <p>리셋<br>웨딩플랜</p>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a href="menu2_4.php">
                                <img src="./img/s1_2.png" alt="3D DIET">
                                <div class="li_wrap">
                                    <div class="s1_tit">3D DIET</div>
                                    <p>맞춤<br>프로그램</p>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <a href="menu7.php">
                                <img src="./img/s1_3.png" alt="토탈피로케어">
                                <div class="li_wrap">
                                    <div class="s1_tit">토탈피로케어</div>
                                    <p>만성피로<br>리셋</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- s2 -->
            <section class="s2 page">
                <div class="s2_left">
                    <div class="s2_inner">
                        <a href="menu1_2.php">
                            <span>reset your skin</span>
                            <p>맞춤관리 시작</p>
                        </a>
                    </div>
                </div>
                <div class="s3_right">
                    <div class="s2_inner">
                        <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">
                            <span>reset your skin</span>
                            <p>RESET <br>STORY</p>
                        </a>
                    </div>
                </div>
            </section>
            <!-- s3 -->
            <section class="s3 page">
                <div class="content ">
                    <div class="s3wrap">
                        <div class="innertop innerbot">
                            <h3>
                                <span>RESET CLINIC</span>
                                <i>
                                    리셋 다이어트는, <br>
                                    <em class="pink_line"><b>현재 진행 중</b></em>
                                </i>
                            </h3>
                            <div class="p_point">
                                <p>리셋 다이어트 리얼 후기</p>
                            </div>
                            <ul>
                                <li data-aos="fade-up" >
                                    <img src="./img/s3_1.png" alt="100일간의 도전">
                                    <div class="li_name">100일간의 도전</div>
                                    <i>리셋만의 다이어트 프로그램 시작!</i>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <img src="./img/s3_2.png" alt="1개월 -7kg 기념샷">
                                    <div class="li_name">1개월 -7kg 기념샷</div>
                                    <i>고주파 / 저주파로 체지방 관리!</i>
                                </li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                        </div>
                    </div> 
                </div>
            </section>
            <!-- s4 -->
            <section class="s4 page" >
                <div class="cover">
                    <div class="content innertop  innerbot">
                        <div class="s4_tit" data-aos="fade-up">RESET CLINIC</div>
                        <p data-aos="fade-up">자연스러운 아름다움을 추구하는 리셋만의 차별화된 노하우로 <br>
                            당신의 아름다움, 리셋의원에서 제공해드리겠습니다.</p>
                    </div>
                </div>
            </section>
            <!-- s5 -->
            <section class="s5 page" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            리셋이기에 가능한 <br>
                            <em class="pink_line"><b>Before & After</b></em>
                        </i>
                    </h3>
                    <ul class="s5_ul">
                        <li>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">
                                <img src="./img/s5_1.png" alt="복부 허벅지 4부위 8회 + 8회 추가">
                                <p>복부 허벅지 4부위 8회 + 8회 추가</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">
                                <img src="./img/s5_2.png" alt="SPL 6부위 12회">
                                <p>SPL 6부위 12회</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">
                                <img src="./img/s5_3.png" alt="복부 SPL 12회">
                                <p>복부 SPL 12회</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">
                                <img src="./img/s5_4.png" alt="SPL 리셋">
                                <p>SPL 리셋</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- s6 -->
            <section class="s6 page" >
                <div class="content innertop  innerbot">
                    <div class="s6_wrap">
                        <div class="s6_box1">
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=event">
                                <div class="tit">리셋 EVENT</div>
                                <p>리셋 이벤트를 <br>
                                    확인해보세요!</p>
                            </a>
                        </div>
                        <div class="s6_box2">
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">
                                <div>
                                    <div class="tit">RESET DRAMA</div>
                                    <p>비교 불가, 오직 리셋에서만</p>
                                </div>
                                <ul>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> SPL</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 스킨 부스터</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 트리플바디</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 프리미엄 리프팅</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 토르고주파</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 모공/색소 프로그램</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 오토힐링</li>
                                    <li><img src="./img/apple-icon-114x114.png" alt="로고"> 보톡스/필러</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- s7 -->
            <section class="s7 page" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            1:1 맞춤 다이어트 프로그램 <br>
                            <em class="pink_line"><b>RESET SOLUTION</b></em>
                        </i>
                    </h3>
                    <div class="s7_wrap">
                        <!-- 슬라이더 -->
                        <div class="s7_slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./img/s7_1.png" alt="체형 파악"></div>
                                <div class="swiper-slide"><img src="./img/s7_2.png" alt="기능 의학검사"></div>
                                <div class="swiper-slide"><img src="./img/s7_3.png" alt="원인 분석"></div>
                                <div class="swiper-slide"><img src="./img/s7_4.png" alt="맞춤 솔루션"></div>
                                <div class="swiper-slide"><img src="./img/s7_5.png" alt="유지관리"></div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <i>체계적인 유지관리</i>
                                <em>SUPER 상체 슬림 패키지</em>
                            </li>
                            <li>
                                <i>비만 원인 파악</i>
                                <em>FAST 하체 슬림 패키지</em>
                            </li>
                            <li>
                                <i>개개인에 맞춘 솔루션 수립</i>
                                <em>TOTAL 전신 패키지</em>
                            </li>
                        </ul>
                    </div>
                    <ul class="step_ul ">
                        <li class="on"><i>STEP 1</i><b>체형 파악</b></li>
                        <li><i>STEP 2</i><b>기능 의학검사</b></li>
                        <li><i>STEP 3</i><b>원인 분석</b></li>
                        <li><i>STEP 4</i><b>맞춤 솔루션</b></li>
                        <li><i>STEP 5</i><b>유지관리</b></li>
                    </ul>
                </div>
            </section>
            <!-- s8 -->
            <section class="s8 page" >
                <div class="content innertop  innerbot">

                
                    <div class="s8_wrap">
                        <div class="counsel_wrap">
                        <?php
                            // latest(스킨, 게시판아이디, 출력라인, 글자수);
                            echo latest('basic', 'online_consulting', 4, 25);
                        ?>
                            <!-- <h5>온라인 상담</h5>
                            <ul class="counsel_list">
                                <li><a href="menu11_1.php">제모 비용</a><span class="date">24-04-30</span></li>
                                <li><a href="menu11_1.php">SPL가격문의</a><span class="date">24-04-20</span></li>
                                <li><a href="menu11_1.php">제모 가격문의</a><span class="date">24-04-18</span></li>
                                <li><a href="menu11_1.php">다이어트 관련</a><span class="date">24-04-16</span></li>
                            </ul>
                            <a href="menu11_1.php" class="btn_more">more</a> -->
                        </div>
                        <div class="broad_wrap">
                        
                            <h5>보도자료</h5>
                            <div class="broad_content">
                                <span class="img"><img src="./img/broad2.png" alt="보도자료"></span>
                                <div class="txt_wrap">
                                    <p class="tit">'[칼럼] 실패하기 쉬운 다이어트, 개인별로 복합적인 맞춤관리 이뤄어줘야'</p>
                                </div>
                            </div>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=gallery" class="btn_more">more</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- s9 -->
            <section class="s9 page" >
                <div class="content innertop  innerbot">
                    <p>RESET CLINIC</p>
                    <div class="s4_tit" data-aos="fade-up">
                        첫 방문<i>부터</i><br class="s9_br"> 마지막 순간<i>까지,</i> <br><em>리셋의원</em>
                    </div>
                </div>
            </section>
            <!-- s10 -->
            <section class="s10 page" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em class="pink_line"><b>Reset Selfie</b></em>
                        </i>
                    </h3>
                    <a href="menu9_2.php">
                        <img src="./img/selfie.png" alt="Reset Selfie">
                    </a>
                </div>
            </section>
            <!-- /둘러보기 -->
            <section class="tour page" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em class="pink_line"><b>리셋 둘러보기</b></em>
                        </i>
                    </h3>
                    <div class="gallery-slider" >
                        <div class="gallery-single">
                            <div><img src="./img/tour/gall_01.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_02.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_03.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_04.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_05.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_06.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_07.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_08.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_09.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_10.jpg" alt="갤러리 이미지"></div>
                        </div>
                        <div class="gallery-nav">
                            <div><img src="./img/tour/gall_01.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_02.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_03.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_04.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_05.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_06.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_07.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_08.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_09.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_10.jpg" alt="갤러리 이미지"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>
        $(function(){

        // 비주얼 배너 슬라이더
        $('.main-slider').slick({
            fade: true,
            speed: 1000,
            lazyLoad: 'progressive',
            touchRatio: 1,
            autoplay: true,
            autoplaySpeed: 3000, // 변경된 부분
            focusOnSelect: true,
            pauseOnHover: false,
            vertical: false,
            draggable: true,
            dots: true, // 추가된 부분
            infinite: true,
            touchThreshold: 100,
            appendArrows: $('.arrow-con > .arrows'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: false,
                    },
                }
            ]
        });

		
        $('.main-slider').on('touchcancel touchmove', function(){
            $('.main-slider').slick('slickPlay');
        });
        
        

        // 둘러보기
        $('.gallery-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.gallery-nav',
            autoplay: true,
            autoplaySpeed: 2000,
            draggable: true,
        });

        $('.gallery-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.gallery-single',
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }

                }
            ],
            
        });

    })
        
        
    </script>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');