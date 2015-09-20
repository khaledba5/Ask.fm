<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "test" }}</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{ HTML::link("/","Ask.Fm",array("class"=> "navbar-brand")) }}
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
               {{ HTML::link("/","Home") }}
            </li>
            <li>
               {{ HTML::link("/register","Register") }}
            </li>
            <li>
               {{ HTML::link("/login","Login") }}
            </li>
            <li>
              <form role="search" class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

    @if(Session::has('message'))
        <p id="message"></p>
      <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissable">
              {{ Session::get('message') }}
              </div>
          </div>
        </div>
      </div>
@endif

      @yield('content')



    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>© Our Team</p>
          </div>
        </div>
      </div>
    </footer>



    <script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>