<?php
$menu=getMenu();
$smal_cart=getSmalCart();
$category_list=Lib_Category::getInstance()->getCategoryList_UL(0);

function getMenu(){
	return Lib_Menu::getInstance()->getMenu();
}
function getSmalCart(){
	return Lib_SmalCart::getInstance()->getCartData();
}
