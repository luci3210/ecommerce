@extends('ecom_layout.ecom_front_layout')
@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<style>
    .cover-bg {
        background: url('{{asset("ecom/bg-breadcrumbs.jpg")}}') no-repeat;
        min-height: 190px;
        position: relative;
        margin-bottom: 40px;
    }
    .item-name{
        font-size: 20px;
        color: #fff;
        margin-top: 80px;
        font-weight: 600;
        text-transform: uppercase;
        padding-bottom: 5px;
    }
</style>

<section id="banner" class="container-fluid">
    <div class="row">
        <div class="col-12 cover-bg">
            <div class="position-relative">
                <div class="text-center">
                    <h3 class="item-name ">item name here or something</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="item-details" class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-6">
            <div class="list-group">
            <button
                type="button"
                class="list-group-item list-group-item-action active"
                aria-current="true"
            >
                Categories
            </button>
            <button type="button" class="list-group-item list-group-item-action">
                Dapibus ac facilisis in
            </button>
            <button type="button" class="list-group-item list-group-item-action">
                Morbi leo risus
            </button>
            <button type="button" class="list-group-item list-group-item-action">
                Porta ac consectetur ac
            </button>
            <button type="button" class="list-group-item list-group-item-action" disabled>
                Vestibulum at eros
            </button>
            </div>
            <!-- /.list group -->
        </div>
        <!-- /.col -->
    </div>

</section>


<div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-5">Product Details</h3>

    <div class="row">
      <div class="col-lg-6">

        <!--Carousel Wrapper-->
        <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">

          <!--Slides-->
          <div class="carousel-inner text-center text-md-left" role="listbox">
            <div class="carousel-item active">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                alt="First slide" class="img-fluid">
            </div>
            <div class="carousel-item">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                alt="Second slide" class="img-fluid">
            </div>
            <div class="carousel-item">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                alt="Third slide" class="img-fluid">
            </div>
          </div>
          <!--/.Slides-->

          <!--Thumbnails-->
          <a class="carousel-control-prev" href="#carousel-thumb1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Thumbnails-->

        </div>
        <!--/.Carousel Wrapper-->
        
        <div class="row mb-4">
          <div class="col-md-12">
            <div id="mdb-lightbox-ui"></div>
            <div class="mdb-lightbox no-margin">
              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                  data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                    class="img-fluid">
                </a>
              </figure>
              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                  data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                    class="img-fluid">
                </a>
              </figure>
              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                  data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                    class="img-fluid">
                </a>
              </figure>
            </div>
          </div>
        </div>
        
      </div>

      <div class="col-lg-5 text-center text-md-left">

        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">iPad PRO</h2>
        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
        <span class="badge badge-success product mb-4 ml-2">SALE</span>

        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
          <span class="red-text font-weight-bold">
            <strong>$1449</strong>
          </span>
          <span class="grey-text">
            <small>
              <s>$1789</s>
            </small>
          </span>
        </h3>

        <div class="font-weight-normal">
          
          <p class="ml-xl-0 ml-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis nostrum incidunt maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia necessitatibus.</p>

          <p class="ml-xl-0 ml-4">
            <strong>Storage: </strong>64GB</p>
          <p class="ml-xl-0 ml-4">
            <strong>Size: </strong>9.6-inch</p>
          <p class="ml-xl-0 ml-4">
            <strong>Resolution: </strong>2048 x 1536</p>
          <p class="ml-xl-0 ml-4">
            <strong>Availability: </strong>In stock</p>
          
          <div class="mt-5">
            <p class="grey-text">Choose your color</p>
            <div class="row text-center text-md-left">
              <div class="col-md-4 col-12 ">
                <div class="form-group">
                  <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">
                  <label for="radio100" class="form-check-label dark-grey-text">White</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-check-input" name="group100" type="radio" id="radio101">
                  <label for="radio101" class="form-check-label dark-grey-text">Silver</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-check-input" name="group100" type="radio" id="radio102">
                  <label for="radio102" class="form-check-label dark-grey-text">Gold</label>
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-4">
              <div class="col-md-12 text-center text-md-left text-md-right">
                <button class="btn btn-primary btn-rounded">
                  <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>



@endsection


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
