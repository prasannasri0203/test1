@extends('front.app')

@section('title', '')

@section('header_script')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">
        var win_width = $(window).width();

        $(document).on('ready', function() {

            if ($(window).width() < 991) {
                $('.slider').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1
                });


            } else {
                if ($('.slider').hasClass('slick-initialized')) {
                    $('.slider').slick('unslick');
                }
            }

        });

        $(window).resize(function() {
            if ($(window).width() < 991) {

                $('.slider').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1
                });


            } else {
                if ($('.slider').hasClass('slick-initialized')) {
                    $('.slider').slick('unslick');
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // $(".toggle-password").click(function() {

            //     $(this).toggleClass("fa-eye fa-eye-slash");
            //     var input = $($(this).attr("toggle"));
            //     if (input.attr("type") == "password") {
            //         input.attr("type", "text");
            //     } else {
            //         input.attr("type", "password");
            //     }
            // });
            // $(".fa-info-circle").mouseover(function() {
            //     $(".tooltip_content").show();
            // });

            // $(".fa-info-circle").mouseout(function() {
            //     $(".tooltip_content").hide();
            // });

        });
    </script>
    <script>
        /*search tab*/
        $(document).ready(function() {
            $('.desktop_group').click(function() {
                // $(".desktop_search_tab").slideToggle();
                $(".mob_search_tab").hide();
            });
            // $('.sub_search').click(function() {
            //     $(".desktop_search_tab").slideToggle();
            //     $(".mob_search_tab").hide();
            // });
            $('.mobile_group').click(function() {
                $(".mob_search_tab").slideToggle();
                $(".search_tab").hide();
            });


            $('.ipad_new_search .ipad_search').click(function() {
                $(".search_group input.form-control").show();
                if ($(".ipad_abs").length) {
                    $('.ipad_new_search').removeClass('ipad_abs');
                    //alert('bye' + $(".ipad_abs").length);
                    $(".search_group input.form-control").hide();

                } else {
                    $('.ipad_new_search').addClass('ipad_abs');
                    // alert('hi' + $(".ipad_abs").length);
                    $(".search_group input.form-control").show();


                }




            });



        });
        /*search tab*/
    </script>
    <style type="text/css">
        .form-group.t_tip i {
            right: -20px;
        }
        
        body .form-group .tooltip_content {
            right: -5% !important;
            left: unset;
            top: -140%;
            z-index: 9999;
        }
        
        <!-- .custom_container .form-group {
            display: inline-block;
            width: 84%;
        }
        
        .edit_pf ul.nav.nav-tabs li a {
            font-size: 28px;
        }
        
        .edit_pf .nav>li>a {
            padding: 10px 34px 10px 32px;
        }
        
        .custom_container {
            width: 78%;
        }
        
        .custom_container .form-group input {
            font-size: 16px;
        }
        
        .check_box_ct .checkbox p {
            font-size: 14px !important;
            color: #666666;
        }
        
        .advertise_btn a {
            font-family: "Rubik-light";
            font-size: 15px;
        }
        
        .edit_pf h5.header_prof {
            margin-top: 20px;
            /* margin-: 20px; */
            float: left;
            font-size: 28px;
        }
        
        h6.sub_txt {
            font-size: 16px;
        }
        
        .custom_container .form-group input {
            width: 100%;
        }
        
        .check_box_ct .checkbox label {
            width: auto;
        }
        
        .custom_container .form-end-part input {
            width: auto;
        }
        
        .form-end-part .checkbox {
            margin-bottom: 5px;
        }
        
        .custom_container label {
            text-align: right;
            width: 100%;
        }
        
        .edit_pf h5.header_prof {
            padding-left: 30px;
        }
        
        @media only screen and (max-width:768px) {
            .edit_pf .nav>li>a {
                padding: 10px 1% 10px 6%;
            }
            .edit_pf li:first-child {
                width: 60%;
            }
            .edit_pf li:last-child {
                width: 39%;
            }
            .edit_pf ul.nav.nav-tabs li a {
                font-size: 22px;
            }
            .custom_container label {
                text-align: left;
            }
            .form-group.t_tip i {
                right: -20px;
                top: 7px;
            }
            .custom_container {
                width: 100%;
            }
            .custom_container .col-lg-3 {
                padding-left: 0!important;
            }
            .advertise_btn {
                top: 0 !important;
                width: 100%!important;
                position: relative !important;
                left: 0px;
                display: inline-block;
                margin-top: 30px!important;
            }
            .form-hide-part {
                display: none;
            }
            .custom_container {
                margin: 0px auto;
                max-width: 90%;
            }
            .custom_container .form-group {
                width: 98%;
            }
            .edit_pf {
                margin-top: 10px;
            }
            .edit_pf ul.nav.nav-tabs li a {
                text-align: center;
            }
        }

        section#checkout_completed_log .log-out .btn_cards button {
            font-family: "Rubik-Light";
        }
        .d-f.guestform .check_box_ct .btn_cards button {
            padding: 12px 22px !important;
        }
        .btn_cards button:hover {
            background: 
        #00aff0 !important;
        -webkit-transition: 1s ease-in;
        -o-transition: 1s ease-in;
        transition: 1s ease-in;
        -webkit-transition: 1s ease-out;
        -o-transition: 1s ease-out;
        transition: 1s ease-out;
        color:
            #fff;
        }
        .btn_cards button {
            background: #ed1277 none repeat scroll 0 0;
            border-radius: 50px;
            color: #fff;
            float: none;
            font-family: "Rubik-Bold";
            font-size: 16px;
            margin: 0 auto;
            padding: 10px 26px;
            text-decoration: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        .form-group.frm_relate span {
            color: #a94442 !important;
        }
        .ck-editor__editable {
            min-height: 180px;
        }
        input[type="date"].form-control {
            line-height: 20px;
        }

.custom_container .radioclass input {
  width: auto !important;
}
.radioclass input:last-child {
  margin-left: 20px !important;
}
.radioclass input {
  margin-right: 5px;
  vertical-align: initial !important;
}
.primary_radio_text{
    font-size:16px;
}
.primary_radio_button{
    position: inherit !important;
}
.man_star{
    color: red;
}
    </style>
    <!-- Header Script End -->
@endsection

@section('body_class', '')

@section('main_div_class', 'homepg_Cont home-banner home-tablet')

@section('content')

@php
$activeSidebar = 'address-book';
@endphp
        <!--Page Content Start-->

    <!--dashboard artist-->
    <section class="sec-overback">
        <div class="dashboard-sec slidpad">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12  nopad-left-mob">

                        @include('front.user-sidebar')

                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 edit_mb_space">
                        <div class="edit_pf">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Profile">{{ __('address_book.Add Address') }}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="Profile" class="tab-pane fade in active">
                                    <form method="post" class="form-validate" action="{{ url('address_book/store') }}">
                                    @csrf
                                    <div class="header_cont align-top-cont">
                                        <div class="custom_container">
                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>Delivery Name:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group t_tip @error('no') has-error @enderror">
                                                    <input type="text" name="delivery_name" class="form-control" id="" value="{{ old('delivery_name') }}">
                                                    
                                                    @error('no')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>Door No:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group t_tip @error('no') has-error @enderror">
                                                    <input type="text" name="no" class="form-control" id="" value="{{ old('no') }}">
                                                    
                                                    @error('no')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>Surname:</label>
                                            </div> -->
                                            <!-- <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group t_tip @error('sname') has-error @enderror">
                                                    <input type="text" name="sname" class="form-control" id="" value="{{ old('sname') }}">
                                                    
                                                    @error('sname')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> -->
                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Address') }} 1:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('address1') has-error @enderror">
                                                    <input type="text" name="address1" class="form-control" id="" value="{{ old('address1') }}">
                                                    @error('address1')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                             <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Address') }} 2:</label>
                                            </div>  
                                              <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('address2') has-error @enderror">
                                                    <input type="text" name="address2" class="form-control" id="" value="{{ old('address2') }}">
                                                    @error('address2')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>  

                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Telephone') }}:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('phone') has-error @enderror">
                                                    <input type="text" name="phone" class="form-control" id="" value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Town') }}/{{ __('address_book.City') }}:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('city_name') has-error @enderror">
                                                    <input type="text" name="city_name" class="form-control" id="" value="{{ old('city_name') }}">
                                                    @error('city_name')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Postcode') }}:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('pscode') has-error @enderror">
                                                    <input type="text" name="pscode" class="form-control" id="" value="{{ old('pscode') }}">
                                                    @error('pscode')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt">
                                                <label>{{ __('address_book.Primary') }}:</label>
                                            </div>
                                            <div class="col-md-9 col-sm-12 no-padding">

                                                <div class="form-group primary_radio_text radioclass @error('primary') has-error @enderror">
                                                    <input type="radio" name="primary" class="primary_radio_button" id="" value="1" {{ (old('primary') == '1') ? 'checked' : ''}} > Default Delivery Address
                                                    <!-- <input type="radio" name="primary" class="primary_radio_button" id="" value="0" {{ (old('primary') == '0') ? 'checked' : ''}} >{{ __('address_book.others') }} -->

                                                    @error('primary')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-12 no-padding label_tt" >
                                                <label>{{ __('address_book.Country') }}:<span class="man_star">*</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding">

                                                <div class="form-group @error('country') has-error @enderror">
                                                        <!-- <input type="text" name="country" class="form-control" id="" value="{{ old('country') }}"> -->
                                                    <div>
                                                        <select class="form-control col-lg-3 col-md-3 col-sm-12 no-padding" name="country" style="padding-left:10px !important;margin-bottom: 4px;">
                                                         <option value="" selected="selected">Please select country</option> 
                                                           @foreach ($country as $key => $value)
                                                                <option value="{{ $value->countryname }}" {{ ( old('country') == $value->countryname) ? 'selected' : '' }}> 
                                                                    {{ $value->countryname }} 
                                                                </option>
                                                            @endforeach 
                                                        </select>
                                                         @error('country')
                                                        <span class="help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-2 col-md-3 col-sm-12 form-hide-part no-padding">
                                                <label>&nbsp;</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding check_box_ct form-end-part">

                                                <div class="form-group t_tip">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value=""><p>I’m happy to receive important account related emails from Cool Jelly Bean</p></label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value=""><p>I’m happy to receive marketing emails from Cool Jelly Bean</p></label>
                                                    </div>

                                                </div>
                                            </div> -->
                                            <div class="col-lg-3 col-md-3 col-sm-12 form-hide-part no-padding">
                                                <label>&nbsp;</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12 no-padding check_box_ct form-end-part">
                                                <div class="btn_group_cards">
                                                    <div class="btn_cards">
                                                        <button type="submit" id="login">{{ __('address_book.Save') }}</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                    </div>
                                
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--Page Content End-->

@endsection

@section('footer_script')
    <!-- Footer Script Start -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        $(".info1 ").mouseover(function() {
            $(".tp1 ").show();
        });

        $(".info1 ").mouseout(function() {
            $(".tp1 ").hide();
        });

        $(".info2 ").mouseover(function() {
            $(".tp2 ").show();
        });

        $(".info2 ").mouseout(function() {
            $(".tp2 ").hide();
        });

        $(".info3 ").mouseover(function() {
            $(".tp3 ").show();
        });

        $(".info3 ").mouseout(function() {
            $(".tp3 ").hide();
        });

        $(".info4 ").mouseover(function() {
            $(".tp4 ").show();
        });

        $(".info4 ").mouseout(function() {
            $(".tp4 ").hide();
        });

        $(".info5 ").mouseover(function() {
            $(".tp5 ").show();
        });

        $(".info5 ").mouseout(function() {
            $(".tp5 ").hide();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor3' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @if ($message = Session::get('success'))
    <script type="text/javascript">
         iziToast.success({
             title: 'OK',
             message: '{{ $message }}',
             position: 'topRight',
         });
         
    </script>
    @endif
    @if ($message = Session::get('failure'))
    <script type="text/javascript">
        iziToast.error({
            title: 'Error',
            message: '{{ $message }}',
             position: 'topRight',
        });
    </script>
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('#date input').datepicker({
            format: 'yyyy-mm-dd',
            endDate: '0d',
            autoclose: true
        });
    </script>
    <!-- Footer Script End -->
@endsection