    <div class="page-sidebar" id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <div class="user-info-wrapper">
                <div class="profile-wrapper"> 
              <div class="profile-pic" id="profile-pic" > <img id="dp" src="{{asset(Auth::User()->image ? "/".Auth::User()->image : 'assets/img/default.png')}}"  alt="" width="69" height="69" /> </div>
                    
                </div>
                <div class="user-info">
                    <div class="greeting"></div>
                    <div class="username"><span class="semi-bold">{{Auth::User()->name}}</span></div>

                </div>
            </div>
            <!-- END MINI-PROFILE -->
            <!-- BEGIN SIDEBAR MENU -->
            <p class="menu-title"></p><br>
            <!-- This is special extention of blade template comment tag. Here it is closed at start and started again after code so it does not confuse blade. -->
           
            <ul>
                <li class=" "> <a href="/home"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> </a>         </li>
            

        

                
                
               
                
               

              
                  
                
               
                 <li class=""> <a href="{{route('get.category')}}"> <i class="fa fa-file-text"></i> <span class="title">Add Category</span></span></a>
                   
                </li>
                <li class=""> <a href="{{route('get.allproducts')}}"> <i class="fa fa-file-text"></i> <span class="title">View Products</span></span></a>
                   
                </li>
                 <li class=""> <a href="{{route('orderlist')}}"> <i class="fa fa-file-text"></i> <span class="title">View Orders</span></span></a>
                   
                </li>

             


            </ul>

            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>

    </div>