<!-- 내용 시작 -->
<div id="column_view" class="column view">
				<section class="sec01 sec_banner">
                    <div class="banner column"></div>
                </section>

                <section class="sec02 sec_common">
                    <div class="search_wrap">
						<h2 class="column_tit active">법무법인 이든은<br>
                            무엇이든 알려드립니다<span>.</span>
                        </h2>
                    </div>
					<div class="tab_menu">
                        <ul>
                            <li><a href="/column#faq">자주 묻는 질문</a></li>
                            <li class="active"><a href="/column#column">이든 칼럼</a></li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap active">
							<div class="cont_tit">이든 칼럼</div>
							<div class="cont">
								<div class="view_info">
									<ul class="desc_wrap">
										<li class="cate"><?=$view['category']?></li>
										<li class="date"><?=cu_conv_date($view['create_date'])?></li>
									</ul>
									<div class="tit"><?=$view['title']?></div>
									<!-- <div class="sub">소제목</div> -->
									<?php 
									if(!empty($view['expert_name'])){
									?>
									<div class="lawyer_wrap">
										<img src="<?=$view['expert_thumbnail']?>" alt="">
										<span><?=$view['expert_name']?></span>
									</div>
									<?php } ?>
								</div>
								<div class="view_inner">
									<?=$view['contents']?>
									<ul class="share_links">
										<li><button class="kakao_btn" title="카카오톡 공유"></button></li>
										<li><button class="copy_btn" title="링크 복사"></button></li>
									</ul>
								</div>
								<div class="view_btm">
									<ul>
										<li><a class="prev_btn" href="<?=($prev<$view['no'] && $prev>0)? '/column/view/'.$prev : '#' ?>"></a>이전 글</li>
										<li>다음 글<a class="next_btn" href="<?=($next>$view['no'])? '/column/view/'.$next : '#'?>"></a></li>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
                </section>

				<section class="sec03 sec_consult">
					<div class="sec_inner">
                        <div class="tit_wrap">
                            <h4 class="desc">상담 요청</h4>
                            <h3 class="sub">
                                유사한 건으로<br>
								상담 필요시
                            </h3>
                        </div>
						<form name="main_consult" id="main_consult" method="POST" action="">
							<input type="hidden" name="type" value="column_realtime">
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

				<!-- <section class="sec04 sec_similar_case">
					<div class="sec_inner">
						<div class="cont_tit">함께 보면 좋은 관련 사례</div>
						<ul class="column_list">
							<li>
								<a href="">
									<div class="thumbnail"><img src="" alt=""></div>
									<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요</div>
									<div class="sub">서브2 요약 </div>
									<div class="cate">분야입력하세요</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="thumbnail"><img src="" alt=""></div>
									<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요</div>
									<div class="sub">서브2 요약 </div>
									<div class="cate">분야입력하세요</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="thumbnail"><img src="" alt=""></div>
									<div class="tit">제목1 입력하세요입력하세요입력하세요입력하세요</div>
									<div class="sub">서브2 요약 </div>
									<div class="cate">분야입력하세요</div>
								</a>
							</li>
						</ul>
						<a class="more_btn" href="column.html#column">목록 보기</a>
					</div>
				</section> -->
			</div>

			<div class="toast_popup">URL 복사가 완료 되었습니다</div>
			<!-- 내용 끝  -->