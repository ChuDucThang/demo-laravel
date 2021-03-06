<!--HEADER-->
<header id="top-head" class="uk-position-fixed">
    <div class="uk-container uk-container-expand uk-background-primary">
        <nav class="uk-navbar uk-light" data-uk-navbar="mode:click; duration: 250">
            <div class="uk-navbar-left">
                <div class="uk-navbar-item uk-hidden@m">
                    <a class="uk-logo" href="#"><img class="custom-logo" src="{{url('/')}}/img/logo.png" alt="Logo"></a>
                </div>
                <div class="uk-navbar-item uk-visible@s">
                    <form action="dashboard.html" class="uk-search uk-search-default">
                        <span data-uk-search-icon></span>
                        <input class="uk-search-input search-field" type="search" placeholder="Search">
                    </form>
                </div>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a href="#">Accounts</a></li>
                    <li>
                        <a href="#">Settings <span data-uk-icon="icon: triangle-down"></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-nav-header">YOUR ACCOUNT</li>
                                <li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
                                <li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
                                <li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#"><span data-uk-icon="icon: sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" data-uk-icon="icon:user" title="Your profile" data-uk-tooltip></a></li>
                    <li><a href="#" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a></li>
                    <li><a href="#" data-uk-icon="icon:  sign-out" title="Sign Out" data-uk-tooltip></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--/HEADER-->