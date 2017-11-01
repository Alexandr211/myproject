<?
session_start(); //открываем сессию
?>
<link rel="stylesheet" href="../style_enter.css" type="text/css">
<link rel="stylesheet" href="/template/reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style_cart.css">
    <link rel="stylesheet" href="../style_catalog.css">
<link rel="stylesheet" href="../style_futer.css">
    
  <?if($_SESSION["Auth"] && $_SESSION["role"]=="1"):
?>
<html>

  <head>
    <meta charset="UTF-8">
    <title>The control panel page</title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="../script/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="../script/admin/admin.js"></script>

  </head>
  
  <body>
  
 <div class="container">
        <header>
            <div class="header">
                <div class="center">
                    <div class="brand_logo">
                        <a href="/"><img src="../img/brand_logo.jpg" alt=""></a>
                    </div>
                    <div class="brand">
                        <a href="/"><img src="../img/brand.jpg" alt=""></a>
                    </div>
                    <div class="searcher">
                        <form action="">
                        
                         <div class="browse">
                           
                           
            
            <nav class = "browse_menu">
     <ul class="topmenu1">
        <li><a href="" class="down">Browse</a>
        <ul class="submenu1">
           <li><br/></li>
            <p>WOMEN</p>
            <li><a href="/catalog">Dresses</a></li>
            <li><a href="/catalog">Tops</a></li>
            <li><a href="/catalog">Sweaters/Knits</a></li>
            <li><a href="/catalog">Jackets/Coats</a></li>
            <li><a href="/catalog">Blazers</a></li>
            <li><a href="/catalog">Denim</a></li>
            <li><a href="/catalog">Leggins/Pants</a></li>
            <li><a href="/catalog">Skirts/Shorts</a></li>
            <li><a href="/catalog">Accessories</a></li>
            <p>MEN</p>
            <li><a href="/catalog">Tees/Tank</a></li>
            <li><a href="/catalog">Shearts/Polos</a></li>
            <li><a href="/catalog">Sweaters</a></li>
            <li><a href="/catalog">Sweetshirt/Hoddies</a></li>
            <li><a href="/catalog">Blazers</a></li>
            <li><a href="/catalog">Jackets/Vests</a></li>
            </ul>
            
        </li>
        </ul>
        </nav>
    
               </div>  
                            
                            <div ><input class="search" type="search" size="38" placeholder="Search for Item..."></div>
                            <div ><input class="submit" type="submit" value=" "></div>
                        </form>
                        
                        
                    </div>
                   
                </div>
            </div>
            
            <nav class="container1">
<div class="nav">

 <?=$menu?>   
<ul class="top-menu">
    <li class="dropdown-standart"><a href="/" class="dropdown">home</a>
      <ul class="submenu-standart">
        <li><a href="/">Element 1</a></li>
        <li><a href="/">Element 2</a></li>
        <li><a href="/">Element 3</a></li>
        <li><a href="/">Element 4</a></li>
        <li><a href="/">Element 5</a></li>
        <li><a href="/">Element 6</a></li>
      </ul>
    </li>
    <li><a href="/catalog" class="dropdown">man</a>
      <ul class="submenu">
        <li><h3>women</h3>
          <ul>
            <li><a href="/catalog">Dresses</a></li>
            <li><a href="/catalog">Tops</a></li>
            <li><a href="/catalog">Sweaters/Knits</a></li>
            <li><a href="/catalog">Jackets/Coats</a></li>
            <li><a href="/catalog">Blazers</a></li>
            <li><a href="/catalog">Denim</a></li>
            <li><a href="/catalog">Leggins/Pants</a></li>
            <li><a href="/catalog">Skirts/Shorts</a></li>
            <li><a href="/catalog">Accessories</a></li>
          </ul>
        </li>
        <li><h3>women</h3>
          <ul>
            <li><a href="/catalog">Dresses</a></li>
            <li><a href="/catalog">Tops</a></li>
            <li><a href="/catalog">Sweaters/Knits</a></li>
            <li><a href="/catalog">Jackets/Coats</a></li>
            </ul>
            <h3>women</h3>
          <ul>
            <li><a href="/catalog">Dresses</a></li>
            <li><a href="/catalog">Tops</a></li>
            <li><a href="/catalog">Sweaters/Knits</a></li>
            </ul>
        </li>
        <li>
         <h3>women</h3>
          <ul>
             <li><a href="/catalog">Dresses</a></li>
            <li><a href="/catalog">Tops</a></li>
            <li><a href="/catalog">Sweaters/Knits</a></li>
            <li><a href="/catalog">Jackets/Coats</a></li>
            </ul>
          <ul>
            <li>
              <a href="" class="link-image">
              <img src="https://html5book.ru/wp-content/uploads/2017/01/white-lady.jpg">
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="/catalog">women</a></li>
    <li><a href="/catalog">kids</a></li>
    <li><a href="/catalog">accoseriese</a></li>
    <li><a href="/catalog">featured</a></li>
    <li><a href="/catalog">hot deals</a></li>
  </ul>
                </div>
            </nav>
        </header>
        
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
 
 <!--Меню управления начало-->
 
 <div class="header1">
		<div class="logo"></div>		
		<div class="menu">
			<ul>
				<li ><a href="/" id="look">Preview</a></li>
				<li class="products1"><a href="#" id="product">Products</a></li>
				<li class="category"><a href="#" id="category">Category</a></li>
				<li class="page"><a href="#" id="page">Pages</a></li>
				<!--<li class="menu"><a href="#" id="menu">Меню</a></li>-->				
				<li class="settings"><a href="#" id="settings">Settings</a></li>

			</ul>
		</div>
		<div class="user">
			<a href="#"></a><a href="/enter?out=1">Logout</a>
		</div>
	</div>
	
	<div id="message_box">
	<div id="message">
	
	</div>
	</div>

	<div id="content">
		<div class="data">
			
		</div>
	</div>

  <!--Меню управления конец-->
         
         <div style="clear:both; height:50px;"></div>
         
			 <section>
            <div class="feedback">
              <img style="float: left; opacity: 0.5" src="../img/sea.png" alt="">
               <div class="feed_text">
                <div class="feedback_foto">
                    <img src="../img/women_smile.png" alt="">
                 </div>
                <div class="f_text">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eum iure animi esse voluptatem veritatis."</p>
                    <h1>Bin Burhan</h1>
                    <h2>Dhaka, Bd</h2>
                </div>   
                </div>
                <div class="subscribe">
                    <div class="sub_text">
                        <h1>SUBSCRIBE</h1>
                        <h2>FOR OUR NEWSLETTER AND PROMOTION</h2>
                    </div>
                    
                       <form class="sub_searcher" action="">
                            <input class="sub_search" type="Email" size="38" placeholder="Enter Your Email...">
                            <input class="sub_submit" type="submit" value=" Subscribe">
                        </form> 
                    
                    
                </div>
                
            </div>
        </section>
        <footer>
            <div class="footer1">
                <div class="footer1_bl1">
                   <div class="logo_f">
                        <a href=""><img src="../img/brand_logo.jpg" alt=""></a>
                    </div>
                    <div class="brand_f">
                        <a href=""><img src="../img/brand.jpg" alt=""></a>
                    </div> 
                    <div class="footer1_bl1text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minus, animi quos sequi dolorum nisi quam? 
                        Rerum cumque nobis in iste et ipsa enim vero eos delectus error! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quas eligendi fuga aut maiores.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad harum in facilis illum, qui laborum atque animi magnam magni cumque assumenda at esse, hic accusamus error totam impedit autem unde.</p>
                    </div>
                </div>
                <div class="footer1_bl2">
                    <h1>company</h1>
                    <ul class="menu_f2">
                        <li><a href="#">Home</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">How It works</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
                <div class="footer1_bl3">
                    <h1>information</h1>
                    <ul class="menu_f3">
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">How to Buy</a></li>
                        <li><a href="">How to Sell</a></li>
                        <li><a href="">Promotion</a></li>
                    </ul>
                </div>
                <div class="footer1_bl4">
                    <h1>Shop Category</h1>
                    <ul class="menu_f4">
                        <li><a href="#">Men</a></li>
                        <li><a href="">Women</a></li>
                        <li><a href="">Child</a></li>
                        <li><a href="">Apparel</a></li>
                        <li><a href="">Brows All</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer2">
                <div class="picture_reserved">
                    <img src="../img/Brand%20%20All%20Rights%20Reserved.png" alt="">
                </div>
                <div class="picture_5">
                    <a href=""><img style="width: 30px; margin-top: 1px; margin-left: 1px" src="../img/1g.png" alt=""></a>
                </div>
                <div class="picture_4">
                    <a href=""><img style="width: 30px; margin-top: 1px; margin-left: 1px" src="../img/2p.png" alt=""></a>
                </div>
                <div class="picture_3">
                    <a href=""><img style="width: 30px; margin-top: 1px; margin-left: 1px" src="../img/3in.png" alt=""></a>
                </div>
                <div class="picture_2">
                    <a href=""><img style="width: 20px; margin-top: 7px; margin-left: 7px" src="../img/4tw.png" alt=""></a>
                </div>
                <div class="picture_1">
                    <a href=""><img style="width: 30px; margin-top: 1px; margin-left: 1px" src="../img/5f.png" alt=""></a>
                </div>
            </div>
        </footer>

  </body>
  
</html>

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