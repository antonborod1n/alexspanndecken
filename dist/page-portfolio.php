<?php
/* 
Template Name: Страница Портфолио
*/
?>

<?php get_header('page') ?>

<main class="main">
    <section class="portfolio">
        <div class="container">
            <div class="portfolio__inner">
                <div class="portfolio__top">
                    <div class="portfolio__controll">
                        <button class="portfolio__controll-button js-controll-btn">Farbe</button>
                        <div class="portfolio__controll-box js-controll-box">
                            <div class="portfolio__controll-btn active js-portfolio-btn" role="button">
                                [Alle / 84]
                            </div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Büros]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Wohnzimmer]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Schlafzimmer]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Küche]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Kinderzimmer]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">[Flur]</div>
                            <div class="portfolio__controll-btn js-portfolio-btn" role="button">
                                [Arbeitszimmer]
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__info">
                        <h1 class="portfolio__title">Portfolio</h1>
                        <p class="portfolio__text">
                            Mit uns verwandeln Sie Ihr Interieur und verleihen ihm ein stilvolles und modernes
                            Erscheinungsbild. Unser Team entwickelt und realisiert sorgfältig individuelle Projekte,
                            die hohe Materialqualität, innovative Technologien und handwerkliches Können vereinen.
                        </p>
                    </div>
                </div>
                <div class="portfolio__content">
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/1.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/1.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/1.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="695" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Schlafzimmer 19.5 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/2.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/2.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/2.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="540" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Küche 28 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/3.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/3.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/3.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="540" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Küche 28 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/4.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/4.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/4.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="695" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Schlafzimmer 19.5 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/5.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/5.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/5.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="540" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Küche 28 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio__item">
                        <picture class="portfolio__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/6.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/6.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/portfolio/6.jpg"
                                class="portfolio__img"
                                alt="Portfolio"
                                width="930"
                                height="695" />
                        </picture>
                        <div class="portfolio__box">
                            <ul class="portfolio__list portfolio__list-info">
                                <li class="portfolio__list-item">Schlafzimmer 19.5 м2</li>
                                <li class="portfolio__list-item">Land</li>
                                <li class="portfolio__list-item">Bezirk, Region</li>
                            </ul>
                            <ul class="portfolio__list portfolio__list-benefits">
                                <li class="portfolio__list-item">Material für Spanndecken</li>
                                <li class="portfolio__list-item">Profilsystem für Spanndecken</li>
                                <li class="portfolio__list-item">Beleuchtung</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pagination">
        <div class="container">
            <div class="pagination__inner">
                <div class="pagination__box">
                    <button class="pagination__btn pagination__btn-prev">
                        <svg
                            width="25"
                            height="32"
                            viewBox="0 0 25 32"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.35">
                                <path
                                    d="M16 23L9 17L16 11"
                                    stroke="#1E1E1E"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>
                    </button>
                    <ul class="pagination__list">
                        <li class="pagination__item active">
                            <a class="pagination__link" href="#">1</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#">2</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#">3</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#">4</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#">...</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#">8</a>
                        </li>
                    </ul>
                    <button class="pagination__btn pagination__btn-next">
                        <svg
                            width="9"
                            height="14"
                            viewBox="0 0 9 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1 13L8 7L1 1"
                                stroke="#1E1E1E"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <button class="pagination__btn-more">Mehr anzeigen</button>
            </div>
        </div>
    </div>

</main>
<?php get_footer() ?>