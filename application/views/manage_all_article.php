<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
    <title>我的文章</title>
    <link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">
    <!-- 引用JQuery官网的jquery CDN-->
    <!--<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>-->
    <!-- 引用自己的jquery文件 -->
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
            <a class="callback" title="返回"></a>

            <a href="#" class="personal">文章列表</a>
            <a href="#" class="dh"><span id="dh_text">编辑</span></a>
            <div class="plate_popup">
                <p></p>
                <p> </p>
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

</header>
<!--==============================content================================-->

<div class="user_main">
    <div class="lastlook">
        <?php for($i=0;$i<30;$i++){?>
            <div class="user_article">
                <div class="user_art_Headimg"><img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;"></div>
                <div class="user_art_authorid"><span>文章<?=$i+1?>作者昵称</span></div>

                <div class="user_art_time"><span>文章<?=$i+1?>发表时间</span></div>

                <div class="user_art_title"><span>文章<?=$i+1?>标题11111111111111111111111111111111</span></div>
                <div class="user_art_brief"><span>文章<?=$i+1?>简介11111111111111111111111111111111111111111111111</span></div>

                <div class="user_art_comment"><img src="<?=base_url();?>images/comment.png" style="width:18px;height:18px;"><span> 10</span></div>
                <div class="user_art_delete"><span>删除该文章</span></div>
            </div>
        <?php }?>
    </div><br>
    <div class="report_newarticle"><a>发表新文章</a></div>

</div>

<!--==============================footer=================================-->
<footer style="visibility: visible; margin-top: 0px;">
    <div class="footer">
        <div class="footer_nav">
            <a href="<?=site_url('welcome/index')?>">首页</a>
            <a href="#">其他板块</a>
            <a href="<?=site_url('logout/logout')?>">退出</a>
            <a href="#" class="totopbutton" title="回到顶部"><img src="<?=base_url();?>images/totop1.png" style="width:30px;height:30px;"></img></a>

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
            var plateview=$(".user_art_delete").is(":hidden"); //该层是否隐藏
            if(plateview){    //如果层是隐藏的
                $(".user_art_delete").fadeIn();
                $("#dh_text").text("完成");
                // $(".dh").css("right","230px");


            }
            else{      //层没隐藏时，再点击则隐藏该层
                $(".user_art_delete").fadeOut();
                // $(".dh").css("right","30px");
                $("#dh_text").text("编辑");
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
        //点击发表文章，跳转页面
        $(".report_newarticle").click(function(){
            location.href = "create_article.html";});
        //点击返回按钮，返回上一页
        $(".callback").click(function(){
            history.back();});

        //长按文章框,弹出是否删除div
//		var timeout ;//计时器
//		$(".user_article").on('mousedown',function(){
//			timeout=setTimeout(function(){
//				$(".user_art_delete").fadeIn();},1000);   //2秒后显示user_art_delete这个div
//		});
//		$(".user_article").on('mouseup',function(){
//			clearTimeout(timeout); 
//			$(".user_art_delete").fadeOut();
//		})
//		$(".user_article").on('mouseout', function(){
//			clearTimeout(timeout); 
//			$(".user_art_delete").fadeOut();
//		})


    });

</script>
</body>
</html>