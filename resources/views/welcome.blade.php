@extends('layouts.app',['title'=>'Accueil'])

@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset("assets/img/slider1.jpg")}}" class="d-block w-100 img-fluid" alt="tomates">
              </div>
              <div class="carousel-item">
                <img src="{{asset("assets/img/slider2.jpg")}}" class="d-block w-100 img-fluid"  alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset("assets/img/slider3.jpg")}}" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset("assets/img/slider4.jpg")}}" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset("assets/img/slider5.jpg")}}" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- ======= Partners Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Partners Section -->

        <!-- ======= Nouveaux produits Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Nouvelles récoltes</h2>
                    Les produits frais du moment.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">

                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/tendance/tendance1.jpg")}}" class="img-fluid" alt=""></a>
                            </div>

                            <div class="member-info">
                                <a href="#">
                                    <h4>Graine de palme</h4>
                                    <span>Vendu au Kilo</span>
                                    <span>1000 Fcfa</span>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/tendance/tendance2.jpg")}}" class="img-fluid" alt=""></a>
                            </div>
                                <div class="member-info">
                                    <a href="#">
                                        <h4>Oignon africain</h4>
                                        <span>Vendu au kilo</span>
                                        <span>400 Fcfa</span>
                                    </a>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/tendance/tendance3.jpg")}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="">
                                    <h4>Pomme de terre</h4>
                                    <span>Vendu au kilo</span>
                                    <span>600 Fcfa</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/tendance/tendance4.jpg")}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="#">
                                    <h4>Mangue greffée</h4>
                                    <span>Vendu au tas</span>
                                    <span>300 Fcfa</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End new recolte Section -->

        <!-- ======= Categories Section ======= -->
        <section id="services" class="services">
            <div class="container grid">
                <div class="section-title">
                    <h2>Catégories</h2>
                    <p>Nous proposons une multitude de produits agricoles</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/tubercule.jpg")}}" class="img-fluid cat" alt="">
                                    <figcaption>
                                        <div>
                                            <h4 class="title"><a href="">Tubercules</a></h4>
                                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                        </div>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/legume.jpg")}}" class="img-fluid cat1" alt="">
                                    <figcaption>
                                        <h4 class="title"><a href="">Légumes</a></h4>
                                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/fruit.jpg")}}" class="img-fluid " alt="">
                                    <figcaption>
                                        <div>
                                            <h4 class="title"><a href="">Fruits</a></h4>
                                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/lait.jpg")}}" class="img-fluid " alt="">
                                    <figcaption>
                                        <div>
                                            <h4 class="title"><a href="">Produits laitiers</a></h4>
                                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/viande.jpg")}}" class="img-fluid " alt="">
                                    <figcaption>
                                        <div>
                                            <h4 class="title"><a href="">Viandes</a></h4>
                                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                                        </div>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div>
                            <figure class="effect-milo">
                                <img src="{{asset("assets/img/categories/attieke.jpg")}}" class="img-fluid" alt="">
                                <figcaption>
                                    <div>
                                        <h4 class="title"><a href="">Attiéké</a></h4>
                                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Categories Section -->

        <!-- ======= Call to action Section ======= -->
        <section id="about_welcome" class="about_welcome">
            <div class="container">
                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Diidi vous facilite l'approvisionnement</h3>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <a href="#" class="about-btn">En savoir plus <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call to action -->

        <!-- ======= Products Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title">
                    <h2>Produits</h2>
                    Les produits frais du moment.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/product/product1.jpg")}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="member-info">
                                    <a href="#">
                                        <h4>Graine de palme</h4>
                                        <span>Vendu au Kilo</span>
                                        <span>1000 Fcfa</span>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/product/product2.jpg")}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="member-info">
                                <a href="#">
                                    <h4>Oignon africain</h4>
                                    <span>Vendu au kilo</span>
                                    <span>400 Fcfa</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/product/product3.jpg")}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="">
                                    <h4>Pomme de terre</h4>
                                    <span>Vendu au kilo</span>
                                    <span>600 Fcfa</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <a href="#"><img src="{{asset("assets/img/product/product4.jpg")}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="member-info">
                                <a href="#">
                                    <h4>Mangue greffée</h4>
                                    <span>Vendu au tas</span>
                                    <span>300 Fcfa</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tendance Section -->

        <!-- ======= Gallerie Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="section-title">
                    <h2>Gallerie</h2>
                    <p>Nous collaborons exclusivement qu'avec des agriculteurs locaux. Nos produits sont donc à 100% du made in Côte d'Ivoire.</p>
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Gallery Section -->

            <!-- ======= Localisation Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Localisation</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.4838936194624!2d-4.219178285998149!3d5.927823595705849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1118d498cb819%3A0x998a96fcb50dd579!2sCOOPASA%20AGBOVILLE%20(COOPERATIVE%20AGRICOLE)!5e0!3m2!1sfr!2sci!4v1622214216000!5m2!1sfr!2sci" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section><!-- End Localisation Section -->

    </section>
@endsection
