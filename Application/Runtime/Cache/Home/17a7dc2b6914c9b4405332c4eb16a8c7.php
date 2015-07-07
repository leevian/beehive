<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<!-- START 公用 head -->
		    <?php echo W('Common/commonHead');?>
		    
		<!-- END 公用 head -->
		<!-- START 自定义 head -->
		<script type="text/javascript" src="/beehive/Public/js/jquery.bxslider.min.js"></script>

		<!-- END 自定义 head -->
	</head>
	<body class="movie-page movie-comment-page">
		<div id="wrap">
			<!-- START header -->
		    <?php echo W('Common/allHeader');?>
		    <?php echo W('Common/movieHeader');?>
		    
			    
			<!-- END header -->
			
			<div id="main">
				<div class="inner">
					<div class="f-left con">
						<div class="section sec-4">
							<div class="top">
								<h3>最受欢迎的影评</h3>
								<a href="">更多热门影评》</a>
								<a href="">新片影评》</a>
							</div>
							<div class="bottom">
								<ul>
									<li>
										<div class="img-box f-left"><a href=""><img src="/beehive/Public/images/movie6.jpg"/></a></div>
										<div class="text-box f-left">
											<h5><a href="">标题</a><a class="icon"href="javascript:;">下拉</a></h5>
                                            <p><a href="">作者&nbsp;</a>评论&nbsp;<a href="">电影名</a><span class="allstar40"></span></p>
                                            <p class="detail"> 
                                                fjdklsfjdlsflsdkjflkjdfslfjdl<a class="all"href="">(35个回应)</a>
                                            </p> 
										</div>
									</li>
								</ul> </div>
						</div>
					</div>
					<div class="f-left sider">
						<div class="ad">
							<a href=""><img src="/beehive/Public/images/ad4.jpg"/></a>
						</div>


					</div>
				</div>
			</div>
		</div>
		<!-- START footer -->
		    <?php echo W('Common/commonFooter');?>
		    
		   	
		<!-- END footer -->
		<script type="text/javascript">
			$(function(){
				$("h5 a.icon").toggle(function () {
				    $(this).addClass("selected");
				  },function () {
				    $(this).removeClass("selected");
				  }
				);



			});
		</script>
	</body>
</html>