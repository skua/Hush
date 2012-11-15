<?php

?>

	</div><!-- #main -->

<footer id="foot">
<p>就不要人人网那样</p>
<p>不需要的也打开</p>
<p>真讨厌啊</p>
<p>所以还是藏起来顺便lazyload吧</p> 
<P>美丽的大脚</P>
<p>足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载足部加载</p>
 <script type="text/javascript">

$(document).ready(function() {$("img").lazyload();$("p").lazyload();$(".entry").css("display","none");  $(".css,.html,.js").hide() ;hoverhide.init();});
hoverhide = {init : function(){$("#css").mouseover(function(){$(".css").show(400);$(".tip-violet").css("color","#66F");});$("#css").mouseout(function(){$(".css").hide(900);});$("#html").mouseover(function(){$(".html").show(400);$(".tip-violet").css("color","#66F");});$("#html").mouseout(function(){$(".html").hide(900);});$("#js").mouseover(function(){$(".js").show(400);$(".tip-violet").css("color","#66F");});$("#js").mouseout(function(){$(".js").hide(900);
//      $(".js-l,.js-r").fadeOut(900)  fadeout会跳格
});}};$('#html,#css,#js').poshytip({className: 'tip-violet',bgImageFrameSize: 9});

function Fatthin(){$(this).siblings().slideDown("slow");$(this).siblings().children().slideDown("slow");};
$("h2").mouseover(Fatthin);

$("h2").mousedown(function(){$(this).siblings().slideUp("slow");$(this).siblings().children().slideUp("slow");});
</script>   
</footer>
<div id="ie">
  <p>亲！不用看了，本站完全不支持IE6，互联网的进步需要大家一起努力才行!</p>
  <p id="w3c"><a href="http://www.mozillaonline.com/" target="_blank"> Firefox </a>或<a href="http://www.google.com/chrome/" target="_blank"> Chrome </a>都比IE6强</p>
</div>
<!--[if lte IE 6]><script type="text/javascript">  $("#ie").css("display","block");
 $("#main").css("display","none");
 $("#pic-980").css("display","none");
 $("#header").css("display","none");</script><![endif]-->
<?php wp_footer(); ?>

</body>
</html>