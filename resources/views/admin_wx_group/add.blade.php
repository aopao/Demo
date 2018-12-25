<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>添加群</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('/css/pintuer.css') }}">
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/pintuer.js') }}"></script>
</head>
<body>
<div class="container">
	<div class="line">
		<h1>[{{ $data['name'] }}]---添加活码</h1>
		<hr>
		<form method="post" action="{{ route('admin_wx_group.create',['id'=>$data['id']]) }}" enctype="multipart/form-data">
			<div class="form-group">
				<div class="label">
					<label for="name">活码名称</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="name" placeholder="活码名称" autocomplete="off"/>
				</div>
			</div>
			<div class="form-group">
				<div class="label">
					<label for="name">图片</label>
				</div>
				<div class="field">
					<input type="file" class="input" name="pic_url" placeholder="图片" autocomplete="off"/>
				</div>
			</div>
			<div class="form-group">
				<div class="label">
					<label for="name">排序</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="sort" placeholder="排序" value="0" autocomplete="off"/>
				</div>
			</div>
			<div class="form-group">
				<div class="label">
					<label for="name">跳转次数(默认为0)</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="view" placeholder="跳转次数" value="0" autocomplete="off"/>
				</div>
			</div>

			<div class="form-button">
				{{csrf_field()}}
				<input type="hidden" name="wx_group_id" value="{{ $id }}">
				<input type="submit" class="button" value="保存">
			</div>
		</form>
	</div>
</div>
</body>
</html>