<!-- 내용 시작 -->
<div id="case_search" class="case search">
                <section class="sec01 sec_common">
                    <div class="search_wrap">
                        <!-- '검색키워드'에 실제 검색 키워드 넣어주세요 -->
						<h2 class="search_tit active">
                            <span class="p_color"></span> 에<br>
                            대한 검색 결과입니다.
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
                            <div class="cont">
								<div class="search_tit">형사 검색 결과 <span><?=$casesCrimeCount?></span> 건</div>
								<div class="search_cont">
									<ul class="case_list">
										<?php foreach ($casesCrime as $crime): ?>
											<li>
												<a href="/cases/view/<?= $crime['no'] ?>#detective">
													<div class="card_top">
														<div class="tag"><?= $crime['case_keyword'] ?></div>
														<div class="cate detective">형사</div>
													</div>
													<div class="card_mid">
														<div class="tit"><?= cu_highlight_matches($crime['case_number'], $search) ?></div>
														<div class="sub"><?= cu_highlight_matches($crime['description'], $search) ?></div>
													</div>
													<div class="card_btm">
														<div class="img"><img src="<?=$crime['expert_thumbnail']?>" alt="<?= $crime['expert_name'] ?> 사진"></div>
														<?= $crime['expert_name'] ?>
													</div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="pagin">
										<?= $pagerCasesCrime->links('casesCrime', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
							<div class="cont">
								<div class="search_tit">가사 검색 결과 <span><?=$casesDivorceCount?></span> 건</div>
								<div class="search_cont">
									<ul class="case_list">
										<?php foreach ($casesDivorce as $divorce): ?>
											<li>
												<a href="/cases/view/<?= $divorce['no'] ?>#lyrics">
													<div class="card_top">
														<div class="tag"><?= $divorce['case_keyword'] ?></div>
														<div class="cate lyrics">가사</div>
													</div>
													<div class="card_mid">
														<div class="tit"><?= cu_highlight_matches($divorce['case_number'], $search) ?></div>
														<div class="sub"><?= cu_highlight_matches($divorce['description'], $search) ?></div>
													</div>
													<div class="card_btm">
														<div class="img"><img src="<?=$divorce['expert_thumbnail']?>" alt="<?= $divorce['expert_name'] ?> 사진"></div>
														<?= $divorce['expert_name'] ?>
													</div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="pagin">
										<?= $pagerCasesDivorce->links('casesDivorce', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
							<div class="cont">
								<div class="search_tit">기타 검색 결과 <span><?=$casesEtcCount?></span> 건</div>
								<div class="search_cont">
									<ul class="case_list">
										<?php foreach ($casesEtc as $etc): ?>
											<li>
												<a href="/cases/view/<?= $etc['no'] ?>#etc">
													<div class="card_top">
														<div class="cate etc">기타</div>
													</div>
													<div class="card_mid">
														<div class="tit"><?= cu_highlight_matches($etc['case_number'], $search) ?></div>
														<div class="sub"><?= cu_highlight_matches($etc['description'], $search) ?></div>
													</div>
													<div class="card_btm">
														<div class="img"><img src="<?=$etc['expert_thumbnail']?>" alt="<?= $etc['expert_name'] ?> 사진"></div>
														<?= $etc['expert_name'] ?>
													</div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="pagin">
										<?= $pagerCasesEtc->links('casesEtc', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->