
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/style.css">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">


        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

         <!-- Include Boostrap Datepicker-->
         <link rel="stylesheet" href="//cdnjs.cloudfare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
         <link rel="stylesheet" href="//cdnjs.cloudfare.com/ajax/libs/bootstrap-datepicker3/1.3.0/css/datepicker.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-6"><img src="{{asset('images/rgob-logo.png')}}" alt="rgob.png" width="100" height="100"></div>
                     <div class="col-sm-6">
                        <h3 class="mt-3 text-primary">BEST_R SYSTEM</h3>
                        <h6 class="ml-4">Department of Trade</h6>
                    </div>
                </div>
            </div>
            <hr>

            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center">
                        <img src="{{asset('images/HoI-logo.png')}}" alt="HoI-logo" width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                            <div class="media-body">
                                <h5 class="m-0 text-info">Tshering</h5>
                                <p class="font-weight-normal text-muted mb-0">Admin</p>
                            </div>
                    </div>
                </div>
                    <p class="text-gray font-weight-bold text-uppercase px-4 small mb-0">Dashboard</p>
                        <ul class="nav flex-column bg-white mb-0">
                            <li class="nav-item">
                                <a href="admin-home" class="nav-link text-dark bg-light">
                                    <i class="fas fa-comment mr-3 text-primary fa-fw"></i>
                                    Inbox
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="license-holder" class="nav-link text-dark">
                                    <i class="fas fa-user mr-3 text-primary fa-fw"></i>
                                    License Holder
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="create-provider" class="nav-link text-dark">
                                    <i class="fa fa-user-plus mr-3 text-primary fa-fw"></i>
                                    Create Provider
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-dark">
                                    <i class="fa fa-arrow-up mr-3 text-primary fa-fw"></i>
                                    Infringement Provider
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="applicant" class="nav-link text-dark">
                                    <i class="fa fa-file mr-3 text-primary fa-fw"></i>
                                    Applicant
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add-LH" class="nav-link text-dark">
                                    <i class="fa fa-user-plus mr-3 text-primary fa-fw"></i>
                                    Add License Holder
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout" class="nav-link text-dark">
                                    <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
            </div>

                <div class="page-content p-5" id="content">
                    <!-- Togglebutton-->
                    <button id="sidebarCollapse" type="button" class="btn btn-light bg-gray rounded-pill shadow-sm px-4 mb-4">
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
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
                top : 1;
                left : 0;
                box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
                transition: all 0.4s;
            }

            .page-content
            {
                width: calc(97% - 17rem);
                margin-left: 17rem;
                transition: all 0.4s;
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

            .nav-link:hover
            {
                background: #f3f2f2;
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
