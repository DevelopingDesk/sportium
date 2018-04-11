 <div class="navi  wow fadeInRight" data-wow-delay="1.5s">
       <nav role="navigation" class="navbar-default" style="background:none;">
                <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav usmenu" id="navigation">
                <li><a href="/" class="hvr-sweep-to-right wow fadeInDown"data-wow-delay="0.5s" >HOME</a></li>
                <li><a href="{{route('contact.us')}}" class="hvr-sweep-to-right  wow fadeInDown"data-wow-delay="0.6s">ABOUT US</a></li>
                 <li class="dropdown menu-large  wow slideInDown " data-wow-delay="1.2s">

                <a href="#" class="dropdown-toggle hvr-sweep-to-right" data-toggle="dropdown">PRODUCTS<b class="caret"></b></a>             

                <ul class="dropdown-menu megamenu row">

                    @foreach($cat as $cat)
                        <li class="col-sm-2">

                        <ul dropdown-header>

                            <li class="dropdown-header">{{$cat->name}}</li>

                           
@foreach($sub as $sb)
@if($cat->id==$sb->category_id)
                            
                                <li><a href="{{route('subcategory.product',$sb->id)}}">{{$sb->name}}</a></li>    

                             <li class="divider"></li>
@endif
                            
                        @endforeach

                        

                        </ul>

                      

                    </li>

                    
@endforeach
                     
                       

                    
                    

                     
                       
                    

                        

                    

                </ul>



            </li>             
         <li class="dropdown ">
                            <a href="#" class="hvr-sweep-to-right dropdown-toggle  wow fadeInDown"data-wow-delay="0.7s" data-toggle="dropdown">GALLERY</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery_1.html" class="hvr-sweep-to-right">Production Tour</a></li>
                             
                            </ul>
                        </li>
              
                <li><a href="{{route('contact.us')}}" class="hvr-sweep-to-right  wow fadeInDown"data-wow-delay="0.9s">CONTACTS</a></li>
                </ul>
                
                </div>
                </nav>
       </div>