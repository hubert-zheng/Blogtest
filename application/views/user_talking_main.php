<!DOCTYPE html>
<html>

<head>
<!-- 禁止页面缩放 -->
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
  <meta charset="UTF-8">
	<script src="<?=base_url();?>jquery-2.1.3.min.js"></script>
  <title>用户信息窗口</title>

    <link rel="stylesheet" href="<?=base_url();?>style.css" media="screen" type="text/css" />
</head>


<body>
<script>


</script>


<div class="talking_tools">
	<div class="callback" title="返回上一页">好友昵称</div>
</div>
<div class="talking_main">
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

	<div class="input_talk_main">
		<div class="input_talk_txt" name="talking_txt" id="input_talk_txt" contenteditable="true"></div>
		<div class="talking_face_btn">表情</div>
	
		<div class="talking_submit">提交</div>
			<div class="talking_face_main"></div>
	</div>
</div>
<script>

			
	$(document).ready(function(){   
	
	var ImgIputHandler={
		facePath:[ 
			{faceName:"呵呵",facePath:"bd_01.png"},
			{faceName:"哈哈",facePath:"bd_02.png"},
			{faceName:"吐舌",facePath:"bd_03.png"},
			{faceName:"啊",facePath:"bd_04.png"},
			{faceName:"酷",facePath:"bd_05.png"},
			{faceName:"怒",facePath:"bd_06.png"},
			{faceName:"开心",facePath:"bd_07.png"},
			{faceName:"汗",facePath:"bd_08.png"}, 
			{faceName:"泪",facePath:"bd_09.png"},
			{faceName:"黑线",facePath:"bd_10.png"},
			{faceName:"鄙视",facePath:"bd_11.png"},
			{faceName:"不高兴",facePath:"bd_12.png"},
			{faceName:"真棒",facePath:"bd_13.png"},
			{faceName:"钱",facePath:"bd_14.png"},
			{faceName:"疑问",facePath:"bd_15.png"},
			{faceName:"阴险",facePath:"bd_16.png"},
			{faceName:"吐",facePath:"bd_17.png"},
			{faceName:"咦",facePath:"bd_18.png"},
			{faceName:"委屈",facePath:"bd_19.png"},
			{faceName:"花心",facePath:"bd_20.png"},
			{faceName:"呼~",facePath:"bd_21.png"}, 
			{faceName:"笑眼",facePath:"bd_22.png"},
			{faceName:"冷",facePath:"bd_23.png"},
			{faceName:"太开心",facePath:"bd_24.png"}, 
			{faceName:"滑稽",facePath:"bd_25.png"},
			{faceName:"勉强",facePath:"bd_26.png"},
			{faceName:"狂汗",facePath:"bd_27.png"},
			{faceName:"乖",facePath:"bd_28.png"},
			{faceName:"睡觉",facePath:"bd_29.png"},
			{faceName:"惊哭",facePath:"bd_30.png"},
			{faceName:"升起",facePath:"bd_31.png"},
			{faceName:"惊讶",facePath:"bd_32.png"},
			{faceName:"喷",facePath:"bd_33.png"},
			]
			, 
			Init:function(){
				var isShowImg=false;
				if(isShowImg==false){  
						isShowImg=true; 
						if($(".talking_face_main").children().length==0){  
								for(var i=0;i<ImgIputHandler.facePath.length;i++){ 
										$(".talking_face_main").append("<img title=\""+ImgIputHandler.facePath[i].faceName+"\" src=\"<?=base_url();?>images/bd_face_pic/"+ImgIputHandler.facePath[i].facePath+"\" />");
								}
								$(".talking_face_main>img").click(function(){
								isShowImg=false;
								//$(".input_talk_txt").focus();
								ImgIputHandler.insertAtCursor($(".input_talk_txt")[0],"<img src=\""+$(this).attr("src"));
								
								ImgIputHandler.insertImg($(this).attr("src"));
								
								//alert("<img src=\""+$(this).attr("src")+"\" />");
								});
								}
						}
					
				
				},
				
				//在textarea里添加选中的表情
				insertAtCursor:function(myField, myValue) {
					 if (document.selection) {  
							myField.focus();  
							sel = document.selection.createRange();  
							sel.text = myValue;  
							sel.select();  
						} 
					else if (myField.selectionStart || myField.selectionStart == "0") {  
								var startPos = myField.selectionStart;  
								var endPos = myField.selectionEnd;  
								var restoreTop = myField.scrollTop;  
								myField.value = myField.value.substring(0, startPos)+myValue+myField.value.substring(endPos, myField.value.length);  
						if (restoreTop > 0) {  
								myField.scrollTop = restoreTop;  
							}  
						myField.focus();  
						myField.selectionStart = startPos+myValue.length;  
						myField.selectionEnd = startPos+myValue.length;  
						} 
					else {  
						myField.value  = myValue;  
						myField.focus();  
						}  			
				} 
				,
				
				//插入表情到textarea 
				insertImg:function(imgsrc){
					var imgurl = document.createElement('img');
					imgurl.src = imgsrc;
					document.getElementById('input_talk_txt').appendChild(imgurl);
				}
				,
				//通过class获取DOM对象
				getByClass:function(oParent, sClass){
					var aEle=oParent.getElementsByTagName('*');
					var aResult=[];
					var re=new RegExp('\\b'+sClass+'\\b', 'i');
					var i=0;
        
					for(i=0;i<aEle.length;i++){
							if(re.test(aEle[i].className)){
								aResult.push(aEle[i]);
							}
					}
					return aResult;
					}
					
					
			}
	
	
	
	
	//$(".talking_face_main").append("<img title=\"呵呵\" src=\"images/bd_face_pic/bd_01.png\" />"); //在div里插入img
	//$(".talking_face_main").append("<img title=\"呵呵\" src=\"images/bd_face_pic/bd_02.png\" />"); 
	
	//var talking_face_main
	
	$(".talking_face_btn").click(function(){
	
		talking_face_main=$(".talking_face_main").is(":hidden"); //表情框
	//	alert(talking_face_main);
		if (talking_face_main){
		$(".talking_face_main").fadeIn();
		
		ImgIputHandler.Init();
		
		
		}
		else{
		$(".talking_face_main").hide();
	
		}
	})
	
	//点击提交在聊天框添加一条信息
	$(".talking_submit").click(function(){
		var input_talk_txt=$(".input_talk_txt").html();
		$(".chat-thread").append("<li>"+input_talk_txt+"</li>");
	});
	
	//点击返回按钮，返回上一页
	$(".callback").click(function(){
		history.back();});
		
	
});
</script>
</body>

</html>