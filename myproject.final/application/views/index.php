          
           <section>
            <div class="slider">
                <div class="vert_line">
                    <img src="img/Rectangle_16.jpg" alt="">
                </div>
                <div class="the_brand">
                    <h1>THE BRAND</h1>
                </div>
                <div class="ofluxerious">
                    <H1>OF LUXERIOUS &nbsp&nbsp</H1>
                    <H2> FASHION</H2>
                </div>
                <div class="layer">
                    <img src="img/Layer_24.jpg" alt="">
                </div>
            </div>
            <div class="products clearfix">
                <div class="hot">
                    <div class="photo_1 info">
                        <div class="hot_deal">
                            <h1>hot deal</h1>
                            <h2>for men</h2>
                        </div>

                        <a href="/catalog"><img src="img/photo1.jpg" alt=""></a>

                    </div>
                    <div class="photo_2">
                        <div class="luxerious_trendy">
                            <h1>luxurious & trendy</h1>
                            <h2>accesories</h2>
                        </div>
                        <a href="/catalog"><img src="img/photo4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="new">
                    <div class="photo_3">
                        <div class="hot_deal">
                            <h1>30% offer</h1>
                            <h2>women</h2>
                        </div>
                        <a href="/catalog"><img src="img/photo2.jpg" alt=""></a>
                    </div>
                    <div class="photo_4">
                        <div class="hot_deal">
                            <h1>new arrivals</h1>
                            <h2>for kids</h2>
                        </div>
                        <a href="/catalog"><img src="img/photo3.jpg" alt=""></a>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="fetured_items">
                <div class="fetured_text">
                    <h1>fetured items</h1>
                    <p>Shop for items based on what we featured on this week</p>
                </div>
                <div class="clr"></div>
                
<!--представление каталога (страница каталога)-->
<?
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<!--<div style="clear:both;"></div>  -->
			<?endif;?>
			
        
			
			<div class="item">
			
				<a href="?in-cart-product-id=<?=$item["id"]?>"><div class="item_foto<?=$i+1?>">
				<div class="item1"> </div>
				</div>
				</a>
				<div class="item_text">
				<h1 class="item_descr">
				<a href="/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><?=$item["name"]?></a>
				</h1>
				<p>
				$ <?=$item["price"]?> 
				</p>
				<p class="product_buy">
				
						
					<!-- -->
				</p>
			</div>
			</div>
		<? 
			$i++;
   
		}
				
   
		?>
	                
                <button class="browse_all_prod_button" name="" value="">Browse All products <img  style="width: 20px; vertical-align: middle; margin-left: 5px" src="img/arrow1.gif" alt="" />
                </button>
            
            </div>
        </section>
        <section>
            <div class="winter_discount">
               <div class="winter_leftblock"> <a href=""><img class="winter_women" src="img/girl_discount.jpg" alt=""></a>
                <div class="women_discount">
                    <h1>30%&nbsp</h1>
                    <h2>OFFER </h2>
                    <h3>FOR WOMEN </h3>
                </div>
</div>
                <div class="conditions"><div class="delivery">
                    <div class="truck"><img src="img/truck.png" alt=""></div>
                    <div class="del_text"><h1>Free Delivery</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                <div class="sales">
                    <div class="truck"><img src="img/percent.png" alt=""></div>
                    <div class="del_text"><h1>Sales & discounts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                <div class="quality">
                    <div class="truck"><img src="img/crown.png" alt=""></div>
                    <div class="del_text"><h1>Quality assurance</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas iure dolor natus mollitia impedit corporis.</p></div>
                </div>
                </div>
            </div>
        </section>