<?php
session_start();
if(!isset($_SESSION['status']))
    header("location: login.php");
else{
    if(!$_SESSION['status'])
        header("location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to huaji_Japan</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Powered by: Yahei.Net -->
<style type="text/css">
<!--
* {font-family: SFPro, "Microsoft Yahei", Arial; }
body{text-align: center; margin: 0 auto; padding: 0; background-color:#FFFFFF;font-size:12px;font-family:Tahoma, Arial}
h1 {font-size: 26px; font-weight: normal; padding: 0; margin: 0; color: #444444;}
h1 small {font-size: 11px; font-family: SFPro; font-weight: bold; }
a{color: #000000; text-decoration:none;}
a.black{color: #000000; text-decoration:none;}
b{color: #999999;}
table{clear:both;padding: 0; margin: 0 0 10px;border-collapse:collapse; border-spacing: 0;}
th{padding: 3px 6px; font-weight:bold;background:#3066a6;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}
.th_1{padding: 3px 6px; font-weight:bold;background:#666699;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}
.th_2{padding: 3px 6px; font-weight:bold;background:#417291;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}
.th_3{padding: 3px 6px; font-weight:bold;background:#067201;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}
.th_4{padding: 3px 6px; font-weight:bold;background:#666666;color:#FFFFFF;border:1px solid #CCCCCC; text-align:left;}
.th_5{padding: 3px 6px; font-weight:bold;background:#333333;color:#FFFFFF;border:1px solid #CCCCCC; text-align:left;}
.th_6{padding: 3px 6px; font-weight:bold;background:#FF6600;color:#FFFFFF;border:1px solid #FF6600; text-align:left;}
tr{padding: 0; background:#F7F7F7;}
td{padding: 3px 6px; border:1px solid #CCCCCC;}
input{padding: 2px; background: #FFFFFF; border-top:1px solid #666666; border-left:1px solid #666666; border-right:1px solid #CCCCCC; border-bottom:1px solid #CCCCCC; font-size:12px}
input.btn{font-weight: bold; height: 20px; line-height: 20px; padding: 0 6px; color:#666666; background: #f2f2f2; border:1px solid #999;font-size:12px}
.bar {border:1px solid #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px;overflow: hidden;}
.bar_1 {border:1px dotted #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px;overflow: hidden;}
.barli_red{background:#ff6600; height:5px; margin:0px; padding:0;}
.barli_blue{background:#0099FF; height:5px; margin:0px; padding:0;}
.barli_green{background:#36b52a; height:5px; margin:0px; padding:0;}
.barli_1{background:#999999; height:5px; margin:0px; padding:0;}
.barli{background:#36b52a; height:5px; margin:0px; padding:0;}
#page {width: 920px; padding: 0 20px; margin: 0 auto; text-align: left;}
#header{position: relative; padding: 10px;}
#footer {padding: 15px 0; text-align: center; font-size: 11px; font-family: Tahoma, Verdana;}
#lnmplink {position: absolute; top: 20px; left: 115px; text-align: right; font-weight: bold; color: #06C;}
#lnmplink a {color: #0000FF; text-decoration: underline;}
.w_small{font-family: Courier New;}
.w_number{color: #f800fe;}
.sudu {padding: 0; background:#5dafd1; }
.suduk { margin:0px; padding:0;}
.resYes{}
.resNo{color: #FF0000;}
.word{word-break:break-all;}
-->
</style>
<script language="JavaScript" type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript"> 
<!--
$(document).ready(function(){getJSONData();});
function getJSONData()
{
	setTimeout("getJSONData()", 1000);
	$.getJSON('?act=rt&callback=?', displayData);
}
function displayData(dataJSON)
{
	$("#freeSpace").html(dataJSON.freeSpace);
	$("#TotalMemory").html(dataJSON.TotalMemory);
	$("#UsedMemory").html(dataJSON.UsedMemory);
	$("#FreeMemory").html(dataJSON.FreeMemory);
	$("#CachedMemory").html(dataJSON.CachedMemory);
	$("#Buffers").html(dataJSON.Buffers);
	$("#TotalSwap").html(dataJSON.TotalSwap);
	$("#swapUsed").html(dataJSON.swapUsed);
	$("#swapFree").html(dataJSON.swapFree);
	$("#swapPercent").html(dataJSON.swapPercent);
	$("#loadAvg").html(dataJSON.loadAvg);
	$("#uptime").html(dataJSON.uptime);
	$("#freetime").html(dataJSON.freetime);
	$("#stime").html(dataJSON.stime);
	$("#bjtime").html(dataJSON.bjtime);
	$("#memRealUsed").html(dataJSON.memRealUsed);
	$("#memRealFree").html(dataJSON.memRealFree);
	$("#memRealPercent").html(dataJSON.memRealPercent);
	$("#memPercent").html(dataJSON.memPercent);
	$("#barmemPercent").width(dataJSON.memPercent);
	$("#barmemRealPercent").width(dataJSON.barmemRealPercent);
	$("#memCachedPercent").html(dataJSON.memCachedPercent);
	$("#barmemCachedPercent").width(dataJSON.barmemCachedPercent);
	$("#barswapPercent").width(dataJSON.barswapPercent);
	$("#NetOut2").html(dataJSON.NetOut2);
	$("#NetOut3").html(dataJSON.NetOut3);
	$("#NetOut4").html(dataJSON.NetOut4);
	$("#NetOut5").html(dataJSON.NetOut5);
	$("#NetOut6").html(dataJSON.NetOut6);
	$("#NetOut7").html(dataJSON.NetOut7);
	$("#NetOut8").html(dataJSON.NetOut8);
	$("#NetOut9").html(dataJSON.NetOut9);
	$("#NetOut10").html(dataJSON.NetOut10);
	$("#NetInput2").html(dataJSON.NetInput2);
	$("#NetInput3").html(dataJSON.NetInput3);
	$("#NetInput4").html(dataJSON.NetInput4);
	$("#NetInput5").html(dataJSON.NetInput5);
	$("#NetInput6").html(dataJSON.NetInput6);
	$("#NetInput7").html(dataJSON.NetInput7);
	$("#NetInput8").html(dataJSON.NetInput8);
	$("#NetInput9").html(dataJSON.NetInput9);
	$("#NetInput10").html(dataJSON.NetInput10);	
}
-->
</script>
</head>
<body>

<div id="page">
    <div id="header">
        <h1>Welcome to huaji_JP</h1>
    </div>

<!--服务器相关参数-->
<table width="100%" cellpadding="3" cellspacing="0">
  <tr><th colspan="4">服务器参数</th></tr>
  <tr>
    <td>服务器域名/IP地址</td>
    <td colspan="3">www.huaji.io(172.31.31.221)</td>
  </tr>
  <tr>
    <td>服务器标识</td>
    <td colspan="3">Linux huaji_JP 4.4.0-64-generic #85-Ubuntu SMP Mon Feb 20 11:50:30 UTC 2017 x86_64</td>
  </tr>
  <tr>
    <td width="13%">服务器操作系统</td>
    <td width="37%">Linux &nbsp;内核版本：4.4.0-64-generic</td>
    <td width="13%">服务器解译引擎</td>
    <td width="37%">nginx/1.10.0</td>
  </tr>
  <tr>
    <td>服务器语言</td>
    <td></td>
    <td>服务器端口</td>
    <td>443</td>
  </tr>
  <tr>
	  <td>服务器主机名</td>
	  <td>huaji_JP</td>
	  <td>绝对路径</td>
	  <td>/home/wwwroot/www.huaji.io</td>
	</tr>
  <tr>
	  <td>管理员邮箱</td>
	  <td></td>
		<td>探针路径</td>
		<td>/home/wwwroot/www.huaji.io/source/p.php</td>
	</tr>
</table>

<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="6">服务器实时数据</th></tr>
  <tr>
    <td width="13%" >服务器当前时间</td>
    <td width="37%" ><span id="stime">2017-4-16 19:36:14</span></td>
    <td width="13%" >服务器已运行时间</td>
    <td width="37%" colspan="3"><span id="uptime">52天3小时26分钟</span></td>
  </tr>
  <tr>
    <td>总空间</td>
    <td>7.742&nbsp;GB</td>
    <td><a href="#" title="显示的是网站所在的目录的可用空间，非服务器上所有磁盘之可用空间！">可用空间</a></td>
    <td colspan="3"><font color='#CC0000'><span id="freeSpace">1.307</span></font>&nbsp;GB</td>
  </tr>
  <tr>
    <td width="13%">CPU型号 [1核]</td>
    <td width="87%" colspan="5">Intel(R) Xeon(R) CPU E5-2676 v3 @ 2.40GHz | 频率:2400.076 | 二级缓存:30720 KB
 | Bogomips:4800.15</td>
  </tr>
	  <tr>
		<td>内存使用状况<br \><br \><a href="http://www.vpser.net/other/linux-vps-ram.html" target="_blank"><font color=red>内存参数解读</font></a></td>
		<td colspan="5">
          物理内存：共
          <font color='#CC0000'>990.6 MB </font>
           , 已用
          <font color='#CC0000'><span id="UsedMemory">862.81 MB</span></font>
          , 空闲
          <font color='#CC0000'><span id="FreeMemory">127.79 MB</span></font>
          , 使用率
		  <span id="memPercent">87.1</span>
          <div class="bar"><div id="barmemPercent" class="barli_green" style="width:87.1%">&nbsp;</div> </div>
		
		  Cache化内存为 <span id="CachedMemory">213.73 MB</span>
		  , 使用率 
          <span id="memCachedPercent">21.58</span>
		  %	| Buffers缓冲为  <span id="Buffers">249.99 MB</span>
          <div class="bar"><div id="barmemCachedPercent" class="barli_blue" >&nbsp;</div></div>

          真实内存使用
          <span id="memRealUsed">399.09 MB</span>
		  , 真实内存空闲
          <span id="memRealFree">591.51 MB</span>
		  , 使用率
          <span id="memRealPercent">40.29</span>
          %
          <div class="bar_1"><div id="barmemRealPercent" class="barli_1" >&nbsp;</div></div> 
		  
	  </td>
	</tr>
	  <tr>
		<td>系统平均负载</td>
		<td colspan="5" class="w_number"><span id="loadAvg">0.00 0.00 0.00 2/214</span></td>
	</tr>
</table>

<table width="100%" cellpadding="3" cellspacing="0" align="center">
    <tr><th colspan="3">网络使用状况</th></tr>
     <tr>
        <td width="13%">lo : </td>
        <td width="43%">已接收 : <font color='#CC0000'><span id="NetInput2">0.00414</span></font> GB</td>
        <td width="43%">已发送 : <font color='#CC0000'><span id="NetOut2">0.00414</span></font> GB</td>
    </tr>
     <tr>
        <td width="13%">eth0 : </td>
        <td width="43%">已接收 : <font color='#CC0000'><span id="NetInput3">9.32927</span></font> GB</td>
        <td width="43%">已发送 : <font color='#CC0000'><span id="NetOut3">9.72811</span></font> GB</td>
    </tr>
</table>

<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr>
    <th colspan="4" class="th_1">PHP已编译模块检测</th>
  </tr>
  <tr>
    <td colspan="4"><span class="w_small">
Core&nbsp;&nbsp;date&nbsp;&nbsp;ereg&nbsp;&nbsp;libxml&nbsp;&nbsp;openssl&nbsp;&nbsp;pcre&nbsp;&nbsp;sqlite3&nbsp;&nbsp;zlib&nbsp;&nbsp;bcmath&nbsp;&nbsp;ctype&nbsp;&nbsp;curl&nbsp;&nbsp;dom&nbsp;&nbsp;filter&nbsp;&nbsp;<br />ftp&nbsp;&nbsp;gd&nbsp;&nbsp;gettext&nbsp;&nbsp;hash&nbsp;&nbsp;iconv&nbsp;&nbsp;intl&nbsp;&nbsp;json&nbsp;&nbsp;mbstring&nbsp;&nbsp;mcrypt&nbsp;&nbsp;SPL&nbsp;&nbsp;session&nbsp;&nbsp;standard&nbsp;&nbsp;pcntl&nbsp;&nbsp;<br />mysqlnd&nbsp;&nbsp;PDO&nbsp;&nbsp;pdo_mysql&nbsp;&nbsp;pdo_sqlite&nbsp;&nbsp;Phar&nbsp;&nbsp;posix&nbsp;&nbsp;Reflection&nbsp;&nbsp;mysqli&nbsp;&nbsp;shmop&nbsp;&nbsp;SimpleXML&nbsp;&nbsp;soap&nbsp;&nbsp;sockets&nbsp;&nbsp;mysql&nbsp;&nbsp;<br />sysvsem&nbsp;&nbsp;tokenizer&nbsp;&nbsp;xml&nbsp;&nbsp;xmlreader&nbsp;&nbsp;xmlrpc&nbsp;&nbsp;xmlwriter&nbsp;&nbsp;xsl&nbsp;&nbsp;zip&nbsp;&nbsp;cgi-fcgi&nbsp;&nbsp;mhash&nbsp;&nbsp;Zend Guard Loader&nbsp;&nbsp;</span>
    </td>
  </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="4" class="th_1">PHP相关参数</th></tr>
  <tr>
    <td width="32%">PHP信息（phpinfo）：</td>
    <td width="18%">
		    <a href='/source/p.php?act=phpinfo' target='_blank'>PHPINFO</a>    </td>
    <td width="32%">PHP版本（php_version）：</td>
    <td width="18%">5.6.22</td>
  </tr>
  <tr>
    <td>PHP运行方式：</td>
    <td>FPM-FCGI</td>
    <td>脚本占用最大内存（memory_limit）：</td>
    <td>128M</td>
  </tr>
  <tr>
    <td>PHP安全模式（safe_mode）：</td>
    <td><font color="red">×</font></td>
    <td>POST方法提交最大限制（post_max_size）：</td>
    <td>50M</td>
  </tr>
  <tr>
    <td>上传文件最大限制（upload_max_filesize）：</td>
    <td>50M</td>
    <td>浮点型数据显示的有效位数（precision）：</td>
    <td>14</td>
  </tr>
  <tr>
    <td>脚本超时时间（max_execution_time）：</td>
    <td>300秒</td>
    <td>socket超时时间（default_socket_timeout）：</td>
    <td>60秒</td>
  </tr>
  <tr>
    <td>PHP页面根目录（doc_root）：</td>
    <td><font color="red">×</font></td>
    <td>用户根目录（user_dir）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>dl()函数（enable_dl）：</td>
    <td><font color="red">×</font></td>
    <td>指定包含文件目录（include_path）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>显示错误信息（display_errors）：</td>
    <td><font color="red">×</font></td>
    <td>自定义全局变量（register_globals）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>数据反斜杠转义（magic_quotes_gpc）：</td>
    <td><font color="red">×</font></td>
    <td>"&lt;?...?&gt;"短标签（short_open_tag）：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>"&lt;% %&gt;"ASP风格标记（asp_tags）：</td>
    <td><font color="red">×</font></td>
    <td>忽略重复错误信息（ignore_repeated_errors）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>忽略重复的错误源（ignore_repeated_source）：</td>
    <td><font color="red">×</font></td>
    <td>报告内存泄漏（report_memleaks）：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>自动字符串转义（magic_quotes_gpc）：</td>
    <td><font color="red">×</font></td>
    <td>外部字符串自动转义（magic_quotes_runtime）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>打开远程文件（allow_url_fopen）：</td>
    <td><font color="green">√</font></td>
    <td>声明argv和argc变量（register_argc_argv）：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>Cookie 支持：</td>
    <td><font color="green">√</font></td>
    <td>拼写检查（ASpell Library）：</td>
    <td><font color="red">×</font></td>
  </tr>
   <tr>
    <td>高精度数学运算（BCMath）：</td>
    <td><font color="green">√</font></td>
    <td>PREL相容语法（PCRE）：</td>
    <td><font color="green">√</font></td>
   <tr>
    <td>PDF文档支持：</td>
    <td><font color="red">×</font></td>
    <td>SNMP网络管理协议：</td>
    <td><font color="red">×</font></td>
  </tr> 
   <tr>
    <td>VMailMgr邮件处理：</td>
    <td><font color="red">×</font></td>
    <td>Curl支持：</td>
    <td><font color="green">√</font></td>
  </tr> 
   <tr>
    <td>SMTP支持：</td>
    <td><font color="green">√</font></td>
    <td>SMTP地址：</td>
    <td>localhost</td>
  </tr> 
	<tr>
		<td>默认支持函数（enable_functions）：</td>
		<td colspan="3"><a href='/source/p.php?act=Function' target='_blank' class='static'>请点这里查看详细！</a></td>		
	</tr>
	<tr>
		<td>被禁用的函数（disable_functions）：</td>
		<td colspan="3" class="word">
passthru&nbsp;&nbsp;exec&nbsp;&nbsp;system&nbsp;&nbsp;chroot&nbsp;&nbsp;scandir&nbsp;&nbsp;<br />chgrp&nbsp;&nbsp;chown&nbsp;&nbsp;shell_exec&nbsp;&nbsp;proc_open&nbsp;&nbsp;proc_get_status&nbsp;&nbsp;<br />popen&nbsp;&nbsp;ini_alter&nbsp;&nbsp;ini_restore&nbsp;&nbsp;dl&nbsp;&nbsp;openlog&nbsp;&nbsp;<br />syslog&nbsp;&nbsp;readlink&nbsp;&nbsp;symlink&nbsp;&nbsp;popepassthru&nbsp;&nbsp;stream_socket_server&nbsp;&nbsp;		</td>
	</tr>
</table>
<!--组件信息-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="4" class="th_1">组件支持</th></tr>
  <tr>
    <td width="32%">FTP支持：</td>
    <td width="18%"><font color="green">√</font></td>
    <td width="32%">XML解析支持：</td>
    <td width="18%"><font color="green">√</font></td>
  </tr>
  <tr>
    <td>Session支持：</td>
    <td><font color="green">√</font></td>
    <td>Socket支持：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>Calendar支持</td>
    <td><font color="red">×</font>	</td>
    <td>允许URL打开文件：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>GD库支持：</td>
    <td>
    bundled (2.1.0 compatible)</td>
    <td>压缩文件支持(Zlib)：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>IMAP电子邮件系统函数库：</td>
    <td><font color="red">×</font></td>
    <td>历法运算函数库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>正则表达式函数库：</td>
    <td><font color="green">√</font></td>
    <td>WDDX支持：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>Iconv编码转换：</td>
    <td><font color="green">√</font></td>
    <td>mbstring：</td>
    <td><font color="green">√</font></td>
  </tr>
  <tr>
    <td>高精度数学运算：</td>
    <td><font color="green">√</font></td>
    <td>LDAP目录协议：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>MCrypt加密处理：</td>
    <td><font color="green">√</font></td>
    <td>哈稀计算：</td>
    <td><font color="green">√</font></td>
  </tr>
</table>

<!--第三方组件信息-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="4" class="th_1">第三方组件</th></tr>
  <tr>
    <td width="32%">Zend版本</td>
    <td width="18%">2.6.0</td>
    <td width="32%">
ZendGuardLoader[启用]	</td>
    <td width="18%"><font color=green>√</font></td>
  </tr>
  <tr>
    <td>eAccelerator</td>
    <td><font color=red>×</font></td>
    <td>ioncube</td>
    <td><font color=red>×</font></td>
  </tr>
  <tr>
    <td>XCache</td>
    <td><font color=red>×</font></td>
    <td>APC</td>
    <td><font color=red>×</font></td>
  </tr>
</table>

<!--数据库支持-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="4" class="th_2">数据库支持</th></tr>
  <tr>
    <td width="32%">MySQL 数据库：</td>
    <td width="18%"><font color="green">√</font></td>
    <td width="32%">ODBC 数据库：</td>
    <td width="18%"><font color="red">×</font></td>
  </tr>
  <tr>
    <td>Oracle 数据库：</td>
    <td><font color="red">×</font></td>
    <td>SQL Server 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>dBASE 数据库：</td>
    <td><font color="red">×</font></td>
    <td>mSQL 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>SQLite 数据库：</td>
    <td><font color=green>√</font>　SQLite3　Ver 3.8.10.2</td>
    <td>Hyperwave 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>Postgre SQL 数据库：</td>
    <td><font color="red">×</font></td>
    <td>Informix 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>DBA 数据库：</td>
    <td><font color="red">×</font></td>
    <td>DBM 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>
  <tr>
    <td>FilePro 数据库：</td>
    <td><font color="red">×</font></td>
    <td>SyBase 数据库：</td>
    <td><font color="red">×</font></td>
  </tr> 
</table>

<form action="/source/p.php#bottom" method="post">
<!--MySQL数据库连接检测-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
	<tr><th colspan="3" class="th_2">MySQL数据库连接检测</th></tr>
  <tr>
    <td width="15%"></td>
    <td width="60%">
      地址：<input type="text" name="host" value="localhost" size="10" />
      端口：<input type="text" name="port" value="3306" size="10" />
      用户名：<input type="text" name="login" size="10" />
      密码：<input type="password" name="password" size="10" />
    </td>
    <td width="25%">
      <input class="btn" type="submit" name="act" value="MySQL检测" />
    </td>
  </tr>
</table>
  <!--函数检测-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
	<tr><th colspan="3" class="th_4">函数检测</th></tr>
  <tr>
    <td width="15%"></td>
    <td width="60%">
      请输入您要检测的函数：
      <input type="text" name="funName" size="50" />
    </td>
    <td width="25%">
      <input class="btn" type="submit" name="act" align="right" value="函数检测" />
    </td>
  </tr>
  </table>
<!--邮件发送检测-->
<table width="100%" cellpadding="3" cellspacing="0" align="center">
  <tr><th colspan="3" class="th_5">邮件发送检测</th></tr>
  <tr>
    <td width="15%"></td>
    <td width="60%">
      请输入您要检测的邮件地址：
      <input type="text" name="mailAdd" size="50" />
    </td>
    <td width="25%">
    <input class="btn" type="submit" name="act" value="邮件检测" />
    </td>
  </tr>
  </table>
</form>
<a id="bottom"></a>

<div id="footer">
&copy; 2012 <a href="http://lnmp.org" target="_blank">LNMP一键安装包</a><br />This Prober was based on Yahei Prober.<br />
Processed in 0.0008 seconds. 0.48MB memory usage.

</div>

</div>
</body>
</html>