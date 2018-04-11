
 
<div class="header navbar navbar-inverse ">
  
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <!-- <span class='iconset top-menu-toggle-white'></span> -->
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="/"><img src="{{asset("assets/img/logo1.png")}}" class="logo" alt=""  data-src="{{asset("assets/img/logo1.png")}}" data-src-retina="{{asset("assets/img/logo1.png")}}" width="70" height="45" style="text-align: center; margin-top: 8px; "  /></a>
      <!-- END LOGO -->
      <ul class="nav pull-right notifcation-center">
       
        <li class="dropdown" id="portrait-chat-toggler" style="display:none">
          <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
            <div class="iconset top-settings"></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href=""><i class="fa fa-user"></i>&nbsp;&nbsp; My Profile</a> </li>
              
              <li class="divider"></li>
              <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
          </li>
      </ul>

    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <!-- <div class="iconset top-menu-toggle-dark"></div> -->
            <div class="iconset top-menu-toggle-white"></div>
            <!-- <i class="fa fa-bars" style="color: #fff;"></i> -->
            </a> </li>
        </ul>
        
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right">
        <div class="chat-toggler"> 
          <div class="user-details">
            <div class="username"> <span class="bold">{{auth::user()->name}}</span> </div>
          </div>
          <div class="iconset top-down"></div>
          
          <div class="profile-pic"> <img src="{{asset(Auth::User()->image ? "/".Auth::User()->image : 'assets/img/default.png')}}"  alt="" width="35" height="35" /> </div>
          
            </div>
        <ul class="nav quick-section ">
          <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
            <div class="iconset top-settings"></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href=""><i class="fa fa-user"></i>&nbsp;&nbsp; My Profile</a> </li>
              
              <li class="divider"></li>
              <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
            </ul>
          </li>
          
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
