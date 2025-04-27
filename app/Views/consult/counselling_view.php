<!-- 내용 시작 -->
<div id="counselling_view" class="counselling view">
	
	<section class="sec02 sec_view">
		<div class="sec_wrap">
			<div class="tab_menu">
				<ul>
					<li><a href="/consult#visit">방문상담</a></li>
					<li class="active"><a href="/consult#counselling">게시판 상담</a></li>
				</ul>
			</div>
			<div class="tab_cont">
				<div class="cont_tit">게시판 상담</div>
				<div class="cont_sub_tit">익명 100% 보장, 모든 상담은 변호사가 직접 답변 드립니다.</div>
				<div class="cont">
					<div class="view_info">
						<ul class="desc_wrap">
							<li class="cate"><?=$view['visit_location']?></li>
							<li class="date"><?=cu_conv_date($view['create_date'])?></li>
						</ul>
						<div class="tit"><?=$view['title']?></div>
					</div>
					<div class="view_inner">
						<div class="question_txt"><?=$view['contents']?></div>
						<?=($view['attach1']) ? '<img class="img" src="/files/'.$view['attach1'].'" alt="리뷰 이미지">' : ''?>
						<?=($view['attach2']) ? '<img class="img" src="/files/'.$view['attach2'].'" alt="리뷰 이미지">' : ''?>
						<?=($view['attach3']) ? '<img class="img" src="/files/'.$view['attach3'].'" alt="리뷰 이미지">' : ''?>
						<?=($view['attach4']) ? '<img class="img" src="/files/'.$view['attach4'].'" alt="리뷰 이미지">' : ''?>
						<?=($view['attach5']) ? '<img class="img" src="/files/'.$view['attach5'].'" alt="리뷰 이미지">' : ''?>

						<div class="answer_wrap">
							<div class="answer_tit">답변 :</div>
							<?=(!empty($view['answer'])) ? $view['answer'] : '답변 준비중입니다.'?>
						</div>
					</div>
					<div class="view_btm">
						<a class="more_btn" href="/consult#counselling">목록 보기</a>
						<div class="right_btn_wrap">
							<!-- <button class="cs_del">삭제하기</button>
							<a class="cs_update" href="/consult/update">수정하기</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- 내용 끝  -->