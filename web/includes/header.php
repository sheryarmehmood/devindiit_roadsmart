<header class="ease">
    <div class="contain-fluid">
        <div class="logo">
            <a href="index.php">
                <img src="images/final_logo.png" alt="" class="hide_top">
                <img src="images/final_logo_1.png" alt="" class="hide_bottom">
            </a>
        </div>
        <div class="toggle">
            Menu
            <!-- <span></span> -->
        </div>
        <nav class="ease">
            <!-- <ul nav class="center_nav">
                <li class="<?php if ($page == "cars") {
                                echo 'active';
                            } ?>">
                    <a href="cars.php">Cars</a>
                </li>
                <li class="<?php if ($page == "parts") {
                                echo 'active';
                            } ?>">
                    <a href="parts.php">Parts</a>
                </li>
                <li class="<?php if ($page == "accessories") {
                                echo 'active';
                            } ?>">
                    <a href="accessories.php">Accessories</a>
                </li>
                <li class="<?php if ($page == "services") {
                                echo 'active';
                            } ?>">
                    <a href="services.php">Services</a>
                </li>
            </ul> -->
            <ul id="nav" nav>
                <li class="<?php if ($page == "shop") {
                                echo 'active';
                            } ?>">
                    <a href="shop.php">Shop</a>
                </li>
                
                <li class="<?php if ($page == "login") {
                                echo 'active';
                            } ?>">
                    <a href="login.php">Account</a>
                </li>
            </ul>
            
        </nav>
        
        <div class="clearfix"></div>
    </div>
    
</header>
<div class="side_nav">
    <div class="close_nav">
        <i class="fi-cross"></i>
    </div>
    <ul>
        <li><a href="become-a-partner.php">Become a partner</a></li>
        <li><a href="?">Contact us</a></li>
        <li><a href="?">FAQ</a></li>
        <li class="show_device"><a href="shop.php">Shop</a></li>
        <li class="show_device"><a href="login.php">Account</a></li>
    </ul>
</div>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>