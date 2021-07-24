@extends('ecom_layout.ecom_front_layout')
@section('content')

<style>
  .bn1{
    background-image: url('{{asset("ecom/bn1.jpg")}}');
    background-size: cover;
    background-repeat: no-repeat;
  }
  .banners-effect-1 > img:hover {
      opacity: 0.8;
  }
  .modtitle > span {
    font-weight: 700;
    text-transform: uppercase;
    font-size: 22px;
    color: #222;
    line-height: 100%;
    padding-bottom: 20px;
    position: relative;
    display: block;
}

.modtitle{
  border-bottom: 1px solid #e8e8e8;
}

.modtitle span:before {
    position: absolute;
    content: "";
    width: 110px;
    height: 2px;
    background-color: #017bc4;
    bottom: -1px;
    z-index: 1;
    left: 0;
    right: auto;
}

.image-cat > img:hover {
    opacity: 1;
    transform: scale(1);
    color:#017bc4
}
.image-cat > img {
    border: none;
    border-radius: 10px;
}
.image-cat a {
    text-transform: uppercase;
    color: #555;
    font-weight: 500;
    font-size: 15px;
}

.image-cat p {
    font-size: 14px;
}
.bg-died {
    background-color: rgba(247,248,251,1);
}
</style>


<section id="carousel-header" class="my-1">
  <div
    id="carouselExampleCrossfade"
    class="carousel slide carousel-fade"
    data-mdb-ride="carousel"
  >
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselExampleCrossfade"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselExampleCrossfade"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselExampleCrossfade"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="{{ asset('ecom/b1.jpg')}}"
          class="d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <!-- /. car item -->
      <div class="carousel-item ">
        <img
          src="{{ asset('ecom/b2.jpg')}}"
          class="d-block w-100"
          alt="..."
        />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <!-- /. car item -->
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- /.carousel section -->


<section id="exclusive-section" class="my-3 container">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-6 banners-effect-1">
      <img src="{{asset('ecom/bn1.jpg')}}">
      <!-- <div class="card bn1">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
          </p>
          <button type="button" class="btn btn-primary">Button</button>
          </div>
      </div> -->
    </div>
    <div class="col-md-6 col-sm-6 col-6 banners-effect-1">
      <img src="{{asset('ecom/bn2.jpg')}}">
    </div>
  </div>

</section>
<!-- /. exclusive -->



<section id="featured-section" class="container my-3">
  <div class="row d-flex justify-content-center">
    <div class="col-md-12 col-sm-12 col-12">
      <h3 class="modtitle"><span>Featured Categories</span></h3>
    </div>
    <!-- /.title -->
    <div class="col-md-2 col-sm-4 col-6 me-1 float-start">
      <div class="image-cat text-center">
        <img src="{{asset('ecom/f1.jpg')}}">
        <a href="#" title="Health &amp; Beauty " target="_self">
          Health &amp; Beauty
        </a>
        <p>2 item(s)</p>
      </div>
    </div>
    <!-- /. category -->
    <div class="col-md-2 col-sm-4 col-6 me-1 float-start">
      <div class="image-cat text-center">
        <img src="{{asset('ecom/f2.jpg')}}">
        <a href="#" title="Games &amp; Gadget " target="_self">
         Games &amp; Gadget
        </a>
        <p>60 item(s)</p>
      </div>
    </div>
    <!-- /. category -->
    <div class="col-md-2 col-sm-4 col-6 me-1 float-start">
      <div class="image-cat text-center">
        <img src="{{asset('ecom/f3.jpg')}}">
        <a href="#" title="Console &amp; Entertainment " target="_self">
        Console &amp; Entertainment
        </a>
        <p>2 item(s)</p>
      </div>
    </div>
    <!-- /. category -->
    <div class="col-md-2 col-sm-4 col-6 me-1 float-start">
      <div class="image-cat text-center">
        <img src="{{asset('ecom/f1.jpg')}}">
        <a href="#" title="Health &amp; Beauty " target="_self">
          Health &amp; Beauty
        </a>
        <p>2 item(s)</p>
      </div>
    </div>
    <!-- /. category -->
    <div class="col-md-2 col-sm-4 col-6 me-1 float-start">
      <div class="image-cat text-center">
        <img src="{{asset('ecom/f1.jpg')}}">
        <a href="#" title="Health &amp; Beauty " target="_self">
          Health &amp; Beauty
        </a>
        <p>2 item(s)</p>
      </div>
    </div>
    <!-- /. category -->
    
  </div>

</section>
<!-- /.featured category -->




<div class="bg-died py-2">
  <section id="top-section" class="container">
  <div class="row my-3">
                <div class="col-12">
                <h3 class="modtitle"><span>Featured products</span></h3>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card align-items-center">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card align-items-center">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card align-items-center">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card align-items-center">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                <!-- /.col -->

                


            </div>
  </section>
</div>

<section id="exclusive-section" class="my-3 container">
  <div class="row g-0">
    <div class="col-md-4 col-sm-6 col-6 banners-effect-1">
      <img src="{{asset('ecom/bn3.jpg')}}">
    </div>
    <div class="col-md-4 col-sm-6 col-6 ">
      <div class="row">
        <div class="col-12 banners-effect-1 my-2 ms-4">
        <img src="{{asset('ecom/bn4.jpg')}}" class="w-100">
        </div>
        <div class="col-12 banners-effect-1 my-2 ms-4">
        <img src="{{asset('ecom/bn5.jpg')}}" class="w-100">
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-6 banners-effect-1">
      <img class="float-end" src="{{asset('ecom/bn6.jpg')}}">
    </div>
  </div>

</section>
<!-- /. exclusive -->





@endsection
