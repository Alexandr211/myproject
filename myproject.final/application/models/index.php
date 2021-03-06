<?php
//Модель вывода каталога
 class Application_Models_Index extends Lib_DateBase
  {	  
	  public $category_id=array();
	  public $current_category=array();

	    function getList($page=1,$step=5)
	  { 
		 if(!$this->getCurrentCategory()){ echo "Ошибка получения данных!"; exit; }//Если неудалось получить текущую категорию
		
		$page=$page-1;
		// вычисляет общее количество продуктов 	   
		
		$filter="";
		//формируем фильт для продуктов, по имеющимся категориям, внутри выбранной
	
		foreach($this->category_id as $cat_id){
			$filter.= " OR c.id=".$cat_id;
			}
			
	
			
		if($this->current_category["url"]=="catalog"){
			$sql = "SELECT  p.id  FROM product p LEFT JOIN category c ON c.id=p.cat_id";
			$result = parent::query($sql);
			}
		else	
		{
			//запрос вернет все товары внутри выбраной категории, а также внутри вложеных в нее категорий 	
			$sql = "SELECT  p.id  FROM product p LEFT JOIN category c ON c.id=p.cat_id WHERE c.id=%d ".$filter;//запрос вернет обще кол-во продуктов в выбранной категории	
			$result = parent::query($sql,end($this->category_id));	

		}
			
	//	if(empty($this->category_id)) $sql = "SELECT  id  FROM product";//если категория не выбранна, то показать все товары каталога
			
		$count = ceil(parent::num_rows($result)/$step); // макс кол-во

		if($page<=0)$page=0;
		if($page>=$count)$page=$count-1;
		$lower_bound=$page*$step; // определяем нижнюю границу каталога
		
 		// формирует страницу с продуктами 		
		if(empty($this->category_id)) {//если категория не выбрана то формируем запрос по всем имеющимся элементам
			$sql = "SELECT  *  FROM product ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$lower_bound,$step);
		}
		else // ииначе делаем выборку только по выбранному разделу 
		{
		$filter="";
		
		if(!empty($this->category_id))
			foreach($this->category_id as $cat_id){
			$filter.= " OR c.id=".$cat_id;
			}
			
			
			if($this->current_category["url"]=="catalog"){
			$sql = "SELECT  c.url as category_url, p.url as product_url, p.*  FROM product p LEFT JOIN category c ON c.id=p.cat_id  ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$lower_bound,$step);
			}	
			else{
			$sql = "SELECT  c.url as category_url, p.url as product_url, p.*  FROM product p LEFT JOIN category c ON c.id=p.cat_id WHERE c.id=%d ".$filter." ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$this->category_id[0],$lower_bound,$step);	
			}
		}
		
		if(parent::num_rows($result))//если в разделе есть товары то заполняем ими массив		
		while ($row = parent::fetch_assoc($result))
		{		 
			$сatalogItems[]=$row;
		}
		
	
		//делаем постраничную навигацию 
		$activ_page=$page; // устанавливаем активную страницу
	
	    $url_page=$this->current_category["url"];// получаем урл секции, если его нет то заменяем на "catalog"
		if($count>1){
			for($page=0; $page<$count; $page++){// перебираем все страницы и формируем ссылки на них
				($activ_page==$page)?$class="activ":$class="";
				$pages.='<a rel="pagination" page="'.($page+1).'" class="'.$class.'" href="#">'.($page+1).'</a>';
			}
			 $pages='<div class="pagination">Страница '.($activ_page+1).' из '.($count).' '.$pages.'</div>';
		}
		// дописывает  к возвращаемому массиву информацию о пагинации  		  
		$сatalogItems['pagination']=$pages;
				
		return $сatalogItems; 
		
	}

	  
	  //****************************************
	  // функция для публичной части, в дальнейшем должна стать общей и для админки.
	  //****************************************
	  //получает номер страницы из категории товаров	  
	   function getPageList($page=1,$step=5)
	  { 
	    if(!$this->getCurrentCategory()){ echo "Ошибка получения данных!"; exit; }//Если неудалось получить текущую категорию
		
		$page=$page-1;
		// вычисляет общее количество продуктов 	   
		
		$filter="";
		//формируем фильт для продуктов, по имеющимся категориям, внутри выбранной
	
		foreach($this->category_id as $cat_id){
			$filter.= " OR c.id=".$cat_id;
			}
			
	
			
		if($this->current_category["url"]=="catalog"){
			$sql = "SELECT  p.id  FROM product p LEFT JOIN category c ON c.id=p.cat_id";
			$result = parent::query($sql);
			}
		else	
		{
			//запрос вернет все товары внутри выбраной категории, а также внутри вложеных в нее категорий 	
			$sql = "SELECT  p.id  FROM product p LEFT JOIN category c ON c.id=p.cat_id WHERE c.id=%d ".$filter;//запрос вернет обще кол-во продуктов в выбранной категории	
			$result = parent::query($sql,end($this->category_id));	

		}
			
	//	if(empty($this->category_id)) $sql = "SELECT  id  FROM product";//если категория не выбранна, то показать все товары каталога
			
		$count = ceil(parent::num_rows($result)/$step); // макс кол-во

		if($page<=0)$page=0;
		if($page>=$count)$page=$count-1;
		$lower_bound=$page*$step; // определяем нижнюю границу каталога
		
 		// формирует страницу с продуктами 		
		if(empty($this->category_id)) {//если категория не выбрана то формируем запрос по всем имеющимся элементам
			$sql = "SELECT  *  FROM product ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$lower_bound,$step);
		}
		else // ииначе делаем выборку только по выбранному разделу 
		{
		$filter="";
		
		if(!empty($this->category_id))
			foreach($this->category_id as $cat_id){
			$filter.= " OR c.id=".$cat_id;
			}
			
			
			if($this->current_category["url"]=="catalog"){
			$sql = "SELECT  c.url as category_url, p.url as product_url, p.*  FROM product p LEFT JOIN category c ON c.id=p.cat_id  ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$lower_bound,$step);
			}	
			else{
			$sql = "SELECT  c.url as category_url, p.url as product_url, p.*  FROM product p LEFT JOIN category c ON c.id=p.cat_id WHERE c.id=%d ".$filter." ORDER BY id LIMIT %d , %d";
			$result = parent::query($sql,$this->category_id[0],$lower_bound,$step);	
			}
		}
		
		if(parent::num_rows($result))//если в разделе есть товары то заполняем ими массив		
		while ($row = parent::fetch_assoc($result))
		{		 
			$сatalogItems[]=$row;
		}
		
	
		//делаем постраничную навигацию 
		$activ_page=$page; // устанавливаем активную страницу
	
	    $url_page=$this->current_category["url"];// получаем урл секции, если его нет то заменяем на "catalog"
		if($count>1){
			for($page=0; $page<$count; $page++){// перебираем все страницы и формируем ссылки на них
				($activ_page==$page)?$class="activ":$class="";
				$pages.='<a style="padding:0px 5px 0px 5px;
                margin-right:5px;
                border: #808080 solid 1px;
                background: white;
                text-decoration:none;" class="'.$class.'" href="/'.$url_page.'?p='.($page+1).'">'.($page+1).'</a>';
			}
			 $pages='<div style="height: 50px;
            clear:both;"></div>
            
            <div class="pagination" style="clear:both;
             font-size: 16px;
             font-weight: 700;
            line-height: 30px;
             color:  #222222;
             margin-left: 240px;
             ">LIST '.($activ_page+1).' OF '.($count).' BROWSE TO '.$pages.'</div>';
		}
		// дописывает  к возвращаемому массиву информацию о пагинации  		  
		$сatalogItems['pagination']=$pages;
				
		return $сatalogItems; 		
	  }
	  
	  
	   function getCurrentCategory(){
			//получаем ссылку и название текущей категории
			$sql = "SELECT  url, title FROM category WHERE id=%d";
	
		
			
			if(end($this->category_id))
			{
				$result = parent::query($sql,end($this->category_id));	
				if($this->current_category = parent::fetch_assoc($result)){
					return true;	
				}
			}
			else{
			
			$this->current_category['url']="catalog";
			$this->current_category['title']="Каталог";
				return true;	
			}
		
			return false;
			
		}
	  // категории

	  
	  	
	
  } 