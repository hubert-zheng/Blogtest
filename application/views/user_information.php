<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">
	
	
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
	
    <title></title>
	<script>
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
			 })
			 
			 
		//如果是不到页面的整个高度，则把中间的高度撑大
			var user_imfo_container_height=$(".user_imfo_container").height();
			if(user_imfo_container_height<485){
				$(".user_imfo_container").css("height","485px");
			}
			
		//返回上一页事件
		$(".callback").click(function(){
		history.back();});
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
				<a class="callback"></a>
				
				<a href="#" class="personal">个人信息</a>
				
			</div>
		</div>
		
	</header>
	<!--==============================content================================-->

	<div class="user_imfo_container">

<form id="contactform" class="rounded" method="post" action="">
<h3>个人信息</h3>
<div class="field">
	<label for="Nickname">昵称:</label>
  	<input type="text" class="input" name="Nickname" id="Nickname"  />
	
</div>

<div class="field">
	<label for="Sex">性别:</label>
  	<input type="text" class="input" name="Sex" id="Sex" />
	
</div>

<div class="field">
	<label for="Age">年龄:</label>
  	<input type="text" class="input" name="Age" id="Age"></textarea>
</div>
<div class="field">
	<label for="Major">专业:</label>
  	<input type="text" class="input" name="Major" id="Major"></textarea>
</div>
<div class="field">
	<label for="Grade">年级:</label>
  	<input type="text" class="input" name="Grade" id="Grade"></textarea>
</div>
<div class="user_info_btn_div">
<input type="submit" name="Submit"  class="button" value="确认" />
<input type="reset" name="Reset"  class="button" value="取消" />
</div>
</form>
<br />

</div>
	
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 30px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="<?=site_url('welcome/index')?>">首页</a>
				<a href="#">其他板块</a>
				<a href="<?=site_url('logout/logout')?>">退出</a>
				
			</div>
			<br>
			<p class="footer_times">当前时间 21:27</p>
		</div>
	 </footer>
	
  </body>
</html>
