<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<title>个人中心</title>
	<link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">
	
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
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
				<a href="#" class="blog_logo">个人中心</a>
				
				<a href="#" class="dh"><img src="<?=base_url();?>images/bullets-black.png" style="width:25px;height:20px;" ></a>
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
					</div>
			</div>
		</div>
		<div class="userCenter">
			<div class="user_left"><a href="#"><img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;"></a></div>
			<div class="user_right">
				<h3><?=$username?></h3> <br>
				<a class="mydatum" href="<?=site_url('user_imf/showimf')?>">我的资料</a>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<div class="user_operate">
		<a href="<?=site_url('welcome/index')?>" class="cur">首页</a>
		<a href="<?=site_url('user_article/show_article')?>">我的文章</a>
		<a href="<?=site_url('user_comment/show_comment')?>">我的评论</a>
		<a href="<?=site_url('user_friends/show_friends')?>">我的好友</a>
	</div>
	<div class="user_main">
		<div class="lastlook"><p>最近浏览文章:</p>
			<div class="user_article">
				<div class="user_art_Headimg"><img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;"></div>
				<div class="user_art_authorid"><span>文章1作者昵称</span></div>
				<div class="user_art_time"><span>文章1发表时间</span></div>
				<div class="user_art_title"><span>文章1标题11111111111111111111111111111111</span></div>
				<div class="user_art_brief"><span>文章1简介11111111111111111111111111111111111111111111111</span></div>
				
				<div class="user_art_comment"><img src="<?=base_url();?>images/comment.png" style="width:18px;height:18px;"><span> 10</span></div>
			</div>
			
			<div class="user_article">
				<div class="user_art_Headimg"><img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;"></div>
				<div class="user_art_authorid"><span>文章2作者昵称</span></div>
				<div class="user_art_time"><span>文章2发表时间</span></div>
				<div class="user_art_title"><span>文章2标题</span></div>
				
				<div class="user_art_brief"><span>文章2简介1111111111111111111111111\n11111111111111111111111111</span></div>
					
				<div class="user_art_comment"><img src="<?=base_url();?>images/comment.png" style="width:18px;height:18px;"><span> 5</span></div>
			</div>
		</div><br>
		<div class="elseform">
			      <!--content_listpic-->

        
		</div>
	</div>
	
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="<?=site_url('welcome/index')?>">首页</a>
				<a href="#">其他板块</a>
				<a href="<?=site_url('logout/logout')?>">退出</a>
				<a href="#" class="totopbutton" title="回到顶部"><img src="<?=base_url();?>images/totop1.png" style="width:30px;height:30px;"></a>
			</div>
			<div class="show_talking_main">私信聊天</div>
		<!--	<div class="talking_main">
				<ul class="chat-thread">
					<li>Are we meeting today?</li>
					<li>yes, what time suits you?</li>
					<li>I was thinking after lunch, I have a meeting in the morning</li>
					<li>Are we meeting today?</li>
					<li>yes, what time suits you?</li>
					<li>I was thinking after lunch, I have a meeting in the morning</li>
					<li>Are we meeting today?</li>
					<li>yes, what time suits you?</li>
					<li>I was thinking after lunch, I have a meeting in the morning</li>
					<li>Are we meeting today?</li>
					<li>yes, what time suits you?</li>
					<li>I was thinking after lunch, I have a meeting in the morning</li>
				</ul>
				
				<div class="input_talking_txt"></div>
			</div>-->
			<br>
			<p class="footer_times">当前时间  <div id="nowTime"></div> </p>
		</div>
	 </footer>
	<script>
        function current(){
            var d=new Date(),str='';
            str +=d.getFullYear()+'/'; //获取当前年份
             var month = d.getMonth('')+1;
             str +=month< 10 ? "0" + month + '/' : month + '/'; //获取当前月份（0——11）
             str +=d.getDate()< 10 ? "0" + d.getDate()+' ' : d.getDate()+' ';
            str +=d.getHours()< 10 ? "0" + d.getHours()+':' : d.getHours()+':';
            str +=d.getMinutes()< 10 ? "0" + d.getMinutes()+':' : d.getMinutes()+':';
            str +=d.getSeconds()< 10 ? "0" + d.getSeconds()+'' : d.getSeconds()+'';
            return str; }
        setInterval(function(){$("#nowTime").html(current)},1000);

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
		//点击返回按钮，返回上一页
		$(".callback").click(function(){
		history.back();});
		//点击私信聊天，跳转
		$(".show_talking_main").click(function(){
			location.href = "<?=site_url('user_talk/show_talk')?>";
		})
		//点击文章时的跳转
		$(".user_article").click(function(){
			location.href = "content_comment.html";
		})
		
		});
		
	</script>
  </body>
</html>
