<!doctype html>
<?php
// if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
// 
// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/head.php');
//     return;
// }
// 
// if(G5_COMMUNITY_USE === false) {
//     define('G5_IS_COMMUNITY_PAGE', true);
//     include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
//     return;
// }
// include_once(G5_THEME_PATH.'/head.sub.php');
// include_once(G5_LIB_PATH.'/latest.lib.php');
// include_once(G5_LIB_PATH.'/outlogin.lib.php');
// include_once(G5_LIB_PATH.'/poll.lib.php');
// include_once(G5_LIB_PATH.'/visit.lib.php');
// include_once(G5_LIB_PATH.'/connect.lib.php');
// include_once(G5_LIB_PATH.'/popular.lib.php'); 
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<title>우림산업(주)</title>
<link rel="stylesheet" href="http://dmonster1349.cafe24.com/theme/groupbyeye_theme/css/default.css?ver=171222">
<link rel="stylesheet" href="http://dmonster1349.cafe24.com/theme/groupbyeye_theme/css/response.css">
<!--[if lte IE 8]>
<script src="http://dmonster1349.cafe24.com/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "http://dmonster1349.cafe24.com";
var g5_bbs_url   = "http://dmonster1349.cafe24.com/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="http://dmonster1349.cafe24.com/js/jquery-1.8.3.min.js"></script>
<script src="http://dmonster1349.cafe24.com/js/jquery.menu.js?ver=171222"></script>
<script src="http://dmonster1349.cafe24.com/js/common.js?ver=171222"></script>
<script src="http://dmonster1349.cafe24.com/js/wrest.js?ver=171222"></script>
<script src="http://dmonster1349.cafe24.com/js/placeholders.min.js"></script>
<link rel="stylesheet" href="http://dmonster1349.cafe24.com/js/font-awesome/css/font-awesome.min.css">
<link rel="shortcut icon" href="/img/favicon.png">

<script src="http://dmonster1349.cafe24.com/js/jquery.bxslider.js?ver=171222"></script>
<link rel="stylesheet" href="/css/jquery.bxslider.css">
</head>
<div id="hd">
    <h1 id="hd_h1">우림산업(주)</h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->	<div class="hd_contaner">
		<div id="hd_wrapper">

			<div id="logo">
				<span id="mobile_open"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></span>
				<a href="http://127.0.0.1"><img src="http://dmonster1349.cafe24.com/img/logo.png" alt="우림산업(주)"></a>
			</div>
		</div>
		
		 <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">

            <ul id="gnb_1dul">
                                <li class="gnb_1dli" style="z-index:999">
                    <a href="/sub0101.php" target="_self" class="gnb_1da">회사소개</a>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli"><a href="/sub0101.php" target="_self" class="gnb_2da">회사개요</a></li>
                                            <li class="gnb_2dli"><a href="/bbs/board.php?bo_table=history" target="_self" class="gnb_2da">연혁</a></li>
                                            <li class="gnb_2dli"><a href="/sub0103.php" target="_self" class="gnb_2da">비전</a></li>
                    </ul>
                </li>
                                <li class="gnb_1dli" style="z-index:998">
                    <a href="/sub0201.php" target="_self" class="gnb_1da">제품소개</a>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli"><a href="/sub0201.php" target="_self" class="gnb_2da">미원유박</a></li>
                                            <li class="gnb_2dli"><a href="/sub0203.php" target="_self" class="gnb_2da">파라다이스</a></li>
                                            <li class="gnb_2dli"><a href="/sub0204.php" target="_self" class="gnb_2da">원예특호</a></li>
                                            <li class="gnb_2dli"><a href="/sub0207.php" target="_self" class="gnb_2da">왕대박</a></li>
                    </ul>
                </li>
                                <li class="gnb_1dli" style="z-index:997">
                    <a href="/sub0301.php" target="_self" class="gnb_1da">우림비료의 특징</a>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli"><a href="/sub0301.php" target="_self" class="gnb_2da">우림비료의 특징</a></li>
                    </ul>
                </li>
                                <li class="gnb_1dli" style="z-index:996">
                    <a href="/sub0401.php" target="_self" class="gnb_1da">구매안내</a>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli"><a href="/sub0401.php" target="_self" class="gnb_2da">구매안내</a></li>
                    </ul>
                </li>
                            </ul>
        </div>
    </nav>
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all").show();
        });
        $(".gnb_close_btn").click(function(){
            $("#gnb_all").hide();
        });
    });

    </script>

		<div id="tnb">
			<ul>
								<li><a href="http://127.0.0.1/bbs/login.php"><b><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</b></a></li>
				<li><a href="/index.php"><i class="fa fa-home"  aria-hidden="true"></i> 홈</a></li>
							</ul>
		</div>
		<!-- tnb -->​
	</div>

    <div class="hd_ft">
		<!-- <img src="/img/left_customer.png"> -->
		<div class="left_info">
		
		<h3 class="tit">Contact</h3>
		<div>
		<b>사무실</b><br>
		<em>대전광역시 중구 대종로 223 (석교동)</em><br>
		TEL : 042-285-4781<br>
		FAX :  042-285-4784<br><br>
		<b>공장</b><br>
		<em>세종특별시 연서면 와룡로 497-19<br>(신대리)</em><br>
		TEL : 044-867-6001<br>
		FAX : 044-867-6003
			<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<th width="50px"><img src="/img/ft_icon01.png" alt="전화" /></th>
					<td>042-285-4100</td>
				</tr>
				<tr>
					<th width="50px"><img src="/img/ft_icon02.png" alt="이메일" /></th>
					<td>042-285-4784 </td>
				</tr>
				<tr>
					<th width="50px"><img src="/img/ft_icon03.png" alt="이메일" /></th>
					<td style="font-size:13px">I-woolim@nate.com </td>
				</tr>
			</table> -->
			</div>
			</div>
			 
			<div class="hd_ft_inner">
			<div class="hd_ft_info">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tbody>
					<!-- <tr>
						<td width="30px">주소</td>
						<td>대전광역시 중구 대종로 223, (석교동)</td>
					</tr> -->
					<tr>
						<td>대표</td>
						<td>남경환, 김상배</td>
					</tr>
					<tr>
						<td colspan="2">사업자 등록번호&nbsp;&nbsp;307-81-05069</td>
					</tr>
				</tbody></table>

			</div>
			<div class="hd_ft_info2">Copyright © All rights reserved</div>
			<div class="a_wrap">
						<?php if ($is_member) {  ?>
               <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
            <?php } else {  ?>
               <a href="/bbs/login.php">로그인</a>
            <?php }  ?>
					</div>
		</div>
	</div>
</div>
