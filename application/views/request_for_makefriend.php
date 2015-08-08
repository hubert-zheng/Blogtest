<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<title>用户展示页</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	
	<script src="jquery-2.1.3.min.js"></script>
	<!--<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>-->
	<!-- the mousewheel plugin -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/scroll-startstop.events.jquery.js"></script>
	<!-- 多余文本省略插件 -->
	<!--<script type="text/javascript" src="js/jquery-dotdotdot.js"></script>-->
    <title></title>
	
  </head>
  <body>
  <!--==============================header=================================-->
    <header>
		<div class="articleHead">
			<div class="mainNav">
				<a class="callback"></a>
				<a class="blog_logo">好友申请</a>
				
				<!--<a href="#" class="dh"><img src="images/bullets-black.png" style="width:25px;height:20px;" ></a>
					<div class="plate_popup">
						<p></p>
						<p> </p>
						<p><a href="#">隐藏动态</a></p>
						<p>更</p>
						<p>多</p>
						<p>功</p>
						<p>能</p>
						<p>，</p>
						<p>敬</p>
						<p>请</p>
						<p>期</p>
						<p>待</p>
					</div>-->
			</div>
		</div>
		
	</header>
	<!--==============================content================================-->
	<div class="request_makefriend">
		<p>需要发送申请验证，对方通过后即可开始聊天</p><br></br>
		<form action="#" method="post">
		
		<input type="text" class="input_request_txt"></input>
		
		<input type="button" class="input_request_btn" value="发送"></input>
		
		</form>
	</div>
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<!--<a href="#">首页</a>
				<a href="#">其他板块</a>
				<a href="#">退出</a>
				<a href="#" class="totopbutton"><img src="images/totop1.png" style="width:30px;height:30px;"></img></a>
			    -->
			</div>

			<br>
			<p class="footer_times">当前时间 21:27</p>
			<br>
		</div>
	 </footer>
	 <script>
		$(document).ready(function(){
		//如果是不到页面的整个高度，则把中间的高度撑大
		var user_main_height=$(".request_makefriend").height();
		if(user_main_height<300){
			$(".request_makefriend").css("height","300px");
		}
		
		//返回上一页事件
		$(".callback").click(function(){
		history.back();});
		
		
		});
		
	</script>
  </body>
</html>