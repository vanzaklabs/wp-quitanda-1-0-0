<?php
/*
Template Name: Home
*/
?>

<?php get_header('home'); ?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <main>
        
        <!-- IMAGE HERO -->

        <section class="w-100" id="heroimgdesk">
        <div class="p-relative" style="height: 100vh;">
            <div class="overlay-hero"></div>
            <img
            src="<?php echo get_template_directory_uri() ?>/images/hero-banner-home-01-min.webp"
            style="object-fit: cover; height: 100vh;">

            <!-- <div class="d-flex justify-center">
                <h1 class="p-absolute text-center absolute-center text-white">GASTRONOMIA<br> COM CONSCIÊNCIA</h1>
            </div> -->
        </div>
    </section>

    <section class="w-100" id="heroimgmobile">
        <div class="p-relative"  style="height: 100vh;">
            <div class="overlay-hero"></div>
            <img
            src="<?php echo get_template_directory_uri() ?>/images/hero-banner-home-01-min.webp"
            style="object-fit: cover; ">
            <!-- <div class="d-flex justify-center" id="sobre-nos">
                <h1 class="p-absolute text-center absolute-center text-white">GASTRONOMIA<br> COM CONSCIÊNCIA</h1>
            </div> -->
        </div>
    </section>

    <!-- FIM IMAGE HERO -->

    <!-- TABS -->

    <section class="d-flex justify-center align-center flex-column p-section bg-03 " id="section-tabs">
        <div class="w-50">
            <div class="d-flex justify-between tabsnap ">
                <button class="fonte-serifada tab  text-black" id="btntab1">
                    compre online<span class="yellow-underline"></span>
                </button>
                <!-- <button class="fonte-serifada tab text-black" style="opacity: .5;" id="btntab2">
                    encomendas<span class="yellow-underline" style="display: none;"></span>
                </button> -->
                <a 
                href="<?php echo esc_url(home_url( '/' )); ?>encomendas/"
                class="fonte-serifada tab text-black" style="opacity: .5;" >
                    encomendas<span class="yellow-underline" style="display: none;"></span>
                </a>
                <!-- <button class="fonte-serifada tab text-black" style="opacity: .5;" id="btntab3">
                    minha quitanda<span class="yellow-underline" style="display: none;"></span>
                </button> -->
                 <!-- <a href="#" class="fonte-serifada tab  text-black">
                    compre online<span class="yellow-underline"></span>
                </a> -->
                
                <a href="#" class="fonte-serifada tab text-black" style="opacity: .5;">
                    minha quitanda<span class="yellow-underline" style="display: none;"></span>
                </a>
            </div>
        </div>
        <div class="container mt-5  d-flex align-center justify-center" id="tab1">
            <div class="w-50  flex-column h-80" id="tab1img">
            </div>
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <h2 class="tab-title">SOBRE <br><span class="fonte-serifada">nós </span>  <br></h2>
                <p class="text-p">Nascemos em 2007 com um propósito claro: combinar refeições deliciosas a um compromisso com um mundo melhor. Para que isso seja possível, reunimos os melhores ingredientes, sabores, produtos exclusivos e fornecedores locais para nutrir a nossa comunidade de apaixonados pela boa comida. 
                </p>
                <div class="d-flex align-center" style="gap: 50px;">
                    <a
                    href="<?php echo esc_url(home_url( '/' )); ?>sobre-nos/"
                    class="text-p btn-outline">SAIBA MAIS</a>
                    <a
                    target="_blank"
                    href="https://www.ifood.com.br/delivery/sao-paulo-sp/quitanda-pinheiros/efe332d7-74fa-48a8-949d-ac1a45ab4738"
                    class="text-p btn-tabs">COMPRE ONLINE</a>
                </div>
            </div>
        </div>
        <!-- <div class="container mt-5   align-center justify-center d-none" id="tab2">
            <div class="w-50  flex-column h-80" id="tab2img">
            </div>
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <h2 class="tab-title">Lorem <br><span class="fonte-serifada">sit </span> AMET <br>ELIT</h2>
                <p class="text-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis feugiat
                    quam at auctor.</p>
                <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
            </div>
        </div>-->
        <div class="container mt-5   align-center justify-center d-none" id="tab3">
            <div class="w-50  flex-column h-80" id="tab3img">
            </div>
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <h2 class="tab-title">Lorem <br><span class="fonte-serifada">sit </span> AMET <br>ELIT</h2>
                <p class="text-p">{{FORMULÁRIO}}</p>
                <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
            </div>
        </div> 
    </section>

    <!-- FIM TABS -->

    <!-- MARQUEE -->

    <section class="bg-03 p-section">
        <section class="marqueequitanda p-50" id="marqueequitanda">
            <div class="m-scroll rotacionaMarqa">
              <div class="m-scroll__title">
                <div id="divMarqueeA">
                  <span class="Marquee1">
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                     <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                    <a class="h1-marquee marquee-wrapper">gastronomia</a>
                    <a class="h1-marquee marquee-wrapper">com</a>
                    <a class="h1-marquee marquee-wrapper">consciência</a>
                  </span>
                </div>
              </div>
            </div>
          
            <div class="m-scroll__INV rotacionaMarq">
              <div class="m-scroll__title__INV">
                <div id="divMarqueeB">
                  <span class="Marquee2">
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    <a class="h2-marquee marquee-wrapper">o futuro é local</a>
                    
                  </span>
                </div>
              </div>
            </div>

            <div class="m-scroll rotacionaMarqb">
                <div class="m-scroll__title">
                  <div id="divMarqueeC">
                    <span class="Marquee3">
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer de comer bem</a>
                    </span>
                  </div>
                </div>
              </div>
          </section>
    </section>

    <!-- FIM MARQUEE -->


    <!-- VIDEO -->
    <section class="bg-half">
        <div class="d-flex justify-center " >
                <video
                id="player"
                playsinline
                controls
                volume="1"
                data-poster="<?php echo get_template_directory_uri() ?>/images/video-capa-01.png" >
                    <source
                    src="<?php echo get_template_directory_uri() ?>/videos/video-quitanda-institucional-hd.mp4"
                    type="video/mp4" />
                </video>
        </div>
    </section>


    <span  id="escolas"></span>
    <!-- IMG & TEXT -->

    <section id="quitanda-institucional" class="d-flex  align-center  gap7 mt-5 mb-5 flex-imgtext ">

        <div class="bg-04 imgandtext" >
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">QUITANDA <br> ESCOLAS</h2>
                            <p class="text-p">Nossa missão é clara: nutrir o futuro com sabor, saúde e sustentabilidade. Desde o início, estamos empenhados em promover hábitos alimentares saudáveis entre as novas gerações, tornando o ambiente escolar uma extensão da nossa casa. Acreditamos em uma alimentação simples, fresca e caseira, preparada com carinho e servida com cuidado. Optamos por ingredientes de alta qualidade, sempre priorizando os mais frescos e minimamente processados, garantindo que cada refeição não apenas promova a saúde, mas também ofereça um sabor incrível.
                            </p>
                            <a
                            href="<?php echo esc_url(home_url( '/' )); ?>quitanda-escolas/"
                            class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a href="<?php echo esc_url(home_url( '/' )); ?>quitanda-escolas/" class="w-100 p-relative">
                            <div class="overlay" ></div>
                            <div id="textandimg1"></div>
                                <!-- <img src="images/img-8748.webp" alt="" class="w-100"> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <span id="empresas"></span>
        <div class="bg-04 imgandtext" >
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a
                        href="<?php echo esc_url(home_url( '/' )); ?>quitanda-empresas/"
                        class="w-100 p-relative">
                            <div class="overlay"></div>
                            <div id="textandimg2"></div>
                            <!-- <img src="images/12-2022-06-quitanda0974-green-min.webp" alt="" class="w-100"> -->
                        </a>
                    </div>
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">QUITANDA <br> EMPRESAS</h2>
                            <p class="text-p">Imagine ter à disposição no seu escritório os produtos exclusivos da marca Quitanda, que normalmente você só encontraria na nossa delicatessen e na padaria? Sim, isso é possível! Estamos prontos para levar até você opções deliciosas e saudáveis para os seus coffee breaks, eventos corporativos e até mesmo para nutrir os seus colaboradores durante todo o dia. Atendemos diversos segmentos de empresas, tornando a rotina de trabalho muito mais prazerosa e saborosa.
                            </p>
                            <a
                            href="<?php echo esc_url(home_url( '/' )); ?>quitanda-empresas/"
                            class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="bg-04 imgandtext">
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">MINHA <br> QUITANDA</h2>
                            <p class="text-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reprehenderit doloribus iusto magnam accusamus soluta repellat praesentium commodi ex voluptates nobis deleniti neque at minima, vitae adipisci, earum, odit perspiciatis! Architecto, veniam quisquam quae, iste possimus magnam aut nisi expedita rem nesciunt temporibus similique. Officiis ipsum aliquam laboriosam excepturi amet similique quasi, recusandae facilis possimus, quis, vitae optio quidem doloribus.</p>
                            <a
                                href="<?php echo esc_url(home_url( '/' )); ?>minha-quitanda/"
                                class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a
                            href="<?php echo esc_url(home_url( '/' )); ?>minha-quitanda/" class="w-100 p-relative">
                            <div class="overlay"></div>
                            <div id="textandimg3"></div>
                            <!-- <img src="images/9-2022-06-quitanda0917-green-min.webp" alt="" class="w-100"> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
       
    </section>

    <!-- FIM IMG & TEXT -->
</body>

<?php get_footer('home'); ?>
