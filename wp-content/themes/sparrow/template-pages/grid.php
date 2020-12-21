<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons Icon -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/FRS.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/FRS.png"
        type="image/x-icon" />


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body class="inner-page">
    <div id="page">

        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Header Language -->
                            <div class="col-xs-7 col-sm-6">
                                <div class="dropdown block-language-wrapper hidden-xs"> <a role="button"
                                        data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle"
                                        href="#"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/english.png" alt="language"> English <span
                                            class="caret"></span> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/english.png" alt="language"> English </a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/francais.png" alt="language"> French </a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/german.png" alt="language"> German </a></li>
                                    </ul>
                                </div>
                                <!-- End Header Language -->

                                <!-- Header Currency -->
                                <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button"
                                        data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle"
                                        href="#"> USD <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar
                                            </a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound
                                            </a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Header Currency -->

                                <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
                            </div>
                            <div class="col-xs-5 col-sm-6">

                                <div class="top-cart-contain pull-right">
                                    <!-- Top Cart -->
                                    <div class="mini-cart">
                                        <div data-toggle="dropdown" data-hover="dropdown"
                                            class="basket dropdown-toggle"><a href="#"> My Cart <span
                                                    class="cart_count">2</span></a></div>
                                        <div>
                                            <div class="top-cart-content" style="display: none;">
                                                <div class="actions">
                                                    <button class="btn-checkout" title="Checkout"
                                                        type="button"><span>Checkout</span></button>
                                                    <a href="#" class="view-cart"><span>View Cart</span></a>
                                                </div>
                                                <!--block-subtitle-->
                                                <ul class="mini-products-list" id="cart-sidebar">
                                                    <li class="item first">
                                                        <div class="item-inner"><a class="product-image"
                                                                title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White"
                                                                href="#l"><img
                                                                    alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White"
                                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/p4.jpg"></a>
                                                            <div class="product-details">
                                                                <div class="access"><a class="btn-remove1"
                                                                        title="Remove This Item" href="#">Remove</a> <a
                                                                        class="btn-edit" title="Edit item" href="#"><i
                                                                            class="icon-pencil"></i><span
                                                                            class="hidden">Edit item</span></a> </div>
                                                                <!--access--> <strong>1</strong> x <span
                                                                    class="price">$179.99</span>
                                                                <p class="product-name"><a href="#">timi &amp; leslie
                                                                        Sophia Diaper Bag...</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item last">
                                                        <div class="item-inner"><a class="product-image"
                                                                title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron"
                                                                href="#"><img
                                                                    alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron"
                                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/p3.jpg"></a>
                                                            <div class="product-details">
                                                                <div class="access"><a class="btn-remove1"
                                                                        title="Remove This Item" href="#">Remove</a> <a
                                                                        class="btn-edit" title="Edit item" href="#"><i
                                                                            class="icon-pencil"></i><span
                                                                            class="hidden">Edit item</span></a> </div>
                                                                <!--access--> <strong>1</strong> x <span
                                                                    class="price">$80.00</span>
                                                                <p class="product-name"><a href="#">JP Lizzy Satchel
                                                                        Designer Diaper Ba...</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--actions-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Top Cart -->
                                    <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                        <input value="" type="hidden">
                                        <input id="enable_module" value="1" type="hidden">
                                        <input class="effect_to_cart" value="1" type="hidden">
                                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                    </div>
                                </div>

                                <div class="top-search">
                                    <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg"
                                            data-toggle="modal" class="search-focus dropdown-toggle links"> <i
                                                class="fa fa-search"></i> </a>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-label="Close" data-dismiss="modal" class="close"
                                                            type="button"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/interstitial-close.png"
                                                                alt="close"> </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="navbar-form">
                                                            <div id="search">
                                                                <div class="input-group">
                                                                    <input name="search" placeholder="Search"
                                                                        class="form-control" type="text">
                                                                    <button type="button" class="btn-search"><i
                                                                            class="fa fa-search"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Header Top Links -->
                                <div class="toplinks">
                                    <div class="links">

                                        <div class="myaccount"><a title="My Account" href="login.html"><span
                                                    class="hidden-xs">My Account</span></a></div>
                                        <div class="check"><a title="Checkout" href="checkout.html"><span
                                                    class="hidden-xs">Checkout</span></a></div>
                                        <div class="demo"><a title="Blog" href="blog.html"><span
                                                    class="hidden-xs">Blog</span></a></div>
                                        <!-- Header Company -->

                                        <!-- End Header Company -->
                                        <div class="login"><a href="login.html"><span class="hidden-xs">Log
                                                    In</span></a></div>

                                    </div>

                                </div>
                                <!-- End Header Top Links -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- Navbar -->
        <nav>
            <div class="container">
                <!-- Header Logo -->
                <div class="logo"><a title="Datson" href="index.html"><img alt="Datson" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"></a></div>
                <!-- End Header Logo -->

                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
                </div>

                <ul class="nav hidden-xs menu-item menu-item-left">
                    <li class="level0 parent drop-menu active"><a href="index.html"><span>Home</span></a>

                    </li>
                    <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                        <ul class="level1" style="display: none;">
                            <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                            <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                            <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a>
                            </li>
                            <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a>
                            </li>
                            <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                                <!--sub sub category-->
                                <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                                    <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout
                                                Method</span></a></li>
                                    <li class="level2 nav-2-1-5 last"><a
                                            href="checkout_billing_info.html"><span>Checkout Billing Info</span></a>
                                    </li>
                                </ul>
                                <!--sub sub category-->
                            </li>
                            <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                            <li class="level1 first parent"><a href="dashboard.html"><span>Dashboard</span></a>
                                <!--sub sub category-->
                                <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                                    <li class="level2 nav-2-1-1 first"><a href="account_information.html"><span>Account
                                                Information</span></a></li>
                                    <li class="level2 nav-2-1-5 last"><a href="address_book.html"><span>Address
                                                Book</span></a></li>
                                    <li class="level2 nav-2-1-1 first"><a href="contact_information.html"><span>Contact
                                                Information</span></a></li>
                                </ul>
                                <!--sub sub category-->
                            </li>
                            <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a>
                            </li>
                            <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>

                            <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                            <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                            <li class="level1"> <a href="forgot_password.html"> <span>Forgot Password</span> </a> </li>
                            <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                            <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                                <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                                    <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog
                                                Detail</span></a></li>
                                </ul>
                            </li>
                            <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                            <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="grid.html" class="level-top"><span>Women</span></a>
                        <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                            <div class="container">
                                <div class="level0-wrapper2">
                                    <div class="col-1">
                                        <div class="nav-block nav-block-center">
                                            <ul class="level0">
                                                <li class="level1 nav-6-1 parent item"><a href="#.html"
                                                        class=""><span>Handbags</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a href="#" class=""><span>Clutch
                                                                    Handbags</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a href="#/diaper-bags.html"
                                                                class=""><span>Diaper Bags</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a href="#/bags.html"
                                                                class=""><span>Bags</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a href="#/hobo-handbags.html"
                                                                class=""><span>Hobo handbags</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 nav-6-1 parent item"><a
                                                        href="#.html"><span>JACKETS</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/beaded-handbags.html"><span>Bathtime Goods
                                                                </span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/fabric-handbags.html"><span>Bedding</span></a>
                                                        </li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/handbags.html"><span>Blankets</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/leather-handbags.html"><span>Shower
                                                                    Curtains</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 nav-6-1 parent item"><a
                                                        href="#.html"><span>Shoes</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/flat-shoes.html"><span>Flat Shoes</span></a>
                                                        </li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/flat-sandals.html"><span>Flat Sandals</span></a>
                                                        </li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/boots.html"><span>Boots</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/heels.html"><span>Heels</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 nav-6-1 parent item"><a
                                                        href="#.html"><span>Jwellery</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/bracelets.html"><span>Bracelets</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a href="#"><span>Necklaces &amp;
                                                                    Pendent</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/pendants.html"><span>Pendants</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/pins-brooches.html"><span>Pins &amp;
                                                                    Brooches</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 nav-6-1 parent item"><a
                                                        href="#.html"><span>Dresses</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/casual-dresses.html"><span>Casual
                                                                    Dresses</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/evening.html"><span>Evening</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/designer.html"><span>Designer</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/party.html"><span>Party</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 nav-6-1 parent item"><a
                                                        href="#/swimwear.html"><span>Swimwear</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/swimwear/swimsuits.html"><span>Swimsuits</span></a>
                                                        </li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/swimwear/beach-clothing.html"><span>Beach
                                                                    Clothing</span></a></li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/swimwear/clothing.html"><span>Clothing</span></a>
                                                        </li>
                                                        <li class="level2 nav-6-1-1"><a
                                                                href="#/swimwear/bikinis.html"><span>Bikinis</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--nav-block nav-block-center-->
                                    <div class="col-2">
                                        <div class="menu_image"><a href="#" title=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/menu_image.png"
                                                    alt="menu_image"></a></div>
                                    </div>
                                </div>
                                <!--level0-wrapper2-->
                            </div>
                        </div>
                    </li>
                    <li class="mega-menu"><a href="grid.html" class="level-top"><span>Men</span></a>
                        <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                            <div class="container">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            <li class="level1 nav-6-1 parent item"><a href="#.html"
                                                    class=""><span>Shoes</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/sport-shoes.html"><span>Sport Shoes</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/casual-shoes.html"><span>Casual Shoes</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/leather-shoes.html"><span>Leather Shoes</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/canvas-shoes.html"><span>canvas shoes</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#.html"><span>Dresses</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/casual-dresses.html"><span>Casual Dresses</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/evening.html"><span>Evening</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/designer.html"><span>Designer</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/party.html"><span>Party</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#.html"><span>Jackets</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/coats.html"><span>Coats</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/formal-jackets.html"><span>Formal Jackets</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/leather-jackets.html"><span>Leather
                                                                Jackets</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/blazers.html"><span>Blazers</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#.html"><span>Watches</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/fasttrack.html"><span>Fasttrack</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/casio.html"><span>Casio</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/titan.html"><span>Titan</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/tommy-hilfiger.html"><span>Tommy-Hilfiger</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/sunglasses.html"><span>Sunglasses</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/sunglasses/ray-ban.html"><span>Ray Ban</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/sunglasses/fasttrack.html"><span>Fasttrack</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/sunglasses/police.html"><span>Police</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/sunglasses/oakley.html"><span>Oakley</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/accesories.html"><span>Accesories</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/accesories/backpacks.html"><span>Backpacks</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/accesories/wallets.html"><span>Wallets</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/accesories/laptops-bags.html"><span>Laptops
                                                                Bags</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/accesories/belts.html"><span>Belts</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--level0-wrapper2-->

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav hidden-xs menu-item menu-item-right">
                    <li class="mega-menu"><a href="grid.html" class="level-top"><span>Electronics</span></a>
                        <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                            <div class="container">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/mobiles.html"><span>Mobiles</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobiles/samsung.html"><span>Samsung</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobiles/nokia.html"><span>Nokia</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobiles/iphone.html"><span>IPhone</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobiles/sony.html"><span>Sony</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a href="#.html"
                                                    class=""><span>Accesories</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobile-memory-cards.html"><span>Mobile Memory
                                                                Cards</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/cases-covers.html"><span>Cases &amp;
                                                                Covers</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/mobile-haedphones.html"><span>Mobile
                                                                Headphones</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/bluetooth-headsets.html"><span>Bluetooth
                                                                Headsets</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/cameras.html"><span>Cameras</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/cameras/camcorders.html"><span>Camcorders</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/cameras/point-shoot.html"><span>Point &amp;
                                                                Shoot</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/cameras/digital-slr.html"><span>Digital
                                                                SLR</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#camera-accesories.html"><span>Camera
                                                                Accesories</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/audio-video.html"><span>Audio &amp; Video</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/audio-video/mp3-players.html"><span>MP3
                                                                Players</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/audio-video/ipods.html"><span>IPods</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/audio-video/speakers.html"><span>Speakers</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/audio-video/video-players.html"><span>Video
                                                                Players</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/computer.html"><span>Computer</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/external-hard-disk.html"><span>External Hard
                                                                Disk</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/computer/pendrives.html"><span>Pendrives</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/computer/headphones.html"><span>Headphones</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/computer/pc-components.html"><span>PC
                                                                Components</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-6-1 parent item"><a
                                                    href="#/home-appliances.html"><span>Appliances</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/vaccum-cleaners.html"><span>Vaccum
                                                                Cleaners</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/indoor-lighting.html"><span>Indoor
                                                                Lighting</span></a></li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/kitchen-tools.html"><span>Kitchen Tools</span></a>
                                                    </li>
                                                    <li class="level2 nav-6-1-1"><a
                                                            href="#/water-purifier.html"><span>Water Purifier</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--level0-wrapper2-->

                            </div>
                        </div>
                    </li>
                    <li class="mega-menu"><a class="level-top" href="grid.html"><span>Furniture</span></a>

                    </li>
                    <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>Kids</span></a></li>

                </ul>



            </div>
        </nav>
        <!-- end nav -->
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Holiday</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Retis lapen casen</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Main Container -->
        <section class="main-container col2-left-layout bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-main col-sm-9 col-sm-push-3">
                        <div class="category-description std">
                            <div class="slider-items-products">
                                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                        <!-- Item -->
                                        <div class="item"> <a href="#"><img alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-img1.jpg"></a>
                                            <div class="cat-img-title cat-bg cat-box">
                                                <div class="small-tag"><span>Hot Sale</span> 49% OFF</div>
                                                <h2 class="cat-heading">Women Collection</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                            </div>
                                        </div>
                                        <!-- End Item -->

                                        <!-- Item -->
                                        <div class="item"> <a href="#"><img alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-img2.jpg"></a>

                                            <!-- End Item -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article class="col-main">
                            <div class="page-title">
                                <h1>Women</h1>
                            </div>
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="view-mode"> <span title="Grid"
                                            class="button button-active button-grid">&nbsp;</span><a href="list.html"
                                            title="List" class="button-list">&nbsp;</a> </div>
                                </div>
                                <div id="sort-by">
                                    <label class="left">Sort By: </label>
                                    <ul>
                                        <li><a href="#">Position<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">Name</a></li>
                                                <li><a href="#">Price</a></li>
                                                <li><a href="#">Position</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                            class="top_arrow"></span></a>
                                </div>
                                <div class="pager">
                                    <div id="limiter">
                                        <label>View: </label>
                                        <ul>
                                            <li><a href="#">15<span class="right-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">20</a></li>
                                                    <li><a href="#">30</a></li>
                                                    <li><a href="#">35</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pages">
                                        <label>Page:</label>
                                        <ul class="pagination">
                                            <li><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="category-products">
                                <ul class="products-grid">
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="new-label new-top-left">New</div>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="new-label new-top-left">New</div>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="new-label new-top-left">New</div>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="#" title="Retis lapen casen"
                                                        class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                            alt="Retis lapen casen"></a>
                                                    <div class="actions">
                                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Quick View"> <span>Quick
                                                                    View</span></a></div>
                                                        <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Wishlist"><span>Add to
                                                                    Wishlist</span></a></div>
                                                        <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Compare"><span>Add to
                                                                    Compare</span></a></div>
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Add to Cart"><span>Add to
                                                                    Cart</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add
                                                                    Review</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="#" title="Retis lapen casen">Retis
                                                            lapen casen</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!--	///*///======    End article  ========= //*/// -->
                    </div>
                    <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                        <aside class="col-left sidebar">
                            <div class="side-nav-categories">
                                <div class="block-title"> Categories </div>
                                <!--block-title-->
                                <!-- BEGIN BOX-CATEGORY -->
                                <div class="box-content box-category">
                                    <ul>
                                        <li> <a class="active" href="#/women.html">Women</a> <span
                                                class="subDropdown minus"></span>
                                            <ul class="level0_415" style="display:block">
                                                <li> <a href="#/women/tops.html"> Handbags </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/tops/evening-tops.html"> Clutch Handbags
                                                            </a> </li>
                                                        <li> <a href="#/women/tops/shirts-blouses.html"> Diaper Bags
                                                            </a> </li>
                                                        <li> <a href="#/women/tops/tunics.html"> Back Bags </a> </li>
                                                        <li> <a href="#/women/tops/vests.html"> Hobo handbags </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/women/bags.html"> Jackets </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                                                        <li> <a href="#/women/bags/designer-handbags.html"> Designer
                                                                Handbags </a> </li>
                                                        <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                                                        <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags
                                                            </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/women/shoes.html"> Shoes </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a>
                                                        </li>
                                                        <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals
                                                            </a> </li>
                                                        <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                                                        <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a>
                                                        </li>
                                                        <li> <a href="#/women/Jewellery/necklaces-pendants.html">
                                                                Necklaces &amp; Pendants </a> </li>
                                                        <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp;
                                                                Brooches </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/women/dresses.html"> Dresses </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/dresses/casual-dresses.html"> Casual
                                                                Dresses </a> </li>
                                                        <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                                                        <li> <a href="#/women/dresses/designer.html"> Designer </a>
                                                        </li>
                                                        <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>


                                                <!--level1-->
                                                <li> <a href="#/women/swimwear.html"> Swimwear </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a>
                                                        </li>
                                                        <li> <a href="#/women/swimwear/beach-clothing.html"> Beach
                                                                Clothing </a> </li>
                                                        <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                            </ul>
                                            <!--level0-->
                                        </li>
                                        <!--level 0-->
                                        <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                                            <ul class="level0_455" style="display:none">
                                                <li> <a href="#/men/shoes.html"> Shoes </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a>
                                                        </li>
                                                        <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                                                        <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a>
                                                        </li>
                                                        <li> <a href="#/men/Jewellery/necklaces-pendants.html">
                                                                Necklaces &amp; Pendants </a> </li>
                                                        <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp;
                                                                Brooches </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/men/dresses.html"> Dresses </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses
                                                            </a> </li>
                                                        <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                                                        <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                                                        <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/men/jackets.html"> Jackets </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                                                        <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                                                        <li> <a href="#/men/jackets/leather-jackets.html"> Leather
                                                                Jackets </a> </li>
                                                        <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/men/swimwear.html"> Swimwear </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a>
                                                        </li>
                                                        <li> <a href="#/men/swimwear/beach-clothing.html"> Beach
                                                                Clothing </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                            </ul>
                                            <!--level0-->
                                        </li>
                                        <!--level 0-->
                                        <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                                            <ul class="level0_482" style="display:none">
                                                <li> <a href="#/smartphones.html"> Smartphones </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                                                        <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                                                        <li> <a href="#/smartphones/blackberry.html"> Blackberry </a>
                                                        </li>
                                                        <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                                                        <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/cameras.html"> Cameras </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras
                                                            </a> </li>
                                                        <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                                                        <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                                                        <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                                                        <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                                <li> <a href="#/accesories.html"> Accesories </a> <span
                                                        class="subDropdown plus"></span>
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                                                        <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                                                        <li> <a href="#/accesories/screen-protectors.html"> Screen
                                                                Protectors </a> </li>
                                                        <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a>
                                                        </li>
                                                        <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                                                        <!--end for-each -->
                                                    </ul>
                                                    <!--level1-->
                                                </li>
                                                <!--level1-->
                                            </ul>
                                            <!--level0-->
                                        </li>
                                        <!--level 0-->
                                        <li> <a href="#/digital.html">Furniture</a> </li>
                                        <!--level 0-->
                                        <li class="last"> <a href="#/fashion.html">Kids</a> </li>
                                        <!--level 0-->
                                    </ul>
                                </div>
                                <!--box-content box-category-->
                            </div>
                            <div class="block block-layered-nav">
                                <div class="block-title">Shop By</div>
                                <div class="block-content">
                                    <p class="block-subtitle">Shopping Options</p>
                                    <dl id="narrow-by-list">
                                        <dt class="odd">Price</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li> <a href="#"><span class="price">$0.00</span> - <span
                                                            class="price">$199.99</span></a> (6) </li>
                                                <li> <a href="#"><span class="price">$200.00</span> and above</a> (6)
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="even">Manufacturer</dt>
                                        <dd class="even">
                                            <ol>
                                                <li> <a href="#">Superb</a> (9) </li>
                                                <li> <a href="#">Nexus</a> (4) </li>
                                                <li> <a href="#">Xperia</a> (1) </li>
                                            </ol>
                                        </dd>
                                        <dt class="odd">Color</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li> <a href="#">Green</a> (1) </li>
                                                <li> <a href="#">White</a> (5) </li>
                                                <li> <a href="#">Black</a> (5) </li>
                                                <li> <a href="#">Gray</a> (4) </li>
                                                <li> <a href="#">Dark Gray</a> (3) </li>
                                                <li> <a href="#">Blue</a> (1) </li>
                                            </ol>
                                        </dd>
                                        <dt class="last even">Size</dt>
                                        <dd class="last even">
                                            <ol>
                                                <li> <a href="#">S</a> (6) </li>
                                                <li> <a href="#">M</a> (6) </li>
                                                <li> <a href="#">L</a> (4) </li>
                                                <li> <a href="#">XL</a> (4) </li>
                                            </ol>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="block block-cart">
                                <div class="block-title ">My Cart</div>
                                <div class="block-content">
                                    <div class="summary">
                                        <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                                        <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                                                class="price">$49.99</span> </p>
                                    </div>
                                    <div class="ajax-checkout">
                                        <button class="button button-checkout" title="Submit"
                                            type="submit"><span>Checkout</span></button>
                                    </div>
                                    <p class="block-subtitle">Recently added item(s) </p>
                                    <ul>
                                        <li class="item"> <a href="#" title="Retis lapen casen"
                                                class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                    alt="Fisher-Price Bubble Mower"></a>
                                            <div class="product-details">
                                                <div class="access"> <a href="#" title="Remove This Item"
                                                        class="btn-remove1"> <span class="icon"></span> Remove </a>
                                                </div>
                                                <strong>1</strong> x <span class="price">$19.99</span>
                                                <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="item last"> <a href="#" title="Retis lapen casen"
                                                class="product-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/products-images/product.jpg"
                                                    alt="Prince Lionheart Jumbo Toy Hammock"></a>
                                            <div class="product-details">
                                                <div class="access"> <a href="#" title="Remove This Item"
                                                        class="btn-remove1"> <span class="icon"></span> Remove </a>
                                                </div>
                                                <strong>1</strong> x <span class="price">$8.00</span>
                                                <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a>
                                                </p>

                                                <!--access clearfix-->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block block-compare">
                                <div class="block-title ">Compare Products (2)</div>
                                <div class="block-content">
                                    <ol id="compare-items">
                                        <li class="item odd">
                                            <input type="hidden" value="2173" class="compare-item-id">
                                            <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#"
                                                class="product-name"> Office Colored Ladies Shirt</a>
                                        </li>
                                        <li class="item last even">
                                            <input type="hidden" value="2174" class="compare-item-id">
                                            <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#"
                                                class="product-name"> Office Colored Ladies Shirt</a>
                                        </li>
                                    </ol>
                                    <div class="ajax-checkout">
                                        <button type="submit" title="Submit"
                                            class="button button-compare"><span>Compare</span></button>
                                        <button type="submit" title="Submit"
                                            class="button button-clear"><span>Clear</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="block block-list block-viewed">
                                <div class="block-title"> Recently Viewed </div>
                                <div class="block-content">
                                    <ol id="recently-viewed-items">
                                        <li class="item odd">
                                            <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                        </li>
                                        <li class="item even">
                                            <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                        </li>
                                        <li class="item last odd">
                                            <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="block block-poll">
                                <div class="block-title">Community Poll </div>
                                <form id="pollForm" action="#" method="post"
                                    onSubmit="return validatePollAnswerIsSelected();">
                                    <div class="block-content">
                                        <p class="block-subtitle">What is your favorite Magento feature?</p>
                                        <ul id="poll-answers">
                                            <li class="odd">
                                                <input type="radio" name="vote" class="radio poll_vote" id="vote_5"
                                                    value="5">
                                                <span class="label">
                                                    <label for="vote_5">Layered Navigation</label>
                                                </span>
                                            </li>
                                            <li class="even">
                                                <input type="radio" name="vote" class="radio poll_vote" id="vote_6"
                                                    value="6">
                                                <span class="label">
                                                    <label for="vote_6">Price Rules</label>
                                                </span>
                                            </li>
                                            <li class="odd">
                                                <input type="radio" name="vote" class="radio poll_vote" id="vote_7"
                                                    value="7">
                                                <span class="label">
                                                    <label for="vote_7">Category Management</label>
                                                </span>
                                            </li>
                                            <li class="last even">
                                                <input type="radio" name="vote" class="radio poll_vote" id="vote_8"
                                                    value="8">
                                                <span class="label">
                                                    <label for="vote_8">Compare Products</label>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="actions">
                                            <button type="submit" title="Vote"
                                                class="button button-vote"><span>Vote</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="block block-tags">
                                <div class="block-title"> Popular Tags</div>
                                <div class="block-content">
                                    <ul class="tags-list">
                                        <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                                        <li><a href="#" style="font-size:145%;">SEXY</a></li>
                                        <li><a href="#" style="font-size:75%;">Tag</a></li>
                                        <li><a href="#" style="font-size:110%;">Test</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                                        <li><a href="#" style="font-size:110%;">cool</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                                        <li><a href="#" style="font-size:75%;">laptop</a></li>
                                        <li><a href="#" style="font-size:75%;">mobile</a></li>
                                        <li><a href="#" style="font-size:75%;">nice</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                                        <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                                        <li><a href="#" style="font-size:75%;">trendy</a></li>
                                        <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                                    </ul>
                                    <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Container End -->

        <div class="brand-logo wow bounceInUp animated">
            <div class="container">
                <div class="slider-items-products">
                    <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col6">

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo3.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo2.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo1.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo4.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo5.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo6.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo1.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/b-logo4.png" alt="Image"></a> </div>
                            <!-- End Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-lg-8">
                            <div class="footer-column pull-left">
                                <h4>CUSTOMMER SERVICE</h4>
                                <ul class="links">
                                    <li class="first"><a href="#" title="Contact us">My Account</a></li>
                                    <li><a href="#" title="About us">Order History</a></li>
                                    <li><a href="#" title="faq">FAQ</a></li>
                                    <li><a href="#" title="Popular Searches">Specials</a></li>
                                    <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>

                                </ul>
                            </div>
                            <div class="footer-column pull-left">
                                <h4>Corporation</h4>
                                <ul class="links">
                                    <li class="first"><a title="Your Account" href="#">About us</a></li>
                                    <li><a title="Information" href="#">Customer Service</a></li>
                                    <li><a title="Addresses" href="#">Company</a></li>
                                    <li><a title="Addresses" href="#">Investor Relations</a></li>
                                    <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>

                                </ul>
                            </div>
                            <div class="footer-column pull-left">
                                <h4>Why choose Us</h4>
                                <ul class="links">
                                    <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                                    <li><a href="#" title="Blog">Blog</a></li>
                                    <li><a href="#" title="Company">Company</a></li>
                                    <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                                    <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <div class="footer-column-last">
                                <div class="newsletter-wrap">
                                    <h4>Sign up for emails</h4>
                                    <form id="newsletter-validate-detail" method="post" action="#">
                                        <div id="container_form_news">
                                            <div id="container_form_news2">
                                                <input type="text" class="input-text required-entry validate-email"
                                                    value="Enter your email address" onFocus=" this.value='' "
                                                    title="Sign up for our newsletter" id="newsletter" name="email">
                                                <button class="button subscribe" title="Subscribe"
                                                    type="submit"><span>Subscribe</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class="social">
                                    <h4>Follow Us</h4>
                                    <ul class="link">
                                        <li class="fb pull-left"><a href="#"></a></li>
                                        <li class="tw pull-left"><a href="#"></a></li>
                                        <li class="googleplus pull-left"><a href="#"></a></li>
                                        <li class="rss pull-left"><a href="#"></a></li>
                                        <li class="pintrest pull-left"><a href="#"></a></li>
                                        <li class="linkedin pull-left"><a href="#"></a></li>
                                        <li class="youtube pull-left"><a href="#"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"></div>
                    <address>
                        <i class="fa fa-map-marker"></i>ThemesGround, 789 Main rd, Anytown, CA 12345 USA <i
                            class="fa fa-mobile"></i><span> +(888) 123-4567</span> <i class="fa fa-envelope"></i><span>
                            superb@themesground.com</span>
                    </address>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search_mob" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                            </div>
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                                id="srch-term">
                        </div>
                    </form>
                </div>
            </li>
            <li>
                <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="grid.html">Grid</a> </li>
                    <li> <a href="list.html">List</a> </li>
                    <li> <a href="product_detail.html">Product Detail</a> </li>
                    <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                    <li><a href="checkout.html">Checkout</a>
                        <ul>
                            <li><a href="checkout_method.html">Checkout Method</a> </li>
                            <li><a href="checkout_billing_info.html">Checkout Billing Info</a> </li>
                        </ul>
                    </li>
                    <li> <a href="wishlist.html">Wishlist</a> </li>
                    <li> <a href="dashboard.html">Dashboard</a> </li>
                    <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
                    <li> <a href="about_us.html">About us</a> </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog-detail.html">Blog Detail</a> </li>
                        </ul>
                    </li>
                    <li><a href="contact_us.html">Contact us</a> </li>
                    <li><a href="404error.html">404 Error Page</a> </li>
                </ul>
            </li>
            <li><a href="#">Women</a>
                <ul>
                    <li> <a href="#" class="">Stylish Bag</a>
                        <ul>
                            <li> <a href="#" class="">Clutch Handbags</a> </li>
                            <li> <a href="#l" class="">Diaper Bags</a> </li>
                            <li> <a href="#" class="">Bags</a> </li>
                            <li> <a href="#" class="">Hobo handbags</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Material Bag</a>
                        <ul>
                            <li> <a href="#">Beaded Handbags</a> </li>
                            <li> <a href="#">Fabric Handbags</a> </li>
                            <li> <a href="#">Handbags</a> </li>
                            <li> <a href="#">Leather Handbags</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Shoes</a>
                        <ul>
                            <li> <a href="#">Flat Shoes</a> </li>
                            <li> <a href="#">Flat Sandals</a> </li>
                            <li> <a href="#">Boots</a> </li>
                            <li> <a href="#">Heels</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Jwellery</a>
                        <ul>
                            <li> <a href="#">Bracelets</a> </li>
                            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
                            <li> <a href="#l">Pendants</a> </li>
                            <li> <a href="#">Pins &amp; Brooches</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Dresses</a>
                        <ul>
                            <li> <a href="#">Casual Dresses</a> </li>
                            <li> <a href="#">Evening</a> </li>
                            <li> <a href="#">Designer</a> </li>
                            <li> <a href="#">Party</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Swimwear</a>
                        <ul>
                            <li> <a href="#">Swimsuits</a> </li>
                            <li> <a href="#">Beach Clothing</a> </li>
                            <li> <a href="#">Clothing</a> </li>
                            <li> <a href="#">Bikinis</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Men</a>
                <ul>
                    <li> <a href="#" class="">Shoes</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Dresses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Jackets</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Watches</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Sunglasses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Accesories</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
                            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Electronics</a>
                <ul>
                    <li> <a href="#"><span>Mobiles</span></a>
                        <ul>
                            <li> <a href="#"><span>Samsung</span></a> </li>
                            <li> <a href="#"><span>Nokia</span></a> </li>
                            <li> <a href="#"><span>IPhone</span></a> </li>
                            <li> <a href="#"><span>Sony</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class=""><span>Accesories</span></a>
                        <ul>
                            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
                            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
                            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
                            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"><span>Cameras</span></a>
                        <ul>
                            <li> <a href="#"><span>Camcorders</span></a> </li>
                            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
                            <li> <a href="#"><span>Digital SLR</span></a> </li>
                            <li> <a href="#"><span>Camera Accesories</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li> <a href="#"><span>MP3 Players</span></a> </li>
                            <li> <a href="#"><span>IPods</span></a> </li>
                            <li> <a href="#"><span>Speakers</span></a> </li>
                            <li> <a href="#"><span>Video Players</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"><span>Computer</span></a>
                        <ul>
                            <li> <a href="#"><span>External Hard Disk</span></a> </li>
                            <li> <a href="#"><span>Pendrives</span></a> </li>
                            <li> <a href="#"><span>Headphones</span></a> </li>
                            <li> <a href="#"><span>PC Components</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"><span>Appliances</span></a>
                        <ul>
                            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
                            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
                            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
                            <li> <a href="#"><span>Water Purifier</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Furniture</a> </li>
            <li><a href="#">Kids</a> </li>
            <li><a href="contact-us.html">Contact Us</a> </li>
        </ul>
        <div class="dropdown block-language-wrapper">
            <ul>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/english.png"
                            alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/francais.png"
                            alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/german.png"
                            alt="language"> German </a></li>
            </ul>
        </div>
        <div class="dropdown block-currency-wrapper">
            <ul>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
            </ul>
        </div>
    </div>
    <!-- End Footer -->

    <!-- JavaScript -->
    <?php wp_footer(); ?>
    <script type='text/javascript'>
        jQuery(document).ready(function () {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight: 800,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>