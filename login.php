<?php session_start();?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<title>验证码技术登录</title>

</head>

<style>

td{

font-size:9pt;

}

</style>

<script language="javascript">

function check(myform){

if(myform.txt_user.value==""){

alert("请输入用户名!");myform.txt_user.focus();return false;

}

if(myform.txt_pwd.value==""){

alert("请输入密码!");myform.txt_pwd.focus();return false;

}

if(myform.txt_yan.value==""){

alert("请输入验证码!");myform.txt_yan.focus();return false;

}

if(myform.txt_yan.value!=myform.txt_hyan.value){

alert("对不起，您输入的验证码不正确!");myform.txt_yan.focus();return false;

}

}

</script>

<body>

<table width="693" height="346" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td background="images/image_02.png">

<form name="myform" method="post"  action="checkuser.php">

<table width="693" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td height="42" colspan="5"> </td>

      </tr>

      <tr>

        <td width="154" height="117" rowspan="4"> </td>

        <td height="13" colspan="3" align="center" valign="top"> </td>

        <td width="160" rowspan="4"> </td>

      </tr>

      <tr>

        <td width="99" height="30" align="right" valign="middle">用户名：</td>

        <td colspan="2" align="left" valign="middle"><input type="text" name="txt_user"></td>

      </tr>

      <tr>

        <td height="30" align="right" valign="middle">密  码：</td>

        <td height="30" colspan="2" align="left" valign="middle"><input type="password" name="txt_pwd" onCopy="return false" onCut="return false" onPaste="return false" maxlength="60"></td>

      </tr>

      <tr>

        <td height="30" align="right" valign="middle">验证码：</td>

        <td width="218" height="32" align="left" valign="middle"><input type="text" name="txt_yan">

<?php

  $num=intval(mt_rand(1000,9999));

  for($i=0;$i<4;$i++){

echo "<img src=images/checkcode/".substr(strval($num),$i,1).".gif>";   //输出随机的数字图形

  }

?> 

<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $num;?>" >

</td>

        <td width="62" align="left" valign="middle"><input type="submit" name="Submit" value="登录" onClick="return check(myform);"></td>

      </tr>

      <tr>

        <td height="62" colspan="5"> </td>

      </tr>

    </table>

</form>

</td>

  </tr>

</table>

</body>

</html>

效果如下：
