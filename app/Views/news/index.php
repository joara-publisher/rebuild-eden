            <!-- 내용 시작 -->
            <div id="news" class="news">
				<section class="sec01 sec_banner">
                    <div class="banner"></div>
                </section>

                <section class="sec02 sec_common">
                    <div class="search_wrap">
                        <h2 class="press_tit active">언론속의 이든</h2>
						<h2 class="review_tit">의뢰인 후기</h2>
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
                            <li data-tab-name="press">언론속의 이든</li>
                            <li data-tab-name="review">의뢰인 후기</li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap">
                            <div class="cont_tit">언론속의 이든</div>
                            <div class="cont">
                                <ul class="press_list">
									<?php foreach ($news as $new): ?>
										<li>
											<a href="/news/view/<?=$new['no']?>">
												<div class="thumbnail"><img src="<?=$thumbUrl.$new['thumbnail']?>"></div>
												
												<div class="txt_wrap">
													<div class="company"><?=$new['category']?></div>
													<div class="tit"><?=$new['title']?></div>
													<div class="sub"><?=cu_conv_shorts($new['contents'])?></div>
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
                        <div class="cont_wrap">
							<div class="cont_tit">의뢰인 후기</div>
							<div class="cont">
								<div class="review_preview">
									<div class="review_list_wrap pc_list" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
										<div class="review_list swiper-wrapper">
											<div class="review_item swiper-slide"><img class="img" src="/img/review_01.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_02.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_03.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_04.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_05.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_06.jpg" alt="리뷰" /></div>
					
											<div class="review_item swiper-slide"><img class="img" src="/img/review_01.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_02.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_03.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_04.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_05.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_06.jpg" alt="리뷰" /></div>
										</div>
									</div>
									<div class="review_list_wrap pc_list" dir="rtl"  data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
										<div class="review_list swiper-wrapper">
											<div class="review_item swiper-slide"><img src="/img/review_07.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_08.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_09.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_10.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_11.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_12.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_13.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_14.jpg" alt="리뷰" /></div>
					
											<div class="review_item swiper-slide"><img src="/img/review_07.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_08.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_09.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_10.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_11.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_12.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_13.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_14.jpg" alt="리뷰" /></div>
										</div>
									</div>
					
									<div class="review_list_wrap mo_list" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
										<div class="review_list swiper-wrapper">
											<div class="review_item swiper-slide"><img class="img" src="/img/review_01.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_02.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_03.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_04.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_05.jpg" alt="리뷰" /></div>
					
											<div class="review_item swiper-slide"><img class="img" src="/img/review_01.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_02.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_03.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_04.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_05.jpg" alt="리뷰" /></div>
										</div>
									</div>
									<div class="review_list_wrap mo_list" dir="rtl"  data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
										<div class="review_list swiper-wrapper">
											<div class="review_item swiper-slide"><img src="/img/review_06.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_07.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_08.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_09.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_10.jpg" alt="리뷰" /></div>
					
											<div class="review_item swiper-slide"><img src="/img/review_06.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_07.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_08.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_09.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_10.jpg" alt="리뷰" /></div>
										</div>
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
									<div class="review_list_wrap mo_list" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
										<div class="review_list swiper-wrapper">
											<div class="review_item swiper-slide"><img src="/img/review_11.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_12.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_13.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_14.jpg" alt="리뷰" /></div>
					
											<div class="review_item swiper-slide"><img src="/img/review_11.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_12.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_13.jpg" alt="리뷰" /></div>
											<div class="review_item swiper-slide"><img src="/img/review_14.jpg" alt="리뷰" /></div>
										</div>
									</div>
								</div>

								<div class="review_detail">
									<ul class="review_detail_list">
										<?php foreach ($reviews as $rev): ?>
											<li>
												<a href="/news/review/<?=$rev['no']?>">
													<img class="img" src="<?=$thumbUrl.$rev['thumbnail']?>" alt="리뷰 이미지">
													<div class="tit"><?=$rev['title']?></div>
													<div class="sub"><?=cu_conv_shorts($rev['contents'])?></div>
												</a>
											</li>
										<?php endforeach ?>
									</ul>
								</div>
								
								<div class="pagin">
									<?= $pagerReviews->links('reviews', 'custom_pagin') ?>
								</div>
								<button class="more_btn">더보기</button>
							</div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->