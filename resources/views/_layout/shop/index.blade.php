<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asets/images/fav.jpg') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/chosen.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/jquery.scrollbar.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/lightbox.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/slick.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/fonts/flaticon.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/megamenu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/dreaming-attribute.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('asets/css/style.css') }}"/>
    <title>Belanja - Toko Kulaan </title>
</head>
<body>
<header id="header" class="header style-02 header-dark">
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-middle">
                <div class="furgan-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="{{ url('belanja') }}">
                                <img alt="Furgan" src="{{ asset('asets/images/logo.png') }}" class="logo">
                            </a>
                        </div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu furgan-clone-mobile-menu furgan-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="furgan-menu-item-title" title="Home" href="{{ url('belanja') }}">Home</a>
                                    <span class="toggle-submenu"></span>
                                    
                                </li>
                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="furgan-menu-item-title" title="Shop"
                                       href="#">Shop</a>
                                    <span class="toggle-submenu"></span>
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">
                                
                                <div class="header-search furgan-dropdown">
                                    <div class="header-search-inner" data-furgan="furgan-dropdown">
                                        <a href="#" class="link-dropdown block-link">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </a>
                                    </div>
                                    <div class="block-search">
                                        <form role="search" method="get"
                                              class="form-search block-search-form furgan-live-search-form">
                                            <div class="form-content search-box results-search">
                                                <div class="inner">
                                                    <input autocomplete="off" class="searchfield txt-livesearch input"
                                                           name="s" value="" placeholder="Search here..." type="text">
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn-submit">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </button>
                                        </form><!-- block search -->
                                    </div>
                                </div>
                                <div class="furgan-dropdown-close">x</div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search furgan-dropdown">
                <div class="header-search-inner" data-furgan="furgan-dropdown">
                    <a href="#" class="link-dropdown block-link">
                       
                    </a>
                </div>
                <div class="block-search">
                    
                </div>
            </div>
            <ul class="wpml-menu">
                
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="{{ asset('belanja') }}"><img alt="Furgan" src="{{ asset('asets/images/logo.png') }}" class="logo"></a>
            </div>
        </div>
        
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming furgan-dropdown">
                        
                    </div>
                    <div class="block-minicart block-dreaming furgan-mini-cart furgan-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-furgan="furgan-dropdown">
                            <a class="block-link link-dropdown" href="#">
                                
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile-right">
            
            <div class="header-search furgan-dropdown">
                <div class="header-search-inner" data-furgan="furgan-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form furgan-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                
            </ul>
        </div>
    </div>
</header>
<div class="banner-wrapper has_background">
    
</div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        
                    </div>
                    <form class="furgan-ordering" method="post" action="{{ url('belanja/kategori') }}">
                        {{ csrf_field() }}
                        <select title="product_cat" id="kategori" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Kategori</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->kategori }}">{{ $k->kategori }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn-submit"><span class="flaticon-magnifying-glass-1"></span></button>
                    </form>
                    
                </div>
                <div class="auto-clear equal-container better-height furgan-products">
                    <ul class="row products columns-3">
                        @foreach ($barang as $b)
                        
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="https://api.whatsapp.com/send?phone=6285791412855&text=Halo%20toko%20kulaan,%20%20mau%20order%20ni!!" target="_blank" >
                                        <img class="img-responsive"
                                             src="{{ $b->gambar }}"
                                             alt="Toko Kulaan" width="600" height="778">
                                    </a>
                                    
                                    
                                    <div class="group-button">
                                        
                                        
                                        <div class="add-to-cart">
                                            <a href="https://api.whatsapp.com/send?phone=6285791412855&text=Halo%20toko%20kulaan,%20%20mau%20order%20ni!!" target="_blank" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">{{ $b->nama_barang }}</a>
                                    </h3>
                                    <span class="price"><span class="furgan-Price-amount amount"><span
                                            class="furgan-Price-currencySymbol">Rp </span>
                                            @php
                                                if($b->harga_dos_per_pcs == 0){
                                                    echo number_format($b->harga_toko,0,",",".");
                                                } else {
                                                    echo number_format($b->harga_dos_per_pcs,0,",",".");
                                                }
                                            @endphp
                                            </span> – <span
                                            class="furgan-Price-amount amount"><span
                                            class="furgan-Price-currencySymbol">Rp </span>{{ number_format($b->harga_umum ,0,",",".") }}</span></span>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="footer style-01">
    <div class="section-001 section-009">
        <div class="container">
            <div class="furgan-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap">
                            <h3 class="title">Newsletter</h3>
                            <h4 class="subtitle">Berlangganan Toko Kulaan</h4>
                            <p class="desc">Dapatkan harga yang murah dengan toko kulaan.</p>
                        </div>
                    </div>
                    <div class="newsletter-form-wrap">
                        <div class="newsletter-form-inner">
                            <input class="email email-newsletter" name="email" placeholder="Masukkan emailmu atau nomor hapemu"
                                   type="email">
                            <a href="#" class="button btn-submit submit-newsletter">
                                <span class="text">Subscribe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2020 <a href="#">Toko Kulaan</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="furgan-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="wishlist.html">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="cart.html">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="my-account.html">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-double-up"></i>
</a>
<script src="{{ asset('asets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('asets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asets/js/chosen.min.js') }}"></script>
<script src="{{ asset('asets/js/countdown.min.js') }}"></script>
<script src="{{ asset('asets/js/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('asets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('asets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('asets/js/slick.js') }}"></script>
<script src="{{ asset('asets/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('asets/js/threesixty.min.js') }}"></script>
<script src="{{ asset('asets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('asets/js/mobilemenu.js') }}"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="{{ asset('asets/js/functions.js') }}"></script>

<script>
    // $('#kategori').on('change', function() {
    //     // alert( this.value );
    //     window.location = "{{ url('belanja/kategori') }}/"+this.value;
    // });
</script>
</body>
</html>