<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E-Com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class=""><a href="">Orders</a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('student'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('student')['name']}}
        <span class="caret"></span>
          <li><a href="/logout" class="btn btn-primary" style="color:white;margin-right:10px;">Logout</a></li>
          <li><a href="/changepassword" class="btn btn-info text-white" style="color:white;" >Change Password</a></li></a>
      @else
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>