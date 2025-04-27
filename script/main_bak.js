$(document).ready(function () {
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
			.find("input[name='inputName']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='inputPhone']")
			.val();
		let agree = $(event.target)
			.parents("form")
			.find("input[name='inputCheck']")
			.is(':checked');

		if (!category) {
			Swal.fire({
				icon: "warning",
				text: "분야를 선택하세요.",
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
				text: "전화번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (agree == false) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 및 이용목적 동의에 체크해주세요..",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				category: category,
				name: name,
				phone: phone,
				agree: agree,
			};

			// $.ajax({
			// 	type: "POST",
			// 	url: "",
			// 	data: sendData,
			// 	success: (response) => {
			// 		const responseJson = JSON.parse(response);
	
			// 		if (responseJson.status) {
			// 			Swal.fire({
			// 				icon: "success",
			// 				html: "상담 신청이 완료되었습니다.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			}).then(() => {
			// 				location.reload();
			// 			});
			// 		} else {
			// 			Swal.fire({
			// 				icon: "error",
			// 				html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			});
	
			// 			console.log(response);
			// 		}
			// 	},
			// 	error: (response) => {
			// 		Swal.fire({
			// 			icon: "error",
			// 			html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 			confirmButtonColor: "#2B4039",
			// 			confirmButtonText: "확인",
			// 		});
	
			// 		console.log(response);
			// 	},
			// });
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

		if($('.news').length > 0 && num == 1) {
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
			var mainCaseSwiper = new Swiper('.case_list',
				{
					loop: true,
					slidesPerView: 4,
					spaceBetween: 20,
					navigation: {
						nextEl:
							'.sec04 .case_list .swiper-button-next',
						prevEl:
							'.sec04 .case_list .swiper-button-prev',
					},
				}
			);
		}

		// review swiper
		const reviewListCnt = $('.review_list .review_item').length;
		if(reviewListCnt > 0) {
			for(var i = 0; i < reviewListCnt; i++) {
				let width = ($('.review_item').eq(i).find('img').width() + 20) + 'px !important';
				$('.review_item').eq(i).attr('style', 'width:' + width);
			}
			reviewSwiper();
		}

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

	// column page
	if($('#column').length > 0) {
		if(window.location.hash == '#faq' || window.location.hash == '') {
			tabSetting(0);
		} else if (window.location.hash == '#column') {
			tabSetting(1);
		}
	}

	// faq slidedown
	$('.faq_list li').click(function(){
		$('.faq_list li').not($(this)).removeClass('active');
		$(this).toggleClass('active');
	})

	// case page
	if($('#case').length > 0 || $('#case_view').length > 0) {
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
		} else {
			new Swiper('.review_list_wrap.mo_list', {
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

	// consul page
	if($('#consult').length > 0) {
		if(window.location.hash == '#visit' || window.location.hash == '') {
			tabSetting(0);

			var natDays =  [
				[2024,8,15,'ko','광복절'],
				[2024,9,16,'ko','추석'],[2024,9,17,'ko','추석'],[2024,9,18,'ko','추석'],
				[2024,10,1,'ko', '국군의날'],[2024,10,3,'ko','개천절'],
				[2024,10,9,'ko','한글날'],
				[2024,12,25,'ko','크리스마스'],

				[2025,1,1,'ko','신정'],[2025,1,28,'ko','설날'],[2025,1,29,'ko','설날'],[2025,1,30,'ko','설날'],
				[2025,3,1,'ko','삼일절'],[2025,3,3,'ko','대체휴일'],
				[2025,5,5,'ko','어린이날'],[2025,5,6,'ko','대체휴일'],
				[2025,6,6,'ko','현충일'],
				[2025,8,15,'ko','광복절'],
			];
			
			let isInitialLoad = true;
			$("#reservation_date").datepicker({
				dateFormat: "yy-mm-dd", // 년-월-일 형식으로 설정
				dayNames: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 지정
				dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 짧게 지정
				monthNames: [
					"01",
					"02",
					"03",
					"04",
					"05",
					"06",
					"07",
					"08",
					"09",
					"10",
					"11",
					"12",
				],
				monthNamesShort: [
					"1",
					"2",
					"3",
					"4",
					"5",
					"6",
					"7",
					"8",
					"9",
					"10",
					"11",
					"12",
				],
				dayNames: ["일", "월", "화", "수", "목", "금", "토"],
				dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
				dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
				onSelect: function (dateText) {
					var selectedDate = new Date(dateText);
					var year = selectedDate.getFullYear();
					var month = selectedDate.getMonth() + 1; // 월은 0부터 시작하므로 1을 더해줌
					var day = selectedDate.getDate();
					$('#reserved_date').val(year + "-" + month + "-" + day);
					$('.date_select').addClass('active');
					$('.date_select span').text(year+ '년 ' + month+ '월 ' + day +'일');
					$('.visit_apply_complete').find('.date').text( year + '년 ' + month + '월 ' + day + '일');
				},
				minDate: 0, // 오늘 이전의 날짜 선택 불가능
				showMonthAfterYear: true,  // 년 월 순서 바꿈
				beforeShowDay: function (date) {
					var day = date.getDay();

					for (i = 0; i < natDays.length; i++) {
						if (date.getFullYear() == natDays[i][0] && date.getMonth() == natDays[i][1] - 1
							&& date.getDate() == natDays[i][2]) {      
								
							return [false, "holiday", ""]
						}
					}

					if (day === 0) {
						return [false, "sunday", ""];
					} else if(day === 6) {
						return [false, "saturday", ""];
					} 

					if (isInitialLoad) {
						setTimeout(function() {
							$(".ui-state-active").removeClass("ui-state-active");
						}, 1);
						isInitialLoad = false;  // 첫 로딩 이후에는 false로 설정하여 더 이상 제거하지 않음
					}

					
					return [true, "", ""];
				},
			});

			$(".consult .date_time label input[type='checkbox']").click(function () {
				// 현재 라디오 버튼의 체크 상태 확인
				$(".consult .date_time label input[type='checkbox']").not(this).prop("checked", false);
				$("#reservation_time").val($(this).val());
			});
			
		} else if (window.location.hash == '#counselling') {
			tabSetting(1);
		}
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

	// $(".rv_wrap .submit_btn").on("click", (event) => {
	// 	visitApply(event);
	// });

	function visitApply() {
		event.preventDefault(); // 폼의 기본 제출 동작 방지

		let date = $("input[name='date']").val();
		let time = $("input[name='time']").val();
		let name = $("input[name='name']").val();
		let phone = $("input[name='phone']").val();
		let category = $("select[name='selectCategory']").val();
		let location = $("select[name='location']").val();
		let content = $("textarea[name='content']").val();
		let agree = $("input[name='agree']").is(':checked');


		if (!date) {
			Swal.fire({
				icon: "warning",
				text: "날짜를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		} else if (!time) {
			Swal.fire({
				icon: "warning",
				text: "시간을 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
			return false;
		} else if (!name) {
			Swal.fire({
				icon: "warning",
				text: "이름을 입력하세요.",
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
		} else {
			const sendData = {
				date: date,
				time: time,
				name: name,
				phone: phone,
				category: category,
				location: location,
				agree: agree,
			};

			console.log(sendData);

			// 성공하면 퍼블리싱한 팝업 띄워주세요
			$('.visit_apply_complete').addClass('active');
			$('.visit_apply_complete').find('.time').text(time);

			return true;

			// $.ajax({
			// 	type: "POST",
			// 	url: "",
			// 	data: sendData,
			// 	success: (response) => {
			// 		const responseJson = JSON.parse(response);
	
			// 		if (responseJson.status) {
			// 			Swal.fire({
			// 				icon: "success",
			// 				html: "상담 신청이 완료되었습니다.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			}).then(() => {
			// 				location.reload();
			// 			});
			// 		} else {
			// 			Swal.fire({
			// 				icon: "error",
			// 				html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			});
	
			// 			console.log(response);
			// 		}
			// 	},
			// 	error: (response) => {
			// 		Swal.fire({
			// 			icon: "error",
			// 			html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 			confirmButtonColor: "#2B4039",
			// 			confirmButtonText: "확인",
			// 		});
	
			// 		console.log(response);
			// 	},
			// });
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
});