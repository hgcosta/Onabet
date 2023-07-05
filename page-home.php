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