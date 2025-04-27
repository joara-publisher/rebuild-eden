            <!-- 내용 시작 -->
            <div id="news_search" class="news search">
				<section class="sec01 sec_banner">
                    <div class="banner"></div>
                </section>

                <section class="sec02 sec_common">
					<div class="search_wrap">
						<h2 class="search_tit active">
                            <span class="p_color"></span> 에<br>
                            대한 검색 결과입니다.
                        </h2>
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
                            <li><a href="/news#review">의뢰인 후기</a></li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap active">
                            <div class="cont">
								<div class="search_tit">언론속의 이든 검색 결과 <span><?=$countNews?></span> 건</div>
                                <div class="search_cont">
									<ul class="press_list">
										<?php foreach ($news as $new): ?>
											<li>
												<a href="/news/view/<?=$new['no']?>">
													<div class="thumbnail"><img src="<?=$thumbUrl.$new['thumbnail']?>"></div>
													
													<div class="txt_wrap">
														<div class="company"><?=$new['category']?></div>
														<div class="tit"><?=cu_highlight_matches($new['title'],$search)?></div>
														<div class="sub"><?=cu_highlight_matches(cu_conv_shorts($new['contents']),$search)?></div>
														<div class="date"><?=cu_conv_date($new['create_date'])?></div>
													</div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="pagin">
										<?= $pagerNews->links('news', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
							<div class="cont">
								<div class="search_tit">의뢰인 후기 검색 결과 <span><?=$countReviews?></span> 건</div>
                                <div class="search_cont">
									<ul class="review_detail_list">
										<?php foreach ($reviews as $rev): ?>
											<li>
												<a href="/news/review/<?=$rev['no']?>">
													<img class="img" src="<?=$thumbUrl.$rev['thumbnail']?>" alt="리뷰 이미지">
													<div class="tit"><?=cu_highlight_matches($rev['title'],$search)?></div>
													<div class="sub"><?=cu_highlight_matches(cu_conv_shorts($rev['contents']),$search)?></div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
									<div class="pagin">
										<?= $pagerReviews->links('reviews', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->