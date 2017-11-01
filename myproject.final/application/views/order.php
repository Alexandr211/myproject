<h1>Registration of the order</h1>
<a href="/cart"><<< Back to Cart</a>
<br/>
<?if($error){ echo $error;}?><br/>
<?
//echo $dislpay_form;
if($dislpay_form){?>
<form action="" method="post">
<table class="table_order_form"> 
<tr bgcolor="#F2F2F2"><td>full name</td><td><input type="text" name="fio" value="<?=$_REQUEST['fio']?>"/></td></tr>
<tr bgcolor="lightgray"><td>E-mail<span style="color: red;">*</span></td><td><input type="text" name="email" value="<?=$_REQUEST['email']?>"/></td></tr>
<tr bgcolor="#F2F2F2"><td>Tel</td><td><input type="text" name="phone" value="<?=$_REQUEST['phone']?>"/></td></tr>
<tr bgcolor="lightgray"><td>Address</td><td><textarea name="adres"><?=$_REQUEST['adres']?></textarea></td></tr>
</table>
<br/>
<input type="submit" name="to_order" value="place the order">
</form>
<?}
else{ echo $message; };
?>
