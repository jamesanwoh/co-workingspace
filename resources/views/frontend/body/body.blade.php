 <!-- Home slider -->
 <section class="p-0"></section>
    <div class="slide-1 home-slider">
        <div>
            <div class="home text-left">
                <img src="../assets/images/ahome/8.jpg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>office space</h4>
                                    <h1>confortable sleek interior </h1><a href="#" class="btn btn-solid">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home text-left">
                <img src="../assets/images/ahome/2.jpg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>office space</h4>
                                    <h1>professional and condusive enviroment </h1><a href="#" class="btn btn-solid">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->


 {{-- <!-- collection banner -->
<section class="banner-furniture ratio_45">
    <div class="container-fluid">
        <div class="row partition3">
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{asset('assets/images/ahome/9.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>save 30%</h4>
                                <h2>offices</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{asset('assets/images/ahome/10.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>save 60%</h4>
                                <h2>single-outlet</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{asset('assets/images/ahome/11.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>save 60%</h4>
                                <h2>conference hall</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- collection banner end --> --}}



{{-- @foreach ($posts as $post)

<div class="col-md-4">
    <a href="{!! url('details/'.$post->id)!!}">
        <div class="collection-banner p-left text-left">
             <img name="image" src="{{asset('uploads/files')}}/{{$post->image}}"  alt="" class="img-fluid blur-up lazyload bg-img">

            <div class="absolute-contain">
                <h3>save 30%</h3>
                <h4>offices</h4>
            </div>
        </div>
    </a>
</div>
<br>
@endforeach --}}

<!-- absolute banner -->
<section class="banner-furniture absolute_banner ratio3_2">
    <div class="container">
        <div class="row partition3">
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="{{asset('assets/images/ahome/9.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">

                        <div class="absolute-contain">
                            <h3>save 30%</h3>
                            <h4>offices</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="{{asset('assets/images/ahome/10.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
                        <div class="absolute-contain">
                            <h3>save 60%</h3>
                            <h4>single-outlet</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="{{asset('assets/images/ahome/11.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
                        <div class="absolute-contain">
                            <h3>save 60%</h3>
                            <h4>conference hall</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- absolute banner -->


<!-- Tab product -->
<div class="title1 section-t-space">
    <h4>sleek office working spaces</h4>
    <h2 class="title-inner1">available office spaces</h2>
</div>
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <li class="current"><a href="tab-4">Co-operate/professional</a></li>
                        <li class=""><a href="tab-5">conventional/Open-Conventional</a></li>
                        <li class=""><a href="tab-6">Private Working space</a></li>
                        {{-- <li class=""><a href="tab-7">Shared Space/Subline</a></li> --}}
                    </ul>
                    <div class="tab-content-cls">
                        @foreach($categoryc as $category)
                        <div id="tab-4" class="tab-content active default">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{!! url('details/'.$category->id)!!}"><img name="image" src="{{asset('uploads/files')}}/{{$category->image}}"  alt="" class="img-fluid blur-up lazyload bg-img" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{asset('assets/images/ahome/7.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="typo-content product-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true"><i class="fa fa-chevron-left"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true"><i class="fa fa-chevron-right"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                        @foreach($categorya as $category)
                        <div id="tab-5" class="tab-content">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="{!! url('details/'.$category->id)!!}"><img name="image" src="{{asset('uploads/files')}}/{{$category->image}}"  alt="" class="img-fluid blur-up lazyload bg-img" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>

                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{asset('assets/images/ahome/7.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="typo-content product-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true"><i class="fa fa-chevron-left"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true"><i class="fa fa-chevron-right"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                        @foreach($categoryd as $category)
                        <div id="tab-6" class="tab-content">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="{!! url('details/'.$category->id)!!}"><img name="image" src="{{asset('uploads/files')}}/{{$category->image}}"  alt="" class="img-fluid blur-up lazyload bg-img" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{asset('assets/images/ahome/13.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="typo-content product-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true"><i class="fa fa-chevron-left"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true"><i class="fa fa-chevron-right"
                                                    aria-hidden="true"></i></span> <span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tab product end -->


<!-- product slider -->
<section class="ratio_asos section-b-space">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
                    @foreach ($posts as $post)
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{!! url('details/'.$category->id)!!}"><a href="{!! url('details/'.$post->id)!!}"><img name="image" src="{{asset('uploads/files')}}/{{$post->image}}"  alt="" class="img-fluid blur-up lazyload bg-img" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="#">
                                <h6>Price</h6>
                            </a>
                            <h4>{{$post->Price}}</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product slider -->

<!-- service layout 2-->
<div class="title1 section-t-space">
    <h4> customer's satisfaction </h4>
    <h2 class="title-inner1">services rendered</h2>
</div>
    <div class="container">
        <section class="service section-b-space  border-section border-top-0">
            <div class="row partition4 ">
                <div class="col-lg-3 col-md-6 service-block1">
                    <img src="../assets/images/icon/service1.png" alt="" />
                    <h4>free shipping</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 ">
                    <img src="../assets/images/icon/service2.png" alt="" />
                    <h4>24 X 7 service</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 border border-0">
                    <img src="../assets/images/icon/service3.png" alt="" />
                    <h4>festival offer</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 border border-0">
                    <img src="../assets/images/icon/service4.png" alt="" />
                    <h4>online payment</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
            </div>
        </section>
    </div>
<!-- service layout 2 end-->

<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-left">
        <img src="../assets/images/ahome/8.jpg" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2021</h2>
                        <h3>interior design for office</h3>
                        <h4>special offer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->

<!--modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal6">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <div class="offer-content"><img src="../assets/images/Offer-banner.png"  class="img-fluid blur-up lazyload" alt="" >
                                    <h2>newsletter</h2>
                                    <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="form-group mx-sm-3">
                                            <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                            <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="{{asset('assets/images/pro3/1.jpg')}}" class="img-fluid blur-up lazyload"></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


{{-- <!-- theme setting -->
<a href="javascript:void(0)" onclick="openSetting()">
    <div class="setting-sidebar" id="setting-icon">
        <div>
            <i class="fa fa-cog" aria-hidden="true"></i>
        </div>
    </div>
</a>
<div id="setting_box" class="setting-box">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="setting_box_body">
        <div onclick="closeSetting()">
            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
        </div>
        <div class="setting-body">
            <div class="setting-title">
                <h4>layout</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo1"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('index.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo43">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>game</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('game.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo44">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>gym</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('gym-product.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo45">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>tools</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('tools.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo46">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>marijuana</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('marijuana.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo47">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>metro</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('metro.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo48">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>pets</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('pets.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo49">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>video slider</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('video-slider.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo50">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>left menu</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('left_sidebar-demo.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo51">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>jewellery</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('jewellery.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo2"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('fashion-2.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo3"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('fashion-3.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo4"></div>
                            <div class="demo-text">
                                <h4>Shoes</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('shoes.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo5"></div>
                            <div class="demo-text">
                                <h4>Bags</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('bags.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo6"></div>
                            <div class="demo-text">
                                <h4>Watch</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('watch.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo7"></div>
                            <div class="demo-text">
                                <h4>Kids</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('kids.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo8"></div>
                            <div class="demo-text">
                                <h4>Flower</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('flower.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo9"></div>
                            <div class="demo-text">
                                <h4>Nursery</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('nursery.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo10"></div>
                            <div class="demo-text">
                                <h4>Vegetables</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('vegetables.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo11"></div>
                            <div class="demo-text">
                                <h4>Beauty</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('beauty.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo12"></div>
                            <div class="demo-text">
                                <h4>Instagram Shop</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('instagram-shop.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                        <div class="set-position">
                            <div class="layout-container demo13"></div>
                            <div class="demo-text">
                                <h4>Lookbook</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('lookbook-demo.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo14"></div>
                            <div class="demo-text">
                                <h4>Light</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('light.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo15"></div>
                            <div class="demo-text">
                                <h4>Full Page</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('full-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo16"></div>
                            <div class="demo-text">
                                <h4>Electronic-1</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('electronic-1.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo17"></div>
                            <div class="demo-text">
                                <h4>Electronic-2</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('electronic-2.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                        <div class="set-position">
                            <div class="layout-container demo18"></div>
                            <div class="demo-text">
                                <h4>Video</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('video.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo19"></div>
                            <div class="demo-text">
                                <h4>Goggles</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('goggles.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo20"></div>
                            <div class="demo-text">
                                <h4>Parallax</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('parallax.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo21"></div>
                            <div class="demo-text">
                                <h4>Furniture</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('furniture.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>shop</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo22"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo24"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo23"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo25"></div>
                            <div class="demo-text">
                                <h4>popup</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(sidebar-popup).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo52">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>metro</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(metro).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo53">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>full width</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(full-width).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo26"></div>
                            <div class="demo-text">
                                <h4>infinite scroll</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(infinite-scroll).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo54"></div>
                            <div class="demo-text">
                                <h4>three grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(3-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo55"></div>
                            <div class="demo-text">
                                <h4>six grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(6-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo56"></div>
                            <div class="demo-text">
                                <h4>list view</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(list-view).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>product</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo40">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>four image </h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(4-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo33"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo36"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo34"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo41">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>bundle</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(bundle).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo42">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>image swatch</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-swatch).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo32"></div>
                            <div class="demo-text">
                                <h4>left image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(left-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo35"></div>
                            <div class="demo-text">
                                <h4>right image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo31">
                                <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                            </div>
                            <div class="demo-text">
                                <h4>image outside</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-outside).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo27"></div>
                            <div class="demo-text">
                                <h4>3-col left</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-left).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo28"></div>
                            <div class="demo-text">
                                <h4>3-col right</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo29"></div>
                            <div class="demo-text">
                                <h4>3-col bottom</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-column).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo37"></div>
                            <div class="demo-text">
                                <h4>sticky</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(sticky).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo30"></div>
                            <div class="demo-text">
                                <h4>accordian</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(accordian).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo38"></div>
                            <div class="demo-text">
                                <h4>vertical tab</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(vertical-tab).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>color picker</h4>
            </div>
            <div class="setting-contant">
                <ul class="color-box">
                    <li>
                        <input id="ColorPicker1" type="color" value="#d4b196" name="Background">
                        <span>theme deafult color</span>
                    </li>
                </ul>
            </div>
            <div class="setting-title">
                <h4>RTL</h4>
            </div>
            <div class="setting-contant">
                <ul class="setting_buttons">
                    <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a>
                    </li>
                    <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                </ul>
            </div>
            <div class="buy_btn">
                <a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-shopping-cart"
                        aria-hidden="true"></i> purchase Multikart now!</a>
                <a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358?s_rank=3" target="_blank" class="btn btn-block purchase_btn"><img src="{{asset('assets/images/icon/angular.png" alt="" class="img-fluid"> Multikart Angular</a>
                <a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773?s_rank=2" target="_blank" class="btn btn-block purchase_btn"><img src="{{asset('assets/images/icon/react.png" alt="" class="img-fluid"> Multikart React</a>
                <a href="https://themeforest.net/item/multikart-multipurpose-shopify-sections-theme/23093831?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><img src="{{asset('assets/images/icon/shopify.png" alt="" class="img-fluid"> Multikart Shopify</a>
            </div>
        </div>
    </div>
</div>
<!-- theme setting --> --}}


<!-- Add to cart modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <a href="#">
                                        <img class="img-fluid blur-up lazyload pro-img" src="{{asset('assets/images/fashion/product/43.jpg')}}" alt="">
                                    </a>
                                    <div class="media-body align-self-center text-center">
                                        <a href="#">
                                            <h6>
                                                <i class="fa fa-check"></i>Item
                                                <span>men full sleeves</span>
                                                <span> successfully added to your Cart</span>
                                            </h6>
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                            <a href="#" class="checkout btn btn-solid">Check out</a>
                                            <a href="#" class="continue btn btn-solid">Continue shopping</a>
                                        </div>

                                        <div class="upsell_payment">
                                            <img src="{{asset(' class="img-fluid blur-up lazyload" alt="" assets/images/payment_cart.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center">
                                        <h4>Customers who bought this item also.</h4>
                                    </div>
                                    <div class="row" id="upsell_product">
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="{{asset(' class="img-fluid blur-up lazyload mb-1" alt="cotton top" assets/images/fashion/product/1.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="{{asset(' class="img-fluid blur-up lazyload mb-1" alt="cotton top" assets/images/fashion/product/34.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="{{asset(' class="img-fluid blur-up lazyload mb-1" alt="cotton top" assets/images/fashion/product/13.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="{{asset(' class="img-fluid blur-up lazyload mb-1" alt="cotton top" assets/images/fashion/product/19.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->

<!--  logo section -->
<div class="title1 section-t-space">
    <h4> refreshing relationships </h4>
    <h2 class="title-inner1">our partners</h2>
</div>
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-6 no-arrow">
                    <div>
                        <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/1.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/2.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/3.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/4.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/5.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/6.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/7.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="../assets/images/logos/8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  logo section end-->

<!-- tap to top start -->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->
