// JavaScript Document
//系列菜单的特征标记。后面可跟上序列数字
var menuStr = "menu";
//默认标记为on的菜单项序号
var preMenu = "0";
////////////////////////////////
////////////////////////////////
function registMenu(obj)
{
	if(preMenu!="")	
	{
		offMenu((typeof(preMenu)=="string")?$(menuStr+""+preMenu):preMenu);
	}
	if(obj.getAttribute("status")=="off")
	{
		obj.setAttribute("status","on");
		preMenu = obj;
	}
}
function overMenu(obj)
{
	setClass(obj,"on");
}
function outMenu(obj)
{
	if(obj.getAttribute("status")=="off")
	{
		setClass(obj,"off");
	}
	else
	{
		setClass(obj,"on");
	}
}

function onMenu(obj)
{
	obj.setAttribute("status","on");
	setClass(obj,"on");
}
function offMenu(obj)
{
	obj.setAttribute("status","off");
	setClass(obj,"off");
}
function setClass(obj,status)
{
	if(obj.className.length>=2)
	{
		if(obj.className.lastIndexOf("-")>=0)
		{
			obj.className = obj.className.substring(0,obj.className.lastIndexOf("-")+1)+status;
			
		}
	}
}
function getById(id)
{
	return document.getElementById(id);
}
window.onload =function()
{
	if(getById(menuStr+""+preMenu))
	{
		onMenu(getById(menuStr+""+preMenu));
		preMenu = getById(menuStr+""+preMenu);
	}
}



//精英团队滚动js
var Speed_1 = 10; //速度(毫秒)
var Space_1 = 20; //每次移动(px)
var PageWidth_1 = 125 * 5; //翻页宽度
var interval_1 = 5000; //翻页间隔时间
var fill_1 = 0; //整体移位
var MoveLock_1 = false;
var MoveTimeObj_1;
var MoveWay_1="right";
var Comp_1 = 0;
var AutoPlayObj_1=null;
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function AutoPlay_1(){clearInterval(AutoPlayObj_1);AutoPlayObj_1=setInterval('ISL_GoDown_1();ISL_StopDown_1();',interval_1)}
function ISL_GoUp_1(){if(MoveLock_1)return;clearInterval(AutoPlayObj_1);MoveLock_1=true;MoveWay_1="left";MoveTimeObj_1=setInterval('ISL_ScrUp_1();',Speed_1);}
function ISL_StopUp_1(){if(MoveWay_1 == "right"){return};clearInterval(MoveTimeObj_1);if((GetObj('ISL_Cont_1').scrollLeft-fill_1)%PageWidth_1!=0){Comp_1=fill_1-(GetObj('ISL_Cont_1').scrollLeft%PageWidth_1);CompScr_1()}else{MoveLock_1=false}
AutoPlay_1()}
function ISL_ScrUp_1(){if(GetObj('ISL_Cont_1').scrollLeft<=0){GetObj('ISL_Cont_1').scrollLeft=GetObj('ISL_Cont_1').scrollLeft+GetObj('List1_1').offsetWidth}
GetObj('ISL_Cont_1').scrollLeft-=Space_1}
function ISL_GoDown_1(){clearInterval(MoveTimeObj_1);if(MoveLock_1)return;clearInterval(AutoPlayObj_1);MoveLock_1=true;MoveWay_1="right";ISL_ScrDown_1();MoveTimeObj_1=setInterval('ISL_ScrDown_1()',Speed_1)}
function ISL_StopDown_1(){if(MoveWay_1 == "left"){return};clearInterval(MoveTimeObj_1);if(GetObj('ISL_Cont_1').scrollLeft%PageWidth_1-(fill_1>=0?fill_1:fill_1+1)!=0){Comp_1=PageWidth_1-GetObj('ISL_Cont_1').scrollLeft%PageWidth_1+fill_1;CompScr_1()}else{MoveLock_1=false}
AutoPlay_1()}
function ISL_ScrDown_1(){if(GetObj('ISL_Cont_1').scrollLeft>=GetObj('List1_1').scrollWidth){GetObj('ISL_Cont_1').scrollLeft=GetObj('ISL_Cont_1').scrollLeft-GetObj('List1_1').scrollWidth}
GetObj('ISL_Cont_1').scrollLeft+=Space_1}
function CompScr_1(){if(Comp_1==0){MoveLock_1=false;return}
var num,TempSpeed=Speed_1,TempSpace=Space_1;if(Math.abs(Comp_1)<PageWidth_1/2){TempSpace=Math.round(Math.abs(Comp_1/Space_1));if(TempSpace<1){TempSpace=1}}
if(Comp_1<0){if(Comp_1<-TempSpace){Comp_1+=TempSpace;num=TempSpace}else{num=-Comp_1;Comp_1=0}
GetObj('ISL_Cont_1').scrollLeft-=num;setTimeout('CompScr_1()',TempSpeed)}else{if(Comp_1>TempSpace){Comp_1-=TempSpace;num=TempSpace}else{num=Comp_1;Comp_1=0}
GetObj('ISL_Cont_1').scrollLeft+=num;setTimeout('CompScr_1()',TempSpeed)}}
function picrun_ini(){
GetObj("List2_1").innerHTML=GetObj("List1_1").innerHTML;
GetObj('ISL_Cont_1').scrollLeft=fill_1>=0?fill_1:GetObj('List1_1').scrollWidth-Math.abs(fill_1);
GetObj("ISL_Cont_1").onmouseover=function(){clearInterval(AutoPlayObj_1)}
GetObj("ISL_Cont_1").onmouseout=function(){AutoPlay_1()}
AutoPlay_1();
}

function scroll(wraper,children,speed,type)
{
	var wrap = $(wraper);
	var sc = function(){
		var item = $(children).eq(0);
		var object1,object2;
		if(type)
		{
			object1 = {'marginTop':'-'+item.outerHeight(true)};
			object2 = {'marginTop':item.css('marginTop')};
		}	
		else
		{
			object1 = {'marginLeft':'-'+item.outerWidth(true)};
			object2 = {'marginLeft':item.css('marginLeft')};
		}	
		item.animate(object1,speed,function(){
			$(this).css(object2);
			$(this).parent().append($(this).remove());	
		});
	}
	var st = setInterval(sc,speed+500);
	wrap.hover(function(){clearInterval(st);},function(){st = setInterval(sc,speed+500)});
}
