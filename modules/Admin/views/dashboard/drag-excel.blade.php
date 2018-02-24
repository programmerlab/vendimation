<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Vendimation Dashboard </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Vendimation" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/vendimation-style-270118.css')}}" rel="stylesheet"> 
        <link href="{{ URL::asset('assets/css/jquery.dm-uploader.min.css')}}" rel="stylesheet">
        <style>
            .master-excel-file .master-text{overflow-style: marquee-block;}
            .master-excel-file .file-error{color:#812323}
        </style>
    </head>
    <body>
        @include('packages::partials.navigation')
        <!-- Left side column. contains the logo and sidebar -->
        <div class="main-section">
            <div class="container-fluid">
                <div class="row">
                    <!--main menu start-->
                    @include('packages::partials.sidebar')
                    <div class="col-sm-10 main-left-content profile-page">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="profile-left-main">
                                </div>
                            </div>
                            <div class="col-sm-5 profile-right-col">
                                <div class="profile-right-main">
                                    <div class="profile-info">
                                        <div class="profile-picture">
                                            @if(file_exists($user->profile_image))
                                            <img src="{{ url($user->profile_image)}}" width="120px">
                                            @else
                                            <img src="{{ asset('assets/img/user1.png')}}" width="120px">
                                            @endif

                                        </div>
                                        <div class="profile-view-desc">
                                            <h3 class="cart-user-name">{{  $user->name or $user->first_name.' '.$user->last_name}}</h3>
                                            <p class="cart-partner">{{$user->designation}}</p>
                                            <p class="cart-location"><img src="{{asset('assets/img/cart-location.jpg')}}"> 
                                                {{$user->address}}
                                            </p>
                                            <p style="text-align: center;padding: 10px">
                                                we can collect contatcs from your social media accounts please click on the icons to sync your contacts
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pro-social">
                                        <ul class="pro-social-icon">
                                            <li><a href="#" class="gplus"><img src="{{ asset('assets/img/gplus.png')}}"></a></li>
                                            <li><a href="#" class="fb"><img src="{{ asset('assets/img/fb.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="personal-box work-detail product-view wallet add-new-card add-excel-parameter">
                                        <div class="add-btn-card drag-excel-btn">
                                            <div id="drag-and-drop-zone" class="dm-uploader p-5"   >
                                                <div id="fileDropBox" style="float: left; margin-left: 100px" ><img src="{{asset('assets/img/excel.jpg')}}" width="23px;"  >  </div>

                                                <div class="btn btn-primary btn-block mb-5 drag-drop">
                                                    <span> Click here Any excel file here </span>
                                                    <input type="file" name="excel_file" id="excel_file" title='Click to add Files' />
                                                </div>
                                            </div><!-- /uploader -->
                                        </div>  
                                    </div>
                                    <div id="uploaded_xls"></div> 


                                    <div class="master-excel-file uploader-progress" style="position:relative;">
                                        <p><span class="upload-text">Uploading… contact file.xls</span><span class="min-ago"><span class="excel-dot"><a href="#"><i class="fa fa-window-close"></i></a></span></span>

                                        </p>
                                        <div class="row">
                                            <div class="progress-wrap progress" data-progress-percent="25"><div class="progress-bar progress" style="left: 103.5px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear clearfix"></div>
                                    <div class="team-contact-excel" style="display: none; ">
                                        <h4>You need 95 more contacts to continue</h4>
                                        <div class="personal-box work-detail">
                                            <div class="contact-list">

                                                <div class="user-list-contact">
                                                    <div class="user-pic-cont">
                                                        <img src="{{asset('assets/img/team-pic.png')}}" height="44px;">
                                                    </div>
                                                    <div class="user-desc-cont">
                                                        <h5>Grag Dlubacz</h5>
                                                        <p><span>Shell</span> <span>#oil&amp;gas</span></p>
                                                        <span class="plus-circle"><a href="#"><img src="{{asset('assets/img/plus-icon.jpg')}}"></a></span>
                                                    </div>
                                                </div>
                                                <div class="user-list-contact">
                                                    <div class="user-pic-cont">
                                                        <img src="{{asset('assets/img/team-pic.png')}}" height="44px;">
                                                    </div>
                                                    <div class="user-desc-cont">
                                                        <h5>Grag Dlubacz</h5>
                                                        <p><span>Shell</span> <span>#oil&amp;gas</span></p>
                                                        <span class="plus-circle"><a href="#"><img src="{{asset('assets/img/plus-icon.jpg')}}"></a></span>
                                                    </div>
                                                </div>
                                                <div class="user-list-contact">
                                                    <div class="user-pic-cont">
                                                        <img src="{{asset('assets/img/team-pic.png')}}" height="44px;">
                                                    </div>
                                                    <div class="user-desc-cont">
                                                        <h5>Grag Dlubacz</h5>
                                                        <p><span>Shell</span> <span>#oil&amp;gas</span></p>
                                                        <span class="plus-circle"><a href="#"><img src="{{asset('assets/img/plus-icon.jpg')}}"></a></span>
                                                    </div>
                                                </div>
                                                <div class="user-list-contact">
                                                    <div class="user-pic-cont">
                                                        <img src="{{asset('assets/img/team-pic.png')}}" height="44px;">
                                                    </div>
                                                    <div class="user-desc-cont">
                                                        <h5>Grag Dlubacz</h5>
                                                        <p><span>Shell</span> <span>#oil&amp;gas</span></p>
                                                        <span class="plus-circle"><a href="#"><img src="{{asset('assets/img/plus-icon.jpg')}}"></a></span>
                                                    </div>
                                                </div>
                                                <div class="contact-search">
                                                    <span><a href="#"><img src="{{asset('assets/img/add-circle.jpg')}}"></a> <input type="text" placeholder="Add in your contact"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="excel-product" style="margin-top: 20px;"> 

                                        <h4>If you dont have enough contacts you can select one of our contact starter packs.</h4>
                                        <div class="personal-box work-detail product-view">
                                            @if(count($buy_contacts))
                                            @foreach($buy_contacts as $result)
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h5>{{$result->funnel_name}}</h5>
                                                    <ul>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}"> {{ $result->total_contact }} Contacts</li>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}">{{ $result->total_company }} Companies</li>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}">{{ $result->owner }}</li>

                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="{{asset('assets/img/product1.jpg')}}">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <p class="price-pro">£{{ $result->price }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h5>Restaurants Asian Food</h5>
                                                    <ul>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}"> 100 Contacts</li>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}"> 80 Companies</li>
                                                        <li><img src="{{asset('assets/img/contacts-book.png')}}"> Owner</li>

                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="{{asset('assets/img/product1.jpg')}}">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <p class="price-pro">£159</p>
                                                </div>
                                            </div>

                                            @endif

                                        </div>
                                    </div>

                                    <div class="drag-sample">

                                        <div class="excel-next text-center">
                                            <a href="{{url('admin/add-excel')}}"> <input type="button" value="NEXT"  class="btn-login">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                                        <!--main menu end-->
                </div>
            </div>
        </div> 


<script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/jquery.dm-uploader.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/demo-ui.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/demo-config.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/bootbox.js') }}" type="text/javascript"></script>
<script type="text/javascript">
            var fname;
            var imgIcon = "{{asset('assets/img/excel.jpg')}}";

            $('input[type="file"]').dmUploader({
            url: '{{url("admin/upload_file")}}',
            method: "POST",
            //allowedTypes: "application/*",
            onInit: function () {
            console.log('Callback: Plugin initialized');
            $('.uploader-progress').hide();
            },

            onUploadSuccess: function (id, response) {
            console.log(response);
            if (response.status == 1) {
                var html = '<div class="master-excel-file">'
                        + '<input type="hidden" class="master-file_name" name="upload_file_path[]" value="' + response.data.path + '"/>'
                        + '<p><img src="' + imgIcon + '" height="16.5px;">'
                        + '<span class="master-text">' + fname + '</span>'
                        + '<span class="view-detail"><a href="' + response.data.full_url + '" target="_blank">VIEW DETAILS</a></span>'
                        + '<span class="min-ago">0 min ago<span class="excel-dot">'
                        + '<a href="#">•••</a></span></span></p></div>';
                $('#uploaded_xls').html(html);
            } else {
                var html = '<div class="master-excel-file error-danger">'
                        + '<p><img src="' + imgIcon + '" height="16.5px;">'
                        + '<span class="master-text">' + fname + '</span>'
                        + '<span class="view-detail"><a href="#" target="_blank">VIEW DETAILS</a></span>'
                        + '<span class="min-ago">0 min ago<span class="excel-dot">'
                        + '<a href="#">•••</a></span></span></p>'
                        + '<div class="file-error">' + response.message + '</div>'
                        + '</div>';
                $('#uploaded_xls').html(html);
            }
            },
            onUploadComplete: function (id) {

            },
            onUploadError: function (id, xhr, status, errorThrown) {
            console.log(errorThrown, status);
            },
            onBeforeUpload: function (id) {
            console.log('onBeforeUpload');
            },
            onNewFile: function (id, file) {
            fname = trimFileName(file.name,20);
            $('.uploader-progress').show();
            $('.upload-text').html('Uploading…' + fname);
            },
            onUploadProgress: function (id, percent) {
            $('.progress-bar').css('left', percent + '%');
            console.log('percent=' + percent);

            var img = "{{asset('assets/img/excel.jpg')}}";

            if (percent == "100") {
                var html = '<div class="master-excel-file">'
                        + '<p><img src="' + img + '" height="16.5px;">'
                        + '<span class="master-text">' + fname + '</span>'
                        + '<span class="view-detail"><a href="#" target="_blank">VIEW DETAILS</a></span>'
                        + '<span class="min-ago">0 min ago<span class="excel-dot">'
                        + '<a href="#">•••</a></span></span></p></div>';
                $('#uploaded_xls').html(html);
                $('.uploader-progress').hide();
            }
            },

            // ... More callbacks
            });
            function trimFileName(string ,length){
            return string.length > length ? string.substring(0, length - 3) + "..." : string;
            }
</script>

</body>
</html>
