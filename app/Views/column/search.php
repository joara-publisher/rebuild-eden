<!-- 내용 시작 -->
<div id="column_search" class="column search">
				<section class="sec01 sec_banner">
                    <div class="banner column"></div>
                </section>

                <section class="sec02 sec_common">
                    <div class="search_wrap">
						<h2 class="search_tit active">
                            <span class="p_color"></span> 에<br>
                            대한 검색 결과입니다.
                        </h2>
                        <div class="search_box">
                            <form action="/column/search">
                                <input type="text" name="search" placeholder="검색해보세요" value="">
                                <button class="delete_btn"></button>
                                <button class="search_btn"></button>
                            </form>
                        </div>
                    </div>
					<div class="tab_menu">
                        <ul>
                            <li><a href="/column#faq">자주 묻는 질문</a></li>
                            <li><a href="/column#column">이든 칼럼</a></li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap active">
							<div class="cont">
                                <div class="search_tit">자주 묻는 질문 검색 결과 <span><?=$faqsCount?></span> 건</div>
                                <div class="search_cont">
                                    <ul class="faq_list">
                                        <?php foreach($faqs as $faq) : ?>
                                            <li>
                                                <div class="hash"><?=$faq['category']?></div>
                                                <div class="tit"><?=cu_highlight_matches($faq['title'],$search)?></div><!-- 검색 매칭 추가 <span class="p_color"></span>-->
                                                <div class="desc"><?= cu_highlight_matches($faq['contents'],$search) ?></div><!-- 검색 매칭 추가-->
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
                            <div class="cont">
                                <div class="search_tit">이든 칼럼 검색 결과 <span><?=$columnsCount?></span> 건</div>
                                <div class="search_cont">
                                    <ul class="column_list">
                                        <?php foreach($columns as $col) : ?>
                                            <li>
                                                <a href="/column/view/<?=$col['no']?>">
                                                    <div class="thumbnail"><img src="<?=$thumbUrl.$col['thumbnail']?>" alt=""></div>
                                                    <div class="tit"><?=cu_highlight_matches($col['title'],$search)?></div><!-- 검색 매칭 추가 <span class="p_color"></span>-->
                                                    <div class="sub"><?=cu_highlight_matches(cu_conv_shorts($col['contents']),$search)?></div>
                                                    <div class="cate"><?=$col['category']?></div>
                                                </a>
                                            </li>
                                        <?php endforeach?>
                                    </ul>
                                    <div class="pagin">
                                        <?= $pagerColumns->links('columns', 'custom_pagin') ?>
                                    </div>
                                    <button class="more_btn">더보기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->