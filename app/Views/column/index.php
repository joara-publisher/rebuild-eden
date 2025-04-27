<!-- 내용 시작 -->
<div id="column" class="column">
				<section class="sec01 sec_banner">
                    <div class="banner faq"></div>
                </section>

                <section class="sec02 sec_common">
                    <div class="search_wrap">
                        <h2 class="faq_tit">법무법인 이든은<br>
                            무엇이든 답변 드립니다<span>.</span>
                        </h2>
						<h2 class="column_tit">법무법인 이든은<br>
                            무엇이든 알려드립니다<span>.</span>
                        </h2>
                        <div class="search_box">
                            <form action="/column/search" method="GET">
                                <input type="text" name="search" placeholder="검색해보세요" value="">
                                <button class="delete_btn"></button>
                                <button class="search_btn"></button>
                            </form>
                        </div>
                    </div>
                    <div class="tab_menu">
                        <ul>
                            <li data-tab-name="faq">자주 묻는 질문</li>
                            <li data-tab-name="column">이든 칼럼</li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap">
							<div class="hash_wrap">
								<span class="<?=($category == '형사기타')? 'active' : '' ?>"><a href="/column?category=형사기타">#형사기타</a></span>
								<span class="<?=($category == '성범죄')? 'active' : '' ?>"><a href="/column?category=성범죄#faq">#성범죄</a></span>
								<span class="<?=($category == '이혼')? 'active' : '' ?>"><a href="/column?category=이혼#faq">#이혼</a></span>
								<span class="<?=($category == '상속')? 'active' : '' ?>"><a href="/column?category=상속#faq">#상속</a></span>
								<span class="<?=($category == '민사')? 'active' : '' ?>"><a href="/column?category=민사#faq">#민사</a></span>
								<span class="<?=($category == '음주운전')? 'active' : '' ?>"><a href="/column?category=음주운전#faq">#음주운전</a></span>
								<span class="<?=($category == '마약')? 'active' : '' ?>"><a href="/column?category=마약#faq">#마약</a></span>
							</div>
							
                            <div class="cont_tit">자주 묻는 질문</div>
                            <div class="cont">
                                <ul class="faq_list">
									<?php foreach ($faqs as $faq): ?>
										<li>
											<div class="hash"><?= $faq['category'] ?></div>
											<div class="tit"><?= $faq['title'] ?></div>
											<div class="desc"><?= $faq['contents'] ?></div>
											<button class="btn"></button>
										</li>
                                    <?php endforeach ?>
                                </ul>
								<div class="pagin">
									<?= $pagerFaqs->links('faqs', 'custom_pagin') ?>
								</div>
								<button class="more_btn">더보기</button>
                            </div>
                        </div>
                        <div class="cont_wrap">
							<div class="cont_tit">이든 칼럼</div>
							<div class="cont">
								<ul class="column_list">
									<?php foreach ($columns as $column): ?>
										<li>
											<a href="column/view/<?=$column['no']?>">
												<div class="thumbnail"><img src="<?= $thumbUrl.$column['thumbnail'] ?>" alt=""></div>
												<div class="tit"><?= $column['title'] ?></div>
												<div class="sub"><?= cu_conv_shorts($column['contents']) ?></div>
												<div class="cate"><?= $column['category'] ?></div>
											</a>
										</li>
                                    <?php endforeach ?>
								</ul>
								<div class="pagin">
									<?= $pagerFaqs->links('columns', 'custom_pagin') ?>
								</div>
								<button class="more_btn">더보기</button>
							</div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->