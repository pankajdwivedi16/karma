<header class="fixed-top scroll-change" data-menu-anima="fade-in">
  <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
    <div class="navbar-mini scroll-hide">
      <div class="container">
        <div class="nav navbar-nav navbar-left pb10 pull-right text-right"> <span><a href="{!! url('logout') !!}" class="text-danger"><i class="fa fa-sign-out"></i> Sign Out</a></span> </div>
      </div>
    </div>
    <div class="navbar navbar-main">
      <div class="container">
        <div class="navbar-header admin_header">
          <div class="row">
            <div class="col-xs-6"><a class="navbar-brand" href="{{ url('dashboard') }}"> <img class="logo-default" src="{!! asset('assets/images/logo.png') !!}" alt="Kanoonvala" title="Kanoonvala" /></a> </div>
            <div class="col-xs-6 text-right">
              <div class="admin_user"><span>Welcome {{ ucwords(auth()->user()->name) }}</span> <img src="{!! asset('assets/images/client1.jpg') !!}"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
