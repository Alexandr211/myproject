<!--<h1><?=$TiteCategory?></h1>-->

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

<?
echo $pager;
//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<!--<div style="clear:both;"></div>  -->
			<?endif;?>
			
        
			<div class="fetured_items">
			<div class="item">
				<div class="item_fotox">
					<a href="/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><image src="/img/<?=$item["image_url"]?>" /></a>
				</div>
				<div class="item_text">
				<h1 class="item_descr">
				<a href="/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><?=$item["name"]?></a>
				</h1>
				<p>
				$ <?=$item["price"]?> 
				</p>
				<p class="product_buy">
				
						<a href="/catalog?in-cart-product-id=<?=$item["id"]?>">Add to Cart</a>
					<!-- -->
				</p>
			</div>
			</div>
			</div>
		<? 
			$i++;
   
		}
		
		
    
   
		?>
	
<div style="height: 100px;
            clear:both;"></div>

               
                <div class="conditions_product" style="
                width: 1600px;
                height: 341px;
                background-color:  #222224;
                display: inline-block;">
                   <div class="deliver" style="
                   width: 362px;
                    height: 341px;   
                    margin-left: 256px;
                    float: left;">
                    <div class="truc" style="
                    color:  #f16d7f;    
                    width: 45px;
                    height: 32px;
                    margin-left: 160px;
                    margin-top: 90px;
                    margin-bottom: 20px;"><img src="img/truck.png" alt=""></div>
                    <div class="del_text"><h1 style="
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 20px;
                    font-weight: 700;
                    text-align: center;
                    margin-bottom: 20px;">Free Delivery</h1 >
                    <p style=" 
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 14px;
                    font-weight: 300;
                    text-align: center;    
                    top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                <div class="sale" style="
                width: 362px;
                height: 341px;
                float: left;   ">
                    <div class="truc" style="
                    color:  #f16d7f;    
                    width: 45px;
                    height: 32px;
                    margin-left: 160px;
                    margin-top: 90px;
                    margin-bottom: 20px;"><img src="img/percent.png" alt=""></div>
                    <div class="del_text"><h1 style="
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 20px;/* Приближение из-за подстановки шрифтов */
                    font-weight: 700;
                    text-align: center;
                    margin-bottom: 20px;">Sales & discounts</h1>
                    <p style=" 
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 14px;
                    font-weight: 300;
                    text-align: center;    
                    top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                <div class="qualit" style="
                width: 362px;
                height: 341px;
                float: left;">
                    <div class="truc" style="
                    color:  #f16d7f;    
                    width: 45px;
                    height: 32px;
                    margin-left: 160px;
                    margin-top: 90px;
                    margin-bottom: 20px;"><img src="img/crown.png" alt=""></div>
                    <div class="del_text"><h1 style="
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 20px;/* Приближение из-за подстановки шрифтов */
                    font-weight: 700;
                    text-align: center;
                    margin-bottom: 20px;">Quality assurance</h1>
                    <p style=" 
                    font-family: Lato;
                    color:  #fbfbfb;
                    font-size: 14px;
                    font-weight: 300;
                    text-align: center;    
                    top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                </div>
            
       
        <div style="clear:both;"></div>