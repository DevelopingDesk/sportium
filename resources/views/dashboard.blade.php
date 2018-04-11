<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/frontend/logo.png')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta content="We care for you. Become a member of ZARA LIFE CARE and use all our medical fecilities, laboratory services and always have all your medical records updated and at easy access. We will never disclose your records to any government or non-government organization." name="description">
        <meta name="keywords" content="ZARA,LIFE,CARE,HEALTH,ZARA LIFE,ZARA LIFE CARE,zara, zara life,zara life care,zaralife,zaralifecare,health,health records, medical, medical reports,laboratory, laboratory reports,save reports">
        <meta content="" name="author">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta property="og:image" content="{{ asset('assets/frontend/logo.jpg')}}"/>
        <!-- BEGIN PLUGIN CSS -->
        <link href="{{ asset('assets/plugins/bootstrap-select2/select2.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('assets/plugins/jquery-datatable/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PLUGIN CSS -->
        <!-- BEGIN CORE CSS FRAMEWORK -->
        <link href="{{ asset('assets/plugins/boostrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/boostrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css"/>
        <!-- END CORE CSS FRAMEWORK -->
        <!-- BEGIN CSS TEMPLATE -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom-icon-set.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END CSS TEMPLATE -->
        <script src="{{ asset('assets/js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>


<!-- jQuery library -->


<!-- Latest compiled JavaScript -->

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    
    </head>
    <body>
 @include('header')      
        <div class="page-container row-fluid">
            @include('sidebar')
            <a class="scrollup" href="#" style="display: inline;">Scroll</a>
            <div class="page-content">
                <div class="content">
                    <div id="ajax-msg-div" class="alert alert-success" style="display: none">
                        <button class="close" id="ajax-msg-close" data-dismiss="alert"><span class="fa fa-times"></span></button> 
                        <p id="ajax-msg"></p>
                    </div>
                    @yield('content')
                    
                </div>
            </div>

            <!-- Scripts -->

        </div>
        
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls hide">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <div id="progressbar" class="loading">
            <i class="fa fa-refresh fa-spin loadingimage"></i>
        </div>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
            });
        </script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/breakpoints.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
        <!-- END CORE JS FRAMEWORK -->

        <!-- BEGIN PAGE LEVEL JS -->
        <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>    
        <script src="{{ asset('assets/plugins/jquery-block-ui/jqueryblockui.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select2/select2.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/js/jquery.dataTables.min_1.js')}}" type="text/javascript" ></script>
<!--        <script src="{{ asset('assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js')}}" type="text/javascript" ></script>-->
        <script type="text/javascript" src="{{ asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/js/datatables.js')}}" type="text/javascript"></script>
        <!-- BEGIN CORE TEMPLATE JS -->
        <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/boostrap-clockpicker/bootstrap-clockpicker.min.js')}}" type="text/javascript"></script>

        <script src="{{ asset('assets/js/core.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
