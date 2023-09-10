<div class="bg-light p-5 rounded">
    @auth
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
            <!--== META TAGS ==-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <!--== FAV ICON ==-->
            <link rel="shortcut icon" href="images/fav.ico">

            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

            <!-- FONT-AWESOME ICON CSS -->
            <link rel="stylesheet" href="css/font-awesome.min.css">

            <!--== ALL CSS FILES ==-->
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/mob.css') }}">
            <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />

        </head>

        <body>
            <!--== MAIN CONTRAINER ==-->
            <div class="container-fluid sb1">
                <div class="row">
                    <!--== LOGO ==-->
                    <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">

                        <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>

                        </a>
                    </div>

                    <!--== MY ACCCOUNT ==-->
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <!-- Dropdown Trigger -->
                        <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                                src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down"
                                aria-hidden="true"></i>
                        </a>

                        <!-- Dropdown Structure -->
                        <ul id='top-menu' class='dropdown-content top-menu-sty'>
                            <li>
                                @auth
                                    {{ auth()->user()->name }}
                                    <div class="text-end">
                                        <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                                    </div>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--== BODY CONTNAINER ==-->
            <div class="container-fluid sb2">
                <div class="row">
                    <div class="sb2-1">
                        <!--== USER INFO ==-->
                        <div class="sb2-12">
                            <ul>
                                <li><img src="images/placeholder.jpg" alt="">
                                </li>
                                <li>
                                    <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                        <!--== LEFT MENU ==-->
                        <div class="sb2-13">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="index.html" class="menu-active"><i class="fa fa-bar-chart"
                                            aria-hidden="true"></i>
                                        Dashboard</a>
                                </li>
                                <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul"
                                            aria-hidden="true"></i> Tours</a>
                                    <div class="collapsible-body left-sub-menu">
                                        <ul>
                                            <li><a href="{{ route('createnewtour') }}">Add New Tour</a>
                                            </li>
                                            <li><a href="listing-all.html">All listing</a>
                                            </li>
                                            <li><a href="listing-cat-all.html">All listing Categories</a>
                                            </li>
                                            <li><a href="listing-cat-add.html">Add listing Categories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!--== BODY INNER CONTAINER ==-->
                    <div class="sb2-2">
                        <!--== breadcrumbs ==-->
                        <div class="sb2-2-2">
                            <ul>
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                                </li>
                                <li class="active-bre"><a href="#"> Dashboard</a>
                                </li>

                            </ul>
                        </div>


                    </div>

                </div>
            </div>

            <!--== BOTTOM FLOAT ICON ==-->


            <!--======== SCRIPT FILES =========-->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/materialize.min.js"></script>
            <script src="js/custom.js"></script>
        </body>

        </html>
    @endauth

    @guest
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <!--== META TAGS ==-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <!--== FAV ICON ==-->
            <link rel="shortcut icon" href="images/fav.ico">

            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

            <!-- FONT-AWESOME ICON CSS -->
            <link rel="stylesheet" href="css/font-awesome.min.css">

            <!--== ALL CSS FILES ==-->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/mob.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/materialize.css" />


        </head>

        <body>
            <div class="blog-login">
                <div class="blog-login-in">
                    <form method="post" action="{{ route('login.perform') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}

                        <h1 class="h3 mb-3 fw-normal" style="margin-top: 50px">Login</h1>

                        @include('layouts.partials.messages')

                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Email or Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required="required">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                        @include('auth.partials.copy')
                    </form>
                </div>
            </div>

            <!--======== SCRIPT FILES =========-->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/materialize.min.js"></script>
            <script src="js/custom.js"></script>
        </body>

        </html>
    @endguest
</div>
