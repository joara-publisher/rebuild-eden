<!-- 내용 시작 -->
<div id="case" class="case">
                <section class="sec01 sec_common">
                    <div class="search_wrap">
                        <h2 class="active">법무법인 이든의 실력,<br>
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
                            <li data-tab-name="detective">형사</li>
                            <li data-tab-name="lyrics">가사</li>
							<li data-tab-name="etc">기타</li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <div class="cont_wrap">
                            <div class="cont_tit">형사</div>
                            <div class="cont">
								<div class="hash_wrap">
									<span class="<?=($category=='성범죄 가해자') ? 'active' : ''?>"><a href="/cases?category=성범죄 가해자#detective">#성범죄 가해자</a></span>
									<span class="<?=($category=='성범죄 피해자') ? 'active' : ''?>"><a href="/cases?category=성범죄 피해자#detective">#성범죄 피해자</a></span>
									<span class="<?=($category=='학교폭력') ? 'active' : ''?>"><a href="/cases?category=학교폭력#detective">#학교폭력</a></span>
									<span class="<?=($category=='사기배임횡령') ? 'active' : ''?>"><a href="/cases?category=사기배임횡령#detective">#사기배임횡령</a></span>
									<span class="<?=($category=='마약') ? 'active' : ''?>"><a href="/cases?category=마약#detective">#마약</a></span>
									<span class="<?=($category=='음주운전') ? 'active' : ''?>"><a href="/cases?category=음주운전#detective">#음주운전</a></span>
								</div>
								<ul class="case_list">
									<?php foreach ($casesCrime as $crime): ?>
										<li>
											<a href="/cases/view/<?= $crime['no'] ?>">
												<div class="card_top">
													<div class="tag"><?= explode(',',$crime['tags'])[0] ?></div>
													<div class="cate detective">형사</div>
												</div>
												<div class="card_mid">
													<div class="tit"><?= $crime['case_number'] ?></div>
													<div class="sub"><?= $crime['description'] ?></div>
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
								<button class="more_btn"  id="load-more" data-type="crime">더보기</button>
                            </div>
                        </div>
						<div class="cont_wrap">
                            <div class="cont_tit">가사</div>
                            <div class="cont">
								<div class="hash_wrap">
									<span class="<?=($category=='이혼') ? 'active' : ''?>"><a href="/cases?category=이혼#lyrics">#이혼</a></span>
									<span class="<?=($category=='상속') ? 'active' : ''?>"><a href="/cases?category=상속#lyrics">#상속</a></span>
								</div>
								<ul class="case_list">
									<?php foreach ($casesDivorce as $divorce): ?>
										<li>
											<a href="/cases/view/<?= $divorce['no'] ?>">
												<div class="card_top">
													<div class="tag"><?= explode(',',$divorce['tags'])[0] ?></div>
													<div class="cate lyrics">가사</div>
												</div>
												<div class="card_mid">
													<div class="tit"><?= $divorce['case_number'] ?></div>
													<div class="sub"><?= $divorce['description'] ?></div>
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
								<button class="more_btn"  id="load-more" data-type="divorce">더보기</button>
                            </div>
                        </div>
						<div class="cont_wrap">
                            <div class="cont_tit">기타</div>
                            <div class="cont">
								<ul class="case_list">
									<?php foreach ($casesEtc as $etc): ?>
										<li>
											<a href="/cases/view/<?= $etc['no'] ?>">
												<div class="card_top">
													<div class="cate etc">기타</div>
												</div>
												<div class="card_mid">
													<div class="tit"><?= $etc['case_number'] ?></div>
													<div class="sub"><?= $etc['description'] ?></div>
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
								<button class="more_btn" id="load-more" data-type="etc">더보기</button>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->
<script>
    $(document).ready(function() {
        var offset = 10; // Initial offset

        $('#load-more').click(function() {
            $.ajax({
                url: '<?= base_url('cases/loadMoreCases') ?>',
                type: 'POST',
                data: {
					dataType: $(this).data('type'),
                    offset: offset,
                    <?= csrf_token() ?>: '<?= csrf_hash() ?>' // Include CSRF token
                },
                dataType: 'json',
                success: function(data) {
                    if (data.length > 0) {
                        $.each(data, function(index, caseData) {
                            $('#cases-container').append('<p>' + caseData.case_number + '</p>');
                        });
                        offset += 10; // Increase offset for next request
                    } else {
                        $('#load-more').hide(); // Hide button if no more data
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + error);
                }
            });
        });
    });
</script>