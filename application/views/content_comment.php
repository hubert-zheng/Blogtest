<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">
    
	
	<!--<link rel=stylesheet href="JQ/jquery.mobile-1.4.5.css">-->
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
<!--	<script src="JQ/jquery.mobile-1.4.5.js"></script>-->
    <title></title>
	<script>
		$(document).ready(function(){
		$(".personal").css("color","black");


            //动态获取当前时间
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
			 
		//返回上一页事件
		$(".callback").click(function(){
		history.back();});
		});
	</script>
  </head>
  <body>
  <!--==============================header=================================-->
    <header>
		<div class="articleHead">
			<div class="mainNav">
				<a class="callback" title="返回上一页"></a>
                <h1 class="logoname">交流论坛</h1>
				<a href="#" class="dh"><img src="<?=base_url();?>images/bullets-black.png" style="width:25px;height:20px;" ></a>
					<div class="plate_popup">
						<p><a href="#">经验共享</a></p>
						<p><a href="#">情感抒发</a></p>
						<p><a href="#">求职版块</a></p>
						<p><a href="#">活动版块</a></p>
						<p><a href="#">学习版块</a></p>
							<br>
                        <p><a href="<?=site_url('user_control/get_usermain')?>">我的资料</a></p>
						<br>
                        <p><a href="<?=site_url('logout/logout')?>">退出</a></p>
						<p>.</p>
                        <p>.</p>
                        <p>.</p>
					</div>
			</div>
		</div>
<!--		<div class="userCenter">
			<div class="user_left"><a href="#"><img src="img/1.jpg" style="border-radius:30px;"></a></div>
			<div class="user_right">
				<h3>用户昵称,你好</h3><br>
				<a href="#">发表文章</a>
			</div>
		</div>		-->
	</header>
	<!--==============================content================================-->
	
    <!--content_comment-->
	<div id="content_comment">    
        <!--content_comment_article-->
        <div id="content_comment_article">
            <?php if(!empty($article_detailed)){foreach($article_detailed as $item):?>
        	<div class="content_comment_art_louzhu">
                <div class="content_comment_art_Headimg">
                    <img src="<?=base_url();?>images/1.jpg" />
                </div>
                <div class="content_comment_art_author">
                    <div class="content_comment_art_authorid">
                        <span><?=$item->name?></span>
                        <img src="<?=base_url();?>images/lv6.png" style="width:24px; height:13px;"/>
                        <img src="<?=base_url();?>images/louzhu.png" style="width:24px; height:13px;"/>
                    </div>
                    <div class="content_comment_art_time">
                        <span><?=$item->time?></span>
                    </div>
                </div>
            </div>
            <div class="content_comment_art_show">
            	<div class="content_comment_art_show_title">
                	<span><?=$item->title?></span>
                </div>
                <div class="content_comment_art_show_details">
                	<span>
                    	<?=$item->contents?>
					</span>
                </div>
            </div>
            <?php endforeach; }?>

            <div id="content_comment_art_reader">

                <?php if(!empty($article_comment)){foreach($article_comment as $item):?>
                <div class="content_comment_art_reader_main">
                	<div class="content_comment_art_reader_header">
                        <div class="content_comment_art_reader_header_Headimg">
                            <img src="<?=base_url();?>images/1.jpg" style="width:30px; height:30px;"/>
                        </div>
                        <div class="content_comment_art_reader_header_mess">
                            <div class="content_comment_art_reader_header_mess_id">
                                <span><?=$item->name?></span>
                                <img src="<?=base_url();?>images/lv6.png" style="width:24px; height:13px;"/>
                            </div>
                            <div class="content_comment_art_reader_header_mess_time">
                                <span><?=$item->comment_time?></span>
                            </div>
                        </div>
                    </div>
                    <div class="content_comment_art_reader_body">
                    	<span><?=$item->com_contents?></span>
                        <a href="#" class="huifu" data-txt="回复@XXX：">回复</a>
                    </div>
				</div>
                <?php endforeach; }?>



            </div>
        </div>
        <!--content_comment_input-->
        <form class="content_comment_form" action="<?=site_url('insert_comment/insert_com')?>" method="post">
        	<div class="content_comment_input_txt">
                <input type="hidden" name="comment_artid" value="<?=$artid?>">
            	<textarea name="comment_text" id="text" placeholder="我也说一句..."></textarea>
            </div>
            <div class="content_comment_input_submitbtn">
            	<input type="submit" name="submit" id="submit" value="发送" />
            </div>
            <div class="content_comment_input_resetbtn">
            	<input type="reset" name="reset" value="清除" />
            </div>
        </form>
        
        <!--content_menubtn-->       
        <div id="menubtn">

        </div>
	</div>
	
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="http://cst.gcu.edu.cn/">华南理工大学广州学院计算机工程学院</a>
				<a href="#" class="totopbutton"><img src="images/totop1.png" style="width:30px;height:30px;"></img></a>
			</div>
			<br>
			<p class="footer_times">当前时间  <div id="nowTime"></div> </p>
		</div>
	 </footer>
	
  </body>
</html>
