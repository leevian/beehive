<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/beehive/Public/css/bootstraps/css/bootstrap.min.css">
		<link rel="stylesheet" href="/beehive/Public/css/bootstraps/css/bootstrap-theme.min.css">
		<title></title>
	</head>
	<body>
		<a class="btn btn-success" style="margin-left:50px;margin-top:30px;" href="/beehive/index.php/Admin/movie/classify">返回上级</a>
		<form method="post" action="<?php echo U('Movie/doaddclassify');?>" class="form-horizontal" style="margin-top:60px;margin-left:120px;" role="form">
		  	<div class="form-group">
		    	<label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
		    	<div class="col-sm-10">
		      		<input type="text" style="width:35%;" class="form-control" name="name" value=""  placeholder="请输入分类名称">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="inputPassword3" class="col-sm-2 control-label">pid</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="pid" value="<?php echo ($row["id"]); ?>" style="width:35%;" class="form-control"  readonly />
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="inputEmail3" class="col-sm-2 control-label">path</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="path" value="<?php echo ($row["path"]); ?>" style="width:35%;" class="form-control" readonly />
		    	</div>
		  	</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      	<button type="submit" class="btn btn-default">添加</button>
			    </div>
		  	</div>
		</form>
	</body>
</html>