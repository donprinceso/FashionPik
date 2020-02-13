<nav class=" nav-wrapper  fixed">
    <a href="#" class=" teal-text brand-logo">Fashion<span class=" white-text">Pik</span></a>
    <ul id="mobile-nav" class=" hide-on-med-and-down right">
        <li><a href="<?php echo SITE_URL."/Dashboard/account" ?>">Welcome
        <?php if(!$_SESSION['email']){
            Redirect::to('users/login');
        }else{
            echo ucfirst($_SESSION['email']);
        } ?>
        </a></li>
        <li><a href="<?php echo SITE_URL."/Users/logout" ?>">Log out</a></li>
    </ul>
    <a href="#!" data-target="dropdown2" class=" dropdown-trigger sidenav-trigger right"><i class=" material-icons">menu</i></a>
    <a href="#!" data-target="sidenav-left" class=" sidenav-trigger left"><i class=" material-icons">menu</i></a>
    
</nav>
<ul class=" dropdown-content" id="dropdown2">
            <li><a href="">Account</a></li>
            <li><a href="">Log out</a></li>
</ul>