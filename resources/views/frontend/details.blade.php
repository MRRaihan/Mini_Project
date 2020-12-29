@extends('layouts.frontend.master')

@section('title', $service->title)
@section('content')
    <ul class="header-main type-1">
        <li class="home"><a href="{{route('home.index')}}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content " class="col-md-12 col-sm-12 type-1">
            <div class="product-view row">
                <div class="left-content-product col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{asset($service->image)}}" data-zoom-image="{{asset($service->image)}}" title="Bint Beef" alt="Bint Beef">
                            </div>

                        </div>

                        <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$service->title}}</h1>
                            </div>
                            <br>
                            <div class="product-box-desc">
                               <p class="text-justify">{{$service->description}}</p>
                            </div>
                            <div class="product-label form-group">
                                <div class="stock">

                                </div>
                                <br>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">$ {{$service->unit_price}}</span>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="continer">
                            <h4>Comment Section</h4>
                            @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role_id == 3)
                                <a href="#" class="btn btn-success">Negotiation</a>
                            @else
                                <a href="{{route('client.login')}}" class="btn btn-success" title="Sign In"><span>Sign In</span></a> Or
                                <a href="{{route('client.registration')}}" class="btn btn-primary" title="Registration"><span>Registration</span></a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sx-12">
                            <div class="producttab ">
                                <div class="tabsslider  col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Price Discuess (1)</a></li>
                                    </ul>

                                     <div id="tab-review" class="tab-pane fade  in">
                                            <form>
                                                <div id="review">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                            <td class="text-right">29/07/2015</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Best this product opencart</p>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star gray"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right"></div>
                                                </div>
                                                <h2 id="review-title">Write a review</h2>
                                                <div class="contacts-form">
                                                    <div class="form-group"> <span class="icon icon-user"></span>
                                                        <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                    </div>
                                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                        <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                    </div>



                                                    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                                </div>
                                            </form>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Related Products -->
            <div class="related-product ">
                <h3 class="modtitle">Services</h3>
                <hr>
                <hr>
                <hr>
                <div class="related-product-owl">
                    <div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30" data-items_xs="1" data-items_sm="3" data-items_md="3">

                        @foreach($services as $service)
                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="{{route('service.details', $service->id)}}" class="product-img"><img src="{{asset($service->image)}}" alt="" width="50%"></a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h1><a href="{{route('service.details', $service->id)}}">{{$service->title}}</a></h1>
                                            <div class="ratings">
                                                <div class="description item-desc text-justify">
                                                    <a href="{{route('service.details', $service->id)}}"><p>{{Str::limit($service->description, 150)}}</p></a>
                                                </div>
                                            </div>

                                            <div class="price">
                                                <span class="price-new">${{$service->unit_price}}</span>

                                            </div>

                                        </div>

                                        <div class="button-group">
                                            <a class="btn btn-default" href="{{route('service.details', $service->id)}}">Details</a>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- end Related  Products-->


        </div>


    </div>

@endsection

