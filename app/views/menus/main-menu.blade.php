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
      <!--form class="navbar-form navbar-left" role="search"-->
        <div class="form-group navbar-form navbar-left">
          <input type="text" id="main-search" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </div>
        <!--button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button-->
      <!--/form-->
      <button type="button" class="btn btn-default navbar-btn">Upload</button>
                  
      
        @if(isset($user))
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
          <button type="button" class="btn btn-default navbar-btn navbar-right" data-toggle="modal" data-target="#modalForm">Log In</button>

          <!-- Modal -->
          <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Log In</h4>
                </div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label for="username-mod-connexion" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username-mod-connexion" placeholder="Enter Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password-mod-connexion" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password-mod-connexion" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                      </div>
                    </div>
                  </form>

                </div>
                <!--div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div-->
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        @endif
        
        
    </div><!-- /.navbar-collapse -->
  </div>
</nav>