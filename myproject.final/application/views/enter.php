
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

<!--<style>	
/* body{
	margin:0;
	padding:0;
	font: 13px arial, sans-serif; 
	font-family: Calibri;
	font-size: 10pt;
}*/

</style>-->

	<div class="admin_header">
		<div class="menu">
			<ul>
				<li ><a href="/admin" id="look">Click to enter the control panel</a></li>
			</ul>
		</div>
		<div class="user">
			<a href="#"></a> <a href="/enter?out=1">LOG OUT!</a>
		</div>
	</div>

<!--Вход в личный кабинет вставка закончена-->

<?endif;?>

<div style="clear:both; height:50px;"></div>