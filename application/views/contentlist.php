<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <meta name="generator" charset="utf-8"/>
	<link rel="stylesheet" href="<?=base_url();?>style.css" type="text/css" media="screen">

    <script src="<?=base_url();?>loading.js"></script>
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
	
    <title></title>

    <script type="text/javascript">
    //动态获取当前时间
    function current(){
        var d=new Date(),str='';
        /*str +=d.getFullYear()+'/'; //获取当前年份
        var month = d.getMonth('')+1;
        str +=month< 10 ? "0" + month + '/' : month + '/'; //获取当前月份（0——11）
        str +=d.getDate()< 10 ? "0" + d.getDate()+' ' : d.getDate()+' ';*/
        str +=d.getHours()< 10 ? "0" + d.getHours()+':' : d.getHours()+':';
        str +=d.getMinutes()< 10 ? "0" + d.getMinutes()+':' : d.getMinutes()+':';
        str +=d.getSeconds()< 10 ? "0" + d.getSeconds()+'' : d.getSeconds()+'';
        return str; }
    setInterval(function(){$("#nowTime").html(current)},1000);

    //页面滚动自动加载信息
    $(document).ready(function(){
        //ajax点击加载请求
        var page_num = 1;
        $(".nodata").hide();
     $(".btn_loadmore").click(function(){
         var myplugin;  //加载提示



      /*   options = {
             img1: 'v1.png',
             img2: 'v2.png',
             speed: 50,
             limit: 50

         };
        myplugin = $('.loading').cprogress(options);//创建加载提示
         if(myplugin){    //开始转动
             myplugin.start();
         }*/

            $.getJSON("<?=site_url('welcome/loadmore')?>", {page: page_num}, function (json) {
                console.log(json);
                if (json.articlelist.length) {
                    var str = "";
                    $.each(json.articlelist, function (index, array) {

                        var str = '<div id="article"><div class="content_article" artid="'+array.artid+'" onclick="get_article(\''+array.artid+'\')">';
                        str += "<div class=\"content_art_Headimg\"><img src=\"<?=base_url();?>images/1.jpg\"></div>";//头像
                        str += "<div class=\"content_art_authorid\"><span>" + array.name + "</span></div>"; //文章作者
                        str += "<div class=\"content_art_time\"><span>" + array.time + "</span></div>"; //文章发表时
                        str += "<div class=\"content_art_title\"><span>" + array.title + "</span></div>";//文章标题
                        str += "<div class=\"content_art_brief\"><span>另外加的111111111111111111</span></div>";//文章简介
                        str += "<div class=\"content_art_comment\"> <img src=\"<?=base_url();?>images/comment.png\" style=\"width:18px;height:18px;\"><span> 10</span></div>"; //评论数
                        str += "</div></div>"; //两个div闭合
/*                        if(myplugin){
                            myplugin.options({limit: 90});
                        }*/
                        $("#content_main").append(str);
                        /*if(myplugin){
                            myplugin.options({limit: 100});  //加载完成
                        }*/
                    });
                    page_num++;
                    /*if(myplugin){
                        myplugin=myplugin.destroy();   //销毁加载提示
                    }*/
                } else {
                   // alert($(".nodata").is("hidden"));
                    alert("没有更多文章了");
                    $(".nodata").show();
                    return false;
                }

            });

         });
     });
    //滑动到底部加载更多内容
  /*      $(function(){
            var winH = $(window).height(); //页面可视区域高度
            var i = 1; //设置当前页数
            $(window).scroll(function () {
                var pageH = $(document.body).height();
                var scrollT = $(window).scrollTop(); //滚动条top
                var aa = (pageH-winH-scrollT)/winH;
                //alert(aa);
                if(aa<1){
                    $.getJSON("<?=site_url('welcome/loadmore')?>",{page:i},function(json){
                        //alert(json);
                        console.log(json);
                        if(json.length>0){
                            var str = "";

                            $.each(json,function(index,array){

                                var str = "<div id=\"article\"><div class=\"content_article\">";
                                str += "<div class=\"content_art_Headimg\"><img src=\"images/1.jpg\"></div>";//头像
                                str += "<div class=\"content_art_authorid\"><span>"+array['name']+"</span></div>"; //文章作者
                                str += "<div class=\"content_art_time\"><span>"+array['time']+"</span></div>";
                                str += "<div class=\"content_art_title\"><span>"+array['title']+"</span></div>";//文章标题
                                str += "</div></div>"; //两个div闭合
                                $("#content_main").append(str);

                            });
                            i++;
                        }else{
                            $(".nodata").show().html("别滚动了，已经到底了。。。");
                            return false;
                        }
                    });
                }
            });
        });*/
    </script> 
  </head>
  <body>
  <!--==============================header=================================-->
    <header>
		<div class="articleHead">
			<div class="mainNav">
				<a class="callback" title="返回上一页"></a>
                <h1 class="logoname">交流论坛</h1>
				<div class="create_article" title="写文章"><img src="<?=base_url();?>images/create_artcle.png"></div>
                <div class="dh" title="用户中心"><img src="<?=base_url();?>images/bullets-black.png" style="width:25px;height:20px;" ></div>
					<div class="plate_popup">
						<br><br>
						<p><a href="<?=site_url('manage_control/into_manage_control')?>">经验共享</a></p>
						<p><a href="#">情感抒发</a></p>
						<p><a href="#">求职版块</a></p>
						<p><a href="#">活动版块</a></p>
						<p><a href="#">学习版块</a></p>
						<br>
						<p><a href="<?=site_url('user_control/get_usermain')?>">用户中心</a></p>
						<br>
                        <p><a href="<?=site_url('logout/logout')?>">退出</a></p>
				
					</div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<!--content_menubar-->

    <!--content_main-->
	<div id="content_main">
    <!--content_article-->
	<?php if(!empty($articlelist)){foreach($articlelist as $item):?>
	<div id="article">
        <div class="content_article" artid="<?=$item->artid?>">
            <div class="content_art_Headimg">
                <img src="<?=base_url();?>images/1.jpg" style="border-radius:30px;">
            </div>
            <div class="content_art_authorid">
                <span><?=$item->name?></span>
            </div>
            <div class="content_art_time">
                <span><?=$item->time?></span>
            </div>
           <!-- <a href="content_comment.html" rel="external" target="_blank">-->
            <div class="content_art_title">
                <span><?=$item->title?></span>
            </div>
            <div class="content_art_brief">
                <span>文章1简介11111111111111111111111111111111111111111111111111111111111111111111111111111哈哈哈11</span>
            </div>
            </a>
            <div class="content_art_comment">
                <img src="<?=base_url();?>images/comment.png" style="width:18px;height:18px;"><span> 10</span>
                <div class="loading"></div>
            </div>
         </div>

        
        
   
    </div>
      <?php endforeach; }?>


	</div><br>
  <div class="nodata">没有更多内容了</div>
  <div class="loadmore_div"><input class="btn_loadmore" type="button" value="加载更多"></div><br>
	<!--==============================footer=================================-->
	 <footer style="visibility: visible; margin-top: 0px;">
		<div class="footer">
			<div class="footer_nav">
				<a href="http://cst.gcu.edu.cn/">华南理工大学广州学院计算机工程学院</a>
				<a href="#" class="totopbutton" title="回到顶部"><img src="<?=base_url();?>images/totop1.png" style="width:30px;height:30px;"></a>
			</div>
			<br>
			<p class="footer_times">当前时间  <div id="nowTime"></div> </p>
		</div>
	 </footer>
		<script>
		$(document).ready(function(){
		$(".personal").css("color","black");
		var header_height=$(".articleHead").height();
		var footer_height=$(".footer").height();
		var menubar_height=$(".content_menubar").height();
		var browser_height=$(window).height();
		//alert(browser_height);
		//if(browser_height)
		//$("#content_main").height(browser_height-header_height-footer_height-menubar_height); //让该DIV填充整个浏览器高度

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
			 $(".dh").css("background","#fff");
             $(".create_article").css("right","-70%");
			 
			 
			 }
			 else{      //层没隐藏时，再点击则隐藏该层
			 $(".plate_popup").fadeOut();
			 $(".dh").css("right","5px");
			 $(".dh").css("background","transparent");
                 $(".create_article").css("right","-90%");
			 }
			 })
		//返回上一页事件
		$(".callback").click(function(){
		history.back();});
        //点击写文章
            $(".create_article").click(function(){
                location.href = "<?=site_url('create_article/show_create')?>";
            })

		});
        //文章点击,根据点击文章的不同id跳转
        $(".content_article").click(function(){
            var artid = $(this).attr("artid");
            var url = "<?=site_url('detail_artcle/index')?>";
            //alert(artid);
            //用url方式传递文章id到后台
            location.href = url+'/'+artid;
            /*$.ajax({
                type: "GET",
                url: url+'/'+artid,
                dataType: "html",
                cache: false,//是否缓存
                beforeSend: function() {//请求后,还没收到数据...显示jquery加载相关数据

                    },
                success: function(A) { //jquery请求成功返回数据

                    }

                });*/

        });
        //传递文章id，用于ajax异步插入的文章加载详情
        function get_article(val){
            var url = "<?=site_url('detail_artcle/index')?>";
            //alert(artid);
            //用url方式传递文章id到后台
            location.href = url+'/'+val;
        }
	</script>
  </body>
</html>
