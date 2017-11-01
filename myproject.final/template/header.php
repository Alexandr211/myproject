<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The main page</title>
    <link rel="stylesheet" href="../template/reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style_cart.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script type="text/javascript" src="./script/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="../script/admin/admin.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

<link rel="stylesheet" href="../style_catalog.css">
<link rel="stylesheet" href="../style_futer.css">
<link rel="stylesheet" href="../style_enter.css">

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
                         <div class="basket">
                        <a href="/cart"><img src="../img/basket.png" alt=""></a>
                        <?=$smal_cart['cart_count']?> 
				<br/>
                    </div>
                    <div class="account">
                        <a href="/enter" ><p class="down">My Account</p></a>
                        
                    </div>
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
    
       
        
       