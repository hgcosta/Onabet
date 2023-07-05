<?php // Template Name: Home ?> 
<?php get_header()?>
<main class="hero" id="">
    <section class="container content-hero">
        <div class="col-info">
            <h1>Explore um mercado <strong>gigante</strong></h1>
            <p class="chamada">Faça parte do programa de afiliados na OnaBet.</p>
            <p class="chamada">Uma oportunidade de ouro para conquistar seu lugar no topo com a melhor experiência em jogos e apostas do país.</p>
            <div class="info-afilidao">
                <p>Seja um dos primeiros a explorar um mercado de 90 milhões de clientes sedentos por emoção e entretenimento.</p>
                <a href="">Quero ser afiliado</a>
            </div>
        </div>
        <div class="col-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-hero-dskt-clean.png" alt="Carlinhos Maia">
        </div>
    </section>
    <section class="games" id="games">
        <div class="container title-game">
            <h2>Mais de 3 mil Games</h2>
            <a href="">Veja mais jogos</a>
        </div>
        <div class="carousel-content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-02.png" alt="Game">
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
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/game-06.png" alt="Game">
                </div>
            </div>
        </div>
    </section>
    <section class="benefits" id="benefits">
        <div class="container">
            <h2>Bene<strong>fits</strong></h2>
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
        </div>
    </section>
    <section class="afliiados" id="afiliados">
        <div class="content-afiliados">
            <div class="col-img">
                <img src="" alt="">
            </div>
            <div class="col-info">
                <h3>Venha fazer parte do time que mais cresce no Brasil</h3>
                <a href="">Quero ser afiliado!</a>
            </div>
        </div>
    </section>
</main>


<script>
   $('.owl-carousel').owlCarousel({
    stagePadding: 120,
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>

<?php get_footer()?>