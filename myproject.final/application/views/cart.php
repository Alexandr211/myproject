<!--<h2>Корзина</h2>-->

            
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
        
<div style="height: 50px;
            clear:both;"></div>
<?if($empty_cart):?>

		<form action="/cart" method="post">
			<?=$big_cart;?>
			<input type="submit" name="refresh" value="RECALCULATE SHOPPING CART"   style="margin-left:1100px; margin-top:10px; margin-bottom:10px; height:30px;" />
		</form>	

		<form action="/order" method="post" style="margin-left:600px;">
			<input type="submit" name="order" value="PROCEED TO CHECKOUT" class="submit1" style="padding: 0px 20px;" />
		</form>

<?else:?>
<div style="width: 100%;
    height: 40px;
    margin-left: 750px;
    font-family: Lato;
    color:  #f16d7f;
    font-size: 18px; font-weight: 600;">Your Cart is empty!</div>
<?endif;?>


<div style="height: 50px;
            clear:both;"></div>