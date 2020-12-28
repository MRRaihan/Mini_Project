@extends('layouts.frontend.master')

@section('title', 'Home')
@section('content')
    <ul class="header-main type-1">
        <li class="home"><a href="{{route('user.index')}}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content " class="col-md-12 col-sm-12 type-1">


            <!-- Related Products -->
            <div class="related-product ">
                <h3 class="modtitle">Our Services</h3>
                <hr>
                <hr>
                <hr>
                <div class="related-product-owl">
                    <div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30" data-items_xs="1" data-items_sm="3" data-items_md="3">


                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-5.jpg" alt=""></a>
                                        <!--Sale Label-->

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Dummy product #04</a></h4>
                                        <div class="ratings">
                                            <div class="description item-desc text-justify">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$78.00</span>

                                        </div>

                                    </div>

                                    <div class="button-group">
                                        <a class="btn btn-default" href="">Details</a>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- end Related  Products-->


        </div>


    </div>
    <!--Middle Part End-->
@endsection
