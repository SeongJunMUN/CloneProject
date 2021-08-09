<?php

include_once('theme/basic/head.php');
?>
<div id="wrapper02">
	
<!-- SNB // -->
<div class="left_menu">
				<ul id="snb"><li class="snb    bo_tablehistory  "><h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0101.php" target="_self" > 회사개요</b></a></li><li class="snb2d snb2d_bo_tablehistory"><a href="/bbs/board.php?bo_table=history" target="_self" > 연혁</b></a></li><li class="snb2d snb2d_"><a href="/sub0103.php" target="_self" > 비전</b></a></li></ul></li><li class="snb       "><h2><a href="/sub0201.php" target="_self"><b>제품소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0201.php" target="_self" > 미원유박</b></a></li><li class="snb2d snb2d_"><a href="/sub0203.php" target="_self" > 파라다이스</b></a></li><li class="snb2d snb2d_"><a href="/sub0204.php" target="_self" > 원예특호</b></a></li><li class="snb2d snb2d_"><a href="/sub0207.php" target="_self" > 왕대박</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0301.php" target="_self"><b>우림비료의 특징</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0301.php" target="_self" > 우림비료의 특징</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0401.php" target="_self"><b>구매안내</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0401.php" target="_self" > 구매안내</b></a></li></ul></li></ul>
		<!-- // SNB -->
</div>

<!-- 현재위치 및 서브메뉴 활성화 설정// -->
<script>
$(function(){$('.snb.co_idtestPage, .snb .snb2d_co_idtestPage').addClass('active');});/*  컨텐츠관리 : co_idtestPage  */
$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('#snb .co_idtestPage h2 a b').text());$('.loc2D').html( $('.snb2d_co_idtestPage a b').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");$( "#page_title" ).addClass("subTopBg_04"); } else { $('.loc1D').text('구매안내'); $('.noInfoPageTit').html('<h2><a><b>구매안내</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  </script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
    <div id="container_wr">
	
    <div id="container02">
	 
		<div class="sub_top"><h2><span></span>구매안내</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
		<div class="sub_page">


 
	<div class="sub_con">
		 <div class="sub0401">
			<div class="sub0401_l">
				<img src="/img/sub0401_img01.png" border="0" alt="" />
			</div>
			<div class="sub0401_r">
			<b>사무실</b><br>
				대전광역시 중구 대종로 223 석정빌딩 6층<br/>
			전화 : 042-285-4781 / 	팩스 : 042-285-4784 <br/><br/>
			<b>공  장</b><br>
				세종특별시 연서면 와룜로 497-19 (신대리)<br/>
			전화 : 044-867-6001 / 	팩스 : 044-867-6003 <br/>
			</div>
		 </div>

			<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1594967940551" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1594967940551",
		"key" : "2zaxb",
		"mapWidth" : "100%",
		"mapHeight" : "360"
	}).render();
</script>

	</div>
	 
	 
 

<script>$(document).ready(function(){$('#snb > li:nth-child(4)').addClass("co_idtestPage active");$('#snb > li:nth-child(4) > ul > li:nth-child(1)').addClass("snb2d_co_idtestPage  active");});</script>


    </div>

    </div>


</div>
<?php
include_once('theme/basic/tail.php');