@extends('front.app')

@section('title', 'Sale Orders')


@section('body_class', '')

@section('main_div_class', 'homepg_Cont')

@section('content')
@php
$activeSidebar = 'artist_sale_product';
@endphp

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
<style type="text/css">

.homepg_Cont {
    position: relative;
}

.dashboard-sec{
padding-bottom:154px;}
.advertise_sec2{
    background: #fff none repeat scroll 0 0;
    padding: 28px;
    width: 100%;
    float: left;
    margin-bottom: 20px;
    padding-bottom:45px;
}
.input-daterange{display:flex;}
input#from_date {
    margin-right: 10px;
}

.sales_stats.orders_tab.customer_order_tab .table-responsive {

}
@media (max-width:767px){
    .modal-dialog {
    position: relative;
        width: 80% !important;
    margin: 0 30px !important;
}
#review_des{
    width:100%;
}
   td{
        padding-left: 5px !important;
    }
    div#seller_common_wrapp {
    top: 7px !important;
}
.input-daterange {
    display: table;
    margin-top: 10px;
}
.input-daterange input#from_date1 {
    margin-bottom: 15px;
}
}
.date_size input{font-size:13px !important;}
</style>
    <!--dashboard artist-->
    <section class="sec-overback">
        <div class="dashboard-sec slidpad">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 ">

                    @include('front.user-sidebar')
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 nopadding">

                        <!--advertise_sec-->

                        <div class="advertise_sec2 advertise_over">
                            <!--sales_stas-->
                            <div class="filtersec order_filter firstfilter">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-2">
                                        <h3 class="ordi">Sale Order</h3>
                                    </div>
                                    <div class="col-xs-12 col-lg-2">
                                        <form action="#" class="mobiformi">
                                            <div class="input-group search_group">
                                                <input type="text" class="form-control" placeholder="Search" name="search">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default sub_search" type="submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                                </div>
                                            </div>
                                        </form>
                                        <form class="searchbox deskformi">
                                            <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                                            <input type="submit" class="searchbox-submit" value="">
                                            <span class="searchbox-icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </span>
                                        </form>
                                    </div>
                                    <div class="col-lg-8 filerby pull-right ordfilt">
                                        <form id="order_filter_form" class="form-horizontal" action="{{ url('order_list') }}" method="POST" >
                                            @csrf
                                            <h3 style="width:auto" class="mob_filt">
                                                <i class="fa fa-filter" aria-hidden="true"></i> Filter</h3>
                                            <h3>
                                                <img src="images/filtfilt.png" /> Filter By:</h3>
                                           <h3 style="width:15%">Status:
                                            <select class="form-control" id="status_val" name="status_val">
                                                <option value="" {{ ($choosen['status_val'] == "") ? 'selected' :'' }}>All</option>
                                                <option value="1" {{ ($choosen['status_val'] == 1) ? 'selected' :'' }}>{{ "Pending" }}</option>
                                                <option value="2" {{ ($choosen['status_val'] == 2) ? 'selected' :'' }}>{{ "Completed" }}</option>
                                                <option value="3" {{ ($choosen['status_val'] == 3) ? 'selected' :'' }}>{{ "Cancelled" }}</option>
                                                <option value="4" {{ ($choosen['status_val'] == 4) ? 'selected' :'' }}>{{ "Return" }}</option>

                                            </select>

                                                <!-- <span>All
                                                    <img src="images/filtdrop.png"/>
                                                </span> -->
                                            </h3>
                                            <h3 style="width:35%">Date Range:
                                            <div class="input-group input-daterange date_size">
                                                <input type="text" name="from_date" id="from_date" readonly class="form-control" value="{{$choosen['from_date']}}" autocomplete="off" placeholder="From Date" />
                                                <div class="input-group-addon">to</div>
                                                <input type="text"  name="to_date" id="to_date" readonly class="form-control" value="{{$choosen['to_date']}}" autocomplete="off" placeholder="To Date"/>
                                            </div>
                                                <!-- <span>All
                                                <img src="images/filtdrop.png"/>
                                                </span> -->
                                            </h3>
                                            <h3 style="width:20%">Sort by:
                                                <select class="form-control" id="sort_by" name="sort_by">
                                                    <option value="DESC" {{ ($choosen['sort_by'] == "DESC") ? 'selected' :'' }}>{{ "Most Recent" }}</option>
                                                    <option value="ASC" {{ ($choosen['sort_by'] == "ASC") ? 'selected' :'' }}>{{ "Old" }}</option>
                                                </select>
                                            </h3>
                                            <h3 style="width:auto; float: right;">Clear All:
                                                <input type="hidden" name="clear" id="clear" value="">
                                                <a href="javascript:void(0);" data_id="reset" id="reset" class="reset">Reset</a>
                                                </h3>
                                        </form>
                                    </div>

                                </div>
                                 <div id="seller_common_wrapp" class="row mob_dro mob_ipad_dro">
                                            <div class="col-sm-12 mob_drop_filter">
                                            <form id="order_filter_form1" class="form-horizontal" action="{{ url('order_list') }}" method="POST" >
                                            @csrf
                                            <h3 style="width:100%">Status:
                                            <select class="form-control" id="status_val1" name="status_val">
                                                <option value="" {{ ($choosen['status_val'] == "") ? 'selected' :'' }}>All</option>
                                                <option value="1" {{ ($choosen['status_val'] == 1) ? 'selected' :'' }}>{{ "Pending" }}</option>
                                                <option value="2" {{ ($choosen['status_val'] == 2) ? 'selected' :'' }}>{{ "Completed" }}</option>
                                                <option value="3" {{ ($choosen['status_val'] == 3) ? 'selected' :'' }}>{{ "Cancelled" }}</option>
                                                <option value="4" {{ ($choosen['status_val'] == 4) ? 'selected' :'' }}>{{ "Return" }}</option>

                                            </select>

                                                <!-- <span>All
                                                    <img src="images/filtdrop.png"/>
                                                </span> -->
                                            </h3>
                                            <h3 style="width:100%">Date Range:
                                            <div class="input-group input-daterange">
                                                <input type="text" name="from_date" id="from_date1" readonly class="form-control" value="{{$choosen['from_date']}}" autocomplete="off" />
                                                <div class="input-group-addon">to</div>
                                                <input type="text"  name="to_date" id="to_date1" readonly class="form-control" value="{{$choosen['to_date']}}" autocomplete="off" />
                                            </div>
                                                <!-- <span>All
                                                <img src="images/filtdrop.png"/>
                                                </span> -->
                                            </h3>
                                            <h3 style="width:100%">Sort by:
                                                <select class="form-control" id="sort_by1" name="sort_by">
                                                    <option value="DESC" {{ ($choosen['sort_by'] == "DESC") ? 'selected' :'' }}>{{ "Most Recent" }}</option>
                                                    <option value="ASC" {{ ($choosen['sort_by'] == "ASC") ? 'selected' :'' }}>{{ "Old" }}</option>
                                                </select>
                                            </h3>
                                            <h3 style="width:100%;">Clear All:
                                                <input type="hidden" name="clear" id="clear1" value="">
                                                <a href="javascript:void(0);" data_id="reset" id="reset1" class="reset">Reset</a>
                                                </h3>
                                            </form>
                                            </div>
                                        </div>
                            </div>

                            <div class="sales_stats orders_tab customer_order_tab">

                                <div class="table-responsive">

                                    <table class="table" cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <tr>
                                                <th>Order no.</th>
                                                <th>Date Ordered</th>
                                                <th>Item Count</th>
                                                <th>TOTAL</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            @foreach($order_list as $value)
                                            <tr>
                                                <td><a href="{{ url('order_details/'.$value['id']) }}">{{ $value['order_id'] }}</a></td>
                                                <td><a href="{{ url('order_details/'.$value['id']) }}">{{ $value['created_at'] }}</a></td>
                                                <td><a href="{{ url('order_details/'.$value['id']) }}">{{ $value['shipping_item_count'] }}</a></td>
                                                <td><a href="{{ url('order_details/'.$value['id']) }}">
                                                {!! currency($value['grand_total'], 'GBP', session()->get('my_currency')) !!}
                                                </a></td>
                                                <td><a href="{{ url('order_details/'.$value['id']) }}">{{ (($value['status']==1) ? 'Pending' :( ($value['status']==2) ? 'Completed' : (($value['status']==3) ? 'Cancelled' : 'Return') ) )}}</a></td>
                                                <td style="display:block" class="view_det"><a href="{{ url('sale_product_detail_page/'.$value['id']) }}">View Details <img src="images/view_btn.png"/></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                    <div class="pagination_section">
                                    <?php echo $order_list->render(); ?>
                                    </div>


                                </div>
                            </div>
                            <!--sales_stas-->




                        </div>
                        <!--/.advertise_sec-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.dashboard artist-->

@endsection
@section('footer_script')
         <!--filter dropdown-->
    <script>
        $(".filter_drop label").click(function() {
            $(this).toggleClass("active");
        });

        $(".clearall").click(function() {
            $(".filter_drop label").removeClass("active");
        });

        $(".mobclearall").click(function() {
            $(".mob_drop_filter label").removeClass("active");
        });

        $(".closedrop").click(function() {
            $(".drop_filter").slideToggle();
            $(".cate").removeClass("togcate");
        });

        $(".drop_filter").hide();

        $(".cate").click(function() {
            $(".drop_filter").slideToggle();
        });

        $(".cate").click(function() {
            $(".cate").toggleClass("togcate");
        });

        $(".mob_filt").click(function() {
            $(".mob_dro").slideToggle();
            $(".mob_filt").toggleClass("filtdro");
        });
    </script>
    <!--filter dropdown-->

      <script>
        $(document).ready(function() {

            $("#from_date").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: 'linked',
            uiLibrary: 'bootstrap',
            }).on('changeDate', function (selected) {
                var startDate = new Date(selected.date.valueOf());
                $('#to_date').datepicker('setStartDate', startDate);
                $( "#order_filter_form" ).submit();
            }).on('clearDate', function (selected) {
                $('#to_date').datepicker('setStartDate', null);
            });

            $("#to_date").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: 'linked',
            uiLibrary: 'bootstrap',
            startDate: $('#from_date').val()
            }).on('change', function (selected) {
                $( "#order_filter_form" ).submit();
            }).on('clearDate', function (selected) {
                $('#from_date').datepicker('setEndDate', null);
            });

            $("#from_date1").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: 'linked',
            uiLibrary: 'bootstrap',
            }).on('changeDate', function (selected) {
                var startDate = new Date(selected.date.valueOf());
                $('#to_date1').datepicker('setStartDate', startDate);
                $( "#order_filter_form1" ).submit();
            }).on('clearDate', function (selected) {
                $('#to_date1').datepicker('setStartDate', null);
            });

            $("#to_date1").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayBtn: 'linked',
            uiLibrary: 'bootstrap',
            startDate: $('#from_date1').val()
            }).on('change', function (selected) {
                $( "#order_filter_form1" ).submit();
            }).on('clearDate', function (selected) {
                $('#from_dat1e').datepicker('setEndDate', null);
            });

            $( "#status_val , #sort_by").change(function(e) {
                e.preventDefault();
                $( "#order_filter_form" ).submit();
            });
            $( "#status_val1 , #sort_by1").change(function(e) {
                e.preventDefault();
                $( "#order_filter_form1" ).submit();
            });

            $( "#reset").click(function(e) {
                e.preventDefault();
                $('#clear').val(1);
                $( "#order_filter_form" ).submit();
            });
            $( "#reset1").click(function(e) {
                e.preventDefault();
                $('#clear1').val(1);
                $( "#order_filter_form1" ).submit();
            });

            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function() {
                if (isOpen == false) {
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
            submitIcon.mouseup(function() {
                return false;
            });
            searchBox.mouseup(function() {
                return false;
            });
            $(document).mouseup(function() {
                if (isOpen == true) {
                    $('.searchbox-icon').css('display', 'block');
                    submitIcon.click();
                }
            });
        });

        function buttonUp() {
            var inputVal = $('.searchbox-input').val();
            inputVal = $.trim(inputVal).length;
            if (inputVal !== 0) {
                $('.searchbox-icon').css('display', 'none');
            } else {
                $('.searchbox-input').val('');
                $('.searchbox-icon').css('display', 'block');
            }
        }
    </script>
    <style>
            @media screen and (min-width:768px) and (max-width: 1024px) {
                .mobiformi {
                    display: none;
                }
                .deskformi {
                    display: block;
                }
                .filtersec.order_filter.firstfilter>.row {
                    display: flex;
                    align-items: center;
                }
                .filtersec.order_filter .filerby h3 {
                    margin: 0px;
                }
            }
            #reset {
                display: block;
                background: #ff3636;
                padding: 10px;
                color: #fff;
                border-radius: 5px;
            }
    </style>
@endsection
