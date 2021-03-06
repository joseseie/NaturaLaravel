
<!DOCTYPE html>

<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
<title>Natura - @yield('titulo')</title>
<!-- Favicons -->
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/icons/favico-50x50.ico') }}" rel="icon"/>
<!-- RequireNaturaWebSite/naturamoz.org.mz/d CSS files -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/owl.carousel.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/barfiller.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/animate.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/font-awesome.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/slicknav.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/css/main.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/nav/nav.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/unpkg.com/tailwindcss%401.1.4/dist/tailwind.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home/css/partners.css') }}" rel="stylesheet"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/blog2/css/blog.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/nav/modalNav.css') }}" rel="stylesheet" type="text/css"/>
{{-- blog --}}
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/blog2/blog/style.css')}}" rel="stylesheet" type="text/css"/>
{{-- video --}}
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/videos/css/style.css') }}" rel="stylesheet"/>
<!-- Fotos -->
<link href="{{ asset('NaturaWebSite/naturamoz.org.mz/static/gallery2/css/style.css') }}" media="all" rel="stylesheet" type="text/css">














<script src="NaturaWebSite/127.0.0.1_35729/livereload.js"></script></head>
<body class="bg-color" style="margin: 0; @yield('bg')">
<div class="preloader">
<span class="preloader-spin"></span>
</div>
<div class="site">
<header>
<nav class="large navbar navbar-expand-lg navbar-dark fixed-top" id="primary-navwrapper">
<a class="navbar-brand" href="#">
<img alt="logo" src="{{asset('NaturaWebSite/naturamoz.org.mz/static/home/img/logo/Natura-125X125.png')}}"/>
</a>
<button aria-label="Toggle navigation" class="navbar-toggler" data-target="#myModal" data-toggle="modal" type="button">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="top-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="page-scroll nav-link navigation__link" href="#home">Página inicial</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#about">Sobre Nós</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#services">Actividades</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#team">Equipa</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#contact">Contacto</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
          Galeria
        </a>
<div aria-labelledby="navbarDropdown" class="dropdown-menu">
<a class="dropdown-item" href="/fotos">Fotos</a>
<a class="dropdown-item" href="videos/index.html">Videos</a>
</div>
</li>
<li class="nav-item">
<a class="page-scroll nav-link" href="blog/index.html">Notícias</a>
</li>
<li class="nav-item">
<a class="btn btn-outline-success nav-link" href="admin/index.html">Entrar</a>
</li>
</ul>
</div>
</nav>
</header>
@yield('conteudo')
{{-- <div class="page-section hero-slider" id="home">
<div class="single-slide" style="background-image: url(NaturaWebSite/naturamoz.org.mz/static/home2/fotos/PaginaPrincipal/ExpedicaoCientificaMarinhaEntrePomeneECaboSSebastiao.jpg)">
<div class="inner" style="padding-top: 30%;">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="slide-content">
<h2 style="color: #fff;">Expedição Científica Pomene - Cabo S. Sebastião</h2>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide" style="background-image: url(NaturaWebSite/naturamoz.org.mz/static/home2/fotos/PaginaPrincipal/MonitoramentodeBufalosnaReservvadoNiassa.jpg)">
<div class="inner" style="padding-top: 30%;">
<div class="container">
<div class="row justify-content-end">
<div class="col-lg-7 text-right">
<div class="slide-content">
<h2 style="color: #fff; text-align: right;">Monitoramento de Búfalos na Reserva do Niassa</h2>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide" style="background-image: url(NaturaWebSite/naturamoz.org.mz/static/home2/fotos/PaginaPrincipal/ParceriaEntreUniMaputoeNatura.jpg)">
<div class="inner" style="padding-top: 30%;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 text-center">
<div class="slide-content">
<h2 style="color: #fff;">Parceria entre a UP Maputo e NATURA</h2>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide" style="background-image: url(NaturaWebSite/naturamoz.org.mz/static/home2/fotos/PaginaPrincipal/ParticipacaonaConferenciaCrescendoAzul.jpg)">
<div class="inner" style="padding-top: 30%;">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="slide-content">
<h2 style="color: #fff; text-align: left;">Participação na Conferência Crescendo Azul</h2>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide" style="background-image: url(NaturaWebSite/naturamoz.org.mz/static/home2/fotos/PaginaPrincipal/principalresgate.jpg)">
<div class="inner" style="padding-top: 30%;">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="slide-content">
<h2 style="color: #fff;">Programa de resgate, reabilitação e monitoria de Pangolins</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="page-section tabs-area spb bg-color" id="about">
<div class="container">
<ul class="nav tabs-nav" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="pill" href="#vision" id="pills-profile-tab">
<i class="fa fa-binoculars"></i>
<span>Visão e Missão</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="#funds" id="pills-profile-tab">
<i class="fa fa-pie-chart"></i>
<span>Quem somos</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="#history" id="pills-profile-tab">
<i class="fa fa-qrcode"></i>
<span><strong>História</strong></span>
</a>
</li>
</ul>
<div class="tab-content bg-color-about" id="pills-tabContent" style="color: #203241;">
<div class="tab-pane fade show active" id="vision" role="tabpanel">
<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12" style="font-size: 18px;">
<div>
<h2 style="font-size: 35px; text-align: center">Visão</h2>
<div class="row" style="color: #203241;">
<img src="NaturaWebSite/naturamoz.org.mz/static/home2/icons/pangolin.png" style="height: 20px; padding-right: 10px;"/>
                                      LEGAR UM MUNDO SUSTENTÁVEL ÀS GERAÇÕES VINDOURAS.
                                      </div>
</div>
<div>
<h2 style="font-size: 35px; text-align: center">Missão</h2>
<div class="row" style="color: #203241;">
<img src="NaturaWebSite/naturamoz.org.mz/static/home2/icons/pangolin.png" style="height: 20px; padding-right: 10px;"/>
                                      CONTRIBUIR PARA A CONSERVAÇÃO DA BIODIVERSIDADE;
                                      </div>
<div class="row" style="color: #203241;">
<img src="NaturaWebSite/naturamoz.org.mz/static/home2/icons/pangolin.png" style="height: 20px; padding-right: 10px;"/>
                                      PRESERVAÇÃO DAS ESPÉCIES;
                                      </div>
<div class="row" style="color: #203241;">
<img src="NaturaWebSite/naturamoz.org.mz/static/home2/icons/pangolin.png" style="height: 20px; padding-right: 10px;"/>
                                      UTILIZAÇÃO SUSTENTÁVEL DO PATRIMÓNIO NATURAL.
                                      </div>
</div>
</div>
<div class="col-sm-12 col-xs-12 col-md-6">
<img alt="" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/quemsomos.jpg"/>
</div>
</div>
</div>
<div class="tab-pane fade" id="funds" role="tabpanel">
<div class="row">
<div class="col-sm-12 col-xs-12 col-md-6" style="font-size: 18px;">
                            
                                A ASSOCIAÇÃO NATURA MOÇAMBIQUE, (NATURA) pessoa colectiva sem fins lucrativos, constituida com o objectivo de contribuir para a conservação dos ecossistemas, a preservação das espécies e da biodiversisdade, promovendo práticas de utilização sustentável do nosso património natural.
                            
                        </div>
<div class="col-sm-12 col-xs-12 col-md-6">
<img alt="" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/mv/MissaoeVisao1.jpg"/>
</div>
</div>
</div>
<div class="tab-pane fade" id="history" role="tabpanel">
<div class="row">
<div class="col-md-12" style="font-size: 18px;">
<img alt="" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/Historia/DSC_0193.jpg" style="float: left; width: 45vw; padding-right: 30px;"/>
<p><strong>A NOSSA HISTÓRIA</strong><br/><br/>A Associação NATURA Moçambique foi constituida em 2008 como uma organização não governamental moçambicana vocacionada para a promoção e realização de programas, projectos e actividades no âmbito da Conservação, no seu sentido mais amplo.<br><br/>A Associação NATURA Moçambique desempenhou um papel fundamental na mobilização de recursos humanos e financeiros para assegurar a gestão da Reserva Nacional do Niassa assistindo a SGDRN (Sociedade para a Gestão e Desenvolvimento da Reserva do Niassa) a qual, mediante contrato firmado com o Governo Moçambicano, geriu aquela Reserva até 2012, com resultados assinaláveis.<br><br/>Atualmente a Associação NATURA Moçambique agregou novos associados, atribuiu estatuto especial aos seus membros fundadores, a quem se deve muito do sucesso inicialmente alcançado e diversificou a sua atividade e programas no âmbito da Conservação, da Ciência, do Ambiente e Saneamento, da Educação Ambiental e Desenvolvimento Humano.<br><br/>Neste contexto a Associação NATURA Moçambique tem vindo a firmar parcerias importantes com universidades quer a nível nacional quer internacional, com Parques Nacionais, com instituições de investigação, com outras ONG's e instituições de investigação e saúde e ainda com empresas interessadas em participar e patrocinar ações e programas nas áreas acima mencionadas.</br></br></br></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="page-section service-area sp bg1 parallax" id="services">
<div class="container">
<div class="section-title white">
<h2>Nossas Actividades</h2>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 single-service">
<div class="inner bg-color">
<div class="title">
<div class="icon">
<i class="fa fa-paw"></i>
</div>
<h4>CONSERVAÇÃO</h4>
</div>
<div class="content" style="font-size: 18px;">
<p>No âmbito da Conservação a NATURA atribui especial atenção à proteção e monitoria de espécies terrestres e marinhas ameaçadas apoiando Projetos em Parques e Reservas onde existem este tipo de programas.</p>
</div>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                Projectos
                            </button>
<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
<a class="dropdown-item link" href="project/9/index.html">Resgate, reabilitação e monitoria do Pangolim no Parque Nacional da Gorongosa</a>
<a class="dropdown-item link" href="project/10/index.html">Rastreio e monitoramento de tartarugas na Reserva Marinha Parcial da Ponta do Ouro</a>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 single-service">
<div class="inner bg-color">
<div class="title">
<div class="icon">
<i class="fa fa-flask"></i>
</div>
<h4>CIÊNCIA</h4>
</div>
<div class="content" style="font-size: 18px;">
<p>Realização de expedições científicas e apoio à participação de investigadores, docentes e discentes universitários em actividades de natureza científica e de pesquisa;
Participação em seminários e outros eventos de caracter científico;
Apoio à elaboração e apresentação de estudos e trabalhos de investigação e pesquisa;
Apoio à criação de infraestruturas de pesquisa e investigação.</p>
</div>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                Projectos
                            </button>
<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
<a class="dropdown-item link" href="project/3/index.html">Apoio à participação de estudantes da UP Maputo na expedição científica marinha no Santuário no Cabo de S. Sebastião e nas Ilhas Primeiras e Segundas</a>
<a class="dropdown-item link" href="project/4/index.html">Realização da Expedição Científica Marinha entre o Pomene e o farol do Cabo de S. Sebastião na costa de Inhambane</a>
<a class="dropdown-item link" href="project/11/index.html">Participação na Conferência "Crescendo Azul"</a>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 single-service">
<div class="inner bg-color">
<div class="title">
<div class="icon">
<i class="fa fa-recycle"></i>
</div>
<h4>AMBIENTE E SANEAMENTO</h4>
</div>
<div class="content" style="font-size: 18px;">
<p>A NATURA copatrocina e realiza em colaboração com outras entidades programas no âmbito do saneamento do meio incluindo a preparação de propostas de legislação sobre saneamento e poluição que, adotadas pelas autoridades competentes serão complementadas na sua aplicação por atividades de fiscalização que a NATURA se propõe patrocinar.</p>
</div>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                Projectos
                            </button>
<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
<a class="dropdown-item link" href="project/5/index.html">Keep Ponta Clean</a>
<a class="dropdown-item link" href="project/13/index.html">Elaboração de proposta de Regulamento Ambiental para o Distrito de Matutuine e posterior atividade de fiscalização</a>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 single-service">
<div class="inner bg-color">
<div class="title">
<div class="icon">
<i class="fa fa-heartbeat"></i>
</div>
<h4>SAÚDE E DESENVOLVIMENTO HUMANO</h4>
</div>
<div class="content" style="font-size: 18px;">
<p>O gozo de boa saúde por crianças e jovens é condição indispensável para a promoção de um desenvolvimento humano harmonioso que permita a adequada integração futura destas crianças e jovens na sociedade em que se inserem de forma responsável em termos de conduta social e ambiental exemplares. Orientada por este princípio a NATURA apoia iniciativas que assegurem o bem estar físico de crianças e jovens e que, simultâneamente, os levem a compreender e assumir o valor da solidariedade para com os outros com base nas suas próprias experiências de beneficiários de programas de solidariedade.</p>
</div>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                Projectos
                            </button>
<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
<a class="dropdown-item link" href="project/8/index.html">Apoio ao Programa de tratamento de crianças desfavorecidas e com deficiências cardíacas realizadas pelo ICOR – Instituto de Coração.</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="pricing-area sp bg-color">
<div class="container">
<div class="section-title">
<h2>Faça a sua doação</h2>
</div>
<div class="row">
<div class="col-md-12 col-lg-12 single-pricing">
<div class="inner" style="font-size: 18px; background: #2a4962;">
<div style="font-size: 20px; color: #fff; font-weight: 6000px;"><b>Conta Bim:</b> 427778731</div>
<div style="font-size: 20px; color: #fff; font-weight: 6000px;"><b>Titular:</b> Associação Natura Moçambique</div>
<div style="font-size: 20px; color: #fff; font-weight: 6000px;"><b>Nib:</b> 000100000042777873157</div>
<div style="font-size: 20px; color: #fff; font-weight: 6000px;"><b>Email:</b> an@naturamoz.org.mz</div>
</div>
</div>
<div class="col-md-12 col-lg-12 single-pricing">
<div class="inner" style="font-size: 18px; background: #2a4962;">
<div style="font-size: 20px; color: #fff; font-weight: 6000px;">Informe-nos por email do valor de sua contribuição e para que projecto está a contribuir.</div>
<br/>
<div style="color: #fff; font-size: 20px;">
<p>A NATURA assegura que as doações são integralmente aplicadas em projectos e não se destinam a despesas correntes ou outros encargos de funcionamento.</p>
<br/>
<p>A NATURA prestará informação periódica sobre os projetos objeto das doações.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="page-section team-area sp" id="team" style="background: #1b75bb;">
<div class="container">
<div class="section-title white">
<h2>Equipa</h2>
</div>
<div class="row justify-content-md-center">
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/20180920DeniseBranco_Jpeg-1989.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Denise Branco</b></h5>
<span style="font-size: 16px; color: #eee">Presidente da Assembleia Geral</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/01-antonio-branco.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>António Branco</b></h5>
<span style="font-size: 16px; color: #eee">Director Executivo</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/3.png"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Leonardo Leitão</b></h5>
<span style="font-size: 16px; color: #eee">Director</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/03-idilia-goncalves.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Idília Gonçalves</b></h5>
<span style="font-size: 16px; color: #eee">Directora</span>
</div>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/abilio.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Abílio Sitoe</b></h5>
<span style="font-size: 16px; color: #eee">Assessoria Juridíca</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/2.png"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Augusto Nhampossa</b></h5>
<span style="font-size: 16px; color: #eee">Gestão e Projectos</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/guidion2.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Guideon Ubisse</b></h5>
<span style="font-size: 16px; color: #eee">Administração e Finanças</span>
</div>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/AnisleyMassango.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Anisiley Massango</b></h5>
<span style="font-size: 16px; color: #eee">Bióloga e pesquisadora</span>
</div>
</div>
</div>
<div class="col-sm-12 col-md-2 col-lg-2 single-team">
<div class="inner">
<div class="team-img">
<img alt="Member Photo" class="border-solid border-4 border-gray-450 rounded-lg shadow-2xl" src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/team/300X300/ExcelsoMausse.jpg"/>
</div>
<div class="team-content">
<h5 style="color: #fff; font-size: 18px"><b>Excelso Maússe</b></h5>
<span style="font-size: 16px; color: #eee">Biólogo e pesquisador</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="page-section testimonial-area sp bg-color">
<div class="container">
<div class="section-title">
<h2>Nossos Parceiros</h2>
</div>
<div class="row customer-logos slider">
<div><img src="NaturaWebSite/raw.githubusercontent.com/explicadordev/Images/master/Natura/partners/up.png?raw=true"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/FCNM.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/FEUP.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/WIORI.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/GORONGOSA.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/KEEP-PONTA.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/AVM-Consultores-Lda.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/ICOR.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/ADAPO.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/ANAC.png"/></div>
<div><img src="NaturaWebSite/naturamoz.org.mz/static/home2/fotos/logosdanature/TECNEL.png"/></div>
</div>
</div>
</div> --}}
{{-- <div class="page-section contact-area bg2 sp" id="contact">
<div class="container">
<div class="section-title">
<h2>Contacto</h2>
</div>
<div class="row">
<div class="col-md-6 contact-info">
<iframe frameborder="0" id="gmap_canvas" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=av%20ahmed%20sekou%20tour%C3%A9%2C%20528&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="height: 100%; width: 100%"></iframe>
</div>
<div class="col-md-6 contacts-form">
<div id="sendmessage">Mensagem enviada com sucesso. Obrigado!</div>
<div id="errormessage"></div>
<form action="#" class="contact-form contactForm" id="form-message" method="post" role="form">
<input name="csrfmiddlewaretoken" type="hidden" value="sMSEUOugb3s2mn5CU3oek3YiwZ7RnLZhe0ZqldFQBarDEQMfM3z4SeRWLEgXZrdW"/>
<div class="row">
<div class="col-lg-6">
<input data-msg="O nome deve ter no mínimo 4 caracteres" name="name" placeholder="Introduza o seu nome" type="text"/>
</div>
<div class="col-lg-6">
<input data-msg="Introduza um email valido" name="email" placeholder="Introduza o seu Email" type="email"/>
</div>
<div class="col-lg-12">
<input data-msg="A mensagem deve ter no minimo 8 caracteres" name="subject" placeholder="Assunto" type="text"/>
</div>
<div class="col-lg-12">
<textarea name="message" placeholder="Mensagem"></textarea>
</div>
<div class="col-lg-12">
<button class="button" id="sendeMessage" type="submit">Enviar mensagem</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div> --}}
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal left fade" id="myModal" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">Natura</h4>
</div>
<div class="modal-body">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="page-scroll nav-link navigation__link" href="#home">Página inicial</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#about">Sobre Nós</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#services">Actividades</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#team">Equipa</a>
</li>
<li class="nav-item">
<a class="page-scroll nav-link navigation__link" href="#contact">Contacto</a>
</li>
<li class="nav-item dropdown">
<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
          Galeria
        </a>
<div aria-labelledby="navbarDropdown" class="dropdown-menu">
<a class="dropdown-item" href="gallery/index.html">Fotos</a>
<a class="dropdown-item" href="videos/index.html">Videos</a>
</div>
</li>
<li class="nav-item">
<a class="page-scroll nav-link" href="blog/index.html">Notícias</a>
</li>
<li class="nav-item">
<a class="btn btn-outline-success nav-link" href="admin/index.html">Entrar</a>
</li>
</ul>
</div>
</div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->
<!-- Modal -->
<!-- modal -->
<footer>
<div class="footer-top text-white">
<div class="container">
<div class="row justify-content-end text-white">
<div class="col-md-6 col-lg-6 footer_widget">
<div class="inner">
<h4 class="text-white">Notícias recentes</h4>
<div class="media">
<a href="blog/1/index.html">
<img alt="" class="d-flex mr-3" src="{{ asset('NaturaWebSite/naturamoz.org.mz/media/home/1e8b8d85-382a-4c71-aa80-8fab480707e8.jpg') }}"/>
</a>
<div class="media-body">
<h5>
<a class="text-white" href="blog/1/index.html">Participação na Conferência "Crescendo Azul"</a>
</h5>
<span class="text-white">Nov. 25, 2019, 3:36 p.m.</span>
</div>
</div>
<div class="media">
<a href="blog/2/index.html">
<img alt="" class="d-flex mr-3" src="{{ asset('NaturaWebSite/naturamoz.org.mz/media/home/6a80ac4a-37c8-4d72-987f-cab4275cdac2.jpg') }}"/>
</a>
<div class="media-body">
<h5>
<a class="text-white" href="blog/2/index.html">Parceria com ADAPO</a>
</h5>
<span class="text-white">Nov. 25, 2019, 9:13 a.m.</span>
</div>
</div>
<div class="media">
<a href="blog/3/index.html">
<img alt="" class="d-flex mr-3" src="{{ asset('NaturaWebSite/naturamoz.org.mz/media/home/fb655ac0-7ae1-437b-9799-03bdd0c98cdf.jpg') }}"/>
</a>
<div class="media-body">
<h5>
<a class="text-white" href="blog/3/index.html">Parceria com AVM consultores</a>
</h5>
<span class="text-white">Nov. 25, 2019, 3:35 p.m.</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 footer_widget">
<div class="inner">
<h4 class="text-white">Endereço</h4>
<h5 class="text-white">NATURA.</h5>
<p>Moçambique, Maputo <br/>Av. Amilcar Cabral no. 528 <br/>Tel: +258 21310854</p>
<h4 class="text-white">Newsletter</h4>
<div class="nw_form">
<input id="submit_email" placeholder="Introduza o seu email" type="email"/>
<button id="sendenewsletter"><i class="fa fa-paper-plane"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="copyright-txt">
                                    © 2019 Natura.
                                </div>
</div>
</div>
</div>
</div>
</footer>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="newsletterModal" role="dialog" tabindex="-1">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content text-center">
<div class="modal-body">
<div class="anim_container">
<img alt="" class="rounded" src="NaturaWebSite/naturamoz.org.mz/static/home/img/logo/Natura-125X125.png"/>
</div>
<h1 class="modal-title">Obrigado por se inscrever!</h1>
<h3 class="modal-subtitle sub2">Agora pode receber noticias da Natura.</h3>
<button class="btn btn-secondary btn-goal" data-dismiss="modal" type="button">Ok</button>
</div>
</div>
</div>
</div>
</div>
<!--Required JS files-->
<script src="{{ asset('NaturaWebSite/code.jquery.com/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/jquery.barfiller.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/loopcounter.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/vendor/slicknav.min.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/js/active.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/nav/nav.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home/contactform/contactform.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home/contactform/newsletter.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home2/nav/scroll1.js') }}"></script>
<script src="{{ asset('NaturaWebSite/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js') }}"></script>
<script src="{{ asset('NaturaWebSite/naturamoz.org.mz/static/home/js/partners.js') }}"></script>
</body>

</html>



