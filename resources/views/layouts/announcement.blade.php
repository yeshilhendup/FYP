
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BEST_R System</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

    </head>
    <body>
        <h2 class="text-primary text-center">BEST_R SYSTEM</h2>
  <br><br>
  <nav class="navbar navbar-expand-md navbar-dark py-0 fixed-top" style="background-color:#40739e;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="{{ url('/aboutus') }}">Aboutus</a>
        </li>

        <li class="nav-item">
          <a class="nav-link mx-3" href="{{ url ('/contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="{{ url ('/download') }}">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="{{url('/vacancy-announcement')}}">Announcement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/application')}}">License Application</a>
        </li>
        </ul>
        <ul class="navbar list-unstyled">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('/admin-login')}}">ADMIN</a>
          </li>
        </ul>
    </div>
  </nav> <br><br>
        <div class="container">
            <div class="vertical-nav bg-white" id="sidebar">
                <ul class="nav flex-column mb-0">
                    <li class="nav-item">
                        <a href="vacancy-announcement"  class="nav-link text-dark mr-3 pt-5">
                             VACANCY ANNOUNCEMENT
                        </a>
                    </li><br>

                    <li class="nav-item">
                        <a href="tender-announcement" class="nav-link text-dark mr-3">
                                TENDER ANNOUNCEMENT
                        </a>
                    </li> <br>

                    <li class="nav-item">
                        <a href="training-announcement" class="nav-link text-dark mr-3">
                                TRAINING ANNOUNCEMENT
                        </a>
                    </li> <br>
                    <li class="nav-item">
                        <a href="general-announcement" class="nav-link text-dark mr-3">
                                GENERAL ANNOUNCEMENT
                        </a>
                    </li><br>
                </ul>
    </div>

        <div class="page-content p-5" id="content">
            <!-- Togglebutton-->
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
                <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
            </button>
            <script>
                $(function()
                {
                    $('#sidebarCollapse').on('click',function()
                    {
                        $('#sidebar,#content').toggleClass('active');
                    });
                });
            </script>
            @yield('content')
        </div> <br><br>

        <!-- Footer -->
        <footer class="page-footer font-small blue fixed-bottom">

            <!-- Copyright -->
              <div class="footer-copyright text-center py-3 border text-white" style="background-color: #40739e">
                Copyright &copy; 2021, Department of Trade
              </div>
            <!-- Copyright -->
          </footer>
          <!-- Footer -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            body
            {
                min-height: 100vh;
                overflow-x: hidden;
            }
            .vertical-nav
            {
                min-width: 17rem;
                width: 17rem;
                height: 100vh;
                position: fixed;
                top: 1;
                left : 0;
                box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
                transition: all 0.4s;
            }

            .page-content
            {
                width: calc(97% - 17rem);
                margin-left: 17rem;
                transition: all 0.4s;
                background: #aaa;
            }

            #sidebar.active
            {
                margin-left: -17rem;
            }

            #content.active
            {
                width: 100%;
                margin: 0;
            }

            .text-uppercase
            {
                letter-spacing: 0.1em;
            }
            .text-gray
            {
                color: #aaa;
            }
            .nav-link
            {
                text-transform: capitalize;
            }

            .text-primary
            {
                color:#7579e7;
            }
            @media (max-width : 768px)
            {
                #sidebar
                {
                    margin-left: -17rem;
                }
                #sidebar.active
                {
                    margin-left: 0;
                }
                #content
                {
                    width: 100%;
                    margin: 0;
                }
                #content.active
                {
                    margin-left: 17rem;
                    width :calc(100% - 17rem);
                }
            }
        </style>
    </body>
    </html>
