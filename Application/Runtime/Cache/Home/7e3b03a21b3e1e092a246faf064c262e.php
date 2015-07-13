<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<!-- START 公用 head -->
		    <?php echo W('Common/commonHead');?>
		<!-- END 公用 head -->
		<!-- START 自定义 head -->
		<link rel="stylesheet" href="/beehive/Public/js/jQuery-File-Upload-master/css/jquery.fileupload.css">  
		<link rel="stylesheet" href="/beehive/Public/js/jQuery-File-Upload-master/css/jquery.fileupload-ui.css"> 
		<script type="text/javascript" src="/beehive/Public/js/jquery.bxslider.min.js"></script>
		<script src="/beehive/Public/js/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js"></script>  
		<script src="/beehive/Public/js/jQuery-File-Upload-master/js/jquery.fileupload.js"></script>  
		<script src="/beehive/Public/js/jQuery-File-Upload-master/js/jquery.iframe-transport.js"></script> 

		<script type="text/javascript">
			$(function(){
				

				
				
				
				var img_all = new Array();
				
				$('.face-upload').fileupload({  
					autoUpload: true,
				    autoUpload: true,
				    acceptFileTypes:  /(\.|\/)(gif|jpe?g|png)$/i,
				    maxNumberOfFiles : 1,
				    
				    add: function (e, data) {
				        data.submit(); //this will 'force' the submit in IE < 10
				    },
				   
				    done:function(e,result){ 
				    	//完成后进行的操作	 
				    	var img_src = JSON.stringify(result.result);
				    	//alert(img_src);
				    	img_src = img_src.replace(/"/g,'');
				    	//alert(img_src);
				    	$('.face-box .big-img img').attr('src',img_src);
				    	$('.face-box .small-img img').attr('src',img_src);
				    	
				    },
				    fail: function(e, data) {
			                  //错误提示
				    	  alert('Fail!');
				    }
				}); 

				
				$(document).on('click','.img-box span a',function(){
					var img_box = $(this).parents('.img-box');
					var i = $(img_box).index();
					
					img_all.splice(i,1);
					$(img_box).remove();

					// alert(img_all);

				})

				

				$('.set-info a.face').click(function(){
					if(!$(this).hasClass('active')){
						$(this).siblings('.face-box').show();
					}

				})

				$('.set-info a.sec').click(function(){
					if(!$(this).hasClass('active')){
						$(this).siblings('.textarea').show();
					}

				})

				$('.top .brief a').click(function(){
					$(this).siblings('.intro-form').show();
					$(this).hide();
				})



			})


			function faceUpdate(obj){

				var faceImage = $(obj).siblings('.img-box').find('.big-img img').attr('src');
				// alert(faceImage);
				$.post('/beehive/index.php/Home/User/updateFace',{name:faceImage},function(data){
					if(data=='true'){

						$('.list-box a.face').unbind('click').addClass('active').find('span').html('（上传成功）');
						$('.list-box .face-box').hide();

					}

				});


				return false;
			}

			function introUpdate(obj){

				var introInfo = $(obj).find('textarea').val();
				
				// alert(faceImage);
				$.post('/beehive/index.php/Home/User/updateIntro',{intro:introInfo},function(data){
					if(data=='true'){
						$('.list-box a.sec').addClass('active').find('span').html('(更新成功)').unbind('click');
						$('.list-box .textarea').hide();

						
					}

				});


				return false;
			}

		</script>
		<!-- END 自定义 head -->
	</head>
	<body class="user-page user-home-page">
		<div id="wrap">
			<!-- START header -->
		    <?php echo W('Common/allHeader');?>
		    <?php echo W('Common/userHeader');?>

			<!-- END header -->
			
			<div id="main">
				<div class="inner clearfix">
					<div class="f-left con">
						<?php echo W('Common/userTitle');?>

						<?php if(empty($$exits)): ?><div class="set-info">
								<h4>leevian,这里是你的主页，用来展示你的生活和发现，也是别人认识你的地方。完善你的个人资料，开始全新的豆瓣之旅吧。</h4>
								<div class="list-box">
									<a class="face" href="javascript:;">上传头像<span></span></a>
									<div class="face-box">
										<div class="img-box">
											<div class="big-img">
												<img src="/beehive/Public/images/face3.jpg"/>
											</div>
											<div class="small-img">
												<img src="/beehive/Public/images/face3.jpg"/>
											</div>
										</div>
										<form onsubmit="return faceUpdate(this)">
											<input class="face-upload"type="file" name="myfile"  data-url="/beehive/index.php/Home/User/faceUpload" multiple />
											<input type="submit" value="更新"/>
										</form>
									</div>
									<a class="sec"href="javascript:;">写一段自我介绍<span></span></a>
									<div class="textarea">
										<form onsubmit="return introUpdate(this)">
											<textarea></textarea>
											<input type="submit" value="更新"/>
										</form>
									</div>
								</div>
								<p>以上选项也可以在页面右上角你的帐号中找到。</p>
							</div><?php endif; ?>
						<div class="section sec-1">
							<h2><span></span>我喜欢<a href="">(全部)</a></h2>
							<div class="list">
								<a href="">一吃红粗</a>
								<a href="">一吃红粗</a>
							</div>
						</div>
						<div class="section sec-2">
							<h2>我的日记<a href="">(全部)</a><a class="btn"href="">+写日记</a></h2>
							<div class="list">
								<ul>
									<li>
										<a href="">一吃红粗</a>
										<p class="time">2015-07-10 10:38:49</p>
										<p>hehedadadadadajlfsdjfoij</p>
									</li>
								</ul>
							</div>
							<div class="empty">
								<p>写点日志吧</p>
							</div>
						</div>
						<div class="section sec-3">
							<h2>我的相册<a href="">(全部)</a><a class="btn"href="">+新建相册</a><a class="btn"href="">+发照片</a></h2>
							<div class="list">
								<ul>
									<li>
										<a class="img"href=""><img src="/beehive/Public/images/photo6.jpg"></a>
										<a href="">相册</a>
										<p class="time">2015-07-10 10:38:49</p>
										
									</li>
								</ul>
							</div>
							<div class="empty">
								<div class="img-box">
									<a href="">+</a>
								</div>
							</div>
						</div>

						
					</div>
					<div class="f-right sider">
						<div class="top">
							<div class="info-box">
								<div class="img-box">
									<img src="/beehive/Public/images/face3.jpg"/>
								</div>
								<div class="info">
									<h5>leevian</h5>
									<h6>2014-7-10加入</h6>
								</div>
							</div>
							<div class="brief clearfix">
								<a href="">（添加自我介绍）</a>
								<div class="intro-form">
									<form>
										<textarea name="introduce"></textarea>
										<input type="submit" value="保存"/>
										<input type="button" value="取消"/>
									</form>
								</div>
							</div>
							
						</div>
						<div class="radio">
							<h2>我的广播<a href="">全部</a></h2>
							<ul>
								<li>
									<p>上传了1张照片到 <a href="">diyigexiangce</a></p>
									<p>44fenzhongqian<a href="">回应</a><a href="">删除</a></p>
									
								</li>
							</ul>
						</div>
						<div class="follow">
							<p><a href="">>我被0人关注</a></p>
						</div>
						<div class="bee">
							<h2>我的蜂蜜<a href="">（全部）</a><a class="btn"href="">+创建蜂蜜</a></h2>
							<ul>
								<li><a href="">相册</a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
		</div>
		<!-- START footer -->
		    <?php echo W('Common/commonFooter');?>
		<!-- END footer -->

		<script type="text/javascript">
			
		</script>

	</body>
</html>