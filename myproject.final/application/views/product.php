<div style="clear:both; height:50px;"></div>
<a href="/catalog"><<< Back</a>

<div style="clear:both; height:20px;"></div>
<h1><?=$product['name']?></h1>

<div style="clear:both; height:20px;"></div>
<div class="card_product">
				<div class="product_image">
					<image src="/img/<?=$product['image_url']?>" alt="<?=$product['name']?>" title="<?=$product['name']?>" />
				</div>
				<div class="product_desc">
					<?=$product['desc']?>					
				</div>
				<div class="price">
					$<?=$product['price']?> 					
				</div>
				<div class="product_buy">
					
					<a href="/catalog?in-cart-product-id=<?=$product["id"]?>">Add to cart</a>
					
				</div>
</div>


<div style="clear:both; height:50px;"></div>