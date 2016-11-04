
    <header>
      <div class="navbar-fixed">
        <nav class="navbar">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo white-text text-darken-4">Dashbaord</a>
            <ul id="nav-mobile" class="right">
              <li class="hide-on-med-and-down"><a href="">Cart!</a></li>
              <li class=""><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect">
              <?php echo $_SESSION['email']; ?>
              </a></li>
              <li><a class=' dropdown-trigger waves-effect' href='#' data-target='dropdown1'><i class="material-icons">settings</i></a></li>
            </ul>
            <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      
        <ul id="dropdown1" class=" dropdown-content">
          <li class=""><a href="#">Account</a></li>
          <li class=""><a href="#">Log out</a></li>
        </ul>
      
    </header>
    <ul id="sidenav-left" class="sidenav sidenav-fixed teal">
      <div class="container white-text">
        <h4>Fashion Pik</h4>
      </div>
      <li><a href="#" class=" waves-effect white-text">Dashboard<i class="material-icons left">spa</i></a></li>
      <li class="no-padding">
        <ul>
          <li><a class=" waves-effect white-text" href="#">Search<i class="material-icons left">spa</i></a>
            
          </li>
          <li><a class=" waves-effect white-text dropdown-trigger select-dropdown" href="#">Transtions<i class="material-icons left">spa</i></a></li>
          <li><a class=" waves-effect white-text dropdown-trigger select-dropdown" href="#"  data-target='dropdown2'>Shopping<i class="material-icons left">spa</i></a>
            <ul id='dropdown2' class='dropdown-content'>
            <li><a class=" waves-effect white-text" href="#">Man Shop<i class="material-icons left">spa</i></a></li>
            </ul>
          </li>
          <li><a class=" waves-effect white-text" href="#">Account<i class="material-icons left">spa</i></a></li>
        </ul>
      </li>
    </ul>