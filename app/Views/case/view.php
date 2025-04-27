<!-- 내용 시작 -->
<div id="case_view" class="case view">
                <section class="sec01 sec_common">
                    <div class="search_wrap">
                        <h2>법무법인 이든의 실력,<br>
							성공적인 결과만 전달 드립니다<span>.</span>
                        </h2>
                        <div class="search_box">
                            <form action="/cases/search">
                                <input type="text" name="search" placeholder="검색해보세요" value="">
                                <button class="delete_btn"></button>
                                <button class="search_btn"></button>
                            </form>
                        </div>
                    </div>
                    <div class="tab_menu">
                        <ul>
                            <li><a href="/cases#detective">형사</a></li>
                            <li><a href="/cases#lyrics">가사</a></li>
							<li><a href="/cases#etc">기타</a></li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap active">
							<div class="cont_tit"><?=$view['case_keyword']?></div>
							<div class="cont">
								<div class="view_info">
									<ul class="desc_wrap">
										<li class="cate"><?=$view['tags']?></li>
										<li class="date"><?=cu_conv_date($view['create_date'])?></li>
									</ul>
									<div class="tit"><?=$view['case_number']?></div>
									<div class="sub"><?=$view['description']?></div>
									<div class="lawyer_wrap">
										<div class="img"><img src="<?=$view['expert_thumbnail']?>" alt=""></div>
										<span><?=$view['expert_name']?></span>
									</div>
								</div>
								<div class="view_inner">
									<?php for ($i = 1; $i <= 5; $i++) { ?>
										<?=$view['case_title'.$i]?>
										<?=$view['case_text'.$i]?>
									<?php } ?>
									<ul class="share_links">
										<li><button class="kakao_btn" title="카카오톡 공유"></button></li>
										<li><button class="copy_btn" title="링크 복사"></button></li>
									</ul>
								</div>
								<div class="view_btm">
									<ul>
									<li><a class="prev_btn" href="<?= ($prev<$view['no'] && $prev>0)? '/cases/view/'.$prev : '#' ?>"></a>이전 글</li>
									<li>다음 글<a class="next_btn" href="<?= ($next>$view['no'])? '/cases/view/'.$next : '#'?>"></a></li>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
                </section>

				<section class="sec02 sec_consult">
					<div class="sec_inner">
                        <div class="tit_wrap">
                            <h4 class="desc">상담 요청</h4>
                            <h3 class="sub">
                                유사한 건으로<br>
								상담 필요시
                            </h3>
                        </div>
						<form name="main_consult" id="main_consult" action="" method="POST">
							<input type="hidden" name="type" value="case_realtime">
							<input type="hidden" name="sites" value="이든">
							<label for="name">
								이름
								<input type="text" id="name" name="name" placeholder="이름 입력">
							</label>
							<label for="phone">
								휴대폰번호
								<input type="text" id="phone" name="phone" placeholder="숫자만 입력">
							</label>
							<div class="checkbox_wrap">
								<input type="checkbox" name="check" id="check">
								<label for="check">개인정보수집에 동의합니다.</label>
							</div>
							<button class="btn click_to_consult ga_main__quick">빠른상담 신청</button>
						</form>
					</div>
				</section>

				<!-- <section class="sec03 sec_similar_case">
					<div class="sec_inner">
						<div class="cont_tit">함께 보면 좋은 관련 사례</div>
						<ul class="case_list">
							<li>
								<a href="case_view.html">
									<div class="card_top">
										<div class="tag">성범죄 가해자</div>
										<div class="cate detective">형사</div>
									</div>
									<div class="card_mid">
										<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요제목1 입력하세요입력하세요입력하세요입력하세요제목1 입력하세요입력하세요입력하세요입력하세요제목1 입력하세요입력하세요입력하세요입력하세요</div>
										<div class="sub">서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3</div>
									</div>
									<div class="card_btm">
										<div class="img"><img src="/img/lawyer_ex.png" alt=""></div>
										양지현 변호사
									</div>
								</a>
							</li>
							<li>
								<a href="case_view.html">
									<div class="card_top">
										<div class="tag">성범죄 가해자</div>
										<div class="cate detective">형사</div>
									</div>
									<div class="card_mid">
										<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요</div>
										<div class="sub">서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3</div>
									</div>
									<div class="card_btm">
										<div class="img"><img src="/img/lawyer_ex.png" alt=""></div>
										양지현 변호사
									</div>
								</a>
							</li>
							<li>
								<a href="case_view.html">
									<div class="card_top">
										<div class="tag">성범죄 가해자</div>
										<div class="cate detective">형사</div>
									</div>
									<div class="card_mid">
										<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요</div>
										<div class="sub">서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 요약 서브2 최대 3줄 최대 3줄 최대 3줄 최대 3줄 최대 3</div>
									</div>
									<div class="card_btm">
										<div class="img"><img src="/img/lawyer_ex.png" alt=""></div>
										양지현 변호사
									</div>
								</a>
							</li>
						</ul>
						<button class="more_btn">목록 보기</button>
					</div>
				</section> -->
			</div>

			<div class="toast_popup">URL 복사가 완료 되었습니다</div>
			<!-- 내용 끝  -->