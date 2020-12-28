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
                        <div class="col-sx-12">
                            <div class="producttab ">
                                <div class="tabsslider  col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                                        <li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
                                    </ul>
                                    <div class="tab-content col-xs-12">
                                        <div id="tab-1" class="tab-pane fade active in">
                                            <p>
                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve. <br>
                                                <br>
                                                The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological data. <br>
                                                <br>
                                                Offering accurate, brilliant color performance, the Cinema HD delivers up to 16.7 million colors across a wide gamut allowing you to see subtle nuances between colors from soft pastels to rich jewel tones. A wide viewing angle ensures uniform color from edge to edge. Apple's ColorSync technology allows you to create custom profiles to maintain consistent color onscreen and in print. The result: You can confidently use this display in all your color-critical applications. <br>
                                                <br>
                                                Housed in a new aluminum design, the display has a very thin bezel that enhances visual accuracy. Each display features two FireWire 400 ports and two USB 2.0 ports, making attachment of desktop peripherals, such as iSight, iPod, digital and still cameras, hard drives, printers and scanners, even more accessible and convenient. Taking advantage of the much thinner and lighter footprint of an LCD, the new displays support the VESA (Video Electronics Standards Association) mounting interface standard. Customers with the optional Cinema Display VESA Mount Adapter kit gain the flexibility to mount their display in locations most appropriate for their work environment. <br>
                                                <br>
                                                The Cinema HD features a single cable design with elegant breakout for the USB 2.0, FireWire 400 and a pure digital connection using the industry standard Digital Video Interface (DVI) interface. The DVI connection allows for a direct pure-digital connection.<br>
                                            </p>


                                        </div>
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
                                                    <span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

                                                    <div class="form-group">
                                                        <b>Rating</b> <span>Bad</span>&nbsp;
                                                        <input type="radio" name="rating" value="1"> &nbsp;
                                                        <input type="radio" name="rating" value="2"> &nbsp;
                                                        <input type="radio" name="rating" value="3"> &nbsp;
                                                        <input type="radio" name="rating" value="4"> &nbsp;
                                                        <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                                    </div>
                                                    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab-4" class="tab-pane fade">
                                            <a href="#">Monitor</a>,
                                            <a href="#">Apple</a>
                                        </div>
                                        <div id="tab-5" class="tab-pane fade">
                                            <p>Lorem ipsum dolor sit amet, consetetur
                                                sadipscing elitr, sed diam nonumy eirmod
                                                tempor invidunt ut labore et dolore
                                                magna aliquyam erat, sed diam voluptua.
                                                At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd
                                                gubergren, no sea takimata sanctus est
                                                Lorem ipsum dolor sit amet. Lorem ipsum
                                                dolor sit amet, consetetur sadipscing
                                                elitr, sed diam nonumy eirmod tempor
                                                invidunt ut labore et dolore magna aliquyam
                                                erat, sed diam voluptua. </p>
                                            <p>At vero eos et accusam et justo duo dolores
                                                et ea rebum. Stet clita kasd gubergren,
                                                no sea takimata sanctus est Lorem ipsum
                                                dolor sit amet. Lorem ipsum dolor sit
                                                amet, consetetur sadipscing elitr.</p>
                                            <p>Sed diam nonumy eirmod tempor invidunt
                                                ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam
                                                et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata
                                                sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
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

