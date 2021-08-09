<link rel="stylesheet" href="http://dmonster1349.cafe24.com/skin/member/basic/style.css?ver=171222">
<?php
include_once('./_common.php');
// include_once(G5_THEME_PATH.'/head.php');
if( function_exists('social_check_login_before') ){
    $social_login_html = social_check_login_before();
}

$g5['title'] = '로그인';
include_once('./_head.php');
?>
<div id="wrapper02">
    <div class="left_menu">
				<ul id="snb"><li class="snb    bo_tablehistory  "><h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0101.php" target="_self" > 회사개요</b></a></li><li class="snb2d snb2d_bo_tablehistory"><a href="/bbs/board.php?bo_table=history" target="_self" > 연혁</b></a></li><li class="snb2d snb2d_"><a href="/sub0103.php" target="_self" > 비전</b></a></li></ul></li><li class="snb       "><h2><a href="/sub0201.php" target="_self"><b>제품소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0201.php" target="_self" > 미원유박</b></a></li><li class="snb2d snb2d_"><a href="/sub0203.php" target="_self" > 파라다이스</b></a></li><li class="snb2d snb2d_"><a href="/sub0204.php" target="_self" > 원예특호</b></a></li><li class="snb2d snb2d_"><a href="/sub0207.php" target="_self" > 왕대박</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0301.php" target="_self"><b>우림비료의 특징</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0301.php" target="_self" > 우림비료의 특징</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0401.php" target="_self"><b>구매안내</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0401.php" target="_self" > 구매안내</b></a></li></ul></li></ul>
		<!-- // SNB -->
</div>
<script>
$(function(){$('.snb.gr_id, .snb .snb2d_gr_id').addClass('active');});/*  그룹아이디 : gr_id  */
 $(document).ready(function(){ $('.loc1D').text('로그인'); $('.noInfoPageTit').html('<h2><a><b>로그인</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); });</script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
    <div id="container_wr">
	
    <div id="container02">
	 
		<div class="sub_top"><h2><span></span>로그인</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
		<div class="sub_page">



<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <h1>로그인</h1>

    <form name="flogin" action="http://127.0.0.1/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="http%3A%2F%2Fdmonster1349.cafe24.com">

    <fieldset id="login_fs">
        <legend>회원로그인</legend>
        <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
        <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
        <input type="submit" value="로그인" class="btn_submit">
        <input type="checkbox" name="auto_login" id="login_auto_login">
        <label for="login_auto_login">자동로그인</label>
    </fieldset>

    
    <aside id="login_info">
        <h2>회원로그인 안내</h2>

            <a href="http://127.0.0.1/bbs/password_lost.php" target="_blank" id="login_password_lost">아이디 비밀번호 찾기</a>
            <a href="./register.php">회원 가입</a>
        </div>
    </aside>

    </form>


</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->


    </div>

    </div>

</div>
</div>
<?php
$url = isset($_GET['url']) ? strip_tags($_GET['url']) : '';
$od_id = isset($_POST['od_id']) ? safe_replace_regex($_POST['od_id'], 'od_id') : '';

// url 체크
check_url_host($url);

// 이미 로그인 중이라면
if ($is_member) {
    if ($url)
        goto_url($url);
    else
        goto_url(G5_URL);
}

$login_url        = login_url($url);
$login_action_url = G5_HTTPS_BBS_URL."/login_check.php";

// 로그인 스킨이 없는 경우 관리자 페이지 접속이 안되는 것을 막기 위하여 기본 스킨으로 대체
$login_file = $member_skin_path.'/login.skin.php';
if (!file_exists($login_file))
    $member_skin_path   = G5_SKIN_PATH.'/member/basic';

include_once($member_skin_path.'/login.skin.php');

run_event('member_login_tail', $login_url, $login_action_url, $member_skin_path, $url);

include_once('./_tail.php');