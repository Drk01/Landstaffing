
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Home | Land Staffing Solutions</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fancybox/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/cubeportfolio/css/cubeportfolio.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header-center-aligned-nav u-header--bg-transparent u-header--white-nav-links-md u-header--sub-menu-dark-bg-md u-header--abs-top"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <div class="u-header-center-aligned-nav__col">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="{{ route('index') }}" aria-label="Front">
              <img src="{{ asset('img/logo.png') }}" width="150px">
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="navBar"
                    data-toggle="collapse"
                    data-target="#navBar">
              <span id="hamburgerTrigger" class="u-hamburger__box">
                <span class="u-hamburger__inner"></span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
          </div>

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="{{ route('index') }}" aria-haspopup="true" aria-expanded="false">Inicio</a>
              </li>
              <!-- End Home -->

              <!-- Pages -->
              <li class="nav-item u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="#about" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Nosotros</a>
              </li>
              <!-- End Pages -->

              <!-- Pages -->
              <li class="nav-item u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="#service" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Servicios</a>
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="nav-item u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="#contact" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Contacto</a>
              </li>
              <!-- End Blog -->
            </ul>
          </div>
          <!-- End Navigation -->

          <!-- Last Item -->
          <div class="u-header-center-aligned-nav__col u-header-center-aligned-nav__col-last-item">
            <a class="btn btn-sm btn-primary transition-3d-hover" href="#" target="_blank">
              <i class="fas fa-sign-in-alt"></i> Entrar
            </a>
          </div>
          <!-- End Last Item -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero v1 Section -->
    <div class="u-hero-v1">
      <!-- Hero Carousel Main -->
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset('img/1920x800/img1.jpg') }});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6 position-relative">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Seleccionamos
                  </span>
                  <h1 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    Las personas <span class="font-weight-semi-bold">indicada</span> para sus empleos
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset('img/1920x800/img4.jpg') }});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Realizamos
                  </span>
                  <h2 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    Más <span class="font-weight-semi-bold">contrataciones </span> de calidad.
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging -->
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
      <!-- End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="h5 text-muted">
                    <span class="d-block text-primary">Su próximo empleado está aquí.</span>
                  </h3>
                  <p class="mb-0">Ayuda todos los días a las empresas a encontrar a su candidato ideal. Empiece a contratar en la página web de empleos número 1 del mundo.</p>
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block bg-primary u-hero-v1__last">
              <div class="u-hero-v1__last-inner">
                <h3 class="h5 text-white">
                  <strong class="d-block">01.</strong>
                  Llegue al mayor número de candidatos hoy
                </h3>
                <p class="text-white-70 mb-0">Publique sus empleos online para atraer talento desde dispositivos móviles y computadoras.</p>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="h5 text-muted">
                    <strong class="d-block">02.</strong>
                    <span class="d-block text-danger">Registrate</span>
                  </h3>
                  <p class="mb-0">Cree una cuenta e introduzca su descripción de empleo.</p>
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block bg-danger u-hero-v1__last">
              <div class="u-hero-v1__last-inner">
                <h3 class="h5 text-white">
                  <strong class="d-block">03.</strong>
                    <span class="d-block text-light">Postulate</span>
                </h3>
                <p class="text-white-70 mb-0">Revise solicitudes, gestione candidatos y programe entrevistas desde su cuenta.</p>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->

    <hr class="my-0">

    <!-- Front in Frames Section -->
    <div id="about" class="overflow-hidden">
      <div class="container space-2 space-md-3">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <span class="btn btn-xs btn-soft-success btn-pill mb-2">Nosotros</span>
                <h2 class="text-primary">Land Staffing <span class="font-weight-semi-bold">Solution</span></h2>
                <p>Somos un Grupo Empresarial con experiencia en el sector de las Empresas de Servicios Temporales (EST) y Outsourcing.</p>
                <p>Buscamos alinear sus procesos de Gestión Humana, facilitando e identificando las necesidades particulares de su organización.</p>
                <p>Nuestra promesa de valor para su empresa es brindarle una solución eficiente en la contratación de personal en misión, con resultados medibles en el tiempo, mejorando el retorno a los recursos económicos invertidos por su organización.</p>

                <p>Contamos con respaldo regional y prácticas exitosas en la generación de empleo del país.</p>
              </div>
              <!-- End Title -->
            </div>
          </div>

          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">
              <div class="col-5 align-self-end px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/1920x1080/img2.jpg') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #01"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/320x320/img1.jpg')}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-7 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/1920x1080/img4.jpg') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #02"
                   data-speed="700">
                  <img class="img-fluid rounded" src="/img/450x450/img1.jpg" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 offset-1 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/1920x1920/img1.jpg') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #03"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/280x310/img1.jpg')}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/1920x1080/img3.jpg')}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #04"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/300x180/img1.jpg')}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>
            </div>
            <!-- End Image Gallery -->

            <!-- SVG Background Shape -->
            <div id="SVGbgShapeID1" class="svg-preloader w-100 content-centered-y z-index-n1">
              <figure class="ie-soft-triangle-shape">
                <img class="js-svg-injector" src="{{ asset('svg/components/soft-triangle-shape.svg')}}" alt="Image Description"
                     data-parent="#SVGbgShapeID1">
              </figure>
            </div>
            <!-- End SVG Background Shape -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Front in Frames Section -->

    <!-- Devices v2 Section -->
    <div id="SVGSubscribe" class="svg-preloader bg-primary u-devices-v2">
      <div class="container space-2 space-md-3 position-relative z-index-2">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto">
          <span class="btn btn-lg btn-icon btn-white rounded-circle mb-4">
            <span class="fas fa-id-card text-primary btn-icon__inner"></span>
          </span>
          <h2 class="h1 text-white">Registra tu <span class="font-weight-semi-bold">Hoja de vida</span></h2>
          <p class="lead text-white-70 mb-0">Registrate en nuestra base de datos y comienza a disfrutar de nuestros beneficios, es muy facil!.</p>
          <a class="btn btn-primary btn-wide transition-3d-hover mt-4" href="#">Registrate aquí</a>
        </div>
        <!-- End Title -->
      </div>

      <!-- Devices v2 -->
      <div class="d-none d-lg-block">
        <!-- SVG Tablet Mockup -->
        <div class="u-devices-v2__tablet">
          <div class="w-75 u-devices-v2__tablet-svg">
            <figure class="ie-devices-v2-tablet">
              <img class="js-svg-injector" src="{{ asset('svg/components/tablet.svg')}}     " alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGtabletImg1", "newPath": "{{ asset('img/533x711/img4.jpg') }}"}
                   ]'
                   data-parent="#SVGSubscribe">
            </figure>
          </div>
        </div>
        <!-- End SVG Tablet Mockup -->

        <!-- SVG Phone Mockup -->
        <div class="u-devices-v2__phone">
          <div class="w-75 u-devices-v2__phone-svg">
            <figure class="ie-devices-v2-iphone">
              <img class="js-svg-injector" src="{{ asset('svg/components/iphone.svg')}}" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGiphoneImg1", "newPath": "{{ asset('img/282x500/img7.png')}}"}
                   ]'
                   data-parent="#SVGSubscribe">
            </figure>
          </div>
        </div>
        <!-- End SVG Phone Mockup -->
      </div>
      <!-- End Devices v2 -->

      <!-- SVG Background Shape -->
      <figure class="w-100 content-centered-y position-absolute right-0 bottom-0">
        <img class="js-svg-injector" src="{{ asset('svg/components/process-pointer-1.svg')}}" alt="Image Description"
             data-parent="#SVGSubscribe">
      </figure>
      <!-- End SVG Background Shape -->
    </div>
    <!-- End Devices v2 Section -->

    <!-- Process Section -->
<div class="container space-2">
  <div class="row">
    <div class="col-md-4 mb-7 mb-md-0">
      <!-- Process -->
      <div class="text-center">
        <div class="position-relative">
          <div id="SVGcircleProcess1" class="svg-preloader u-indicator-dots min-height-155 mb-2">
            <!-- Icon -->
            <span class="text-success btn btn-lg btn-icon mt-7">
              <span class="fab fa-yelp font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
            </span>
            <!-- End Icon -->

            <!-- SVG Shape -->
            <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
              <img class="js-svg-injector" src="{{ asset('svg/components/circle-process-1.svg')}}" alt="Image Description"
                   data-parent="#SVGcircleProcess1">
            </figure>
            <!-- End SVG Shape -->
          </div>
        </div>

        <h3 class="h5">Mision</h3>
        <p class="mb-md-0">Optimizar los recursos humanos de su empresa a través de la selección y evaluación de personal directivo, contribuyendo así a la mejora de su productividad y competitividad.</p>
      </div>
      <!-- End Process -->
    </div>

    <div class="col-md-4 mb-7 mb-md-0">
      <!-- Process -->
      <div class="text-center">
        <div class="position-relative">
          <div id="SVGcircleProcess2" class="svg-preloader u-indicator-dots min-height-155 mb-2">
            <!-- Icon -->
            <span class="text-primary btn btn-lg btn-icon mt-7">
              <span class="fas fa-fire font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
            </span>
            <!-- End Icon -->

            <!-- SVG Shape -->
            <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
              <img class="js-svg-injector" src="{{ asset('svg/components/circle-process-2.svg')}}" alt="Image Description"
                   data-parent="#SVGcircleProcess2">
            </figure>
            <!-- End SVG Shape -->
          </div>
        </div>

        <h3 class="h5">Vision</h3>
        <p class="mb-md-0">Ser líder en el sector de la búsqueda, selección y evaluación de personal, adaptándonos a las necesidades reales de cada organización, y guiados en todo momento por valores como la excelencia, confidencialidad, disiplina y metodológia.</p>
        <!-- End Process -->
      </div>
    </div>

    <div class="col-md-4">
      <!-- Process -->
      <div class="text-center">
        <div id="SVGcircleProcess3" class="svg-preloader min-height-155 mb-2">
          <!-- Icon -->
          <span class="text-danger btn btn-lg btn-icon mt-7">
            <span class="fab fa-whmcs font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
          </span>
          <!-- End Icon -->

          <!-- SVG Shape -->
            <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
              <img class="js-svg-injector" src="{{ asset('svg/components/circle-process-3.svg')}}" alt="Image Description"
                   data-parent="#SVGcircleProcess3">
            </figure>
            <!-- End SVG Shape -->
        </div>

        <h3 class="h5">Valores</h3>
        <p class="mb-md-0">Integridad, Confidencialidad, Discreción, Compromiso, Implicación, Innovación, Orientación al cliente, Orientación a resultados.</p>
        <!-- End Process -->
      </div>
    </div>
  </div>
</div>
<!-- End Process Section -->

    <!-- Hero Section -->
    <div id="SVGheroSectionBg" class="svg-preloader position-relative gradient-half-primary-v3">
      <div class="container space-2 space-top-md-2 space-top-lg-1">
        <div class="row align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Info -->
            <h1 class="mb-4">Nosotros tenemos la mejor <span class="text-primary font-weight-semi-bold">solucion</span> para tí.</h1>
            <p>¡110% de Garantía de que el Empleado cumplirá sus metas!.</p>
            <!-- End Info -->
          </div>

          <div class="col-lg-7">
            <!-- SVG Icon -->
            <figure class="ie-we-have-an-idea">
              <img class="js-svg-injector" src="{{ asset('svg/illustrations/we-have-an-idea.svg')}}" alt="Image Description"
                   data-parent="#SVGheroSectionBg">
            </figure>
            <!-- End SVG Icon -->
          </div>
        </div>
      </div>

      <!-- SVG Background -->
      <figure class="position-absolute right-0 bottom-0 left-0">
        <img class="js-svg-injector" src="{{ asset('svg/components/wave-1-bottom-sm.svg')}}" alt="Image Description"
             data-parent="#SVGheroSectionBg">
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Front for -->
    <div id="service" class="container space-2 space-bottom-md-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Nuestros Servicios</span>
        <h2 class="text-primary font-weight-normal">Que <span class="font-weight-semi-bold">servicios</span> ofrecemos?</h2>
        <p>Diseñamos procesos específicos que solucionarán su necesidades, al tercerizar estos servicios usted mejorará la productividad y sus costos operativos disminuirán, permitiéndole enfocarse en el propósito de su negocio.</p>
      </div>
      <!-- End Title -->

      <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
          <!-- Info -->
          <div class="pl-lg-7">
            <div class="mb-4">
              <h3 class="h5">Servicios Temporales</h3>
              <p>Enviamos trabajadores en misión a todo el territorio nacional, de personas previamente seleccionadas que cumplen con el perfil apropiado para su compañía, permitiendo la flexibilización en la contratación de mano de obra de acuerdo con las necesidades particulares de su empresa y acordes a la legislación colombiana.</p>
            </div>

            <!-- Link -->
            <!--a class="card border-0 shadow-sm" href="#">
              <div class="card-body p-4">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="{{ asset('img/icons/img2.png')}}" alt="Image Description">
                  </div>
                  <span class="media-body">
                    <span class="d-flex justify-content-between align-items-center font-weight-semi-bold">
                     Mas informacion <span class="fas fa-angle-right"></span>
                    </span>
                  </span>
                </div>
              </div>
            </a-->
            <!-- End Link -->
          </div>
          <!-- End Info -->
        </div>

        <div id="SVGchattingGirl" class="col-lg-7 order-lg-1 svg-preloader">
          <!-- SVG Icon -->
          <figure class="ie-chatting-girl">
            <img class="js-svg-injector" src="{{ asset('svg/illustrations/chatting-girl.svg')}}" alt="Image Description"
                 data-parent="#SVGchattingGirl">
          </figure>
          <!-- End SVG Icon -->
        </div>
      </div>
    </div>
    <!-- End Front for -->

    <!-- About Section -->
    <div class="container space-2 space-md-1">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 mb-7 mb-lg-0">
          <!-- Info -->
          <div class="pr-lg-7">
            <div class="mb-4">
              <h3 class="h5">Outsourcing de Selección Técnica de Personal</h3>
              <p>Encontramos los candidatos que cumplen con los requisitos, conocimiento y competencias determinadas para ocupar cargos específicos en su compañía.</p>
            </div>

            <!-- Link -->
            <!--a class="card border-0 shadow-sm" href="#">
              <div class="card-body p-4">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="{{ asset('img/icons/img1.png')}}" alt="Image Description">
                  </div>
                  <span class="media-body">
                    <span class="d-flex justify-content-between align-items-center font-weight-semi-bold">
                     Mas informacion <span class="fas fa-angle-right"></span>
                    </span>
                  </span>
                </div>
              </div>
            </a-->
            <!-- End Link -->
          </div>
          <!-- End Info -->
        </div>

        <div id="SVGchattingBoy" class="col-lg-7 svg-preloader">
          <!-- SVG Icon -->
          <figure class="ie-chatting-boy">
            <img class="js-svg-injector" src="{{ asset('svg/illustrations/chatting-boy.svg')}}" alt="Image Description"
                 data-parent="#SVGchattingBoy">
          </figure>
          <!-- End SVG Icon -->
        </div>
      </div>
    </div>
    <!-- End About Section -->
    <div id="contact" class="container space-2 space-md-1">
      <h2 class="text-primary font-weight-normal text-center"><span class="font-weight-semi-bold">Contactenos</span></h2>
    <div class="row">
      <div class="col">
        <!-- SVG Icon -->
          <figure class="ie-chatting-boy">
            <img class="js-svg-injector" src="{{ asset('svg/illustrations/contact_us.svg')}}" alt="Image Description"
                 data-parent="#SVGchattingBoy">
          </figure>
          <!-- End SVG Icon -->
      </div>
      <div class="col">
        <!-- Contacts Form -->
        <form class="js-validate">
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label class="form-label">
                  Nombre
                  <span class="text-danger">*</span>
                </label>

                <input type="text" class="form-control" name="name" placeholder="tu nombre" aria-label="tu nombre" required
                       data-msg="Por favor, ingrese su nombre."
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label class="form-label">
                  Correo
                  <span class="text-danger">*</span>
                </label>

                <input type="email" class="form-control" name="email" placeholder="correo@email.com" aria-label="correo@email.com" required
                       data-msg="Por favor, ingrese un correo valido."
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
            </div>
            <!-- End Input -->

            <div class="w-100"></div>

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label class="form-label">
                  Asunto
                  <span class="text-danger">*</span>
                </label>

                <input type="text" class="form-control" name="subject" placeholder="suscripcion" aria-label="suscripcion" required
                       data-msg="Por favor, ingresa un asunto"
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label class="form-label">
                  Telefono
                  <span class="text-danger">*</span>
                </label>

                <input type="number" class="form-control" name="phone" placeholder="000-000-0000" aria-label="000-000-0000" required
                       data-msg="Por favor, ingresa un numero de telefono valido"
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
            </div>
            <!-- End Input -->
          </div>

          <!-- Input -->
          <div class="js-form-message mb-6">
            <label class="form-label">
              ¿Como te podemos ayudar?
              <span class="text-danger">*</span>
            </label>

            <div class="input-group">
              <textarea class="form-control" rows="4" name="text" placeholder="Hola, me gustaria..." aria-label="Hola, me gustaria..." required
                        data-msg="Por favor explicanos lo que necesitas"
                        data-error-class="u-has-error"
                        data-success-class="u-has-success"></textarea>
            </div>
          </div>
          <!-- End Input -->

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Enviar</button>
            <p class="small">Nosotros nos comunicaremos contigo en 72 horas.</p>
          </div>
        </form>
        <!-- End Contacts Form -->
              </div>
    </div>
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="container space-top-2 space-top-md-3">
    <div class="border-bottom">
      <div class="row mb-7">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <div class="d-inline-flex align-self-start flex-column h-100">
            <!-- Logo -->
            <a class="d-flex align-items-center mb-3" href="/" aria-label="Front">
              <img src="{{ asset('img/logo.png')}}" width="150px">
            </a>
            <!-- End Logo -->

            <!-- Country -->
            <div class="position-relative">
              <a id="footerCountryInvoker" class="dropdown-nav-link" href="javascript:;" role="button"
                 aria-controls="footer-country"
                 aria-haspopup="true"
                 aria-expanded="false"
                 data-toggle="dropdown"
                 data-unfold-event="click"
                 data-unfold-target="#footer-country"
                 data-unfold-type="css-animation"
                 data-unfold-duration="300"
                 data-unfold-delay="300"
                 data-unfold-hide-on-scroll="false"
                 data-unfold-animation-in="slideInUp"
                 data-unfold-animation-out="fadeOut">
                <img class="dropdown-item-icon" src="{{ asset('vendor/flag-icon-css/flags/4x3/co.svg')}}" alt="United States Flag">
                <span>Colombia</span>
              </a>
              </div>
            <!-- End Country -->
          </div>
        </div>

        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 mb-md-0">
          <h4 class="h6 font-weight-semi-bold">Acceso Rapido</h4>

          <!-- List Group -->
          <ul class="list-group list-group-flush list-group-borderless mb-0">
            <li><a class="list-group-item list-group-item-action" href="/">Inicio</a></li>
            <li><a class="list-group-item list-group-item-action" href="#about">Nosotros</a></li>
            <li><a class="list-group-item list-group-item-action" href="#service">Servicios</a></li>
            <li><a class="list-group-item list-group-item-action" href="#contact">Contacto</a></li>
          </ul>
          <!-- End List Group -->
        </div>

        <div class="col-md-3 col-lg-2">
          <h4 class="h6 font-weight-semi-bold">Contacto</h4>

          <!-- Address -->
          <address>
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li class="list-group-item">+1 (408) 401 0338</li>
              <li class="list-group-item">
                <a href="mailto:support@htmlstream.com">landstaffingsoluons@gmail.com</a>
              </li>
              <li class="list-group-item">3180 Rubino Dr.</li>
            </ul>
          </address>
          <!-- End Address -->
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between align-items-center py-7">
      <!-- Copyright -->
      <p class="small text-muted mb-0">&copy; Pagina diseñada por <a href="//www.aitheria.tech">Aitheria SAS.</a> 2019 Tecnhology.</p>
      <!-- End Copyright -->

      <!-- Social Networks -->
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
            <span class="fab fa-facebook-f btn-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
            <span class="fab fa-google btn-icon__inner"></span>
          </a>
        </li>        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
            <span class="fab fa-instagram btn-icon__inner"></span>
          </a>
        </li>
      </ul>
      <!-- End Social Networks -->
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
  <script src="{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('vendor/slick-carousel/slick/slick.js') }}"></script>
  <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('js/hs.core.js') }}"></script>
  <script src="{{ asset('js/components/hs.header.js') }}"></script>
  <script src="{{ asset('js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('js/components/hs.fancybox.js') }}"></script>
  <script src="{{ asset('js/components/hs.slick-carousel.js') }}"></script>
  <script src="{{ asset('js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('js/components/hs.focus-state.js') }}"></script>
  <script src="{{ asset('js/components/hs.cubeportfolio.js') }}"></script>
  <script src="{{ asset('js/components/hs.svg-injector.js') }}"></script>
  <script src="{{ asset('js/components/hs.go-to.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
