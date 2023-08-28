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
