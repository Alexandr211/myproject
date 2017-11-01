
 <div class="slider_product" 
        style="
        width: 1600px;
        height: 148px;
        background-color: #e8e8e8;
        height: 150px;">
        
         <div class="new_arrivals" 
         style="
         font-family: Lato;
        color:  #f16d7f;
        font-size: 24px;
        font-weight: 900;
        line-height: 20px;
        text-align: left;
        text-transform: uppercase;
        margin-left: 230px;
        padding-top: 65px;" >
            
             <h1>new arrivals</h1>
         </div>   
        </div>

 <div style="clear:both; height:50px;"></div>
<?
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm):?>

<div class="enter_text">
<h1>ALREADY REGISTED?</h1>
<br />
<p>Please log in below</p>
</div>
<div style="clear:both; height:20px;"></div>
<?endif;?>
<?

if(!$unVisibleForm):
echo $msg;
?>
<form class="form_enterposition" action="/enter" method="POST">
  LOGIN:<br /><input type="text" name="login" value="" class="form_enter"<?=$login?>" /><br />
  <div style="clear:both; height:10px;"></div>
  PASSWORD:<br /><input type="text" name="pass" value="" class="form_enter"<?=$pass?>" /><br />
  <div style="clear:both; height:20px;"></div>
  <input class="button_logout" type="submit" value="LOG IN" />
</form>

<?else:?>

<!--Вход в личный кабинет вставка-->
   
<div class="enter_tex">
<h1>The personal account of <?=$userName?></h1>
</div>
<div style="clear:both; height:1px;"></div>
<!--<style>	
/* body{
	margin:0;
	padding:0;
	font: 13px arial, sans-serif; 
	font-family: Calibri;
	font-size: 10pt;
}*/

</style>-->

<?if($_SESSION["Auth"] && $_SESSION["role"]=="1"):
?>
<div class="header1">
		<div class="logo"></div>		
		<div class="menu">
			<ul>
				<li ><a href="/" id="look">Просмотр</a></li>
				<li class="products1"><a href="#" id="product">Товары</a></li>
				<li class="category"><a href="#" id="category">Категории</a></li>
				<li class="page"><a href="#" id="page">Страницы</a></li>
				<!--<li class="menu"><a href="#" id="menu">Меню</a></li>-->				
				<li class="settings"><a href="#" id="settings">Настройки</a></li>

			</ul>
		</div>
		<div class="user">
			<a href="#"><?=$_SESSION["User"]?></a> (<a href="/enter?out=1">Выход</a>)
		</div>
	</div>
	
	<div id="message_box">
	<div id="message">
	
	</div>
	</div>
		
		<?else:?>
<div class="login_form">
<h2>Авторизация</h2>
<div class="info">
<?if(!$_SESSION["Auth"]){
echo "Только администраторы могут пользоваться этим разделом!";
}
else 
{
if($_SESSION["role"]>1) echo "У вас нет доступа к этой части сайта!";
}?>
</div>
Введите логин и пароль администратора:
<form action="/enter" method="POST">
<table id="login_form_table" style="margin-top:10px;">
<tr>
  <td>Логин:</td><td><input type="text" name="login" value="<?=$login?>" /></td>
</tr>
<tr>
  <td>Пароль:</td><td><input type="text" name="pass" value="<?=$pass?>" /></td>
</tr>
<tr>
<td colspan="2">
  <input type="hidden" name="location" value="/admin" />
  <input type="submit" value="Вход" />
</td>  
</tr>  
</table>  
</form>

<?endif;?>
</div>

<!--Вход в личный кабинет вставка закончена-->

<?endif;?>

<div style="clear:both; height:50px;"></div>