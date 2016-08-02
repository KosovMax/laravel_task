<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap 3.3.6 -->
  	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
	<header>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<!-- <h2>TASK FORUM</h2>
			<span class="pull-right">{{Session::get('name')}}</span>
			<a href="/signout/">Sign Out</a> -->
			<div class="tab-header">
				<div class="tab-cell-header"><h2>TASK FORUM</h2></div>
				<div class="tab-cell-header">
					@if(Session::has("name"))
					<span>{{Session::get("name")}}</span><br/>
					@else
					<span>{{Session::get("nickname")}}</span><br/>
					@endif
					<span>{{Session::get("email")}}</span><br/>
					<a href="/signout/">Sign Out</a>
				</div>
				<div class="tab-cell-header"><img src="{{Session::get('avatar')}}" /></div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	</header>
	<section>
		<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="read-forum">
				@if(array_has($comment,0))
					@foreach($comment as $key=>$val)
						<div class="read-forum-tab">
							<div class="read-forum-tab-cell">
								<img src="{{$val->avatar}}"><br/>
								<span>Імя: {{$val->name}}</span><br/>
								<span>Дата: {{$val->created_at}}</span>
							</div>
							<div class="read-forum-tab-cell">{!! $val->comment !!}</div>
						</div>
					@endforeach
				@else
				<h2>Пишете форум</h2>
				@endif
			</div>
			<form class="write-forum form-horizontal" action='/put-comment' method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="avatar" value="{{Session::get('avatar')}}">
				<div class="form-group">
				    <label class="control-label">Імя</label>
				    @if($errors->has('name'))
					    @if(Session::has("nickname"))
					    <input type="text" name="name" class="form-control hass-error" value="{{Session::get("nickname")}}" >
					    @else
					    <input type="text" name="name" class="form-control hass-error" value="{{Session::get("name")}}" >
					    @endif
					    <span style="color:#a94442">{{$errors->first('name')}}</span>
				    @else
				    	@if(Session::has("nickname"))
					    <input type="text" name="name" class="form-control" value="{{Session::get("nickname")}}" >
					    @else
					    <input type="text" name="name" class="form-control" value="{{Session::get("name")}}" >
					    @endif
				    @endif
				</div>
				<div class="form-group">
				    <label class="control-label">Email</label>
				    @if($errors->has('email'))
				    	<input type="text" name="email" class="form-control hass-error" value="{{Session::get("email")}}" >
				    	<span style="color:#a94442">{{$errors->first('email')}}</span>
				    @else
				    	<input type="text" name="email" class="form-control" value="{{Session::get("email")}}" >
				    @endif
				</div>
				<div class="form-group">
				 	<label class="control-label">Коментар</label>
				 	@if($errors->has('comment'))
				 		<textarea class="form-control text-forum hass-error" name="comment" rows="10"></textarea>
				 		<span style="color:#a94442">{{$errors->first('comment')}}</span>
				 	@else
						<textarea class="form-control text-forum" name="comment" rows="10"></textarea>
					@endif
					<div>Символів: <span id="symbol">0</span></div>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Відправити</button>
			</form>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	</section>
<!-- jQuery 2.2.0 -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- <script src="/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>