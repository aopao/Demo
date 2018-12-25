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
		<h1>添加群</h1>
		<hr>
		<form method="post" action="{{ route('admin.add.store') }}">
			<div class="form-group">
				<div class="label">
					<label for="name">微信群名称</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="name" placeholder="微信群名称" autocomplete="off"/>
				</div>
			</div>
			<div class="form-group">
				<div class="label">
					<label for="cid">微信群简码</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="cid" placeholder="微信群简码" autocomplete="off"/>
				</div>
			</div>
			<div class="form-group">
				<div class="label">
					<label for="name">微信群简介</label>
				</div>
				<div class="field">
					<input type="text" class="input" name="desc" placeholder="微信群简介" autocomplete="off"/>
				</div>
			</div>
			<div class="form-button">
				{{csrf_field()}}
				<input type="submit" class="button" value="保存">
			</div>
		</form>
	</div>
</div>
</body>
</html>