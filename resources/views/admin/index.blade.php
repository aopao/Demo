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
		<h1>微信群列表
			<a class="button bg-main button-small" href="{{ route('admin.add.create') }}">添加</a>
		</h1>
		<hr>
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-striped">
				<tr align="center">
					<td>微信群名称</td>
					<td>微信群代码</td>
					<td>添加时间</td>
					<td>操作</td>
				</tr>
				@if (isset($data))
					@foreach ($data as $item)
						<tr align="center">
							<td>{{ $item['name'] }}</td>
							<td>{{ $item['cid'] }}</td>
							<td>{{ $item['created_at'] }}</td>
							<td>
								<a class="button bg-main button-little" href="{{ route('admin_wx_group.index',['id'=>$item['id']]) }}">查看</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="button bg-yellow button-little" href="{{ route('admin.add.del',['id'=>$item['id']]) }}">删除</a>
							</td>
						</tr>
					@endforeach
				@endif
			</table>
		</div>
	</div>
</div>
</body>
</html>