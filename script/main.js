$(window).on('load', function () { 
	let isMobile = /Mobi/i.test(window.navigator.userAgent);

	// header menu
	$(window).scroll(function() {
		let scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".header_pc").addClass("scroll");
		} else {
			$(".header_pc").removeClass("scroll");
		}
	});

	// header menu
	let curTarget;
	let changeLeft;
	$('.header_pc .menu li a').not('.sub_menu li a').hover(function(){
		changeLeft = Math.round($(this).offset().left) + ($(this).width()/2);

		// 마우스 올렸을 때
		if($('.header_pc').hasClass('current')) {
			curTarget = $('.menu a.current').data('menu-num');
			$('.sub_menu.current').removeClass('current');
		}

		$('.header_pc').addClass('hover');
		$('.header_pc .sub_menu').removeClass('active');
		$('.header_pc a').removeClass('active');
		$('.header_pc .header_active_line').addClass('active').css({'width': $(this).width(), 'left': changeLeft});
		$(this).parent().find('.sub_menu').addClass('active');
		$(this).addClass('active');
	}, function() {
		// 마우스 떠날 때
		$('.sub_menu.active').hover(function(){

		}, function() {	
			$('.header_pc').removeClass('hover');
			$('.header_pc .header_active_line').removeClass('active');
			$(this).find(".sub_menu").removeClass('active');
			$(this).removeClass('active');

			if($('.header_pc').hasClass('current')) {
				const target = $('.header_pc .menu li a.current');
				let changeLeft = Math.round(target.offset().left) + (target.width()/2);

				$('[data-menu-num='+ curTarget +']').parent().find('.sub_menu').addClass('current');
				$('.header_pc .header_active_line').addClass('active').css({'width': target.width(), 'left': changeLeft});
			}
		});
	});
	
	// sub page header
	if($('.header_pc').hasClass('current')) {
		const target = $('.header_pc .menu li a.current');
		let changeLeft = Math.round(target.offset().left) + (target.width()/2);

		$('.header_pc .header_active_line').addClass('active').css({'width': target.width(), 'left': changeLeft});
	}

	// mobile header and footer
	$(".header_mo .dt_gnb_tit").click(function() {
		$(this).next(".sub_menu").stop().slideToggle(300);
		$(this).toggleClass('on').siblings().removeClass('on');
		$(this).next(".sub_menu").siblings(".sub_menu").slideUp(300); // 1개씩 펼치기
	});
	
	if (isMobile) {
		$(".ft_row_02 .ft_tit").click(function() {
			$(this).next(".ft_submenu").stop().slideToggle(300);
			$(this).toggleClass('on').siblings().removeClass('on');
			$(this).next(".ft_submenu").siblings(".ft_submenu").slideUp(300); // 1개씩 펼치기
		});
	}

	/* 팝업창 */
	$(".privacy_btn").click(function () {
		$(".privacy_popup").addClass("show");
	});
	$(".disclaimer_btn").click(function () {
		$(".disclaimer_popup").addClass("show");
	});

	$(".privacy_popup").click(function () {
		$(".privacy_popup").removeClass("show");
	});
	$(".privacy_popup .popup_content_arti").click(function (e) {
		e.stopPropagation();
	});
	$(".privacy_popup .popup_close_btn").click(
		function () {
			$(".privacy_popup").removeClass("show");
		}
	);
	$(".disclaimer_popup").click(function () {
		$(".disclaimer_popup").removeClass("show");
	});
	$(".disclaimer_popup .popup_content_arti").click(function (e) {
		e.stopPropagation();
	});
	$(".disclaimer_popup .popup_close_btn").click(
		function () {
			$(".disclaimer_popup").removeClass("show");
		}
	);

	// 번호 입력창에 하이픈 추가
	const commonTelInput = () => {
		$(document).on("keyup", "input[type='tel'], input[name='phone'], input[name='inputPhone']",  function() {
			$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
		});
	};
	commonTelInput();

	// fix menu select
	$('.quick_menu [name=selectCategory]').on('change', function() {
		if($(this).val() != '' || $(this).val() == 'undefined') {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});
	$('.quick_menu [name=inputPhone]').on('change', function() {
		if($(this).val() != '' || $(this).val() == 'undefined') {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});

	// fix menu mobile btn
	$(".quick_menu.mo_menu .apply_show_btn").click(function () {
		$(".quick_menu.mo_menu .quick_apply").addClass("show");
		$(".mobile_close_bg").addClass("show");
		$(".quick_menu.mo_menu .apply_show_btn").addClass("hide");
	});
	$(".quick_menu.mo_menu .quick_apply .btn_box .close_btn").click(function () {
		$(".quick_menu.mo_menu .quick_apply").removeClass("show");
		$(".mobile_close_bg").removeClass("show");
		$(".quick_menu.mo_menu .apply_show_btn").removeClass("hide");
	});
	$(".quick_menu.mo_menu .apply_show_btn .close_btn").click(function (e) {
		e.stopPropagation();
		$(".mobile_close_bg").removeClass("show");
		$(".quick_menu.mo_menu .apply_show_btn").addClass("hide");
	});
	$(".mobile_close_bg").click(function () {
		$(".mobile_close_bg").removeClass("show");
		$(".quick_menu.mo_menu .quick_apply").removeClass("show");
		$(".quick_menu.mo_menu .apply_show_btn").removeClass("hide");
	});

	$(".quick_menu.mo_menu .quick_apply .form_list .ipt").on("input", function () {
			// 변경된 값에 대한 처리
			var totalCount = 0;
			if ($("#Mo_Chk").is(':checked') == true) {
				totalCount = totalCount + 1;
			}
			if ($("#Mo_Category").val() !== "") {
				totalCount = totalCount + 1;
			}
			if ($("#Mo_Name").val() !== "") {
				totalCount = totalCount + 1;
			}
			if ($("#Mo_Tel").val() !== "") {
				totalCount = totalCount + 1;
			} 
			if (totalCount === 4) {
				$(".quick_menu.mo_menu .quick_apply .btn_li").addClass("active");
			} else {
				$(".quick_menu.mo_menu .quick_apply .btn_li").removeClass("active");
			}
		}
	);

	$(".quick_menu.mo_menu .quick_apply #Mo_Chk").change(function(){
		// 변경된 값에 대한 처리
		var totalCount = 0;
		if ($("#Mo_Chk").is(':checked') == true) {
			totalCount = totalCount + 1;
		}
		if ($("#Mo_Category").val() !== "") {
			totalCount = totalCount + 1;
		}
		if ($("#Mo_Name").val() !== "") {
			totalCount = totalCount + 1;
		}
		if ($("#Mo_Tel").val() !== "") {
			totalCount = totalCount + 1;
		} 
		if (totalCount === 4) {
			$(".quick_menu.mo_menu .quick_apply .btn_li").addClass("active");
		} else {
			$(".quick_menu.mo_menu .quick_apply .btn_li").removeClass("active");
		}
	});

	// quick menu apply 
	$(".quick_menu .submit_btn").on("click", (event) => {
		footerConsultation(event);
	});

	const footerConsultation = (event) => {
		let category = $(event.target)
			.parents("form")
			.find("select[name='selectCategory']")
			.val();
		let name = $(event.target)
			.parents("form")
			.find("input[name='name']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let agree = $(event.target)
			.parents("form")
			.find("input[name='inputCheck']")
			.is(':checked');
		if (!category) {
			Swal.fire({
				icon: "warning",
				text: "분야를 선택하세요.",
				confirmButtonColor: "#20A682",
				confirmButtonText: "확인",
			});
		} else if (!name) {
			Swal.fire({
				icon: "warning",
				text: "이름을 입력하세요.",
				confirmButtonColor: "#20A682",
				confirmButtonText: "확인",
			});
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "전화번호를 입력하세요.",
				confirmButtonColor: "#20A682",
				confirmButtonText: "확인",
			});
		} else if (agree == false) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 및 이용목적 동의에 체크해주세요..",
				confirmButtonColor: "#20A682",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				category: category,
				name: name,
				phone: phone,
				agree: agree,
				type: 'quick',
				sites: '이든',
			};

			$.ajax({
				type: "POST",
				url: "",
				data: sendData,
				success: () => {
					Swal.fire({
						icon: "success",
						html: "상담 신청이 완료되었습니다.",
						confirmButtonColor: "#20A682",
						confirmButtonText: "확인",
					}).then(() => {
						location.reload();
					});
				},
				error: (response) => {
					Swal.fire({
						icon: "error",
						html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
						confirmButtonColor: "#20A682",
						confirmButtonText: "확인",
					});
	
					console.log(response);
				},
			});
		}
	};

	// up btn
	$('.fix_up_btn').click(function(){
		$('html').scrollTop('0');
	});

	// main & about consult btn
	// main consult button
	$('.click_to_consult').click(function(){
		$('#main_consult').submit();
	});

	var submit=0;
	$('#main_consult').submit(function(){
		if(submit==1){
			location.reload();
			return false;
		}
		var name = $('#name').val()
		var phone = $('#phone').val()
		var agree = $(this).find('[name="check"]').is(':checked')

		if(name==''){
			Swal.fire({
				icon: 'error',
				text: '이름을 입력해주세요.'
			});
			return false;
		}
		if(phone==''){
			Swal.fire({
				icon: 'error',
				text: '휴대전화번호를 입력해주세요.'
			});
			return false;
		}
		if(agree==false){
			Swal.fire({
				icon: 'error',
				text: '개인정보 수집 및 이용목적 동의에 체크해주세요.'
			});
			return false;
		}
		submit=1;
		alert('신청이 완료되었습니다.');
	});

	// link copy btn
	function copyClip(url){
		var $temp = $('<input>');
		$('body').append($temp);
		$temp.val(url).select();
		document.execCommand('copy');
		$temp.remove();
	}
	$('.share_links button.copy_btn').on('click', function (e) {
		e.preventDefault();

		const link = location.href;
		copyClip(link);
		$('.toast_popup').addClass('active');
		setTimeout(function(){
			$('.toast_popup').removeClass('active');
		},1000);
	});

	// kakao link share
	// 도메인 등록하고 코드 맞춰서 수정해주세요
	$('.share_links button.kakao_btn').on('click', function (e) {
		e.preventDefault();
		
		var thisUrlImg = $('.detail .detail-body img').eq(0).attr('src');  // 수정 필요
		var thisCate = $('.cont .cate').text().trim(); 
		var thisTitle = $('.cont .tit').text().trim();

		const path_name = window.location.pathname;
		const path_name_location = path_name.substr(1) + window.location.search;

		console.log(thisUrlImg);
		console.log(thisCate);
		console.log(thisTitle);

		Kakao.init('f24979f42e9cc4b53686b6113fcf5229'); // 수정 필요

		Kakao.Share.sendCustom({
			templateId: 111591,
			templateArgs: {
				CATE_TITLE: thisCate,
				TITLE: thisTitle,
				IMAGES: `https://law-eden.com/${thisUrlImg}`, // 수정 필요
				PATH: path_name_location,
			},
		});
	});

	// tab common
	function tabSetting(num) {
		$('.header_pc .sub_menu.current ul li a').removeClass('current');
		$('.header_pc .sub_menu.current ul li:eq('+ num +') a').addClass('current');
		$('.header_mo .sub_menu.current li a').removeClass('current');
		$('.header_mo .sub_menu.current li:eq('+ num +') a').addClass('current');
		
		if($('.column').length > 0) {
			if (num == 0) {
				$('.sec01 .banner').removeClass('column');
				$('.sec01 .banner').addClass('faq');
			} else if (num == 1) {
				$('.sec01 .banner').removeClass('faq');
				$('.sec01 .banner').addClass('column');
			}
			$('.search_wrap h2').removeClass('active');
			$('.search_wrap h2:eq('+ num +')').addClass('active');
		} 

		$('.tab_menu li').removeClass('active');
		$('.tab_menu li:eq('+ num +')').addClass('active');
		$('.tab_cont .cont_wrap').removeClass('active');
		$('.tab_cont .cont_wrap:eq('+ num +')').addClass('active');

		if($('.news').length > 0) {
			$('.search_wrap h2').removeClass('active');
			$('.search_wrap h2:eq('+ num +')').addClass('active');

			if (num == 1) {
				// review swiper
				const reviewListCnt = $('.review_list .review_item').length;
				if(reviewListCnt > 0) {
					for(var i = 0; i < reviewListCnt; i++) {
						let width = ($('.review_item').eq(i).find('img').width() + 20) + 'px !important';
						$('.review_item').eq(i).attr('style', 'width:' + width);
					}
					reviewSwiper();
				}
			}
		}

		paginSetting(num);
	}

	// pagin
	function paginSetting(num) {
		if($('.pagin').length > 0) {
			let hName = $('.tab_menu li:eq('+ num +')').data('tab-name');

			for(var i = 0; i < $('.pagin ul li').length; i++) {
				let str = $('.pagin li:eq('+ i +') a').prop('href');
				
				if (str.indexOf('#') > 0) {
					let change_str =  str.substr(0, str.indexOf('#') + 1) + hName;
					$('.pagin li:eq('+ i +') a').prop('href', change_str);
				} else {
					let change_str = str + '#' + hName;
					$('.pagin li:eq('+ i +') a').prop('href', change_str);
				}
			}
		}
	}

	if($('#column').length > 0 || $('#case').length > 0 || $('#news').length > 0 ||  $('#consult').length > 0) {
		$(".tab_menu ul li").on('click', function() {
			let index = $(".tab_menu ul li").index(this);
			tabSetting(index);
		});
	}

	// header menu click
	$("header .sub_menu.current li").on('click', function() {
		if($(this).find('a').prop('href').indexOf('about') < 0) {
			$(location).prop("href", $(this).find('a').prop('href'));
			location.reload();
		}
		
		// let index;
		// if (!isMobile) {
		// 	index = $(".header_pc .sub_menu.current li").index(this);
		// } else {
		// 	index = $(".header_mo .sub_menu.current li").index(this);
		// }
		// tabSetting(index);
	});

	// main page
	if($('#main').length > 0) {
		if (!isMobile) {
			// main case swiper
			var mainCaseSwiper = new Swiper('.case_list', {
				loop: true, // 루프 활성화
				slidesPerView: 'auto', // 한 화면에 보여질 슬라이드 개수
				spaceBetween: 20, // 슬라이드 간격
				navigation: {
					nextEl: '.sec_case .case_list .swiper-button-next',
					prevEl: '.sec_case .case_list .swiper-button-prev',
				},
				observer: true, // DOM 변경 관찰
				observeParents: true, // 부모 요소 변경 관찰
				on: {
					init: function () {
						this.update(); // 초기화 시 업데이트
					},
				},
			});
			
		}

		// review swiper
		// const reviewListCnt = $('.review_list .review_item').length;
		// if(reviewListCnt > 0) {
		// 	for(var i = 0; i < reviewListCnt; i++) {
		// 		let width = ($('.review_item').eq(i).find('img').width() + 20) + 'px !important';
		// 		$('.review_item').eq(i).attr('style', 'width:' + width);
		// 	}
		// 	reviewSwiper();
		// }
		var reviewSwiper = new Swiper('.review_list_wrap.pc_list', {
			slidesPerView: 'auto',
			spaceBetween: 15,
			speed: 3000,
			touchRatio: 0,
			loop: true,
			loopedSlides: 6,
			loopAdditionalSlides: 6,
			loopFillGroupWithBlank: false,
			observer: true,
			observeParents: true,
		});
		
		// 강제 슬라이드 이동 (1ms마다 slideNext 호출)
		setInterval(function () {
			if (reviewSwiper && !reviewSwiper.autoplay.running) {
				reviewSwiper.slideNext();
			}
		}, 1);
				

		// contents swiper
		var contentsSwiper = new Swiper('.contents_list_wrap', {
				loop: false,
				slidesPerView: 'auto',
				spaceBetween: 20,
				navigation: {
					nextEl:
						'.contents_list_box .swiper-button-next',
					prevEl:
						'.contents_list_box .swiper-button-prev',
				},
		});
	}

	// about page
	if($('#about').length > 0) {
		// header menu progressbar
		if($(window).scrollTop() == 0) {
			$(".header_pc .sub_menu.current li:eq(0) a").addClass("current");
			$(".header_mo .sub_menu.current li:eq(0) a").addClass("current");
		}

		// scroll animation
		scollHandler(); 

		$(window).scroll(function() {
			scrollBar();
			scrollCheck();
			scollHandler();
		});

		function scrollBar() {
			const wintop = $(window).scrollTop(), docheight = $('#wrap').height(), winheight = $(window).height();
			let totalScroll = (wintop/(docheight-winheight))*100;
			$(".header_progress_bar").css("width",totalScroll+"%");
		}
	
		function scrollCheck() {
			const scroll = $(window).scrollTop();
			const lawyerSec = $('.sec_lawyer').position().top - 500;
			const consultSec = $('.sec_consult').position().top - 500;
	
			if (0 < scroll &&  scroll <= lawyerSec) {	
				$(".sub_menu.current a[data-sub-menu-num='1']").addClass("current");
				$(".sub_menu.current a[data-sub-menu-num='2']").removeClass("current");
			} else if (lawyerSec <= scroll && scroll < consultSec) {
				$(".sub_menu.current a[data-sub-menu-num='1']").removeClass("current");
				$(".sub_menu.current a[data-sub-menu-num='2']").addClass("current");
				$(".sub_menu.current a[data-sub-menu-num='3']").removeClass("current");
			} else if (consultSec <= scroll) {
				$(".sub_menu.current a[data-sub-menu-num='2']").removeClass("current");
				$(".sub_menu.current a[data-sub-menu-num='3']").addClass("current");
			} 
		}

		function scollHandler() {
			const scroll_y = window.scrollY + (window.innerHeight / 1.05) ;
			const animationContainer = document.querySelectorAll('.ani');

			animationContainer.forEach(element => {
				const itemTop = element.getBoundingClientRect().top + window.scrollY;
				if(scroll_y > itemTop){
					element.classList.add('active');
					if(element.classList[0] === 'lawyer_list_wrap'){
						setTimeout(function() {
							$(element).find('.list_txt').addClass('active');
						}, 1000);
						setTimeout(function() {
							$(element).find('.list_img').addClass('active');
						}, 1300);
					}
				}else{
					element.classList.remove('active');
					if(element.classList[0] === 'lawyer_list_wrap'){
						$(element).find('.list_txt').removeClass('active');
						$(element).find('.list_img').removeClass('active');
					}
				}
			});
		}
	}

	// about view page
	if($('#about_view').length > 0) {
		$('.header_pc .sub_menu.current ul li:eq(1) a').addClass('current');
		$('.header_mo .sub_menu.current li:eq(1) a').addClass('current');
	}

	// column page
	if($('#column').length > 0) {
		if(window.location.hash == '#faq' || window.location.hash == '') {
			tabSetting(0);
		} else if (window.location.hash == '#column') {
			tabSetting(1);
		} 
	}

	if ($('#column_view').length > 0) {
		$('.header_pc .sub_menu.current ul li a').removeClass('current');
		$('.header_pc .sub_menu.current ul li:eq('+ 1 +') a').addClass('current');
		$('.header_mo .sub_menu.current li a').removeClass('current');
		$('.header_mo .sub_menu.current li:eq('+ 1 +') a').addClass('current');
	}

	// faq slidedown
	$('.faq_list li').click(function(){
		$('.faq_list li').not($(this)).removeClass('active');
		$(this).toggleClass('active');
	})

	// case page
	if($('#case').length > 0) {
		if(window.location.hash == '#detective' || window.location.hash == '') {
			if ($('#case_view').length > 0) $('.tab_cont .cont_tit').text('형사');
			tabSetting(0);
		} else if (window.location.hash == '#lyrics') {
			if ($('#case_view').length > 0) $('.tab_cont .cont_tit').text('가사');
			tabSetting(1);
		} else if (window.location.hash == '#etc') {
			if ($('#case_view').length > 0) $('.tab_cont .cont_tit').text('기타');
			tabSetting(2);
		}
	}
	if($('#case_view').length > 0) { 
		let cate = $('.cont_tit').text();
		let target_num;

		if(cate.match('형사')) {
			target_num = 0;
		} else if(cate.match('가사')) {
			target_num = 1;
		} else if(cate.match('기타')) {
			target_num = 2;
		}

		$('.header_pc .sub_menu.current ul li a').removeClass('current');
		$('.header_pc .sub_menu.current ul li:eq('+ target_num +') a').addClass('current');
		$('.header_mo .sub_menu.current li a').removeClass('current');
		$('.header_mo .sub_menu.current li:eq('+ target_num +') a').addClass('current');
		$('.tab_menu li:eq('+ target_num +')').addClass('active');
	}

	// news  page
	if($('#news').length > 0) {
		if(window.location.hash == '#press' || window.location.hash == '') {
			tabSetting(0);
		} else if (window.location.hash == '#review') {
			tabSetting(1);

			// review swiper
			const reviewListCnt = $('.review_list .review_item').length;
			if(reviewListCnt > 0) {
				for(var i = 0; i < reviewListCnt; i++) {
					let width = ($('.review_item').eq(i).find('img').width() + 20) + 'px !important';
					$('.review_item').eq(i).attr('style', 'width:' + width);
				}
				reviewSwiper();
			}
		}
	}

	function reviewSwiper() {
		if (!isMobile) {
			new Swiper('.review_list_wrap.pc_list', {
				autoplay: {
					delay: 0,
					disableOnInteraction: false,
					pauseOnMouseEnter: true,
				},
				spaceBetween:10,
				speed:8000,
				touchRatio: 0,
				loop:true,
				slidesPerView: 'auto', // 한번에 보여줄 슬라이드 개수
				loopedSlides: 10, //noSwiping : true,
				observer:true, 
				observeParents:true,
			});
		}
	}

	// consult page
	if($('#consult').length > 0) {
		if(window.location.hash == '#visit' || window.location.hash == '') {
			tabSetting(0);

			$(".consult .date_time label input[type='checkbox']").click(function () {
				// 현재 라디오 버튼의 체크 상태 확인
				$(".consult .date_time label input[type='checkbox']").not(this).prop("checked", false);
				$("#reservation_time").val($(this).val());
			});
			
		} else if (window.location.hash == '#counselling') {
			tabSetting(1);
		}

		var natDays = []; // 공휴일 배열
		var isInitialLoad = true; // 첫 로딩 여부

		// 여러 연도의 공휴일 데이터를 가져오는 함수
		function fetchHolidays(years) {
			years.forEach(function(year) {
				$.ajax({
					url: `https://date.nager.at/api/v3/PublicHolidays/${year}/KR`, // 공휴일 API 주소
					method: "GET",
					success: function (data) {
						// 가져온 공휴일 데이터를 natDays 배열에 저장
						data.forEach(function (holiday) {
							var date = new Date(holiday.date);
							natDays.push([date.getFullYear(), date.getMonth() + 1, date.getDate()]);
						});
						// datepicker 초기화
						$("#reservation_date").datepicker("refresh");
					},
					error: function () {
						console.error(`${year}년 공휴일 데이터를 불러오는 데 실패했습니다.`);
					}
				});
			});
		}

		// 2025년과 2026년 공휴일 데이터를 로드
		fetchHolidays([2025, 2026]);

		$("#reservation_date").datepicker({
			dateFormat: "yy-mm-dd", // 년-월-일 형식으로 설정
			dayNames: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 지정
			dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 짧게 지정
			monthNames: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
			monthNamesShort: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
			dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
			minDate: 0, // 오늘 이전의 날짜 선택 불가능
			showMonthAfterYear: true, // 년 월 순서 바꿈

			// 날짜 클릭 시 동작
			onSelect: function (dateText) {
				var selectedDate = new Date(dateText);
				var year = selectedDate.getFullYear();
				var month = selectedDate.getMonth() + 1;
				var day = selectedDate.getDate();
				$('#reserved_date').val(`${year}-${month}-${day}`);
				$('.date_select').addClass('active');
				$('.date_select span').text(`${year}년 ${month}월 ${day}일`);
				$('.visit_apply_complete').find('.date').text(`${year}년 ${month}월 ${day}일`);
			},

			// 날짜 렌더링 시 동작
			beforeShowDay: function (date) {
				var day = date.getDay();
				
				// 공휴일 확인
				for (var i = 0; i < natDays.length; i++) {
					if (date.getFullYear() === natDays[i][0] && date.getMonth() + 1 === natDays[i][1] && date.getDate() === natDays[i][2]) {
						return [false, "holiday", ""];
					}
				}

				// 주말 비활성화
				if (day === 0) {
					return [false, "sunday", ""];
				} else if (day === 6) {
					return [false, "saturday", ""];
				}

				// 첫 로딩 시 활성화 상태 제거
				if (isInitialLoad) {
					setTimeout(function () {
						$(".ui-state-active").removeClass("ui-state-active");
					}, 1);
					isInitialLoad = false;
				}
				
				return [true, "", ""];
			}
		});
	}
	if ($('#counselling_write').length > 0 || $('#counselling_view').length > 0) {
		$('.header_pc .sub_menu.current ul li a').removeClass('current');
		$('.header_pc .sub_menu.current ul li:eq('+ 1 +') a').addClass('current');
		$('.header_mo .sub_menu.current li a').removeClass('current');
		$('.header_mo .sub_menu.current li:eq('+ 1 +') a').addClass('current');
	}

	// consult page visit tab
	$('.consult .adds li').click(function() {
		let index = $('.consult .adds li').index(this);
		$('.maps iframe').hide();
		$('.maps iframe:eq('+ index +')').show();
	});

	$('.form_list select').on('change', function() {
		if($(this).val() != '' || $(this).val() == 'undefined') {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});

	$(".rv_wrap .submit_btn").on("click", (event) => {
		visitApply(event);
	});

	const visitApply = (event) => {
		let date = $(event.target)
			.parents("form")
			.find("input[name='date']")
			.val();
		let time = $(event.target)
			.parents("form")
			.find("input[name='time']")
			.val();
		let name = $(event.target)
			.parents("form")
			.find("input[name='name']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let category = $(event.target)
			.parents("form")
			.find("select[name='selectCategory']")
			.val();
		let location = $(event.target)
			.parents("form")
			.find("select[name='location']")
			.val();
		let content = $(event.target)
			.parents("form")
			.find("textarea[name='content']")
			.val();
		let agree = $(event.target)
			.parents("form")
			.find("input[name='agree']")
			.is(':checked');


		if (!date) {
			Swal.fire({
				icon: "warning",
				text: "날짜를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!time) {
			Swal.fire({
				icon: "warning",
				text: "시간을 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!name) {
			Swal.fire({
				icon: "warning",
				text: "이름을 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!category) {
			Swal.fire({
				icon: "warning",
				text: "사건분야를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		}  else if (agree == false) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 및 이용목적 동의에 체크해주세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				date: date,
				time: time,
				name: name,
				phone: phone,
				category: category,
				location: location,
				agree: agree,
				content : $('#content').val(),
				sites: '이든',
				type: 'visit',
			};

			console.log(sendData);

			// 성공하면 퍼블리싱한 팝업 띄워주세요
			$('.visit_apply_complete').addClass('active');
			$('.visit_apply_complete').find('.time').text(time);

			$.ajax({
				type: "POST",
				url: "",
				data: sendData,
				success: (response) => {
					const responseJson = JSON.parse(response);
	
					if (responseJson.status) {
						Swal.fire({
							icon: "success",
							html: "상담 신청이 완료되었습니다.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						}).then(() => {
							location.reload();
						});
					} else {
						Swal.fire({
							icon: "error",
							html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						});
	
						console.log(response);
					}
				},
				error: (response) => {
					Swal.fire({
						icon: "error",
						html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
						confirmButtonColor: "#2B4039",
						confirmButtonText: "확인",
					});
	
					console.log(response);
				},
			});
		}
	};

	// visit apply popup
	$('.visit_apply_complete .popup_close_btn').click(function() {
		$('.visit_apply_complete').removeClass('active');
	});

	// counselling write 
	$('.agree_wrap').click(function() {
		$('.agree_wrap').toggleClass('active');
	});

	$(".counselling form input[type='file']").change(function(e){
		$(this).parent().find('.upload_btn').hide();
		$(this).parent().find('.del_btn').show();
		$(this).parents('.file_wrap').find('.ipt').val($(this)[0].files[0].name);
	});
	$('.counselling form .del_btn').click(function() {
		$(this).parent().find('.del_btn').hide();
		$(this).parent().find('.upload_btn').show();
		$(this).parents('.file_wrap').find('.ipt').val('');
		$(this).parent().find('input[type=file]').val('');
	});

	// $(".counselling .btn_cs_apply").on("click", (event) => {
	// 	csApply(event);
	// });

	function csApply(){

		event.preventDefault(); // 폼의 기본 제출 동작 방지

		let name = $("input[name='name']").val();
		let pwd = $("input[name='pwd']").val();	
		let phone = $("input[name='phone']").val();
		let category = $("select[name='category']").val();
		let title = $("input[name='title']").val();
		let content = $("textarea[name='content']").val();
		let agree = $("input[name='agree']").is(':checked');

		if (!name) {
			Swal.fire({
				icon: "warning",
				text: "이름을 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		}	else if (!pwd) {
				Swal.fire({
					icon: "warning",
					text: "비밀번호를 입력하세요.",
					confirmButtonColor: "#2B4039",
					confirmButtonText: "확인",
			});
			return false;
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		} else if (!category) {
			Swal.fire({
				icon: "warning",
				text: "사건분야를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		}  else if (agree == false) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 및 이용목적 동의에 체크해주세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		} 
		return true;
	};

	// search 
	// search delete btn
	if ($('.search_box').length > 0) {
		if($('.search_box input').val().length > 0) $('.search_box').find('.delete_btn').show();
	}

	$('.search_box input').on('keydown, keyup', function () {
		var searchWord = $(this).val();
		var searchLength = searchWord.length;
		if (searchLength > 0) {
			$(this).parents('.search_box').find('.delete_btn').show();

		} else {
			$(this).parents('.search_box').find('.delete_btn').hide();
		}
	});

	$('.search_box .delete_btn').click(function() {
		$(this).siblings('input').val('');
		$(this).hide();
		return false;
	});

	// search input enter key
	$(".search_box input").keydown(function(key) {
		if (key.keyCode == 13) {
			$('.search_box form').submit();
		}
	});

	if($('.search').length > 0) {
		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
					results = regex.exec(location.search);
			return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		// search title 
		const searchTxt = getParameterByName('search');
		$('.search_wrap .search_tit span').text("' " + searchTxt + " '");
		$('.search_box input').val(searchTxt);
	}

	// case hash
	$('.case .hash_wrap span.active a').click(function(e) {
		e.preventDefault();

		const activeTab = $('.tab_menu .active').data('tab-name');
		$(this).parent().removeClass('active');
		location.href= '/cases#' + activeTab;
	});

	// 1. 페이지 내 이동 또는 외부 페이지 이동 시 대응
	$(".card_list a").on("click", function(event) {
		var href = $(this).attr("href");

		// 링크가 같은 페이지 내 요소를 가리킬 경우 (href가 '#'로 시작)
		if (href.startsWith("#")) {
			event.preventDefault();

			// 대상 ID 추출 및 존재 여부 확인
			var targetId = href;
			if ($(targetId).length) {
				// 대상 요소로 부드럽게 스크롤 이동
				$(targetId)[0].scrollIntoView({
					behavior: "auto",
					block: "start"
				});
				$('html, body').animate({
					scrollTop: $(targetId).offset().top - 200 // 200px 여유 공간
				}, 100); // 0.1초 동안 부드럽게 스크롤
			}
		}
		// 링크가 다른 페이지를 가리키는 경우 해시 포함하여 이동
		else {
			// 기본 동작 허용, 다른 페이지로 이동
		}
	});

	// 2. 페이지가 로드될 때 URL에 해시가 포함된 경우 해당 요소로 자동 스크롤
	$(document).ready(function() {
		var hash = window.location.hash;
		if (hash && $(hash).length) {
			// 대상 요소로 부드럽게 스크롤 이동
			$(hash)[0].scrollIntoView({
				behavior: "auto",
				block: "start"
			});
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 200 // 200px 여유 공간
			}, 100); // 0.1초 동안 부드럽게 스크롤
		}
	});


	// 메인 자가진단
	var index = 1;
	var target;
	var settings = [
		[
			{
				title: '상속', 
				subtitle: '',
				childs: ['상속재산 · 유류분', '상속포기 · 한정승인', '성년후견 · 친생자', '기타']
			},
			{
				title: '상속', 
				subtitle: '망자와 관계',
				childs: ['부', '모', '기타']
			},
			{
				title: '상속', 
				subtitle: '사망일자',
				childs: ['input'],
				desc: '*아직 사망 전이라면 ‘사망 전’임을 기재해 주세요.'
			}
		],
		[
			{
				title: '이혼', 
				subtitle: '',
				childs: ['이혼소송', '상간소송', '양육분쟁', '기타']
			},
			{
				title: '이혼', 
				subtitle: '현재 어떤 상황이신가요?',
				childs: ['배우자와 협의가 된 상황', '배우자와 협의가 되지 않은 상황']
			},
			{
				title: '이혼', 
				subtitle: '어떤 부분이 궁금하신가요?',
				childs: ['재산분할', '위자료', '양육권 양육비', '기타']
			}
		],
		[
			{
				title: '민사', 
				subtitle: '',
				childs: ['부동산', '대여금', '토지분쟁', '임금체불', '공사대금', '손해배상']
			},
			{
				title: '어떤 상담이 필요하신지<br /> 간략하게 작성 부탁드립니다.', 
				subtitle: '상담내용',
				childs: ['textarea']
			}
		],
		[
			{
				title: '마약', 
				subtitle: '',
				childs: ['마약 (헤로인, 코카인, 펜타닐 등)', '향정 (필로폰, 케타민, LSD 등)', '대마 (대마초, 대마오일, 해시시 등)', '기타']
			},
			{
				title: '사건 유형', 
				subtitle: '',
				childs: ['구매', '제조', '흡연 및 투약', '판매', '기타']
			}
		],
		[
			{
				title: '형사', 
				subtitle: '',
				childs: ['가해자', '피해자']
			},
			{
				title: '사건 유형', 
				subtitle: '',
				childs: ['횡령죄', '배임죄 · 업무상 배임죄', '강도죄 ·  특수강도죄', '폭행 · 상해', '도박']
			}
		],
		[
			{
				title: '성범죄', 
				subtitle: '',
				childs: ['성범죄 가해자', '성범죄 피해자']
			},
			{
				title: '사건 유형', 
				subtitle: '',
				childs: ['강제추행', '성희롱', '강간', '카촬 (촬영, 유포, 소지)', '아청법 위반', '기타']
			}
		],
		[
			{
				title: '어떤 상담이 필요하신지<br /> 간략하게 작성 부탁드립니다.', 
				subtitle: '상담내용',
				childs: ['textarea']
			}
		]
	];

	$(document).on("click",".selfcheck input:radio", function() {
		$(this).parents('.item_wrap').find('.item').removeClass('on');
		$(this).parent().addClass('on');
	});

	$('.selfcheck .start_btn').click(function(){
		var $root= $(this).closest('.self_card');
		var value = $root.find('input:checked').val();

		if(typeof(value)=='undefined'){ 
			Swal.fire({
				title: "항목 미선택",
				text: "항목을 선택해주세요.",
				icon: "warning",
				buttons: "확인",
			});
			return false;
		} else {
			$('.selfcheck .card01').hide();
			target  = $('.selfcheck .card01 .item.on').index();
			index ++;
			setContents(target, index);
		}
    });

	$(document).on('click', '.selfcheck .prev_btn, .selfcheck .next_btn', function() {
		goToPage(this);
	});

	function goToPage (element) {
		var $root= $(element).closest('.self_card');
		var value = $root.find('input:checked').val();
		var text_val1 = $root.find('input[type=text]').val();
		var text_val2 = $root.find('textarea').val();

		if($(element).hasClass('prev_btn')) {
			$('.selfcheck .card0' + index).remove();
			index --;
			$('.selfcheck .card0' + index).show();
		} else if ($(element).hasClass('next_btn')) {
			if(typeof(value) === 'undefined' && (!text_val1 || text_val1.trim() === '') && (!text_val2 || text_val2.trim() === '')){ 
				Swal.fire({
					title: "항목 미선택",
					text: "항목을 선택하거나 답변을 입력해주세요.",
					icon: "warning",
					buttons: "확인",
				});
				return false;
			} else {
				if(settings[target].length + 1 != index) {
					$('.selfcheck .card0' + index).hide();
					index ++;
					setContents(target, index);
				}
				else {
					$('.self_cont').hide();
					$('.self_end').show();
				}
			}
		}
	}

	function setContents($target, $step){
		var current_title = settings[$target][$step - 2].title;
		var current_subtitle = settings[$target][$step - 2].subtitle;
		var current_contents = settings[$target][$step - 2].childs; 
	
		$('.selfcheck').find('.self_cont').append(
			"<div class='self_card card0" + $step + "'>" +
			"<div class='card_inner'>" +
			"<div class='card_cont'>" +
			"<div class='card_tit'></div>" +
			"<div class='card_subtit'></div>" +
			"<div class='item_wrap'>" +
			"</div>" +
			"<div class='btn_wrap'>" +
			"<button type='button' class='btn prev_btn'>이전</button>" +
			"<button type='button' class='btn next_btn'>다음</button>" +
			"</div>" + 
			"</div>" +
			"</div>" +
			"</div>"
		);
		
		$('.selfcheck .card0' + $step).find('.card_tit').html(current_title);
		$('.selfcheck .card0' + $step).find('.card_subtit').html(current_subtitle);
	
		// 라디오 버튼 영역만 비우기
		$('.selfcheck .card0' + $step).find('.item_wrap').children().remove();
		
		if(current_contents.length > 0) {
			for (var i = 0; i < current_contents.length; i++) {
				// 고유한 id와 name 생성
				var uniqueId = 'val' + $step + "_" + i;

				if (current_contents[i] === 'input') {
					$('.selfcheck .card0' + $step).find('.item_wrap').append(
						"<span>"+ settings[$target][$step - 2].desc +"</span>" +
						"<div class='input_wrap'><input type='text' name= '"+ current_subtitle +"' placeholder='내용을 입력해주세요.' /></div>"
					);
				} else if (current_contents[i] === 'textarea') {
					$('.selfcheck .card0' + $step).find('.item_wrap').append(
						"<div class='textarea_wrap'><textarea name= '"+ current_subtitle +"' placeholder='내용을 입력해주세요.'></textarea></div>"
					);
					$('.selfcheck .card0' + $step).find('.card_tit').addClass('textarea_tit');
				} else {
					$('.selfcheck .card0' + $step).find('.item_wrap').append(
						"<div class='item'>" +
						"<label for='" + uniqueId + "'>" + current_contents[i] + "</label>" +
						"<input type='radio' name='val" + $step + "' id='" + uniqueId + "' value='" + current_contents[i] + "'>" +
						"<label for='" + uniqueId + "' class='ico'></label>" +
						"</div>"
					);
				}
			}
		}
	}

	$('.selfcheck .self_end .submit_btn').click(function(e){
		e.preventDefault(); // 기본 동작 방지
		var type = $(this).data('type');
		$('#selfDiagnosisForm [name="type"]').val(type);

		selfDiagnosisVerifi($(this).text());
	});

	function selfDiagnosisVerifi($text) {
		// 입력 값 검증
		const phoneReg = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
		var f = document.selfDiagnosisForm;
	
		// 휴대전화 번호가 비어 있을 때
		if (f.phone.value.trim() == "") {
			Swal.fire({
				title: "항목 미입력",
				text: "휴대전화 번호를 입력해주세요.",
				icon: "warning",
				buttons: "확인",
			}).then(() => {
				f.phone.focus(); // 팝업 닫힌 후 포커스 유지
			});
			return false; // 폼 제출 중단
		}
		// 휴대전화 번호가 올바르지 않을 때
		else if (!phoneReg.test(f.phone.value.trim())) {
			Swal.fire({
				title: "입력값 확인",
				text: "올바른 휴대전화 번호를 입력해주세요.",
				icon: "warning",
				buttons: "확인",
			}).then(() => {
				f.phone.focus(); // 팝업 닫힌 후 포커스 유지
			});
			return false; // 폼 제출 중단
		}
		// 검증 통과 시 제출 함수 호출
		else {
			selfDiagnosisSubmit();
		}
	}

	function selfDiagnosisSubmit() {
		var contents ='';
		$('.self_cont input:checked, .self_cont input[type=text], .self_cont textarea').each(function($event){
			if(contents!=''){
				contents+=',';
			}
			contents+=$(this).val();
			// if(this.tagName=='TEXTAREA'){
			// 	contents+=$(this).val();
			// }
			// else{
			// 	contents+=$(this).parent().text();
			// }
		});

		$('#selfDiagnosisForm textarea').val(contents);

		var arg = $("#selfDiagnosisForm").serializeArray();

		console.log(arg)

		$.post("", arg, function(response){
			alert('신청이 완료되었습니다.');
			location.reload();
		});
	}
});