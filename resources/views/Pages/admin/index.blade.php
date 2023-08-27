@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection


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

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mob.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
</head>

<body>


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
                        <li><a href="index.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul"
                                    aria-hidden="true"></i> Listing</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="listing-all.html">All listing</a>
                                    </li>
                                    <li><a href="listing-add.html">Add New listing</a>
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
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i>
                                Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
                    <div class="ad-v2-hom-info-inn">
                        <ul>
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Today Views</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-2">
                                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Earnings</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-3">
                                    <span class="ad-hom-col-com ad-hom-col-3"><i
                                            class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Users</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-4">
                                    <span class="ad-hom-col-com ad-hom-col-4"><i
                                            class="fa fa-envelope-open-o"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Enquiry</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
