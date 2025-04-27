<!-- 내용 시작 -->
<div id="counselling_write" class="counselling write">
                <section class="sec01 sec_form">
                    <div class="sec_wrap">
						<div class="form_sub_tit">당연한 것을 당연하도록</div>
						<div class="form_tit">
							무엇이든 물어보세요.<br>
							익명 100% 보장, <br class="m_br" />모든 상담은 변호사가 직접 답변 드립니다.
						</div>
                        <form action="/consult/upload" onsubmit="return csApply(this)" method="POST" enctype="multipart/form-data">
							<ul class="form_list">
								<li>
									<label for="name"><span>[필수] </span>이름</label>
									<input type="text" id="name" class="ipt" name="name" placeholder="이름을 입력해주세요.">
								</li>
								<li>
									<label for="pwd"><span>[필수] </span>비밀번호</label>
									<input type="password" id="pwd" class="ipt" name="pwd" placeholder="비밀번호 입력해주세요.">
								</li>
								<li>
									<label for="phone"><span>[필수] </span>휴대폰 번호</label>
									<input type="text" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
								</li>
								<li>
									<label for="category"><span>[필수] </span> 사건분야</label>
									<select class="ipt" id="category" name="category">
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
									<label for="title">제목</label> 
									<!-- <span class="noti">10자 이상</span> -->
									<input type="text" id="title" class="ipt" name="title" placeholder="제목을 작성해주세요.">
								</li>
								<li>
									<label for="content">문의내용</label> 
									<!-- <span class="noti">50자 이상</span> -->
									<textarea class="ipt" id="content" name="content" placeholder="상담 받으실 내용을 입력해주세요."></textarea>
								</li>
								<li>
									<label for="file1">첨부파일1</label>
									<div class="file_wrap">
										<input type="text" id="fake_file1" class="ipt" name="fake_file1" placeholder="첨부파일을 등록해주세요.">
										<div class="file-input">
											<button type="button" class="upload_btn"></button>
											<button type="button" class="del_btn"></button>
											<input type="file" name="file1" id="file1" value="" class="file_hidden">
										</div>
									</div>
								</li>
								<li>
									<label for="file2">첨부파일2</label>
									<div class="file_wrap">
										<input type="text" id="fake_file2" class="ipt" name="fake_file2" placeholder="첨부파일을 등록해주세요.">
										<div class="file-input">
											<button type="button" class="upload_btn"></button>
											<button type="button" class="del_btn"></button>
											<input type="file" name="file2" id="file2" value="" class="file_hidden">
										</div>
									</div>
								</li>
								<li>
									<label for="file3">첨부파일3</label>
									<div class="file_wrap">
										<input type="text" id="fake_file3" class="ipt" name="fake_file3" placeholder="첨부파일을 등록해주세요.">
										<div class="file-input">
											<button type="button" class="upload_btn"></button>
											<button type="button" class="del_btn"></button>
											<input type="file" name="file3" id="file3" value="" class="file_hidden">
										</div>
									</div>
								</li>
								<li>
									<label for="file4">첨부파일4</label>
									<div class="file_wrap">
										<input type="text" id="fake_file4" class="ipt" name="fake_file4" placeholder="첨부파일을 등록해주세요.">
										<div class="file-input">
											<button type="button" class="upload_btn"></button>
											<button type="button" class="del_btn"></button>
											<input type="file" name="file4" id="file4" value="" class="file_hidden">
										</div>
									</div>
								</li>
								<li>
									<label for="file5">첨부파일5</label>
									<div class="file_wrap">
										<input type="text" id="fake_file5" class="ipt" name="fake_file5" placeholder="첨부파일을 등록해주세요.">
										<div class="file-input">
											<button type="button" class="upload_btn"></button>
											<button type="button" class="del_btn"></button>
											<input type="file" name="file5" id="file5" value="" class="file_hidden">
										</div>
									</div>
								</li>
								<li>
									<div class="agree_wrap">
										개인정보처리방침 
										<label class="agree_box">
											<input type="checkbox" name="agree">
											<div class="txt">개인정보 수집 및 이용에 동의합니다.</div>
										</label>
									</div>
									<div class="agree_cont">
										<div class="agree_cont_inner">
											법무법인 이든 (이하 "회사"라 함)은 귀하의 개인정보 보호를 중요시하며, 『정보통신망 이용촉진 및 정보보호 등에 관한 법률』, 『개인정보 보호법』, 『통신비밀보호법』, 『전기통신사업법』 등 관련 법령을 준수하고 있습니다. 본 개인정보취급방침을 통해 귀하가 제공하는 개인정보의 이용 용도 및 방식, 개인정보 보호를 위한 조치를 안내드립니다.<br><br>

											회사의 개인정보취급방침은 관련 법령 및 회사의 내부 방침 변경에 따라 수시로 개정될 수 있으며, 변경사항은 홈페이지를 통해 공지됩니다. 사이트 방문 시 수시로 확인하시기 바랍니다.<br><br>

											<b>1. 수집하는 개인정보 항목 및 수집방법</b><br><br>

											**1.1 수집하는 개인정보의 항목 및 이용목적**<br><br>

											- **상담 항목**<br>
											- 수집 목적: 각종 상담을 위한 기초정보 수집<br>
											- 수집 항목: 이름, 휴대전화(필수), 이메일, 주소, 거주지역, 생년월일, 성별, 수입, 부채 및 자산 등 법률 상담 정보(선택)<br><br>

											- **게시판 글 작성시 필수 항목**<br>
											- 수집 목적: 자세한 상담을 위한 이메일 또는 게시판 및 유선 상담 용도<br>
											- 수집 항목: 이름, 이메일, 휴대전화 번호, 단말기 정보 및 환경정보<br><br>

											- **기타**<br>
											- 수집 목적: 사용자 홈페이지 이용, 사이트 이용에 대한 문의 및 민원 처리<br>
											- 수집 항목: IP주소, 접속로그, 단말기 및 환경정보, 서비스 이용기록, 쿠키<br><br>

											**1.2 개인정보 수집방법**<br><br>

											- 홈페이지 고객 문의/고충 처리 시 전화 또는 인터넷을 통한 상담<br><br>

											<b>#### 2. 수집한 개인정보의 공유 및 제공</b><br><br>

											회사는 고객님의 개인정보를 사전 동의 없이 제3자에게 제공하지 않습니다. 다만, 법령에 따라 국가기관, 수사기관 등의 요구가 있는 경우 예외로 합니다.<br><br>

											<b>#### 3. 개인정보의 보유 및 이용기간</b><br><br>

											회사는 개인정보를 수집 시 고지한 범위 내에서 이용하며, 보유기간은 다음과 같습니다:<br><br>

											- 계약 또는 청약철회 등에 관한 기록: 5년 (전자상거래 등에서의 소비자보호에 관한 법률)<br>
											- 소비자의 불만 또는 분쟁처리에 관한 기록: 3년<br>
											- 방문에 관한 기록: 3개월 (통신비밀보호법)<br><br>

											<b>#### 4. 개인정보의 파기 절차 및 방법</b><br><br>

											회사는 개인정보를 안전하게 처리하며, 처리 목적 달성 후에는 다음과 같은 방법으로 파기합니다:<br><br>

											- 종이에 출력된 개인정보: 분쇄기로 분쇄<br>
											- 전자적 파일 형태: 재생 불가능한 기술적 방법으로 삭제<br><br>

											<b>#### 5. 개인정보의 위탁</b><br><br>

											<b>#### 6. 고객 및 법정대리인의 권리</b><br><br>

											고객은 언제든지 자신의 개인정보를 조회하거나 수정할 수 있으며, 가입 해지를 요청할 수 있습니다. 개인정보의 오류에 대한 정정을 요청하신 경우, 정정이 완료되기 전까지 해당 개인정보를 이용 또는 제공하지 않습니다.<br><br>

											<b>#### 7. 쿠키 자동수집 장치의 설치/운영 및 거부에 관한 사항</b><br><br>

											회사는 쿠키를 사용하여 귀하의 홈페이지 이용 시 편의를 제공합니다. 쿠키 설정 거부는 웹 브라우저의 옵션을 통해 가능합니다. 다만, 쿠키 설치를 거부할 경우 일부 서비스 이용에 어려움이 있을 수 있습니다.<br><br>

											<b>#### 8. 기술적인 부분 관련 내용</b><br><br>

											회사는 개인정보의 안전성 확보를 위해 다음과 같은 대책을 강구하고 있습니다:<br><br>

											- 비밀번호 암호화<br>
											- 해킹 등에 대비한 대책<br>
											- 취급 직원의 최소화 및 교육<br>
											- 개인정보보호전담기구 운영<br><br>

											<b>#### 9. 개인정보에 관한 민원서비스</b><br><br>

											개인정보와 관련된 민원은 다음 부서 및 담당자에게 신고할 수 있습니다:<br><br>

											- ** 개인정보 관리담당자** : 정윤, 양지현, 박보람 변호사<br>
											- ** 직급 : 변호사<br>
											- ** 연락처** : 1668-2089<br>
											- ** 이메일** : teamthrag@gmail.com<br><br>

											기타 개인정보 침해에 대한 신고나 상담은 개인정보침해신고센터(전화: 118 또는 1336)로 문의하시기 바랍니다.<br><br>

											<b>#### 타 사이트에 대한 링크 안내</b><br><br>

											회사는 외부사이트 및 자료에 대한 통제권이 없으며, 타 사이트의 개인정보취급방침과 무관합니다. 새로운 사이트의 정책을 확인하시기 바랍니다.<br><br>

											본 개인정보취급방침의 변경 및 효력 발생일은 2024년 8월 12일 입니다.
										</div>
									</div>
								</li>
							</ul>
							<button type="submit" class="btn_cs_apply ga_board">상담신청완료</button>
						</form>
                    </div>
                </section>
			</div>
			<!-- 내용 끝  -->
			 <script>
				function csApply(data){

					let formData = new FormData(data);

					let name = formData.get('name');
					let pwd = formData.get('pwd');
					let phone = formData.get('phone');
					let category = formData.get('category');
					let agree = $("input[name='agree']").is(':checked');

					if (!name) {
						Swal.fire({
							icon: "warning",
							text: "이름을 입력하세요.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						});
						return false;
					}	else if (!pwd) {
							Swal.fire({
								icon: "warning",
								text: "비밀번호를 입력하세요.",
								confirmButtonColor: "#2B4039",
								confirmButtonText: "확인",
						});
						return false;
					} else if (!phone) {
						Swal.fire({
							icon: "warning",
							text: "휴대폰 번호를 입력하세요.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						});
						return false;
					} else if (!category) {
						Swal.fire({
							icon: "warning",
							text: "사건분야를 선택하세요.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						});
						return false;
					}  else if (agree == false) {
						Swal.fire({
							icon: "warning",
							text: "개인정보 수집 및 이용목적 동의에 체크해주세요.",
							confirmButtonColor: "#2B4039",
							confirmButtonText: "확인",
						});
						return false;
					}else{
						return true;
					}
					return true;
				};
			 </script>