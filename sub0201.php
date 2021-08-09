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
$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('#snb .co_idtestPage h2 a b').text());$('.loc2D').html( $('.snb2d_co_idtestPage a b').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");$( "#page_title" ).addClass("subTopBg_02"); } else { $('.loc1D').text('미원유박'); $('.noInfoPageTit').html('<h2><a><b>미원유박</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  </script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
    <div id="container_wr">
	
    <div id="container02">
	 
		<div class="sub_top"><h2><span></span>미원유박</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
		<div class="sub_page">


 
	<div class="sub_con">

	<div class="pro">
		<div class="pro_l">
			<p class="tit">환경친화형 혼합유박<br/><b>미원유박</b></p>
			<p class="ingredient"><span class="a1">질소 4</span><span class="a2">인산 2</span><span class="a3">칼리 1.2</span><span class="a4">유기물 70%</span></p>
			<p class="txt01"> 순식물성 유박을 최신공법으로 제조한 경제성이 뛰어난 비료입니다.</p>
			<div class="txt_box">
				<h4>주요특징</h4>
				<ul>
					<li>풍부한 유기물이 70%이상 함유된 환경친화형 혼합유박 비료</li>
					<li>보비성, 보수성, 통기성 등 토양의 물리성 개선 효과 촉진</li>
					<li>아주까리박, 채종박, 대두박 등 박류를 주 원료로 최신 공법으로 제조</li>
					<li>작물의 당도 및 착색 향상 등 고풍미의 상품성을 중요시하는 과수 및 과채류,
  원예작물 등에 시비성 및 경제성이 뛰어남</li>
				</ul>
			</div>
		</div>
		<div class="pro_r">
			<img src="/img/sub2.jpg"   alt="" />
		</div>
	</div>



		 
	</div>
	 
	 
 

<script>$(document).ready(function(){$('#snb > li:nth-child(2)').addClass("co_idtestPage active");$('#snb > li:nth-child(2) > ul > li:nth-child(1)').addClass("snb2d_co_idtestPage  active");});</script>


    </div>

    </div>


</div>
<?php
include_once('theme/basic/tail.php');