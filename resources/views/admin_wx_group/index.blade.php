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
		<h1>
			[{{ $data['name'] }}] --- 活码列表
			<a class="button bg-main button-small" href="{{ route('admin_wx_group.create',['id'=>$data['id']]) }}">添加</a>
			<a class="button bg-primary button-small" href="{{ route('admin.add.index')}}">返回列表</a>
		</h1>
		<hr>
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-striped">
				<tr align="center">
					<td>活码序号</td>
					<td>活码名称</td>
					<td>预览</td>
					<td>排序</td>
					<td>添加时间</td>
					<td>操作</td>
				</tr>
				@if (isset($qrcode))
					@foreach ($qrcode as $code)
						<tr align="center">
							<td>{{ $code['id'] }}</td>
							<td>{{ $code['name'] }}</td>
							<td><a href="/storage/{{ $code['pic_url'] }}" target="_blank"><img width="100px" src="/storage/{{ $code['pic_url'] }}" alt=""></a></td>
							<td>{{ $code['sort'] }}</td>
							<td>{{ $code['created_at'] }}</td>
							<td>
								<a class="button bg-main button-little" href="">编辑</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="button bg-danger button-little" href=" {{  route('admin_wx_group.del',['id'=>$code['id']]) }}">删除</a>
							</td>
						</tr>
					@endforeach
				@else
					<tr align="center">
						<td colspan="4">
							暂无数据!
						</td>
					</tr>
				@endif
			</table>
		</div>
	</div>
</div>
</body>
</html>