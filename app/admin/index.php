<? include ("lock.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Админка</title>

	<!-- markItUp! skin -->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css">
	<!--  markItUp! toolbar skin -->
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css">
	<link rel="stylesheet" type="text/css" href="markitup/sets/html/style.css" />
	<!-- jQuery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<!-- markItUp! -->
	<script type="text/javascript" src="markitup/jquery.markitup.js"></script>
	<!-- markItUp! toolbar settings -->
	<script type="text/javascript" src="markitup/sets/default/set.js"></script>
	<script type="text/javascript" src="markitup/sets/html/set.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?
// при запуске и чтении get параметра загружать нужную страницу затем ее изменятьпо нажатию
if ($_POST["izm"]=="1")
{
$Texthead=$_POST["textareahead"]; // получили текст шапки
$Texthead=str_replace('\\',"",$Texthead);
$Textbody=$_POST["html"]; // получили текст боди
$Textbody=str_replace('\\',"",$Textbody);
$titul=$_POST["titul"]; // получили текст боди
$allDoc.="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"><html>";
$allDoc.=$Texthead;
// найдем тег титле и заменим
// найдем до
preg_match('#(.*)(\<title[^\>]*\>)#is',$allDoc,$do);
// найдем после
preg_match('#(\<\/title>)(.*)#is',$allDoc,$posle);
// титульник подставим
$allDoc=$do[0].$titul.$posle[0];
// обьединим


$allDoc.=$Textbody;
$allDoc.="</html>";

// запись в файл
if ((!empty($_POST["ssulka"]))&&(!empty($allDoc)))
{
file_put_contents($_SERVER['DOCUMENT_ROOT']."/".$_POST["ssulka"],$allDoc);
echo "Успешно изменен!";
}
else echo "пустая ссылка!";
}

if ($_POST["get"]==1)
{ // если грузим сервер
$ssulka=$_SERVER['DOCUMENT_ROOT']."/".$_POST["ssulka"]; // ссылка страницы
if ((!empty($_POST["ssulka"]))&&(file_exists($ssulka)))
$str=file_get_contents($ssulka); // весь код
else echo "Файла нет на сервере!!!";
  if (isset($str)){
preg_match('#(\<title[^\>]*\>)(.+?)(\<\/title\>)#is',$str,$titul);
$titul=$titul[2];
preg_match('#(\<div id="content">[^\>]*\>).+?(\<\/content\>)#is',$str,$content);
}
}
?>


<div class="All">
<div class="Lmenu">
<div class="MenuElem">Получить шаблон<form method="post"><input name="ssulka" type="text" value="<? echo $_POST['ssulka']; ?>"><input name="submit" type="submit" value="Получить"><input name="get" type="hidden" value="1"></form></div>
</div>

<div class="Content">
  <form method="post"><? if (!empty($ssulka)) echo "Полная локальная ссылка выглядит так:<br> ".$ssulka."<br>"; ?>
      <br>
      <br>
	  <strong>Титульник:</strong><br>
      <input type="text"  name="titul" value="<? echo $titul; ?>" size="50">
      
      <br>
      <br>
	  
      <strong>Head 
  :</strong><br> 
  <textarea name="textareahead" cols="10" rows="3" >
<? 
if (isset($str))
preg_match( 
    '#(\<head[^\>]*\>).+?(\<\/head\>)#is', // вместо тега head сдесь может быть любой ваш тег
    $str, // строка всего исходного кода, или его часть -- откуда вырезаем тег
    $head // куда сохраним вырезанный тег 
 );
echo (htmlspecialchars($head[0]));
echo $Texthead;
?>
 </textarea><br>
 <strong>Body
 :</strong><br>
  <textarea id="html" cols="80" rows="20" name="html" ><? 
  if (isset($str))
preg_match( 
    '#(\<body[^\>]*\>).+?(\<\/body\>)#is', 
    $str, 
    $body
 );
echo (htmlspecialchars($body[0]));
echo $Textbody;
?></textarea>
<br>
Куда сохранить (указав другой путь создает новую страницу с введенными данными):<br>
<input name="ssulka" type="text" value="<? echo $_POST["ssulka"] ?>">
  </label>
  <br>
  <input name="izm" type="hidden" value="1"><input name="Изменить" type="submit" value="Изменить">
</form>



<script type="text/javascript">
$(function() {
	// Add markItUp! to your textarea in one line
	// $('textarea').markItUp( { Settings }, { OptionalExtraSettings } );
	$('#markItUp').markItUp(mySettings);
	$('#html').markItUp(myHtmlSettings);


	// You can add content from anywhere in your page
	// $.markItUp( { Settings } );	
	$('.add').click(function() {
 		$('#markItUp').markItUp('insert',
			{ 	openWith:'<opening tag>',
				closeWith:'<\/closing tag>',
				placeHolder:"New content"
			}
		);
 		return false;
	});
	
	// And you can add/remove markItUp! whenever you want
	// $(textarea).markItUpRemove();
	$('.toggle').click(function() {
		if ($("#markItUp.markItUpEditor").length === 1) {
 			$("#markItUp").markItUp('remove');
			$("span", this).text("get markItUp! back");
		} else {
			$('#markItUp').markItUp(mySettings);
			$("span", this).text("remove markItUp!");
		}
 		return false;
	});
});
</script>
</div>
</div>
</body>
</html>
