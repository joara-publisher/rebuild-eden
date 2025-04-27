            <!-- 내용 시작 -->
            <div id="review_view" class="press view">
				<section class="sec01 sec_banner">
                    <div class="banner"></div>
                </section>

                <section class="sec02 sec_common">
                    <div class="search_wrap">
                        <h2 class="active">이든 NEWS</h2>
                        <div class="search_box">
                            <form action="/news/search">
                                <input type="text" name="search" placeholder="검색해보세요" value="">
                                <button class="delete_btn"></button>
                                <button class="search_btn"></button>
                            </form>
                        </div>
                    </div>
                    <div class="tab_menu">
                        <ul>
                            <li><a href="/news#press">언론속의 이든</a></li>
                            <li class="active"><a href="/news#review">의뢰인 후기</a></li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap active">
                            <div class="cont_tit">언론속의 이든</div>
                            <div class="cont">
								<div class="view_info">
									<ul class="desc_wrap">
										<li class="date"><?=cu_conv_date($view['create_date'])?></li>
									</ul>
									<div class="tit"><?=$view['title']?></div>
									<!-- <div class="sub">소제목소제목소제목소제목소제목소제목소제목소제목소제목</div> -->
									<!-- <div class="lawyer_wrap">
										<img src="/img/lawyer_ex.png" alt="">
										<span>담당: 양지현 변호사</span>
									</div> -->
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
                                    <li><a class="prev_btn" href="<?= ($prev<$view['no'] && $prev>0)? '/news/review/'.$prev : '#' ?>"></a>이전 글</li>
                                    <li>다음 글<a class="next_btn" href="<?= ($next>$view['no'])? '/news/review/'.$next : '#'?>"></a></li>
									</ul>
								</div>
                                <a class="more_btn" href="/news#review">목록 보기</a>
							</div>
                        </div>
                    </div>
                </section>
			</div>
            <div class="toast_popup">URL 복사가 완료 되었습니다</div>
			<!-- 내용 끝  -->