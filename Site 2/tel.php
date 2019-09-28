<html>
<head>
<meta charset="utf-8">
<title>Сайт web-студії "Web-DECO" var1</title>
<script src="js/clock.js"></script>
<script type="text/javascript">
function send()
{ 	var valid = true;
	var elems = document.forms[0].elements;
	for(var i=0; i<document.forms[0].length; i++){
		if( elems[i].getAttribute('type') == 'text' ||
			elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) {
			if(elems[i].value == '') {
				elems[i].style.border = '2px solid red';
				valid = false;
			}
		}
	}	
	if(!valid) {
		alert('Заповніть всі поля !!!');
		return false;
	} else 
	{ var r = /^\w+@\w+\.\w{2,4}$/i;
		if (!r.test(elems[3].value)) {
			alert('Заповніть вірно E-Mail !!');
			return false;
	    } else return true;
	}
}	
window.onload = function() { setInterval(clockPainting, 1000); }	
</script>
  <style>
   .shadowtext {
    text-shadow: 1px 2px 2px white, 0 0 1em red; /* Параметры тени */
    color: navy; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }
  </style>
</head>
<body background="images/bg.jpg">
  <table border="1" align="center"   background="images/bg-3.jpg" cellpadding="10" >
 
    <tr>
      <td colspan="2" height="150" align="right" hspace="5">
		<img src="images/logo.png" height="140" width="140" align="left" >	  
	  <font size="5" color="Maroon"><h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1></font></td>
    </tr>
    <tr>
      <td colspan="2">
	  <font size="4"><b><a href="index.php">Наші послуги</a>&nbsp;&nbsp; <a href="input.php">Про нас</a>&nbsp;&nbsp; <a href="log.php">Інформація</a>&nbsp; &nbsp;<a href="foto.php">Фотогалерея</a></b></font></td>
    </tr>
    <tr>
      <td width="30%" valign="top" background="images/bg.jpg">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<br>
<hr>
	  <font size="5" color="navy"><h2>Новини</h2></font>
      <font size="5" ><ul>
      <li><a href="tel.php">Телефонний довідник м.Рівне</a></li>
      <li><a href="#">Сайт ТМ "Новашкола" </a></li>
      <li><a href="#">Редизайн сайту classno.com.ua</a></li>
      <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
      <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
      <p align="right"><a href="#">інші...</a></p>
      </ul>
      </font>
 	  <hr>
<H1 align="center"><font color="green">Реєстрація</font></H1>
 <form action="forma.php" method="post" onsubmit="return send();">
<TABLE align="center" bgcolor="#ccc">
<TR>
<TD><font color="green">Прізвище</font>: </TD>
<TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
</TR>

<TR>
<TD><font color="green">Ім'я</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
</TR>
<TR>
<TD><font color="green">Бажаний Login</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="nic1"> </TD>
</TR>
<TR>
<TD><font color="green">E-Mail</font> : </TD>
<TD><input type="email" size="10" maxlength="20" name="email"></TD>
</TR>
<TR>
<TD><font color="green">Пароль</font> : </TD>
<TD><input type="password" size="10" maxlength="20" name="password"></TD>
</TR>
</TABLE>
<p align="center"> 
<input type="submit" value="Зареєструватись" >
<input type="reset" value="Очистити">
</p>
 </form> 
<hr>
<!-- -------------------------------------- Центральна частина сайта    ------------------------------------>
<td width="70%" background="images/bg.jpg" valign="top" align="center"><font size="5" color="navy" >
<!-- ========================================================================================= -->	  
<FORM METHOD =POST ACTION=tel09.php> <table> <tr><td>
<B>Номер тел. :&nbsp;&nbsp;&nbsp;</B> </td><td>
<INPUT TYPE="text" NAME="ntel" SIZE=9 VALUE=""> </td></tr><tr><td>
<B>Прізвище :&nbsp;&nbsp;&nbsp;</B> </td><td>
<B>Вулиця :&nbsp;&nbsp;&nbsp;</B> </td><td>
<select NAME="street" >
<?php
$db_conn = mysqli_connect("localhost", "user", "l", "tel09");
mysqli_set_charset($db_conn, 'utf8');
$date = Date('m/d/Y');
$res = "SELECT * FROM streed";
if (!$db_conn):
echo "<ctrong>";
echo "База даних тимчасово не працює.,br.";
echo "<hr></strong>";
else: $result = mysqli_query($db_conn,&rez) or die("Query failed1");
$num = mysqli_nu_rows($result);
endif;
$i = 0; $s = "";
echo "<option VALUE=''>";
while ($line = mysqli_fetch_array($result, MYSQLI_NUM)) {
	$n = $line[0];
	$s = $line[1];
	echo "<option VALUE='$n'>".$s;
$i++; }
?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr><tr><td>
<B>Будинок :&nbsp;&nbsp;&nbsp;</B></td><td>
<INPUT TYPE="text" NAME="ndom" SIZE=6 VALUE=""></td></tr></table>
<br><INPUT TYPE="submit" Name="sum1" Value ="Пошук">&nbsp;&nbsp;&nbsp;&nbsp;
</FORM>&nbsp;
<hr>
<!-- ===================================================================================================================== -->   
</td>
    </tr>
    <tr>
      <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90"><font size="4">Сайт розробив "Автор"</font></td>
    </tr>
 </table>
 </body>
</html>
