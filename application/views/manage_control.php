<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">
	
	<link rel=stylesheet href="JQ/jquery.mobile-1.4.5.css">
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
	<script src="JQ/jquery.mobile-1.4.5.js"></script>
    <title></title>
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
			 $(".dh").css("right","230px");
			 
			 
			 }
			 else{      //层没隐藏时，再点击则隐藏该层
			 $(".plate_popup").fadeOut();
			 $(".dh").css("right","30px");
			 }
			 });
            //点击私信聊天，跳转
            $(".show_talking_main").click(function(){
                location.href = "<?=site_url('user_talk/show_talk')?>";
            })
		});
	</script>
	<script>
		
	</script>
  </head>
  <body>
  <!--==============================header=================================-->
    <header>
		<div class="articleHead">
			<div class="mainNav">
				<a href="#" class="callback"></a>
				<a href="#" class="personal">管理者中心</a>
				<a href="#" class="dh"><img src="<?=base_url();?>images/bullets-black.png" style="width:25px;height:20px;" ></a>
					<div class="plate_popup">
						<p>text1</p>
						<p>text2</p>
						<p>text2</p>
						<p>text2</p>
						<p>text2</p>
						<p>text2</p>
					</div>
			</div>
		</div>
		<div class="userCenter">
			<div class="user_left"><a href="#"><img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;"></a></div>
			<div class="user_right">
				<h3>晓</h3> <br>
				<a class="mydatum" href="<?=site_url('user_imf/showimf')?>">我的资料</a>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<div class="manage_operate">
		<a href="<?=site_url('welcome/index')?>" class="cur">首页</a>
		<a href="<?=site_url('user_article/show_article')?>">我的文章</a>
		<a href="<?=site_url('user_comment/show_comment')?>">我的评论</a>
		<a href="<?=site_url('user_friends/show_friends')?>">我的好友</a>
		<a href="<?=site_url('manage_control/get_all_article')?>">查看所有文章</a>
		<a href="<?=site_url('manage_control/get_all_userimf')?>">查看所有用户信息</a>
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
		
	</div>
	
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="<?=site_url('welcome/index')?>">首页</a>
				<a href="#">其他板块</a>
				<a href="<?=site_url('logout/logout')?>">退出</a>
				<a href="#" class="totopbutton"><img src="<?=base_url();?>images/totop1.png" style="width:30px;height:30px;"></a>
                <div class="show_talking_main">私信聊天</div>
            </div>
			<br>
			<p class="footer_times">当前时间  <div id="nowTime"></div> </p>
		</div>
	 </footer>
	
  </body>
</html>
