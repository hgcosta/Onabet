<?php // Template Name: Home ?> 
<?php get_header()?>
<header class="main-header">
    <div class="container content-header">
        <div class="menu-icon hover-target" onclick="openNav()">
            <span class="menu-icon__line menu-icon__line-left"></span>
            <span class="menu-icon__line"></span>
            <span class="menu-icon__line menu-icon__line-right"></span>
        </div>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a onclick="closeNav()" href="#home">Home</a>
                <a onclick="closeNav()" href="#games">Games</a>
                <a onclick="closeNav()" href="#beneficios">Benefícios</a>
                <a onclick="closeNav()" href="#afiliados">Quero ser afiliado</a>

            </div>
        </div>
        <div class="logo">
            <a href="" title="Onabet"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-onabet.png" alt="Logo Onabet"></a>
        </div>
        <div class="nada"></div>
        <nav>
            <ul class="list-unstyled">
                <li><a href="#home">Home</a></li>
                <li><a href="#games">Games</a></li>
                <li><a href="#beneficios">Benefícios</a></li>
                <li><a href="#afiliados">Quero ser afiliado</a></li>
            </ul>
        </nav>
       
    </div>
    <div class="container">
        <div class="divider">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/divider.png" alt="Divider">
        </div>
    </div>
</header>
<main class="hero" id="home">
    <section class="container content-hero">
        <div class="col-info">
            <h1>Explore um mercado <strong>gigante</strong></h1>
            <p class="chamada">Faça parte do programa de afiliados na OnaBet.</p>
            <p class="chamada-2">Uma oportunidade de ouro para conquistar seu lugar no topo com a melhor experiência em jogos e apostas do país.</p>
            <div class="info-afilidao">
                <p>Seja um dos primeiros a explorar um mercado de 90 milhões de clientes sedentos por emoção e entretenimento.</p>
                <a href="<?php bloginfo('url') ?>/seja-um-afiliado/">Quero ser afiliado</a>
            </div>
        </div>
        <div class="col-img">
            <picture>
                <source media="(max-width: 600px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-hero-mobile.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-hero-dskt-clean.png" alt="Carlinhos Maia">
            </picture>  
            
        </div>
    </section>
    <section class="games" id="games">
        <div class="container">
           <div class="title-game">
                <h2>Mais de 3 mil Games</h2>
                <a href="https://onabet.com/casino">Veja mais jogos</a>
           </div>
        </div>
        <div class="carousel-content">
            <div class="owl-carousel owl-theme desktop">
            <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-02.png" alt="Game">
                    <div class="legenda">
                        <h3>Fortune Mouse</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-03.png" alt="Game">
                    <div class="legenda">
                        <h3>Mines</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-04.png" alt="Game">
                    <div class="legenda">
                        <h3>Sweet Bonanza</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-05.png" alt="Game">
                    <div class="legenda">
                        <h3>Spaceman</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-06.png" alt="Game">
                    <div class="legenda">
                        <h3>Fortune Tiger</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-07.png" alt="Game">
                    <div class="legenda">
                        <h3>Fortune Rabbit</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-01.png" alt="Game">
                    <div class="legenda">
                        <h3>Aviator</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-content-mobile">
            <div class="owl-carousel owl-theme mobile">
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-02.png" alt="Game">
                    <div class="legenda">
                        <h3>Fortune Mouse</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-03.png" alt="Game">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-04.png" alt="Game">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-05.png" alt="Game">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-06.png" alt="Game">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-07.png" alt="Game">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-01.png" alt="Game">
                </div>
               
            </div>
        </div>
    </section>
    <div class="bg-02">
        <section class="benefits" id="beneficios">
            <div class="container">
                <h2>Bene<strong>fícios</strong></h2>
                <ul class="list-unstyled lista-content">
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cpa-icon.svg" alt="Cpa + %RevShare">
                        <h4>Cpa + %RevShare</h4>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/mkt-icon.svg" alt="Melhor media kit da indústria brasileira">
                        <h4>Melhor media kit da indústria brasileira</h4>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/conta-icon.svg" alt="Gerente de Contas">
                        <h4>Gerente de Contas</h4>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/exclusive-icon.svg" alt="Códigos promocionais exclusivos">
                        <h4>Códigos promocionais exclusivos</h4>
                    </li>
                </ul>
                <ul class="list-unstyled lista-content-destaque">
                   <li>
                        <a data-toggle="modal" data-target="#beneficio" title="Clique e veja os benefícios">
                            <img class="img-destaque" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/carreira-icon.svg" alt="Conheça o plano de carreira!">
                            <h4>Conheça </br>o plano de carreira!</h4>
                        </a>
                        <img class="click" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/mouse.png" alt="Clique">
                   </li>
                </ul>
            </div>
        </section>
        <section class="afliiados" id="afiliados">
            <div class="content-afiliados">
                <div class="col-img">
                    <picture>
                        <source media="(max-width: 600px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/influencer-mobile.png">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/influencer.png" alt="Influencer Onabet">
                    </picture>                    
                </div>
                <div class="col-info">
                    <div class="content-info">
                        <h3>Venha fazer parte do time que mais cresce no Brasil</h3>
                        <a href="<?php bloginfo('url') ?>/seja-um-afiliado/">Quero ser afiliado!</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>


<div class="modal fade " id="beneficio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <picture>
                    <source media="(max-width: 600px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/plano-carreira-mobile.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/plano-carreira.png" alt="Plano de Carreira">
                </picture>  
                
            </div>
        </div>
    </div>
</div>

<script>


function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


  	

// A $( document ).ready() block.
$( document ).ready(function() {
    var carrosel = document.querySelectorAll('div.owl-item');
    
    var numberInicial = 7;
    var elementoActiveInicial = carrosel[numberInicial]
    elementoActiveInicial.classList.add('principal')
    var next = document.querySelector('.owl-next')
    var prev = document.querySelector('.owl-prev');

    // el  = Array.from(carrosel);

    // el.forEach(function(element) {
    //     element.classList.remove('cloned')
    //     element.classList.add('active')
    //     element.classList.add('principal')

    //     console.log(element);
    // });
    next.addEventListener('click', ()=>{
        numberInicial++;
        elementoActiveInicial.classList.remove('principal')
        elementoActiveInicial = carrosel[numberInicial]
        console.log(elementoActiveInicial)
        elementoActiveInicial.classList.add('principal')
        console.log(numberInicial)

    });

    prev.addEventListener('click', ()=>{
        elementoActiveInicial.classList.remove('principal')
        numberInicial --;
        elementoActiveInicial = carrosel[numberInicial]
        console.log(elementoActiveInicial)
        elementoActiveInicial.classList.add('principal')
    })

});

   $('.desktop').owlCarousel({
    stagePadding: 120,
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('.mobile').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:3
        },
        700:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


    </script>

<?php get_footer()?>