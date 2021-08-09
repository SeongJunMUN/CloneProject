<?php
// if (!defined('_INDEX_')) define('_INDEX_', true);
// if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
// // echo $_SERVER["DOCUMENT_ROOT"];
// //echo G5_THEME_MOBILE_PATH;
// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/index.php');
//     return;
// }
// if(G5_COMMUNITY_USE === false) {
//     include_once(G5_THEME_SHOP_PATH.'/index.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
?>


<div id="wrapper">
    <div id="container_wr">
    <div id="container">
        <!--  -->

<div class="cont_wrap">
	<div class="cont_left">
		<ul class="bxslider">
			<li>
				<div class="slide_text">
					<strong>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</strong>
					<div>지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
지속 가능한 농업생태계구축을 위하여 더 좋은 제품 생산에 집중하겠습니다.
					</div>
					<a href="/sub0101.php">VIEW MORE    →</a>
				</div>
			</li>
			<li>
				<div class="slide_text">
					<strong>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</strong>
					<div>지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
지속 가능한 농업생태계구축을 위하여 더 좋은 제품 생산에 집중하겠습니다.
					</div>
					<a href="/sub0101.php">VIEW MORE    →</a>
				</div>
			</li>
			 
		</ul>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider({ 
			auto: true, 
			speed: 1000, 
			pause: 9000, 
			mode:'fade', 
			autoControls: false, 
			pager:false,
			controls:false,
			});
		});
	</script>


	<div class="cont_right">
		<!-- btn1_wrap -->
		<ul>
			<li>
				<a href="/sub0103.php">
					<strong>비전</strong>
					<p>Vision</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0401.php">
					<strong>구매안내</strong>
					<p>Purchase Guide</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0201.php">
					<strong>미원유박</strong>
					<p>환경친화형 혼합유박</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0203.php">
					<strong>파라다이스</strong>
					<p>친환경 농산물 생산 지정자재</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0204.php">
					<strong>원예특호</strong>
					<p>특수농축공법</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0301.php">
					<strong>우림비료의 특징</strong>
					<p>비료업계의 새로운 패러다임</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0101.php">
					<strong>회사개요</strong>
					<p>방문을 환영합니다</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/bbs/board.php?bo_table=history">
					<strong>연혁</strong>
					<p>걸어온 길</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
		</ul>
	</div>


					
</div><!-- .cont_wrap 끝 -->
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
    
    



    </div>


</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');