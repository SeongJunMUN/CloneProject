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
$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('#snb .co_idtestPage h2 a b').text());$('.loc2D').html( $('.snb2d_co_idtestPage a b').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");$( "#page_title" ).addClass("subTopBg_02"); } else { $('.loc1D').text('원예특호'); $('.noInfoPageTit').html('<h2><a><b>원예특호</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  </script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
    <div id="container_wr">
	
    <div id="container02">
	 
		<div class="sub_top"><h2><span></span>원예특호</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
		<div class="sub_page">


 
	<div class="sub_con">

	<div class="pro">
		<div class="pro_l">
			<p class="tit">특수농축공법(특허 제103244호)<br/><b>원예특호</b></p>
			<p class="ingredient"><span class="a1">질소 10</span><span class="a2">인산 6</span><span class="a3">칼리 7</span><span class="a5">수용성고토 2</span><span class="a4">유기물 30%</span><span class="a6">수용성붕소0.1</span></p>
			<p class="txt01"> 알차고 맛좋은 채소, 원예재배를 위한 원예전용 유기배합비료</p>
			<div class="txt_box">
				<h4>주요특징</h4>
				<ul>
					<li>최고급 완효성유박 + 속효성 복합</li>
					<li>한번의 시비로 생육초기부터 수확기까지 비료효과 지속</li>
					<li>자연의 식물성 박류와 복합비료를 우림의 특수농축공법으로 제조</li>
					<li>고급의 유기물은 토양을 개량하여, 양분과 수분을 간직하는 힘과
   토양의 완충능력 증대</li>
				</ul>
			</div>
		</div>
		<div class="pro_r">
			<img src="/img/sub2-4.jpg"   alt="" />
		</div>
	</div>



		 
	</div>
	 
	 
 

<script>$(document).ready(function(){$('#snb > li:nth-child(2)').addClass("co_idtestPage active");$('#snb > li:nth-child(2) > ul > li:nth-child(3)').addClass("snb2d_co_idtestPage  active");});</script>


    </div>

    </div>


</div>
<?php
include_once('theme/basic/tail.php');