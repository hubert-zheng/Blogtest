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
				<a class="callback" title="返回上一页"></a>
				<a class="blog_logo">用户昵称</a>
				
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
		<div class="userCenter">
			<div class="user_left"><a href="#"><img src="images/1.jpg" style="border-radius:30px;"></a></div>
			<div class="user_right">
				<h3>用户昵称</h3> <br>
				<div class="show_user_info_makefrends"><p class="mydatum">关注</p></div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<!--   展示用户文章信息   -->
	<div class="user_main">
		<div class="lastlook"><div class="show_user_art_p">文章</div><div class="show_user_art_num">4</div>
			<div class="show_user_article">

				<div class="user_art_title"><span>文章1标题11111111111111111111111111111111</span></div>
				<div class="user_art_brief"><span>文章1简介11111111111111111111111111111111111111111111111</span></div>
				
				<div class="user_art_comment"><img src="images/comment.png" style="width:18px;height:18px;"><span> 10</span></div>
			</div>
			<a href="#" class="show_user_more"> >> 更多</a>
		</div>
		<br><br>
		<!--   展示用户评论信息   -->
		<div class="lastlook"><div class="show_user_art_p">评论</div><div class="show_user_art_num">116</div>
			<div class="show_user_article">
				
				<div class="user_art_oldarticle"><span>回复：</span><span id="user_mycomment">。。。。。。。。。。。。。。。</span></div>
				<div class="user_art_brief"><span>原文章：</span><span id="user_oldarticle">(标题)简介11111111111111111111111111111111111111111111111</span></div>
				
				<div class="user_art_comment"><img src="images/comment.png" style="width:18px;height:18px;"><span> 10</span></div>
		
			</div>
			<a href="#" class="show_user_more"> >> 更多</a>
		</div>
			<br><br>
		<div class="show_user_info_space"></div>
		<!--   展示用户好友信息   -->
		<div class="lastlook"><div class="show_user_art_p">好友</div><div class="show_user_art_num">50</div>
			<div class="show_user_article">
				<div class="user_art_Headimg"><img src="images/1.jpg" style="border-radius:30px;"></div>
				<div class="user_art_authorid"><span>好友1昵称</span></div>
				
				<div class="user_art_time"><span></span></div>
				
			</div>
			<a href="#" class="show_user_more"> >> 更多</a>
		</div>
		
		<div class="elseform">

		
		
			      <!--content_listpic-->
        <div id="listpic">
		
		
        
        
		</div>
	</div>
	<div class="show_user_makefriend"><span><img src="images/btn_pic_addfriend1.png" style="padding-bottom:5px;"> </img>加为好友</span></div>
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="#">首页</a>
				<a href="#">其他板块</a>
				<a href="#">退出</a>
				<a href="#" class="totopbutton" title="回到顶部"><img src="images/totop1.png" style="width:30px;height:30px;"></img></a>
			    
			</div>

			<br>
			<p class="footer_times">当前时间 21:27</p>
		</div>
	 </footer>
	<script>
		$(document).ready(function(){
		$(".personal").css("color","black");
		//多行文本省略

		
		//移动到500像素时才显示回到顶部的按钮
		$(window).scroll(function(){  
                if ($(window).scrollTop()>300){  
                    $(".totopbutton").fadeIn();  
                }  
                else  
                {  
                    $(".totopbutton").fadeOut();  
                }  
            });  
		//回到顶部的按钮
		$(".totopbutton").click(function(){
			 $('body,html').animate({scrollTop:0},1000);  
                return false; 
		});
		
		//板块层是隐藏和显示
			 $(".dh").click(function(){
			 var plateview=$(".plate_popup").is(":hidden"); //该层是否隐藏
			 if(plateview){    //如果层是隐藏的
			 $(".plate_popup").fadeIn();
			 $(".dh").css("right","205px");
			 
			 
			 }
			 else{      //层没隐藏时，再点击则隐藏该层
			 $(".plate_popup").fadeOut();
			 $(".dh").css("right","5px");
			 }
			 })
			 
		//点击下方好友时，显示聊天框
		$(".friendmessage").click(function(){
		var messagemain=$(".messagemain").is(":hidden");//聊天框是否隐藏
		if(messagemain){
		
			$(".messagemain").fadeIn();
			$(".friendmessage").fadeOut();
		}
		})
		//点击关闭按钮，关闭聊天框显示好友按钮
		$(".talk_exit").click(function(){
		
		var messagemain=$(".messagemain").is(":hidden");//聊天框是否隐藏
				if(!messagemain){
				
				$(".messagemain").fadeOut();
				$(".friendmessage").fadeIn();
				}
		})
		
		
		$(".callback").click(function(){
		history.back();});
		
		$(".show_user_makefriend").click(function(){
		location.href = "request_for_makefriend.html";});
		
		
		//若text是每多1位数，则缩进5px;
		//var user_art_num=$(".show_user_art_num").text(); //不包含html标签，html()则html+内容
		//alert(user_art_num);
		//if(user_art_num<10){$(".show_user_art_num").css("left","20px");}
		//if(user_art_num>10&&user_art_num<100){$(".show_user_art_num").css("left","10px");}
		///if(user_art_num>100){$(".show_user_art_num").css("left","5px");}
		});
		
	</script>
  </body>
</html>