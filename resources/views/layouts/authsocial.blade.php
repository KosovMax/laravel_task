<!DOCTYPE html>
<html>
<head>
	<title>Auth Social</title>
	<!-- Bootstrap 3.3.6 -->
  	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="/style.css">

  	<style type="text/css">
  		html, body {
            height: 100%;
        }
  		body{
  			display: table;
  			width: 100%;
  			height: 100%;
  		}
	  	.auth-body{
	  		display: table-cell;
	  		text-align: center;
    		/*vertical-align: middle;*/
    		padding-top: 50px;
	  	}
	  	.auth-content{

	  	}
	  	.but-social{
	  		width: 50px;
    		height: 50px;
	  	}
	  	.but-social i{
	  		font-size: 30px;
	  	}
	  	.but-social span{
	  		font-size: 30px;
	  	}
  	</style>
</head>
<body>
	<div class='auth-body'>
		<div class="auth-content">
			<h1>Авторизація в соц.мережі</h1>
			<button type="button" class="btn btn-primary but-social" title="Vkontakte" style="padding-left: 7px;">
				<i class="fa fa-vk"></i>
			</button>
			
 			<button type="button" class="btn btn-primary but-social" title="Google" style="padding-left: 5px;">
				<i class="fa fa-google-plus"></i>
			</button>
			<button type="button" class="btn btn-primary but-social" title="Facebook">
				<i class="fa fa-facebook"></i>
			</button>
			<button type="button" class="btn btn-primary but-social" title="Twitter">
				<i class="fa fa-twitter"></i>
			</button>
			<button type="button" class="btn btn-primary but-social" title="Linkedin">
				<i class="fa fa-linkedin"></i>
			</button>
			<button type="button" class="btn btn-primary but-social" title="GitHub">
				<i class="fa fa-github"></i>
			</button>
			<button type="button" class="btn btn-primary but-social" title="Bitbucket">
				<i class="fa fa-bitbucket"></i>
			</button>
		</div>
	</div>
<!-- jQuery 2.2.0 -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- <script src="/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".but-social").click(function(){
			var soc=$(this).attr("title").toLowerCase();
			$(location).attr("href","/sign-in/"+soc)
		})
	});
</script>

</body>
</html>