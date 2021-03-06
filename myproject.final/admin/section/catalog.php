<script type="text/javascript" src="../script/jquery.form.js"></script>	
	<script>
	$('#photoimg').live('change', function(){ 
			   $("#preview").html('');
			   $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			   $("#imageform").ajaxForm({				
					target: '#preview'
				}).submit();
				$(".btn_cansel_load_img").css('display', 'block');
				$(".btn_load_img").css('display',  'none');	
		});	
		
	$('#edit_photoimg').live('change', function(){ 
			   $("#edit_preview").html('');
			   $("#edit_preview").html('<img src="loader.gif" alt="Uploading...."/>');
			   $("#edit_imageform").ajaxForm({				
					target: '#edit_preview'
				}).submit();
	});
	$("#category_select [value='<?=$category_id?>']").attr("selected", "selected");
	</script>	
<?
	$model=new Application_Models_Catalog;	
	$catalog=array();
	
	$model->category_id=Lib_Category::getInstance()->getCategoryList($category_id); // пять - id категории
	$model->category_id[]=$category_id;
	
	$catalog=$model->getList($page,5);
	//категории: 

	$list_categories=Lib_Category::getInstance()->getCategoryTitleList();
	$array_categories=$model->category_id=Lib_Category::getInstance()->getHierarchyCategory(0);	
	
	$categories="<select id='category_select' name='category'>";
	$categories.="<option selected value='0'>All</option>";
	$categories.=Lib_Category::getInstance()->getTitleCategory($array_categories);	
	$categories.="</select>";

	$pagination=$catalog['pagination'];
	unset($catalog['pagination']);
	
//	echo "<pre>";
//	print_R($catalog);
//	echo "</pre>";
?>	


<h1>Products</h1>

	<a href="#" rel="creat_new_product" class="button"><img src="design/images/icons/add.png"> Add the product </a>
	<br/><br/><b>Category</b> <?=$categories?>
	
	<table class="catalog_table"><tr><th>ID</th><th>Category</th><th>Image</th><th>Code</th><th>Product name</th><th>Description</th><th>Price</th><th></th><th></th></tr>	 
	<?foreach($catalog as $data){?>
		<tr id="<?=$data['id']?>">
		<td class="id"><?=$data['id']?></td>
		<td id="<?=$data['cat_id']?>" class="cat_id"><?=$list_categories[$data['cat_id']]?></td>
		<td class="image_url"><?if(!$data['image_url']){$data['image_url']="none.png";}?><img class="uploads" src="../uploads/<?=$data['image_url']?>"/></td>
		<td class="code"><?=$data['code']?></td>
		<td class="name"><?=$data['name']?></td>
		<td class="desc" id="<?=$data['id']?>"><?=$data['desc']?></td>
		
		<td class="price"><?=$data['price']?></td>
		<td><a href="#" rel="edit" id="<?=$data['id']?>">Edit</a></td>
		<td><a href="#" rel="del" id="<?=$data['id']?>">Delete</a></td>
		</tr>
	<?}?>
	<tr><td colspan="9"><?=$pagination?></td></tr>
	</table>
	
	
	
	<div class="creat_product">
		<div class="popwindow">
			<div class="title_popwindow">
				New product		
			</div>
			<div class="close_popwindow">
				<a href="#" rel="cancel_creat_new_product" >
				<img  src="design/images/icons/close.png"/>
				</a>
			</div>
		</div>	
		<table border="1">	
		<tr>
			<td>Product name:</td><td><input type="text" name="name"/></td>
			<td rowspan="4">
			<div class="btn_load_img">
				<form id="imageform" method="post" enctype="multipart/form-data" action="loadimage.php">
				<input type="file" name="photoimg" id="photoimg" />
				</form>	
			</div>
			
			<div class="btn_cansel_load_img">
				<a href="#" id="form_del_img"  alt="Cancel" title="Cancel">Upload foto</a>
			</div>						
		
			
			<div id="preview"></div>
			</td>
		</tr>
		<tr><td>Code:</td><td><input type="text" name="code"/></td></tr>
		<tr><td>Price:</td><td>$<input type="text" name="price"/> </td></tr>
		<tr><td>Category:</td><td>
				
				<select id='new_prod_category' name='category'>
				<option selected value='0'>All</option>
				<?=Lib_Category::getInstance()->getTitleCategory($array_categories);?>	
				</select>
				
				</td></tr>
		<tr><td>Description:</td><td colspan="2"><textarea name="description" style="width:100%; height: 150px;"></textarea></td></tr>
		<tr>
			<td colspan="3" style="height:40px; text-align:right;">
				<a href="#" rel="save_new_product" class="button" >Save</a>
			</td>
		</tr>
		</table>
	</div>
	
	<div class="edit_product">
			<div class="popwindow">
				<div class="title_popwindow">
					Edit the product		
				</div>
				<div class="close_popwindow">
					<a href="#" rel="cancel_edit_product" >
					<img  src="design/images/icons/close.png"/>
					</a>
				</div>
			</div>			
			<table border="1">	
				<tr><td>Product name:</td><td><input type="text" name="edit_name" /></td><td rowspan="4">
				<div class="edit_btn_load_img">			
				<form id="edit_imageform" method="post" enctype="multipart/form-data" action="loadimage.php">
				<input type="file" name="edit_photoimg" id="edit_photoimg" />
				</form>			
				</div>
			
				<div class="edit_btn_cansel_load_img">
					<a href="#" id="edit_form_del_img"  alt="Delete" title="Delete">Click to Delete</a>
				</div>
			
				<div id="edit_preview">
				
				</div>
				
				</td></tr>
				<tr><td>Code:</td><td><input type="text" name="edit_code"/></td></tr>
				<tr><td>Price:</td><td>$<input type="text" name="edit_price"/></td></tr>
				
				
				<tr><td>Category:</td><td>
				
				<select id='edit_category' name='category'>
				<option selected value='0'>All</option>
				<?=Lib_Category::getInstance()->getTitleCategory($array_categories);?>	
				</select>
				
				</td></tr>
				
				
				
				<tr><td>Description:</td><td colspan="2"><textarea name="edit_description" style="width:100%; height: 150px;"></textarea></td></tr>
				<tr><td colspan="3" style="height:40px; text-align:right;">
				<a href="#" rel="save_edit_product" class="button" >Save</a>
				</td></tr>
			</table>
			<input type="hidden" name="edit_id"/>
	</div>	