<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>泉州体育网首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__PUBLIC__/index/css/index.css" type="text/css" rel="stylesheet" />
<script src="__PUBLIC__/index/js/common.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/index/js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	
	//选项卡鼠标滑过事件
	$('#statetab .tabbtn li').mouseover(function(){
		TabSelect("#statetab .tabbtn li", "#statetab .tabcon", "current", $(this))
	});
	$('#statetab .tabbtn li').eq(0).trigger("mouseover");
	
	//选项卡鼠标滑过事件
	$('#clicktab .tabbtn li').click(function(){
		TabSelect("#clicktab .tabbtn li", "#clicktab .tabcon", "current", $(this))
	});
	$('#clicktab .tabbtn li').eq(0).trigger("click");

	function TabSelect(tab,con,addClass,obj){
		var $_self = obj;
		var $_nav = $(tab);
		$_nav.removeClass(addClass),
		$_self.addClass(addClass);
		var $_index = $_nav.index($_self);
		var $_con = $(con);
		$_con.hide(),
		$_con.eq($_index).show();
	}
	
});
</script>
<title>泉州体育网</title>
</head>
<body>
<div id="wrap">
	<div class="head">
		<p><span class="user">用户名：<input name="" type="text" class="input" /></span><span class="user">密码：<input name="" type="text" class="input" /></span></p>
		<p><input name="" type="button" class="dl_btn" value="登录" /></p>
		<p class="zc"><a href="#">免费注册</a> |</p>
		<p class="password"><a href="#">忘记密码</a></p>
		<span class="span"><a href="#">加入收藏</a> | <a href="#">设为首页</a></span>
	</div>
	<div class="head_img"><p><img src="__PUBLIC__/index/images/logo.gif" border="0" alt="" /></p><p><img src="__PUBLIC__/index/images/banner.jpg" border="0" alt="" /></p></div>
	<!--导航条开始-->
	<div class="head_banner">
		<ul>
		<li class="cd_0-off" id="menu0" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">网站首页</li>
		<li class="cd_0-off" id="menu1" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">精英团队</li>
		<li class="cd_0-off" id="menu2" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">体育新闻</li>
		<li class="cd_0-off" id="menu3" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">动感体育</li>
		<li class="cd_0-off" id="menu4" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">市场资讯</li>
		<li class="cd_0-off" id="menu5" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">特邀评论</li>
		<li class="cd_0-off" id="menu6" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">论坛</li>
		<li class="cd_0-off" id="menu7" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">公告/预告</li>
		<li class="cd_0-off" id="menu8" onClick="registMenu(this);window.open('#','_blank')" onMouseOver="overMenu(this)" onMouseOut="outMenu(this)" status="off">商城</li>
		</ul>
	</div>
	<!--导航条结束-->
	<!--最新资讯开始-->
	<div class="news">
	 <marquee scrollamount=2 direction=up  align="up" style="height:23px;" onmouseover="this.stop()"  onmouseout="this.start()">
		<ul>
		<li>“侨兴杯”公开赛助力蛇年春节</li>
		<li>全国篮球锦标赛北大泉州附中获中亚军</li>
		<li>SM村级篮球争霸赛程序</li>
		</ul>
	</marquee>
	</div>
	<!--最新资讯结束-->
	<div class="story">
		<ul>
		<li>
		<div class="mod18">
			<span id="prev" class="btn prev"></span>
			<span id="next" class="btn next"></span>
			<span id="prevTop" class="btn prev"></span>
			<span id="nextTop" class="btn next"></span>
				<div id="picBox" class="picBox">
					<ul class="cf">
						<li>
							<a href="#" target="_blank"><img  width="571" height="293" src="__PUBLIC__/index/images/83293306.jpg" alt="" /></a>
							<span>探班横店某剧组，陆毅在剧中最重的戏服有20斤，一下戏他就飞快地脱去戏服，躲到休息室凉快去。</span>
						</li>
						<li>
							<a href="#" target="_blank" ><img width="571" height="293" src="__PUBLIC__/index/images/83293260.jpg" alt="" /></a>
							<span> 《宫3》剧组片场，演员王琳正对着小镜子练习微笑。在片场，许多演员都有自己的秘密装备。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293278.jpg" alt="" /></a>
							<span>虽然还是春天，横店下午的气温也有15-16度，在室外穿着厚衣服拍戏对王琳来说有点遭罪。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293291.jpg" alt="" /></a>
							<span>同样遭罪的还有演员寇振海，戏服太厚天太热，他的脖子上捂出了痱子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293300.jpg" alt="" /></a>
							<span>出汗多，一些小妆容需要随时修饰，一位女助理在帮寇振海现场粘胡子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293493.jpg" alt="" /></a>
							<span>经常在电视上看到柱子上鎏金雕刻的装饰，则是临时安装上去的。</span>
						</li>
						<li>
							<a href="#" target="_blank" ><img width="571" height="293" src="__PUBLIC__/index/images/83293260.jpg" alt="" /></a>
							<span> 《宫3》剧组片场，演员王琳正对着小镜子练习微笑。在片场，许多演员都有自己的秘密装备。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293278.jpg" alt="" /></a>
							<span>虽然还是春天，横店下午的气温也有15-16度，在室外穿着厚衣服拍戏对王琳来说有点遭罪。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293291.jpg" alt="" /></a>
							<span>同样遭罪的还有演员寇振海，戏服太厚天太热，他的脖子上捂出了痱子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293300.jpg" alt="" /></a>
							<span>出汗多，一些小妆容需要随时修饰，一位女助理在帮寇振海现场粘胡子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293493.jpg" alt="" /></a>
							<span>经常在电视上看到柱子上鎏金雕刻的装饰，则是临时安装上去的。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293291.jpg" alt="" /></a>
							<span>同样遭罪的还有演员寇振海，戏服太厚天太热，他的脖子上捂出了痱子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293300.jpg" alt="" /></a>
							<span>出汗多，一些小妆容需要随时修饰，一位女助理在帮寇振海现场粘胡子。</span>
						</li>
						<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293493.jpg" alt="" /></a>
							<span>经常在电视上看到柱子上鎏金雕刻的装饰，则是临时安装上去的。</span>
						</li>
							<li>
							<a href="#" target="_blank"><img width="571" height="293" src="__PUBLIC__/index/images/83293493.jpg" alt="" /></a>
							<span>经常在电视上看到柱子上鎏金雕刻的装饰，则是临时安装上去的。</span>
						</li>
					</ul>
			</div>
	
	<div id="listBox" class="listBox">
		<ul class="cf">
			<li class="on"><i class="arr2"></i><img width="118" height="64" src="__PUBLIC__/index/images/83293792.jpg" alt="陆毅脱掉戏服" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293780.jpg" alt="对镜练习微笑" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293781.jpg" alt="冬戏夏拍" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293782.jpg" alt="寇振海热出痱子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293783.jpg" alt="现场粘胡子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293832.jpg" alt="假装饰" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293780.jpg" alt="对镜练习微笑" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293781.jpg" alt="冬戏夏拍" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293782.jpg" alt="寇振海热出痱子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293783.jpg" alt="现场粘胡子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293832.jpg" alt="假装饰" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293782.jpg" alt="寇振海热出痱子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293783.jpg" alt="现场粘胡子" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293832.jpg" alt="假装饰" /></li>
			<li><i class="arr2"></i><img width="72" height="51" src="__PUBLIC__/index/images/83293832.jpg" alt="假装饰" /></li>
		</ul>
	</div>
	
</div>

		</li>
		<li class="line"></li>
		<!--今日要闻开始-->
		<li class="today_news">
			<p class="today_news_title">今日要闻</p>
			<div class="today_news_txt">
			<ul>
			<li><span><a href="#">“侨兴杯”公开赛助力蛇年春晚</a></span></li>
			<li><a href="#">黄飞鸿徒孙 泉州少林寺认祖</a></li>
			<li><a href="#">全国篮球锦标赛北大泉州附中获亚军与争锋</a></li>
			<li><span><a href="#">SM村级篮球争霸赛程序</a></span></li>
			<li><a href="#">“侨兴杯”公开赛助力蛇年春节</a></li>
			<li><a href="#">全国篮球锦标赛北大泉州附中获亚军</a></li>
			<li><span><a href="#">SM篮球争霸赛圆满结束SM谁与争锋</a></span></li>
			<li><a href="#">SM第二阶段比赛前两轮成绩</a></li>
			<li><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
			<li><span><a href="#">SM篮球争霸赛圆满结束SM谁与争锋</a></span></li>
			<li><a href="#">SM第二阶段比赛前两轮成绩</a></li>
			</ul>
			</div>
		</li>
		<!--今日要闻结束-->
		</ul>
  </div>
  <!--精英团队开始-->
  <div class="team">
  	   <div class="blk_18"> <a class="LeftBotton" onMouseDown="ISL_GoUp_1()" onMouseUp="ISL_StopUp_1()" onMouseOut="ISL_StopUp_1()" href="javascript:void(0);" target="_self"></a>
        <div class="pcont" id="ISL_Cont_1">
          <div class="ScrCont">
            <div id="List1_1">
				  <!-- piclist begin -->
			   <a class="pl"href="#"> <img src="__PUBLIC__/index/images/img_01.jpg" alt=""/><span>湖南湘涛</span></a> 
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_02.jpg" alt=""/><span>武汉卓尔</span></a>
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_03.jpg" alt=""/><span>广东日之泉</span></a>
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_04.jpg" alt=""/><span>深圳红钻</span></a>
			   <a class="pl" href="#" ><img src="__PUBLIC__/index/images/img_05.jpg" alt=""/><span>贵州人和</span></a>
			   <a class="pl"href="#"> <img src="__PUBLIC__/index/images/img_01.jpg" alt=""/><span>湖南湘涛</span></a> 
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_02.jpg" alt=""/><span>武汉卓尔</span></a>
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_03.jpg" alt=""/><span>广东日之泉</span></a>
			   <a class="pl" href="#"><img src="__PUBLIC__/index/images/img_04.jpg" alt=""/><span>深圳红钻</span></a>
			   <a class="pl" href="#" ><img src="__PUBLIC__/index/images/img_05.jpg" alt=""/><span>贵州人和</span></a>
              <!-- piclist end -->
            </div>
            <div id="List2_1"></div>
          </div>
        </div>
        <a class="RightBotton" onMouseDown="ISL_GoDown_1()" onMouseUp="ISL_StopDown_1()" onMouseOut="ISL_StopDown_1()" href="javascript:void(0);" target="_self"></a> </div>
      <div class="c"></div>
      <script type="text/javascript">
  <!--
  picrun_ini()
  //-->
  </script>
  </div>
  <div class="ban_img"><img src="__PUBLIC__/index/images/img_06.jpg" alt="" /></div>
  <!--精英团队结束-->
    <!--团队动态开始-->
  <div class="dt">
  	<div class="dt_title">团队动态</div>
	<div class="dt_txt">
		<ul>
		<li>
		<p><img src="__PUBLIC__/index/images/img_07.jpg" alt="" /><br/><span>吕晓明</span></p>
		<p class="pll"><span><a href="#">在爸爸怀中共度NBA全明星周末</a></span><em><a href="#">转发（5796）</a><a href="#">评论（6142）</a></em></p>
		</li>
		<li>
		<p><img src="__PUBLIC__/index/images/img_07.jpg" alt="" /><br/><span>吕晓明</span></p>
		<p class="pll"><span><a href="#">在爸爸怀中共度NBA全明星周末</a></span><em><a href="#">转发（5796）</a><a href="#">评论（6142）</a></em></p>
		</li>
		<li>
		<p><img src="__PUBLIC__/index/images/img_09.jpg" alt="" /><br/><span>吕晓明</span></p>
		<p class="pll"><span><a href="#">本赛季最后一场比赛本赛季最后一场比赛本赛季最后一场比赛</a></span><em><a href="#">转发（5796）</a><a href="#">评论（6142）</a></em></p>
		</li>
		<li>
		<p><img src="__PUBLIC__/index/images/img_07.jpg" alt="" /><br/><span>吕晓明</span></p>
		<p class="pll"><span><a href="#">在爸爸怀中共度中末在爸爸怀中共度NBA全明星周末</a></span><em><a href="#">转发（5796）</a><a href="#">评论（6142）</a></em></p>
		</li>
		</ul>
	</div>
  </div>
  <!--团队动态结束-->
    <!--泉州体育开始-->
	<div class="dt">
		<div class="ty_title"><span><a href="#">更多>></a></span>泉州体育</div>
		<div class="ty_txt">
		<ul>
		<li style="background:none;">
		<p><img src="__PUBLIC__/index/images/img_11.jpg" alt="" /></p>
		<p style="width:292px;"><span>鲤城区代表队勇夺全国</span><br/><em>全国第九届武术之乡武术比赛2012年7月22日在重庆渝北市圆满落下帷幕，本前不久，黄飞鸿的徒孙赵志凌带领70多名徒弟...</em></p>
		</li>
		<li style="border-bottom:1px dotted #c4c4c4; background:none; clear:both; margin-top:0px; *margin-top:-8px !important; margin-bottom:8px;"></li>
		<li class="one_row"><a href="#">出柜了!英联赛球星因同性恋25岁退役:因为爱情(图)</a></li>
		<li class="two_row"><a href="#">小罗太贼了！ 刚喝完门将水转眼偷袭送助攻</a></li>
		<li class="one_row"><a href="#">52岁马拉多纳情人节再得一子 将发声明承认身份</a></li>
		<li class="two_row"><a href="#">C罗:曼联是我家或重回效力 连喊12遍:绝不加盟曼城</a></li>
		<li class="one_row"><a href="#">豪乳嫩模狂舞圣西罗看台 巴神进球就献给她看(图)</a></li>
		<li class="two_row"><a href="#">无所不能的神就是他！加盟后包揽AC米兰全部进球</a></li>
		<li class="one_row"><a href="#">意甲-巴神连续3轮破门 AC米兰笑纳乌龙2-1超国米</a></li>
		<li class="two_row"><a href="#">德甲-曼祖倒钩破门罗本赛季首球 拜仁客场2-0狼堡</a></li>
		</ul>
		</div>
	</div>
	<!--泉州体育结束-->
	<!--市场资讯开始-->
	<div class="sczx">
		<div class="sczx_title">市场资讯</div>
		<div class="sczx_txt">
		<ul>
		<li><a href="#">信诚杯QBL企业篮球联赛</a></li>
		<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
		<li><a href="#">晋江篮球精英对抗赛</a></li>
		<li><a href="#">意大利1-0斯洛文尼亚</a></li>
		<li><a href="#">巴尔扎雷蒂突破</a></li>
		<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
		<li><a href="#">晋江篮球精英对抗赛</a></li>
		<li><a href="#">意大利1-0斯洛文尼亚 </a></li>
		<li><a href="#">巴尔扎雷蒂突破</a></li>
		<li><a href="#">信诚杯QBL企业篮球联赛 </a></li>
		<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
		<li><a href="#">信诚杯QBL企业篮球联赛</a></li>
		</ul>
		</div>
	</div>
	<!--市场资讯结束-->
	<!--广告位开始-->
	<div class="ad"><img src="__PUBLIC__/index/images/img_12.jpg" alt="" /></div>
	<div class="ad02"><img src="__PUBLIC__/index/images/img_13.jpg" alt="" /></div>
	<!--广告位结束-->
	<!--市场资讯、体坛焦点、焦点图开始-->
	<div class="clear"></div>
	<div class="con_left">
		<div class="sczx02">
			<div class="sczx_title02"><span><a href="#">更多>></a></span>市场资讯</div>
			<div class="sczx02_txt">
				<ul>
				<li><a href="#">信诚杯QBL企业篮球联赛 </a></li>
				<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
				<li><a href="#">晋江篮球精英对抗赛</a></li>
				<li><a href="#">意大利1-0斯洛文尼亚</a></li>
				<li><a href="#">巴尔扎雷蒂突破</a></li>
				<li><a href="#">信诚杯QBL企业篮球联赛 </a></li>
				<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
				</ul>
				<div>
					<ul>
					<li><span>午志：</span><a href="#">曼联占得八分之一决赛先机...</a></li>
					<li><span>汪大昭：</span><a href="#">忆和庄则栋一起做访谈...</a></li>
					<li><span>张林栋：</span><a href="#">天堂里从此多了一位使者...</a></li>
					<li><span>午志：</span><a href="#">曼联占得八分之一决赛先机...</a></li>
					</ul>
					<p class="more"><a href="#"><img src="__PUBLIC__/index/images/more.gif" alt="" border="0" /></a></p>
				</div>
			</div>
		</div>
		<div class="sczx02">
			<div class="jd_title"><span><a href="#">更多>></a></span>体坛焦点</div>
			<div class="jd_txt">
				<ul>
				<li class="one_row"><span>[2013-02-01]</span><a href="#">出柜了!英联赛球星因同性恋25岁退役:因为爱情(图)</a></li>
				<li class="two_row"><span>[2013-02-01]</span><a href="#">小罗太贼了！ 刚喝完门将水转眼偷袭送助攻 </a></li>
				<li class="one_row"><span>[2013-02-01]</span><a href="#">52岁马拉多纳情人节再得一子 将发声明承认身份 </a></li>
				<li class="two_row"><span>[2013-02-01]</span><a href="#">C罗:曼联是我家或重回效力 连喊12遍:绝不加盟曼城 </a></li>
				<li class="one_row"><span>[2013-02-01]</span><a href="#">豪乳嫩模狂舞圣西罗看台 巴神进球就献给她看(图)</a></li>
				<li class="two_row"><span>[2013-02-01]</span><a href="#">无所不能的神就是他！加盟后包揽AC米兰全部进球 </a></li>
				<li class="one_row"><span>[2013-02-01]</span><a href="#">意甲-巴神连续3轮破门 AC米兰笑纳乌龙2-1超国米 </a></li>
				<li class="two_row"><span>[2013-02-01]</span><a href="#">德甲-曼祖倒钩破门罗本赛季首球 拜仁客场2-0狼堡</a></li>
				<li class="one_row"><span>[2013-02-01]</span><a href="#">意甲-巴神连续3轮破门 AC米兰笑纳乌龙2-1超国米</a></li>
				<li class="two_row"><span>[2013-02-01]</span><a href="#">德甲-曼祖倒钩破门罗本赛季首球 拜仁客场2-0狼堡</a></li>
				</ul>
			</div>
		</div>
		<img src="__PUBLIC__/index/images/img_14.jpg" border="0" alt=""  class="img_jd"/>
	</div>
	<!--市场资讯、体坛焦点、焦点图结束-->
	<!--焦点图、在线投票开始-->
	<div class="con_right">
		  <div id="picviewer">
					<div class="jd_img"><a target="_self" href="javascript:goUrl()">
					<div id="jdt"><!--***********************************************************--><!--焦点图Begin-->
						<script type="text/javascript">
							var width=263;var focus_height=256;var text_height=0;
							var swf_height = focus_height+text_height;
							var pics='';var links='';var texts='';
							pics+='http://www.bda.gov.cn/cms/res_base/whatycms_com_www/upload/article/image/2010_2/5_21/4b7pg9hf300k.jpg|';
							links+='http://www.bda.gov.cn/cms/jryz/12181.htm|';
							
							pics+='http://www.bda.gov.cn/cms/res_base/whatycms_com_www/upload/article/image/2010_2/5_21/bdkgg9hex2f9.jpg|';
							links+='http://www.bda.gov.cn/cms/jryz/12191.htm|';
							
							pics+='http://www.bda.gov.cn/cms/res_base/whatycms_com_www/upload/article/image/2010_2/5_21/2u0xg9herywe.jpg|';
							links+='http://www.bda.gov.cn/cms/jryz/12176.htm|';
							
							pics+='http://www.bda.gov.cn/cms/res_base/whatycms_com_www/upload/article/image/2010_2/5_20/ywiug9fsc70y.jpg|';
							links+='http://www.bda.gov.cn/cms/jryz/11806.htm|';
							
							pics+='http://www.bda.gov.cn/cms/res_base/whatycms_com_www/upload/article/image/2010_2/5_12/nyc9g94bodq8.jpg|';
							links+='http://www.bda.gov.cn/cms/jryz/11703.htm|';
						
							pics=pics.substring(0,pics.length-1);
							links=links.substring(0,links.length-1);
							texts=texts.substring(0,texts.length-1);
							document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+width+'" height="'+swf_height+'">');
							document.write('<param name="movie" value="http://www.bda.gov.cn/cms/front_res/com_tag/focus1.swf"/>');
							document.write('<param name="quality" value="high"/><param name="bgcolor" value="#F0F0F0"/>');
							document.write('<param name="menu" value="false"/><param name="wmode" value="opaque"/>');
							document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+width+'&borderheight='+focus_height+'&textheight='+text_height+'"/>');
							document.write('<embed src="http://www.bda.gov.cn/cms/front_res/com_tag/focus1.swf" width="'+width+'" height="'+swf_height+'" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" wmode="opaque" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>');
							document.write('</object>');
						</script>
					</div>
					<!--***************************************************************--></a>
					<div class="jd_t"></div>
					</div></div>
		<div class="tp">
			<div class="tp_top">在线投票</div>
			<div class="tp_center">
				<p>热火是否已经终结了“掌握了篮板球就掌握了比赛”的观点？</p>
				<p><input name="" type="radio" value="" />是</p>
				<p><input name="" type="radio" value="" />否</p>
				<p><input name="" type="text" class="tp_btn" value="投票" /><a href="#">查看结果>></a></p>
			</div>
			<div class="tp_bottom"><a href="#">查看更多投票>></a></div>
		</div>
	</div>
	<!--焦点图、在线投票结束-->
	<!--热点视图开始-->
	<div class="con_left">
		<div class="hot_st">
			<div class="hot_st_title"><span><a href="#">更多>></a></span>热点视图</div>
			<ul>
				<li class="img_jd"><img src="__PUBLIC__/index/images/img_15.jpg" border="0" alt="" /><p class="hot_p">超模“带”你去晨跑</p></li>
				<li>
					<ul>
					<li><img src="__PUBLIC__/index/images/img_16.jpg" border="0" alt="" class="img_jd" /><p>超模教你打造模特身材</p></li>
					<li><img src="__PUBLIC__/index/images/img_17.jpg" border="0" alt="" class="img_jd"  /><p>利用零碎时间打造电臀</p></li>
					<li><img src="__PUBLIC__/index/images/img_18.jpg" border="0" alt=""  class="img_jd" /><p>迈阿密泳装周健康性感</p></li>
					<li><img src="__PUBLIC__/index/images/img_19.jpg" border="0" alt=""  class="img_jd" /><p>高端装备打造优雅活力</p></li>
					<li><img src="__PUBLIC__/index/images/img_20.jpg" border="0" alt=""  class="img_jd" /><p>范文芳演绎体操女皇</p></li>
					<li><img src="__PUBLIC__/index/images/img_21.jpg" border="0" alt=""  class="img_jd"  /><p>杰西卡阿尔芭街头健身</p></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!--热点视图结束-->
	<!--最热声音开始-->
	<div class="con_right">
		<p class="hot_vox_title">最热声音</p>
			<div class="tabbox" id="statetab">
			<ul class="tabbtn">
				<li class="current"><a href="#">最新话题</a></li>
				<li><a href="#">最热话题</a></li>
				<li><a href="#">最新回复</a></li>
			</ul><!--tabbtn end-->
			<div class="tabcon">
				<ul>
					<li><span class="tabcon_ico">1</span><a href="#">SM篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico">2</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">3</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">4</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">5</span><a href="#">小娴：天堂里从此多了一位银球使者</a></li>
					<li><span class="tabcon_ico02">6</span><a href="#">M篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico02">7</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">8</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">9</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">10</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
				</ul>
			</div><!--tabcon end-->
			<div class="tabcon">
			<ul>
					<li><span class="tabcon_ico">1</span><a href="#">2SM篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico">2</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">3</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">4</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">5</span><a href="#">小娴：天堂里从此多了一位银球使者</a></li>
					<li><span class="tabcon_ico02">6</span><a href="#">M篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico02">7</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">8</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">9</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">10</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
				</ul>
			</div><!--tabcon end-->
			<div class="tabcon">
			<ul>
					<li><span class="tabcon_ico">1</span><a href="#">3SM篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico">2</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">3</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">4</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">5</span><a href="#">小娴：天堂里从此多了一位银球使者</a></li>
					<li><span class="tabcon_ico02">6</span><a href="#">M篮球争霸赛圆满结束</a></li>
					<li><span class="tabcon_ico02">7</span><a href="#">SM半决赛四强对阵谁与争锋</a></li>
					<li><span class="tabcon_ico02">8</span><a href="#">SM第二阶段比赛前两轮成绩</a></li>
					<li><span class="tabcon_ico02">9</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
					<li><span class="tabcon_ico02">10</span><a href="#">SM行政村篮球争霸赛八强出炉</a></li>
				</ul>
			</div><!--tabcon end-->
		</div>
	</div>
	<!--最热声音结束-->
	<!--精彩视频开始-->
	<div class="con_left">
				<div class="hot_sp">
			<div class="hot_st_title"><span><a href="#">更多>></a></span>精彩视频</div>
				<ul>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				<li><img src="__PUBLIC__/index/images/sp.jpg" border="0" alt="" /><span class="play_btn"><img src="__PUBLIC__/index/images/play_btn.png" border="0" alt="" /></span><span class="play_tit">13日官方十佳球</span></li>
				</ul>
		</div>
	</div>
	<!--精彩视频结束-->
	<!--健身时尚开始-->
	<div class="con_right">
			<div class="sczx">
		<div class="sczx_title">健身时尚</div>
		<div class="sczx_txt">
		<ul>
		<li><a href="#">信诚杯QBL企业篮球联赛 </a></li>
		<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
		<li><a href="#">晋江篮球精英对抗赛</a></li>
		<li><a href="#">意大利1-0斯洛文尼亚</a></li>
		<li><a href="#">巴尔扎雷蒂突破</a></li>
		<li><a href="#">总决赛晋江电视台报道QBL联赛开幕</a></li>
		<li><a href="#">晋江篮球精英对抗赛</a></li>
		<li><a href="#">意大利1-0斯洛文尼亚 </a></li>
		<li><a href="#">巴尔扎雷蒂突破</a></li>
		</ul>
		</div>
	</div>
	</div>
	<!--健身时尚结束-->
	<!--合作伙伴开始-->
	<div class="clear"></div>
	<div class="mate">
		<div class="hot_st_title">合作伙伴</div>
		<ul>
		<li><img src="__PUBLIC__/index/images/img_22.jpg" border="0" alt="" /><p>百度</p></li>
		<li><img src="__PUBLIC__/index/images/img_23.jpg" border="0" alt="" /><p>一品红导航</p></li>
		<li><img src="__PUBLIC__/index/images/img_24.jpg" border="0" alt="" /><p>飞天云体育传媒</p></li>
		<li><img src="__PUBLIC__/index/images/img_25.jpg" border="0" alt="" /><p>体育晋江</p></li>
		<li><img src="__PUBLIC__/index/images/img_26.jpg" border="0" alt="" /><p>东南体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_27.jpg" border="0" alt="" /><p>新浪体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_28.jpg" border="0" alt="" /><p>搜狐体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_22.jpg" border="0" alt="" /><p>百度</p></li>
		<li><img src="__PUBLIC__/index/images/img_23.jpg" border="0" alt="" /><p>一品红导航</p></li>
		</ul>
	</div>
	<!--合作伙伴结束-->
		<!--友情链接开始-->
	<div class="clear"></div>
	<div class="mate">
		<div class="hot_st_title">友情链接</div>
		<ul>
		<li><img src="__PUBLIC__/index/images/img_22.jpg" border="0" alt="" /><p>百度</p></li>
		<li><img src="__PUBLIC__/index/images/img_23.jpg" border="0" alt="" /><p>一品红导航</p></li>
		<li><img src="__PUBLIC__/index/images/img_24.jpg" border="0" alt="" /><p>飞天云体育传媒</p></li>
		<li><img src="__PUBLIC__/index/images/img_25.jpg" border="0" alt="" /><p>体育晋江</p></li>
		<li><img src="__PUBLIC__/index/images/img_26.jpg" border="0" alt="" /><p>东南体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_27.jpg" border="0" alt="" /><p>新浪体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_28.jpg" border="0" alt="" /><p>搜狐体育</p></li>
		<li><img src="__PUBLIC__/index/images/img_22.jpg" border="0" alt="" /><p>百度</p></li>
		<li><img src="__PUBLIC__/index/images/img_23.jpg" border="0" alt="" /><p>一品红导航</p></li>
		</ul>
	</div>
	<!--友情链接结束-->
	<!--版权信息开始-->
	<div class="fotter">
		<p> <a href="#">网站首页</a> | <a href="#">体育泉州</a> | <a href="#">动感泉州</a> | <a href="#">市场动态</a> | <a href="#">团队空间</a> | <a href="#">赛事预告</a> | <a href="#">体育论坛</a> | <a href="#">网上商城</a> | <a href="#">体坛内外</a></p>
		<p>泉州体育网  版权所有  京ICP证060535号</p>
		<p>联系人：泉州体育网    联系电话：0595-88093595    QQ：1569066157</p>
	</div>
	<!--版权信息结束-->
</div>
<script type="text/javascript">
(function(){
	
	function G(s){
		return document.getElementById(s);
	}
	
	function getStyle(obj, attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj, false)[attr];
		}
	}
	
	function Animate(obj, json){
		if(obj.timer){
			clearInterval(obj.timer);
		}
		obj.timer = setInterval(function(){
			for(var attr in json){
				var iCur = parseInt(getStyle(obj, attr));
				iCur = iCur ? iCur : 0;
				var iSpeed = (json[attr] - iCur) / 5;
				iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
				obj.style[attr] = iCur + iSpeed + 'px';
				if(iCur == json[attr]){
					clearInterval(obj.timer);
				}
			}
		}, 30);
	}

	var oPic = G("picBox");
	var oList = G("listBox");
	
	var oPrev = G("prev");
	var oNext = G("next");
	var oPrevTop = G("prevTop");
	var oNextTop = G("nextTop");

	var oPicLi = oPic.getElementsByTagName("li");
	var oListLi = oList.getElementsByTagName("li");
	var len1 = oPicLi.length;
	var len2 = oListLi.length;
	
	var oPicUl = oPic.getElementsByTagName("ul")[0];
	var oListUl = oList.getElementsByTagName("ul")[0];
	var w1 = oPicLi[0].offsetWidth;
	var w2 = oListLi[0].offsetWidth;

	oPicUl.style.width = w1 * len1 + "px";
	oListUl.style.width = w2 * len2 + "px";

	var index = 0;
	
	var num = 5;
	var num2 = Math.ceil(num / 2);

	function Change(){

		Animate(oPicUl, {left: - index * w1});
		
		if(index < num2){
			Animate(oListUl, {left: 0});
		}else if(index + num2 <= len2){
			Animate(oListUl, {left: - (index - num2 + 1) * w2});
		}else{
			Animate(oListUl, {left: - (len2 - num) * w2});
		}

		for (var i = 0; i < len2; i++) {
			oListLi[i].className = "";
			if(i == index){
				oListLi[i].className = "on";
			}
		}
	}
	
	oNextTop.onclick = oNext.onclick = function(){
		index ++;
		index = index == len2 ? 0 : index;
		Change();
	}

	oPrevTop.onclick = oPrev.onclick = function(){
		index --;
		index = index == -1 ? len2 -1 : index;
		Change();
	}

	for (var i = 0; i < len2; i++) {
		oListLi[i].index = i;
		oListLi[i].onclick = function(){
			index = this.index;
			Change();
		}
	}
	
})()
</script>
</body>
</html>