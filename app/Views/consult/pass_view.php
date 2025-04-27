<!-- 내용 시작 -->
<div id="counselling_view" class="counselling view">
	<section class="sec01 sec_pwd">
		<div class="sec_inner">
			<img src="/img/consult/pwd_alert_img.png" alt="">
			<div class="tit">해당 글을 확인 하기 위해서는<br> 해당글의 비밀번호를 입력해야 합니다.</div>
			<form action="/consult/view/<?=$no?>" method="POST">
				<label for="pwd"><span>[필수] </span>비밀번호</label>
				<input type="hidden" name="id" value="<?=$no?>">
				<input type="password" id="phone" class="ipt" name="pwd" placeholder="비밀번호를 입력해주세요.">
                
			    <button type="submit" class="btn_pwd_check">확인</button>
			</form>
			<a class="click_to_cs" href="/consult#counselling">게시판으로  돌아가기</a>
		</div>
	</section>
</div>
<!-- 내용 끝  -->