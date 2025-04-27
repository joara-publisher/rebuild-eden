<!DOCTYPE html>
<html lang="ko">
	<head>
		<!-- Google tag (gtag.js) --> 
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-KQMZR55RTZ"></script> 
		<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-KQMZR55RTZ'); </script>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NM53FFVV');</script>
		<!-- End Google Tag Manager -->
		<meta charset="UTF-8">
		<title>법무법인 이든</title>
		<meta name="title" content="법무법인 이든" />
		<meta name="keywords" content="" />
		<meta name="description" content="법무법인 이든 홈페이지입니다" />
		<meta property="og:title" content="법무법인 이든" />
		<meta property="og:description" content="법무법인 이든 홈페이지입니다" />
		<meta property="og:keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="/img/og_image_title.jpg" />
		<meta property="og:locale" content="ko_KR">

		<link rel="stylesheet" href="/style/swiper.min.css">
		<link rel="stylesheet" href="/style/aos.css">
		<link rel="stylesheet" href="/style/style.css">
		<link rel="stylesheet" href="/style/style_resp.css">
		<script type="text/javascript" src="/script/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/script/swiper.min.js"></script>
		<script type="text/javascript" src="/script/aos.js"></script>
		<script type="text/javascript" src="/script/main.js"></script>
		<script type="text/javascript" src="/script/swal.js"></script>
		<script src="https://t1.kakaocdn.net/kakao_js_sdk/v1/kakao.js"></script>

		<!--datepicker-->
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://developers.kakao.com/sdk/js/kakao.js"></script>

		<link rel="apple-touch-icon" href="/img/favi.png" />
		<link rel="shortcut icon" href="/img/favi.png" type="image/x-icon">
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NM53FFVV"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="wrap">
			<!-- pc메뉴 -->
			<header class="header_pc <?php echo ($menu!='' && !empty($menu))? 'current':'' ;?>"> <!-- 서브페이지에서는 class에 current 추가 -->
				<div class="header_line"></div>
				<div class="header_progress_bar"></div>
				<div class="header_active_line"></div>
				<div class="header_inner">
					<div class="logo">
						<a href="/" aria-label="이든 홈으로 이동"></a>
					</div>
					<ul class="menu">
						<li>
							<a href="/about" data-menu-num="1" class="<?php echo ($menu=='about')? 'current':'' ;?>">법무법인 이든</a><!-- 서브페이지에서는 class에 current 추가 -->
							<div class="sub_menu <?php echo ($menu=='about')? 'current':'' ;?>"><!-- 서브페이지에서는 class에 current 추가 -->
								<ul>
									<li><a href="/about#sec_intro" data-sub-menu-num="1">이든 소개</a></li>
									<li><a href="/about#sec_lawyer" data-sub-menu-num="2">이든 변호사</a></li>
									<li><a href="/about#sec_benefit" data-sub-menu-num="3">이든 혜택</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="/column" data-menu-num="2" class="<?php echo ($menu=='column')? 'current':'' ;?>">무엇이든</a>
							<div class="sub_menu <?php echo ($menu=='column')? 'current':'' ;?>">
								<ul>
									<li><a href="/column#faq" data-sub-menu-num="1">자주 묻는 질문</a></li>
									<li><a href="/column#column" data-sub-menu-num="2">이든 칼럼</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="/cases" data-menu-num="3" class="<?php echo ($menu=='cases')? 'current':'' ;?>">성공사례</a>
							<div class="sub_menu <?php echo ($menu=='cases')? 'current':'' ;?>">
								<ul>
									<li><a href="/cases#detective" data-sub-menu-num="1">형사</a></li>
									<li><a href="/cases#lyrics" data-sub-menu-num="2">가사</a></li>
									<li><a href="/cases#etc" data-sub-menu-num="3">기타</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="/news" data-menu-num="4" class="<?php echo ($menu=='news')? 'current':'' ;?>">이든 NEWS</a>
							<div class="sub_menu <?php echo ($menu=='news')? 'current':'' ;?>">
								<ul>
									<li><a href="/news#press" data-sub-menu-num="1">언론속의 이든</a></li>
									<li><a href="/news#review" data-sub-menu-num="2">의뢰인 후기</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="/consult" data-menu-num="5" class="<?php echo ($menu=='consult')? 'current':'' ;?>">상담신청</a>
							<div class="sub_menu <?php echo ($menu=='consult')? 'current':'' ;?>">
								<ul>
									<li><a href="/consult#visit" data-sub-menu-num="1">방문상담</a></li>
									<li><a href="/consult#counselling" data-sub-menu-num="2">게시판 상담</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="btn_wrap">
						<a href="tel:1668-2089" class="quick_consult_btn click_to_call"><span class="click_to_call">1668-2089</span></a>
					</div>
				</div>
			</header>

			<!-- 모바일메뉴 -->
			<header class="clearfix header_mo">
				<div class="header_progress_bar"></div>
				<div class="header_inner">
					<div class="logo">
						<a href="/" aria-label="이든 홈으로 이동"></a>
					</div>
					<a href="tel:1668-2089" class="click_to_call quick_consult_btn"><span>1668-2089</span></a>
					<div class="desktop_menu">
						<input type="checkbox" name="mo_menu" id="mo_menu">
						<label for="mo_menu">
							<span></span>
							<span></span>
							<span></span>
						</label>
						<div class="dt_gnb">
							<div class="dt_gnb_inner">
								<div class="dt_gnb_tit <?php echo ($menu=='about')? 'current':'' ;?>"><a href="/about">법무법인 이든</a></div><!-- 서브페이지에서는 class에 current 추가 -->
								<ul class="sub_menu <?php echo ($menu=='about')? 'current':'' ;?>"><!-- 서브페이지에서는 class에 current 추가 -->
									<li><a href="/about#sec_intro" data-sub-menu-num="1">이든 소개</a></li>
									<li><a href="/about#sec_lawyer" data-sub-menu-num="2">이든 변호사</a></li>
									<li><a href="/about#sec_benefit" data-sub-menu-num="3">이든 혜택</a></li>
								</ul>
							</div>
							<div class="dt_gnb_inner">
								<div class="dt_gnb_tit <?php echo ($menu=='column')? 'current':'' ;?>"><a href="/column">무엇이든</a></div>
								<ul class="sub_menu <?php echo ($menu=='column')? 'current':'' ;?>">
									<li><a href="/column#faq">자주 묻는 질문</a></li>
									<li><a href="/column#column">이든 칼럼</a></li>
								</ul>
							</div>
							<div class="dt_gnb_inner">
								<div class="dt_gnb_tit <?php echo ($menu=='cases')? 'current':'' ;?>"><a href="/cases">성공사례</a></div>
								<ul class="sub_menu <?php echo ($menu=='cases')? 'current':'' ;?>">
									<li><a href="/cases#detective">형사</a></li>
									<li><a href="/cases#lyrics">가사</a></li>
									<li><a href="/cases#etc">기타</a></li>
								</ul>
							</div>
							<div class="dt_gnb_inner">
								<div class="dt_gnb_tit <?php echo ($menu=='news')? 'current':'' ;?>"><a href="/news">이든 NEWS</a></div>
								<ul class="sub_menu <?php echo ($menu=='news')? 'current':'' ;?>">
									<li><a href="/news#press">언론속의 이든</a></li>
									<li><a href="/news#review">의뢰인 후기</a></li>
								</ul>
							</div>
							<div class="dt_gnb_inner">
								<div class="dt_gnb_tit <?php echo ($menu=='consult')? 'current':'' ;?>"><a href="/consult">상담신청</a></div>
								<ul class="sub_menu <?php echo ($menu=='consult')? 'current':'' ;?>">
									<li><a href="/consult#visit">방문상담</a></li>
									<li><a href="/consult#counselling">게시판 상담</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- 하단 퀵메뉴 -->
			<div class="mobile_close_bg"></div>
			<div class="quick_menu pc_menu">
				<div class="inner">
					<form method="POST" action="">
						<input type="hidden" name="type" value="quick">
						<input type="hidden" name="sites" value="이든">
						<label>
							<input type="checkbox" name="inputCheck">
							<div class="txt active">개인정보 수집 및 이용목적 동의</div>
						</label>
						<article class="apply_box">
							<ul class="ipt_list">
							<li>
								<div class="item">
								<div class="label">분야</div>
								<select class="ipt" name="selectCategory">
									<option value="">선택</option>
									<option value="이혼">이혼</option>
									<option value="상간">상간</option>
									<option value="상속">상속</option>
									<option value="민사">민사</option>
									<option value="형사">형사</option>
									<option value="성범죄 피해자">성범죄 피해자</option>
									<option value="성범죄 피의자">성범죄 피의자</option>
									<option value="회생·파산">회생·파산</option>
								</select>
								</div>
							</li>
							<li>
								<div class="item">
								<div class="label">이름</div>
								<input type="text" class="ipt" name="name" placeholder="이름입력">
								</div>
							</li>
							<li>
								<div class="item">
								<div class="label">휴대폰 번호</div>
								<input type="text" class="ipt" name="phone" placeholder="휴대폰번호 입력">
								</div>
							</li>
							<li class="btn_li">
								<button type="button" class="submit_btn ga_request_bot">상담신청하기<img src="/img/quick_btn_arrow.svg" alt="화살표" class="icon ga_request_bot"></button>
							</li>
							</ul>
						</article>
					</form>
				</div>
			</div>

			<div class="quick_menu mo_menu">
				<div class="inner">
					<button type="button" class="apply_show_btn">
						<div class="txt">빠른상담 신청하기 <img src="/img/quick_btn_arrow.svg" alt="화살표" class="icon"></div>
					</button>
					<div class="quick_apply">
						<div class="btn_box">
							<button type="button" class="close_btn"><img src="/img/quick_close_btn.png" alt="닫기" class="icon"></button>
						</div>
						<form method="POST" action="">
							<input type="hidden" name="type" value="quick">
							<input type="hidden" name="sites" value="이든">
							<ul class="form_list">
								<li>
									<div class="item">
										<div class="label">분야</div>
										<select class="ipt" name="selectCategory" id="Mo_Category">
											<option value="">선택</option>
											<option value="이혼">이혼</option>
											<option value="상간">상간</option>
											<option value="상속">상속</option>
											<option value="민사">민사</option>
											<option value="형사">형사</option>
											<option value="성범죄 피해자">성범죄 피해자</option>
											<option value="성범죄 피의자">성범죄 피의자</option>
											<option value="회생·파산">회생·파산</option>
										</select>
									</div>
									</li>
									<li>
									<div class="item">
										<div class="label">이름</div>
										<input type="text" placeholder="이름입력" name="name" class="ipt" id="Mo_Name">
									</div>
									</li>
									<li class="full">
									<div class="item">
										<div class="label">휴대폰 번호</div>
										<input type="text" placeholder="휴대폰번호 입력" name="phone" class="ipt" id="Mo_Tel">
									</div>
								</li>
							</ul>
							<label class="checkbox_label">
								<input type="checkbox" name="inputCheck" id="Mo_Chk">
								<div class="txt">개인정보 수집 및 이용목적 동의</div>
							</label>
							<div class="btn_li">
								<button type="button" class="submit_btn ga_request_bot">상담신청하기</button>
							</div>
						</form>
					</div>
				</div>
			</div>