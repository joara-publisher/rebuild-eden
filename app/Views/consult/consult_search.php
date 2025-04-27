            <!-- 내용 시작 -->
            <div id="consult_search" class="consult search">
                <section class="sec01 sec_consult">
                    <div class="sec_wrap">
                        <div class="tab_menu">
                            <ul>
                                <li data-tab-name="visit"><a href="/consult#visit">방문상담</a></li>
                                <li data-tab-name="counselling"><a href="/consult#counselling">게시판 상담</a></li>
                            </ul>
                        </div>
						<div class="tab_cont">
							<div class="cont_wrap active">
								<div class="cont_tit">게시판 상담</div>
								<div class="cont_sub_tit">익명 100% 보장, 모든 상담은 변호사가 직접 답변 드립니다.</div>
								<div class="cont">
									<div class="search_box">
										<form action="/consult/search">
											<input type="text" name="search" placeholder="검색해보세요" value="">
											<button class="delete_btn"></button>
											<button class="search_btn"></button>
										</form>
									</div>
									<div class="btn_wrap">
										<a class="go_to_counselling" href="/consult/write">게시판 상담 신청하기</a>
									</div>
									<div class="table_wrap pc_table">
										<table style="table-layout: fixed">
											<thead>
												<tr>
													<th>번호</th>
													<th>제목</th>
													<th>작성자</th>
													<th>작성일</th>
													<th>상담여부</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$i = 1;
												foreach($boards as $b):
												?>
													<tr onClick="location.href='/consult/check/<?=$b['no']?>'">
														<td><?=sprintf('%04d', $i);?></td>
														<td style="width:65%; text-overflow:ellipsis; overflow:hidden; white-space:nowrap"><?=cu_highlight_matches($b['title'],$search)?></td>
														<td><?=cu_mask_name($b['name'])?></td>
														<td><?=cu_conv_date($b['create_date'])?></td>
														<td><div class="status <?=($b['status']=='complete')? '' : 'not_' ?>complete"><?=($b['status']=='complete')? '접수완료' : '상담신청' ?></div></td>
													</tr>
												<?php 
												$i++;
												endforeach 
												?>
											</tbody>
										</table>
									</div>
									<div class="table_wrap mo_table">
										<table style="table-layout: fixed">
											<thead>
												<tr>
													<th>번호</th>
													<th>제목</th>
													<th>작성자</th>
													<th>작성일</th>
													<th>상담여부</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$j = 1;
												foreach($boards as $b):
												?>
													<tr onClick="location.href='/consult/check/<?=$b['no']?>'">
														<td><?=sprintf('%04d', $i);?></td>
														<td style="text-overflow:ellipsis; overflow:hidden; white-space:nowrap"><?=cu_highlight_matches($b['title'],$search)?></td>
														<td><?=cu_mask_name($b['name'])?></td>
														<td><?=cu_conv_date($b['create_date'])?></td>
														<td><div class="status <?=($b['status']=='complete')? '' : 'not_' ?>complete"><?=($b['status']=='complete')? '접수완료' : '상담신청' ?></div></td>
													</tr>
												<?php 
												$j++;
												endforeach 
												?>
											</tbody>
										</table>
									</div>
									<div class="pagin">
										<?= $pagerBoards->links('boards', 'custom_pagin') ?>
									</div>
									<button class="more_btn">더보기</button>
								</div>
							</div>
						</div>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->