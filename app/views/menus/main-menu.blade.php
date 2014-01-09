<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ HTML::image('Ressources/Images/Logo/Logo.Protubes.png','...', array('class'=>'')) }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" id="main-search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <button type="button" class="btn btn-default navbar-btn">Upload</button>
                  
      
        @if(!isset($user))
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" id="link-control-nav-top" class="dropdown-toggle" data-toggle="dropdown">
                {{ HTML::image('Ressources/Images/Profil_default.jpg','...', array('class'=>'img-thumbnail img-min-btn')) }} Identifiant <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Alerte</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Gestionnaire</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Reglages</a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-off"></span> Deconnexion</a></li>
              </ul>
            </li>
          </ul>
        @else
          <button type="button" class="btn btn-default navbar-btn navbar-right">Log In</button>
        @endif
        
        
    </div><!-- /.navbar-collapse -->
  </div>
</nav>