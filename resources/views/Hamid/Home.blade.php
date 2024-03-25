@extends('layouts._hamid')

@section('content')
    <!-- START LOADER -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class='navbar-brand logo' href='index_1.html'>
                <img src="assets/images/logo.png" alt="" class="img-fluid logo-light">
                <img src="assets/images/logo-dark.png" alt="" class="img-fluid logo-dark">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#education" class="nav-link">Education</a>
                    </li>
                    <li class="nav-item">
                        <a href="#work" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#client" class="nav-link">Client</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- Start All Cards -->
    <!--Start Home-->
    <section class="home-bg section h-100vh" id="home">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-white text-center">
                        <h4>Bonjour & Welcome</h4>
                        <h1 class="header_title mb-0 mt-3">Je Suis <span class="element fw-bold"
                                data-elements="TCHEMOKO A. Hamid ,Un Designer.,Un Devloper."></span></h1>
                        <ul class="social_home list-unstyled text-center pt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a>
                            </li>
                        </ul>
                        <div class="header_btn">
                            <a href="javascript:void(0)" class="btn btn-outline-custom btn-rounded mt-4">Telecharger CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_down">
            <a href="#about" class="scroll">
                <i class="mbri-arrow-down text-white"></i>
            </a>
        </div>
    </section>
    <!--END HOME-->

    <!-- START ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2><span class="fw-bold">À propos de </span>Moi</h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">Je suis passionné par le développement web et le graphisme.
                            J'aime créer des expériences utilisateur uniques et des designs innovants qui captivent
                            l'attention et offrent une valeur ajoutée. Avec un engagement envers l'excellence et une volonté
                            constante d'apprendre et de m'améliorer, je cherche toujours à repousser les limites de la
                            créativité et de la technologie.</p>

                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div>
                            <img src="assets/images/sign.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="text-center about-detail mx-auto mt-5">
                            <h3 class="mb-3">Salut! <span class="fw-bold text-custom">I'M TCHEMOKO A. Hamid</span></h3>
                            <ul class="mb-0 list-inline text-center about-work">
                                <li class="list-inline-item me-0 text-muted">Graphiste Designer</li>
                                <li class="list-inline-item me-0 text-muted">Développeur</li>
                            </ul>
                            <p class="text-muted mt-3">Un graphiste et développeur web est un professionnel polyvalent qui
                                allie créativité visuelle et compétences techniques pour concevoir des interfaces
                                utilisateur exceptionnelles et des expériences web uniques. Grâce à sa maîtrise des outils
                                de conception graphique et de développement web, il crée des sites web esthétiques,
                                intuitifs et fonctionnels. Son expertise en matière de conception lui permet de concevoir
                                des mises en page attractives, des icônes personnalisées et des visuels accrocheurs, tandis
                                que ses compétences en développement lui permettent d'intégrer ces éléments de manière
                                fluide et efficace dans le code.  Avec son sens aigu du design et sa solide
                                compréhension du développement web, le graphiste et développeur web crée des expériences en
                                ligne engageantes et mémorables pour ses clients et leurs utilisateurs.</p>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="progress-bars skill-custom">
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Development</div>
                                    <div class="text-muted float-right">80%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">WordPress</div>
                                    <div class="text-muted float-right">59%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Photoshop</div>
                                    <div class="text-muted float-right">88%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Adobe Illustrator</div>
                                    <div class="text-muted float-right">58%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="58"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress-bars skill-custom">
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Html</div>
                                    <div class="text-muted float-right">96%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Css</div>
                                    <div class="text-muted float-right">70%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Laravel</div>
                                    <div class="text-muted float-right">96%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Python</div>
                                    <div class="text-muted float-right">58%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="58"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Django</div>
                                    <div class="text-muted float-right">28%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="28"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark fw-bold float-left">Canva</div>
                                    <div class="text-muted float-right">100%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SERVICES -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2>Nos <span class="fw-bold">Services</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">Il est bien établi qu'un lecteur sera distrait par le contenu
                            lisible d'une page lorsqu'il regardera sa mise en page.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-database"></i>

                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Conception Graphique</h5>
                            <p class="mt-3 text-muted mb-0">Création d'éléments visuels attrayants et professionnels pour
                                vos projets web, y compris logos, icônes, illustrations et graphiques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-desktop"></i>
                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Création de Sites Web</h5>
                            <p class="mt-3 text-muted mb-0">Développement de sites web modernes, responsifs et conviviaux,
                                répondant aux besoins spécifiques de votre entreprise et de votre public cible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-growing-chart"></i>
                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Marketing Médias</h5>
                            <p class="mt-3 text-muted mb-0">Stratégies de marketing numérique innovantes pour promouvoir
                                votre entreprise et maximiser votre visibilité en ligne.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-server"></i>
                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Hébergement de Site Web</h5>
                            <p class="mt-3 text-muted mb-0">Hébergement fiable et sécurisé de votre site web sur nos
                                serveurs performants, garantissant une disponibilité maximale et une expérience utilisateur
                                optimale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-search"></i>
                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Référencement SEO</h5>
                            <p class="mt-3 text-muted mb-0">Optimisation de votre site web pour les moteurs de recherche
                                afin d'augmenter sa visibilité et de générer un trafic organique de qualité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="lan_box_ser text-center rounded p-4 mt-3">
                        <div class="ser_icon">
                            <i class="mbri-edit"></i>
                        </div>
                        <div class="service-content mt-4">
                            <h5 class="fw-bold">Facile à Personnaliser</h5>
                            <p class="mt-3 text-muted mb-0">Conception de sites web et de graphiques avec une structure
                                modulaire et des options de personnalisation faciles, vous permettant de mettre à jour
                                facilement votre contenu et votre design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- END SERVICES -->

    <!-- END FUNFACTS -->
    <section class="section bg-funfact">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row" id="counter">
                <div class="col-lg-3">
                    <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                        <div class="lan_fun_icon mb-3">
                            <i class="mbri-timer h1"></i>
                        </div>
                        <h1 class="lan_fun_value mb-1" data-count="654">4</h1>
                        <p class="lan_fun_name mb-0">Heures de travail</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                        <div class="lan_fun_icon mb-3">
                            <i class="mbri-gift h1"></i>
                        </div>
                        <h1 class="lan_fun_value mb-1" data-count="6400">10</h1>
                        <p class="lan_fun_name mb-0">Projets terminés</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                        <div class="lan_fun_icon mb-3">
                            <i class="mbri-user h1"></i>
                        </div>
                        <h1 class="lan_fun_value mb-1" data-count="2389">201</h1>
                        <p class="lan_fun_name mb-0">Nombre de clients</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                        <div class="lan_fun_icon mb-3">
                            <i class="mbri-users h1"></i>
                        </div>
                        <h1 class="lan_fun_value mb-1" data-count="653">2</h1>
                        <p class="lan_fun_name mb-0">Membre de l'équipe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START FUNFACTS -->

    <!-- START EXP. & EDU. -->
    <section class="section" id="education">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2><span class="fw-bold">Education & Experience</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-5">
                    <div class="cv_edu_exp mt-3">
                        @foreach ($educations as $education)
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">
                                            {{ $education->annee_obtention }}</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>{{ $education->diplome }}</h4>
                                            <p class="cv_desc mb-0">{{ $education->universite }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="cv_edu_exp mt-3">
                        @foreach ($experiences as $experience)
                            <div class="cv_edu_exp_box mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cv_edu_exp_year fw-bold text-custom position-relative">
                                            {{ $experience->annee_debut }} - {{ $experience->annee_fin }}</div>
                                        <div class="cb_edu_exp_detail">
                                            <h4>{{ $experience->poste }}</h4>
                                            <p class="cv_desc mb-0">{{ $experience->entreprise }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END EXP. & EDU. -->

    <!-- START CTA -->
    <section class="section bg-cta">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-white">
                        <h1>Je Suis Disponible Pour des Projets Freelance.</h1>
                        <div class="mt-4">
                            <a href="https://wa.me/90788877" class="btn btn-outline-custom">Me Contacter!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- END CTA -->

    <!--START WORK -->
    <section class="section text-center" id="travail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2>Nos <span class="fw-bold">Travaux</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">Il est un fait établi depuis longtemps qu'un lecteur sera distrait
                            par le contenu lisible d'une page lorsqu'il regardera sa mise en page.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <ul class="text-center list-unstyled list-inline mb-0 text-capitalize work_menu" id="menu-filter">
                        <li class="list-inline-item"><a class="active" data-filter="*">Tous</a></li>
                        <!-- Ajouter d'autres catégories ici si nécessaire -->
                    </ul>
                </div>
            </div>
            <div class="row mt-5 work-filter">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 {{ $portfolio->categorie }}">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{ asset(str_replace('public', 'storage', $portfolio->image))  }}"></a>
                            <div class="work_images">
                                <img src="{{ asset(str_replace('public', 'storage', $portfolio->image)) }}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4 class="mb-0">{{ $portfolio->titre }}</h4>
                                    <h6 class="mb-0">{{ $portfolio->categorie }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!--END WORK -->

    <!-- START CLIENT -->
    <section class="section bg-client" id="client">
        <div class="bg-overlay"></div>
        <div class="container z-index">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto text-white section-main-title">
                        <h2>Our <span class="fw-bold">Client</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="mx-auto mt-2">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-12">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 fw-bold mb-0">Kirk McFall</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text
                                        is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy
                                        text is also incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                            <div class="carousel-item text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 fw-bold mb-0">Edward Evans</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text
                                        is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy
                                        text is also incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                            <div class="carousel-item text-white people_says text-center">
                                <div class="people_icon">
                                    <i class="mbri-user"></i>
                                </div>
                                <div class="people_review_box mt-4">
                                    <p class="people_name text-white h5 fw-bold mb-0">Antonio Hernandez</p>
                                    <p class="h6">Google</p>
                                    <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy text
                                        is the 'Lorem Ipsum', which is said originated the 16th century. This ancient dummy
                                        text is also incomprehensible, of most European in Latin script."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT -->

    <!-- START GREAT PEOPLE -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2>Trusted by <span class="fw-bold">Great People</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="assets/images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GREAT PEOPLE -->

    <!-- START SUBCRIBE  -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2><span class="fw-bold">Subscribe</span> to Newsletter </h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-12">
                    <div class="text-center subcribe-newslatter mt-4">
                        <form class="mx-auto position-relative">
                            <input type="text" placeholder="Email" required>
                            <button type="submit" class="btn btn-custom">Subcribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SUBCRIBE -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2>Our <span class="fw-bold">Blog</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4 mt-3">
                    <div class="text-center rounded bg-white p-2">
                        <div class="img_blog">
                            <img src="assets/images/blog/blog-1.jpg" alt=""
                                class="img-fluid rounded mx-auto d-block">
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>There are many
                                        variations</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Lifestyle</a>
                                </p>
                                <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)"
                                        class="text-dark fw-bold">By Envato</a></p>
                                <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor
                                    nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read
                                        More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="text-center rounded bg-white p-2">
                        <div class="blog_video position-relative">
                            <div class="img_blog">
                                <img src="assets/images/blog/blog-2.jpg" alt=""
                                    class="img-fluid rounded mx-auto d-block">
                            </div>
                            <a href="http://vimeo.com/99025203" class="blog_play"><i class="mdi mdi-play"></i></a>
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>Contrary to
                                        popular belief</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Travel</a>
                                </p>
                                <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)"
                                        class="text-dark fw-bold">By Envato</a></p>
                                <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor
                                    nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read
                                        More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="text-center rounded bg-white p-2">
                        <div class="img_blog">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/images/blog/blog-3.jpg" alt=""
                                            class="img-fluid rounded mx-auto d-block">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/blog/blog-4.jpg" alt=""
                                            class="img-fluid rounded mx-auto d-block">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/blog/blog-5.jpg" alt=""
                                            class="img-fluid rounded mx-auto d-block">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="prev">
                                    <span class="mbri-arrow-prev" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="next">
                                    <span class="mbri-arrow-next" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="fw-bold mb-0"><a class='text-dark' href='blog-sidebar.html'>Lorem Ipsum is not
                                        simply</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="fw-bold h6 mb-3"><a href="javascript:void(0)" class="text-custom">Food &
                                        Drinks</a></p>
                                <p class="h6 text-muted date_blog mb-0">11 August 2023 <a href="javascript:void(0)"
                                        class="text-dark fw-bold">By Envato</a></p>
                                <p class="mt-3 desc_blog px-2 text-muted">Sit sagittis vulputate laoreet sodales tortor
                                    nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a class='text-muted fw-bold' href='blog-sidebar.html'>Read
                                        More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mx-auto section-main-title">
                        <h2>Get In <span class="fw-bold">Touch</span></h2>
                        <div class="main-title-border">
                            <i class="mdi mdi-asterisk"></i>
                        </div>
                        <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-lg-4">
                <div class="col-lg-4">
                    <div class="text-center mt-4">
                        <div>
                            <i class="mbri-mobile2 text-custom h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Call Us On</p>
                            <p class="text-muted">+229 90 78 88 77</p>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <div>
                            <i class="mbri-letter text-custom h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Email Us At</p>
                            <p class="text-muted">hamidtchemoko9@mail.com</p>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <div>
                            <i class="mbri-pin text-custom h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Bénin </p>
                            <p class="text-muted">Cotonou</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form method="post" action="https://elvish-html.netlify.app/html/php/contact.php"
                            name="contact-form" id="working_form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2 mb-3">
                                        <label for="name" class="fw-bold mb-2">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name..." required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2 mb-3">
                                        <label for="email" class="fw-bold mb-2">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email..." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3">
                                        <label for="subject" class="fw-bold mb-2">Subject</label>
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3">
                                        <label for="comments" class="fw-bold mb-2">Message</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" id="submit" name="send"
                                        class="submitBnt btn btn-custom">Send Message</button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!-- START FOOTER -->
    <section class="bg-light">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="float-start mt-2 mb-2">
                            <p class="copy-rights text-muted mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> &copy; Hamid_Porfolio
                                <a class="text-muted" href="#!">

                                </a>
                            </p>
                        </div>
                        <div class="float-end mt-2 mb-2">
                            <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer -->
    <!-- End All Cards -->

    <!-- BACK TO TOP -->
    <a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>
@endsection
