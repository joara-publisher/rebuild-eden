			<!-- 내용 시작 -->
			<div id="consult" class="consult">
                <section class="sec01 sec_consult">
                    <div class="sec_wrap">
                        <div class="tab_menu">
                            <ul>
                                <li data-tab-name="visit">방문상담</li>
                                <li data-tab-name="counselling">게시판 상담</li>
                            </ul>
                        </div>
						<div class="tab_cont">
							<div class="cont_wrap">
								<div class="cont_tit">방문상담</div>
								<div class="cont">
									<div class="roadmap_wrap">
										<div class="maps">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.9430856498793!2d127.03036946270592!3d37.48566942194297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca1493b8e9c11%3A0x4aba8c932d69d066!2z7ZW064-Z67mM65Sp!5e0!3m2!1sko!2skr!4v1729055494947!5m2!1sko!2skr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
											<iframe style="display: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.154344155888!2d127.06388621270006!3d37.291475671994846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b5b13d373e1ad%3A0x8fbd3f4b48e1f519!2z6rK96riw64-EIOyImOybkOyLnCDsmIHthrXqtawg6rSR6rWQ7KSR7JWZ66GcMjQ467KI6ri4IDctMg!5e0!3m2!1sko!2skr!4v1724308430127!5m2!1sko!2skr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
										</div>
										<div class="adds">
											<ul>
												<li>
													<div class="tit">서울주사무소</div>
													<div class="add">서울 서초구 강남대로 251 해동빌딩 10층
													</div>
													<a class="go_to_consult" href="#visit_apply">상담 예약하기</a>
												</li>
												<li>
													<div class="tit">수원분사무소</div>
													<div class="add">경기 수원시 영통구 광교중앙로248번길 7-2 C동 504호</div>
													<a class="go_to_consult" href="#visit_apply">상담 예약하기</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="rv_wrap" id="visit_apply">
										<form action="" method="POST">
											<input type="hidden" name="type" value="visit">
											<input type="hidden" name="sites" value="이든">
											<div class="form_inner">
												<div class="cal_wrap">
													<div class="tit">
														<img src="/img/consult/cal_ico.svg" alt="예약 날짜· 시간 선택 아이콘">
														예약 날짜· 시간 선택
													</div>
													<div class="cal">
														<div id="reservation_date"></div>
														<input type="hidden" name="date" id="reserved_date" /><!--선택한 날짜는 이곳에 입력됩니다. -->
													</div>
													<div class="btm">
														<div class="date_select">
															<span>0000년 00월 00일</span>을 선택하셨습니다.
														</div>
														<div class="date_time_wrap">
															<input type="hidden" name="time" id="reservation_time" /><!--선택한 시간은 이곳에 입력됩니다. -->
															<span>오전</span>
															<ul class="date_time">
																<!-- input 에 idsabled 추가하면 회색으로 변합니다-->
																<li>
																	<label>
																		<input type="checkbox" value="오전 9:00" />
																		<div class="item">9:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오전 10:00" />
																		<div class="item">10:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오전 11:00" />
																		<div class="item">11:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오전 12:00" />
																		<div class="item">12:00</div>
																	</label>
																</li>
															</ul>
															<span>오후</span>
															<ul class="date_time">
																<!-- input 에 disabled 추가하면 회색으로 변합니다-->
																<li>
																	<label>
																		<input type="checkbox" value="오후 1:00" />
																		<div class="item">1:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오후 2:00" />
																		<div class="item">2:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오후 3:00" />
																		<div class="item">3:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오후 4:00" />
																		<div class="item">4:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오후 5:00" />
																		<div class="item">5:00</div>
																	</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" value="오후 6:00" />
																		<div class="item">6:00</div>
																	</label>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="apply_wrap">
													<div class="tit">
														<img src="/img/consult/apply_ico.svg" alt="상담신청 아이콘">
														상담신청
													</div>
													<div class="form_wrap">
														<ul class="form_list">
															<li>
																<div class="noti">*표시는 필수 항목입니다.</div>
																<label for="name">이름<span> *</span></label>
																<input type="text" id="name" class="ipt" name="name" placeholder="이름을 입력해주세요.">
															</li>
															<li>
																<label for="phone">휴대폰 번호<span> *</span></label>
																<input type="text" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
															</li>
															<li>
																<label for="category">사건분야<span> *</span></label>
																<select class="ipt" id="category" name="selectCategory">
																	<option value="">사건분야를 선택해주세요.</option>
																	<option value="이혼">이혼</option>
																	<option value="상간">상간</option>
																	<option value="상속">상속</option>
																	<option value="형사">형사</option>
																	<option value="성범죄피해자">성범죄피해자</option>
																	<option value="성범죄피의자">성범죄피의자</option>
																	<option value="회생·파산">회생·파산</option>
																	<option value="민사">민사</option>
																</select>
															</li>
															<li>
																<label for="location">사무소 선택</label>
																<select class="ipt" id="location" name="location">
																	<option value="">상담 장소를 선택해주세요.</option>
																	<option value="서울주사무소 (서초)">서울주사무소 (서초)</option>
																	<option value="수원분사무소 (광교)">수원분사무소 (광교)</option>
																</select>
															</li>
															<li>
																<label for="content">문의내용</label>
																<textarea class="ipt" id="content" name="content" placeholder="상담 받으실 내용을 입력해주세요."></textarea>
															</li>
														</ul>
														<label class="agree_box">
															<input type="checkbox" name="agree">
															<div class="txt">개인정보 수집 및 이용에 동의합니다.</div>
														</label>
													</div>
												</div>
												<div class="btn_wrap">
													<button type="button" class="submit_btn ga_visit">상담신청완료</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="cont_wrap">
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
														<td><?=$b['title']?></td>
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
													<th>상담여부</th>
													<th>작성자</th>
													<th>작성일</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$j = 1;
												foreach($boards as $b):
												?>
													<tr onClick="location.href='/consult/check/<?=$b['no']?>'">
														<td><?=sprintf('%04d', $i);?></td>
														<td><?=$b['title']?></td>
														<td><div class="status <?=($b['status']=='complete')? '' : 'not_' ?>complete"><?=($b['status']=='complete')? '접수완료' : '상담신청' ?></div></td>
														<td><?=cu_mask_name($b['name'])?></td>
														<td><?=cu_conv_date($b['create_date'])?></td>
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