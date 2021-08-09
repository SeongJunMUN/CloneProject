<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//     return;
// }
// 
// if(G5_COMMUNITY_USE === false) {
//     include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
//     return;
// }
?>


<div class="m_ft">
		 
		 
		 
			<h3 class="m_ft_tit">Contact</h3>
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
					<td>I-woolim@nate.com </td>
				</tr>
			</table> -->
			<div class="hd_ft_info"><b>사무실</b><br>
		<em>대전광역시 중구 대종로 223 (석교동)</em><br>
		TEL : 042-285-4781<br>
		FAX :  042-285-4784<br><br>
		<b>공장</b><br>
		<em>세종특별시 연서면 와룡로 497-19 (신대리)</em><br>
		TEL : 044-867-6001<br>
		FAX : 044-867-6003</div>
			<div class="hd_ft_info">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
						<td width="30px">주소</td>
						<td>대전광역시 중구 대종로 223, (석교동)</td>
					</tr>
					<tr>
						<td>대표</td>
						<td>남경환, 김상배</td>
					</tr>
					 
				</tbody></table>
 			</div>
		<div class="hd_ft_info2">Copyright © All rights reserved</div>
	</div>
<div class="close_menu"><i class="fa fa-times" id="mobile_menu_close"></i></div>
    <div id="aside">
                
		<div class="mobile_menu">
            <ul>
                                <li>
                    <a target="_self" class="gnb_1da">회사소개</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0101.php" target="_self">회사개요</a></li>
                                            <li><a href="/bbs/board.php?bo_table=history" target="_self">연혁</a></li>
                                            <li><a href="/sub0103.php" target="_self">비전</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">제품소개</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0201.php" target="_self">미원유박</a></li>
                                            <li><a href="/sub0203.php" target="_self">파라다이스</a></li>
                                            <li><a href="/sub0204.php" target="_self">원예특호</a></li>
                                            <li><a href="/sub0207.php" target="_self">왕대박</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">우림비료의 특징</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0301.php" target="_self">우림비료의 특징</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">구매안내</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0401.php" target="_self">구매안내</a></li>
                    </ul>
                </li>
                            </ul>
		</div>

<script type="text/javascript">
<!--
$( document ).ready(function(){
	$( ".mobile_menu > ul > li" ).click(function(){
		$( this ).find('ul').toggle( 100 );
	});

	$( "#mobile_menu_close" ).click(function(){
		$( "#aside" ).animate({"left":"-315px"}, 200);
		$( ".aside_bk" ).hide();
		$( ".close_menu" ).animate({"left":"-100px"}, 200);
	});
	$( "#mobile_open" ).click(function(){
		$( "#aside" ).animate({"left":"0px"}, 200);
		$( ".aside_bk" ).show();
		$( ".close_menu" ).animate({"left":"280px"}, 200);
	});

});
//-->
</script>

</div>
<div class="aside_bk"></div>
<!-- 하단 시작 { -->
<!-- <div id="ft">
    <div id="ft_wr">
		<div class="ft_wrap">
			<div id="ft_catch"><img src="http://dmonster1349.cafe24.com/img/ft_logo.png" alt="그누보드5"></div>
			<div class="ft_text">주소 : 광주 광역시 광산구 평동로　803번길 43-29　〒62416 (光州廣域市　光山区　平洞路　803番街43-29　〒62416) 43-29, Pyeongdong-ro 803beon-gil, Gwangsan-gu, Gwangju, Korea
			대표 : 李 (LEE)圭澤 tel : +82-62-945-5445   fax : 062-945-5447
			Copyright (C) 2018 (㈱ＡＲＡＭ　ＣＥＳ) all rights reserved.
			</div>
		</div>
    </div> -->
    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
// include_once(G5_THEME_PATH."/tail.sub.php");