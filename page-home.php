<?php
/*
Template Name: Home
*/

get_header();

?>

<main>

		<!-- <h1>
			<?php 
				the_content();
			?>
		</h1> -->


</main>

<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />


    <!-- IMAGE HERO -->

    <section class="w-100" id="heroimgdesk">
        <div class="p-relative">
            <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/img-teste.webp" alt="">

            <div class="d-flex justify-center">
                <h1 class="p-absolute text-center absolute-center text-white">GASTRONOMIA<br> COM CONSCIÊNCIA</h1>
            </div>
        </div>
    </section>

    <section class="w-100" id="heroimgmobile">
        <div class="p-relative">
            <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/img-teste-desk.webp" alt="" >
            <div class="d-flex justify-center">
                <h1 class="p-absolute text-center absolute-center text-white">GASTRONOMIA<br> COM CONSCIÊNCIA</h1>
            </div>
        </div>
    </section>

    <!-- FIM IMAGE HERO -->

    <!-- TABS -->

    <section class="d-flex justify-center align-center flex-column p-section bg-03 " id="section-tabs">

        <div class="w-50-tabsnap">
            <div class="d-flex justify-between tabsnap ">
                <button class="fonte-serifada tab  text-black" id="btntab1">
                    compre online<span class="yellow-underline"></span>
                </button>
                <button class="fonte-serifada tab text-black" style="opacity: .5;" id="btntab2">
                    encomendas<span class="yellow-underline" style="display: none;"></span>
                </button>
                <button class="fonte-serifada tab text-black" style="opacity: .5;" id="btntab3">
                    minha quitanda<span class="yellow-underline" style="display: none;"></span>
                </button>
            </div>
        </div>

        <div class="container mt-5  d-flex align-center justify-center" id="tab1">

            <div class="d-flex justify-end imgsectionimgtext">
                        <a href="conteudo.html" class="w-100">
                            <div class="overlay"></div>
                            <div id="textandimg1"></div>
                                <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/gab-quitanda-14.webp" alt="" class="w-100">
                        </a>
                    </div>
            
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <!-- <h2 class="tab-title">IPSUM</h2>
                <h2 class="tab-title">
                    <span class="fonte-serifada">sit </span>AMET <br>ELIT
                </h2> -->
                <p class="text-p">Nascemos em 2007 com um propósito claro: 
                    combinar refeições deliciosas a um compromisso com um mundo melhor. 
                    Para que isso seja possível, reunimos os melhores ingredientes, sabores, produtos exclusivos e fornecedores locais para nutrir a nossa comunidade de apaixonados pela boa comida.
                </p>
                <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
            </div>
        </div>
        <div class="container mt-5   align-center justify-center d-none" id="tab2">
            <div class="w-50  flex-column h-80" id="tab2img">
            </div>
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <h2 class="tab-title">Lorem <br><span class="fonte-serifada">sit </span> AMET <br>ELIT</h2>
                <p class="text-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis feugiat
                    quam at auctor.</p>
                <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
            </div>
        </div>
        <div class="container mt-5   align-center justify-center d-none" id="tab3">
            <div class="w-50  flex-column h-80" id="tab3img">
            </div>
            <div class="w-50 d-flex flex-column justify-start h-100 ">
                <h2 class="tab-title">Lorem <br><span class="fonte-serifada">sit </span> AMET <br>ELIT</h2>
                <p class="text-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis feugiat
                    quam at auctor.</p>
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
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    <a class="h2-marquee marquee-wrapper">o</a>
                    <a class="h2-marquee marquee-wrapper">futuro</a>
                    <a class="h2-marquee marquee-wrapper">é</a>
                    <a class="h2-marquee marquee-wrapper">local</a>
                    
                  </span>
                </div>
              </div>
            </div>

            <div class="m-scroll rotacionaMarqb">
                <div class="m-scroll__title">
                  <div id="divMarqueeC">
                    <span class="Marquee3">
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                      <a class="h3-marquee marquee-wrapper">prazer</a>
                      <a class="h3-marquee marquee-wrapper">de comer</a>
                      <a class="h3-marquee marquee-wrapper">bem</a>
                    </span>
                  </div>
                </div>
              </div>
          </section>
    </section>

    <!-- FIM MARQUEE -->


    <!-- VIDEO -->
    <section class="bg-half">
        <div class="d-flex justify-center">
                <video id="player" playsinline controls data-poster="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/congelados.webp">
                    <source src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/videoquitandamp4.mp4" type="video/mp4" />
                </video>
        </div>
    </section>

    <!-- IMG & TEXT -->

    <section class="d-flex  align-center  gap7 mt-5 mb-5 flex-imgtext">

        <div id="quitanda-escolas" class="bg-04 imgandtext">
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">QUITANDA <br> ESCOLAS</h2>
                            <p class="text-p">
                                Nossa missão é clara: <br> nutrir o futuro com sabor, saúde e sustentabilidade.</b>
                            <br><br>
                                Desde o início, estamos empenhados em promover hábitos alimentares saudáveis entre as novas gerações, tornando o ambiente escolar uma extensão da nossa casa. 
                            <br>Acreditamos em uma alimentação simples, fresca e caseira, preparada com carinho e servida com cuidado. 
                                Optamos por ingredientes de alta qualidade, sempre priorizando os mais frescos e minimamente processados, garantindo que cada refeição não apenas promova a saúde, mas também ofereça um sabor incrível.

                            </p>
                            <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a href="conteudo.html" class="w-100">
                            <div class="overlay"></div>
                            <div id="textandimg1"></div>
                                <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/img-8748.webp" alt="" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div id="quitanda-empresas" class="bg-04 imgandtext">
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a href="conteudo.html" class="w-100">
                            <div class="overlay"></div>
                            <div id="textandimg2"></div>
                            <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/12-2022-06-quitanda0974-green-min.webp" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">QUITANDA <br> EMPRESAS</h2>
                            <p class="text-p">Imagine ter à disposição no seu escritório os produtos exclusivos da marca Quitanda, que normalmente você só encontraria na nossa delicatessen e na padaria?
                            <br><br>Sim, isso é possível! Estamos prontos para levar até você opções deliciosas e saudáveis para os seus coffee breaks, eventos corporativos e até mesmo para nutrir os seus colaboradores durante todo o dia. Atendemos diversos segmentos de empresas, tornando a rotina de trabalho muito mais prazerosa e saborosa.

                            </p>
                            <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div id="minha-quitanda" class="bg-04 imgandtext">
            <div class="d-flex justify-center">
                <div class="container d-flex gapsection justify-between">
                    <div class="h-80 w-50 d-flex align-center">
                        <div class="d-flex flex-column gap7">
                            <h2 class="title">MINHA <br> QUITANDA</h2>
                            <p class="text-p">Fusce ut eleifend mauris, quis ornare nibh.</p>
                            <a href="conteudo.html" class="text-p btn-tabs">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="d-flex justify-end imgsectionimgtext">
                        <a href="conteudo.html" class="w-100">
                            <div class="overlay"></div>
                            <div id="textandimg3"></div>
                            <img src="https://hostu.com.br/quitanda/wp-content/uploads/2023/10/9-2022-06-quitanda0917-green-min.webp" alt="" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
    </section>

    <!-- FIM IMG & TEXT -->



	<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.23/bundled/lenis.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
    const player = new Plyr('#player');
    </script>

<?php get_footer();