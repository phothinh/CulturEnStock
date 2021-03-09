<!-- <nav class="navbar navbar-expand-sm bg-light navbar-light" style="box-shadow: 0px 3px 4px 0px lightgrey;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">CulturEnStock</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/') }}">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>

    <form id="logout-form" action ="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    </ul>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px 1px 4px 0px lightgrey;">
  <a class="navbar-brand" href="{{ url('/') }}">CulturEnStock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/profiles/owen') }}">Profile</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>

    <form id="logout-form" action ="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    </ul>
  </div>
</nav>
