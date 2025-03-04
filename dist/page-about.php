<?php
/* 
Template Name: Страница О компании
*/
?>

<?php get_header() ?>

<main class="main">
    <section class="first block">
        <div class="first__inner">
            <div class="first__left first__col">
                <div class="first__text first__text1">[Wir sind seit 2017 tätig]</div>
                <div class="first__text first__text2">[Stil]</div>
            </div>
            <div class="first__center first__col">
                <div class="first__box">
                    <h1 class="first__title">Hersteller von Spanndecken</h1>
                    <p class="first__slogan">
                        Unser Unternehmen ist stets führend im Einsatz von Spitzentechnologien und neuen
                        Materialien im Bereich der Spanndecken.
                    </p>
                    <button class="first__btn">Reichen Sie Ihre Bestellung ein</button>
                </div>
            </div>
            <div class="first__right first__col">
                <div class="first__text">[Über uns]</div>
                <div class="first__text">[Qualität]</div>
                <div class="first__text">[Zuverlässigkeit]</div>
            </div>
        </div>
    </section>

    <section class="trends section block">
        <div class="container">
            <div class="trends__inner section__grid">
                <div class="trends__subtitle section__subtitle">Setzen Trends</div>
                <div class="trends__content">
                    <div class="trends__slogan section__slogan">
                        Das Unternehmen Alexspanndecken ist ein Team von Fachleuten, das stets danach strebt, in
                        seiner Arbeit Perfektion zu erreichen. Wir sind stolz auf unsere Erfahrung und die hohe
                        Qualität unserer Dienstleistungen.
                    </div>
                    <div class="trends__box">
                        <div class="trends__info section__box">
                            <div class="trends__info-box">
                                <p class="trends__info-text">
                                    Alexspanndecken wurde 2015 gegründet und hat seit 2017 eine eigene Produktion von
                                    Spanndecken aufgebaut, um unseren Kunden nicht nur qualitativ hochwertige, sondern
                                    auch schnelle Dienstleistungen anbieten zu können.
                                </p>
                                <p class="trends__info-text">
                                    Wir legen großen Wert auf neue Trends und Materialien und nehmen jährlich an
                                    internationalen Foren für Spanndeckenmeister teil. Dies ermöglicht es uns, in der
                                    Branche sowohl in der Servicequalität als auch in der Verwendung moderner
                                    Materialien führend zu bleiben.
                                </p>
                            </div>
                        </div>
                        <picture class="trends__pic">
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.webp" type="image/webp" />
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.avif" type="image/avif" />
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.jpg"
                                class="trends__img"
                                alt="О нас"
                                width="930"
                                height="567" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events block section">
        <div class="container">
            <div class="events__inner section__grid">
                <div class="events__subtitle section__subtitle">Wir bieten Unterstützung</div>
                <div class="events__slogan section__slogan">
                    Das Unternehmen Alexspanndecken strebt stets danach, seine Partner zu unterstützen und
                    weiterzuentwickeln, indem es ihnen die besten Lösungen und Innovationen im Bereich der
                    Spanndecken bietet. Wir sind überzeugt, dass der Erfolg unserer Partner auch unser Erfolg
                    ist.
                </div>
            </div>
            <div class="events__box">
                <div class="events__item">
                    <picture class="events__pic">
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events1.webp" type="image/webp" />
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events1.avif" type="image/avif" />
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/images/content/events1.jpg"
                            class="events__img events__img1"
                            alt="events"
                            width="297"
                            height="340" />
                    </picture>
                </div>
                <div class="events__item">
                    <picture class="events__pic">
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events2.webp" type="image/webp" />
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events2.avif" type="image/avif" />
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/images/content/events2.jpg"
                            class="events__img events__img2"
                            alt="events"
                            width="614"
                            height="550" />
                    </picture>
                </div>
                <div class="events__item">
                    <p class="events__text">
                        Durch die regelmäßige Organisation eigener Veranstaltungen für Spanndeckenmonteure hilft
                        Alexspanndecken ihnen, über die neuesten Materialien und Technologien auf dem Laufenden zu
                        bleiben. Diese Veranstaltungen zielen darauf ab, die Qualifikation zu verbessern,
                        Innovationen vorzustellen und den Erfahrungsaustausch zu fördern.
                    </p>
                    <picture class="events__pic">
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events3.webp" type="image/webp" />
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/events3.avif" type="image/avif" />
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/images/content/events3.jpg"
                            class="events__img events__img3"
                            alt="events"
                            width="297"
                            height="340" />
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="team section block">
        <div class="container">
            <div class="team__inner section__grid">
                <div class="team__subtitle section__subtitle">Unsere Mitarbeiter</div>
                <div class="team__content">
                    <div class="team__slogan section__slogan">
                        Die Mitarbeiter von Alexspanndecken beantworten gerne Ihre Fragen. Wir beraten Monteure
                        bei der Installation von Spanndecken.
                    </div>
                    <div class="team__box section__container">
                        <div class="team__item">
                            <div class="team__left">
                                <div class="team__number">[ 01 ]</div>
                                <picture class="team__pic">
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.webp" type="image/webp" />
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.avif" type="image/avif" />
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.jpg"
                                        class="team__img"
                                        alt="Team"
                                        width="297"
                                        height="411" />
                                </picture>
                            </div>
                            <div class="team__right team__info">
                                <div class="team__info-top">
                                    <h3 class="team__info-name">Alex Tichomolow</h3>
                                    <p class="team__info-text">
                                        Lorem ipsum dolor sit amet consectetur. Nisl dui urna consequat condimentum nunc
                                        quisque risus. Sem arcu tincidunt convallis amet. Dignissim at tristique metus
                                        tincidunt tempus nunc neque. Risus ac elementum eu phasellus duis semper.
                                    </p>
                                </div>
                                <dl class="team__list">
                                    <div class="team__item">
                                        <dt>Telefon</dt>
                                        <dd class="team__phone">
                                            <a class="team__link" href="tel:01725821433">+ 0172 58 21 433</a>
                                        </dd>
                                    </div>
                                    <div class="team__item">
                                        <dt>E-Mail</dt>
                                        <dd>
                                            <a class="team__link" href="mailto:info@alexspanndecken.de">info@alexspanndecken.de</a>
                                        </dd>
                                    </div>
                                    <div class="team__item team__social">
                                        <div class="team__social-title">Soziale Netzwerke</div>
                                        <ul class="team__social-list">
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.facebook.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4588 16.9848V28H17.9059V16.9848H21.2941L22 12.6809H17.9059V9.17933C17.9059 8.66187 18.25 8.15805 19.1765 8.15805H22V4H17.4118C15.25 4 13.4588 5.72662 13.4588 8.15805V12.6809H10V16.9848H13.4588Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.tiktok.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.2308 19.8462L16.2308 3.99998H20.1538C20.1538 3.99998 20.1895 4.85354 20.3077 5.3846C20.4834 6.17413 20.6214 6.53844 20.9231 7.0769C21.3499 7.8387 21.8462 8.3846 22.4615 8.84615C23.0769 9.30771 24.3846 9.84614 25.3077 9.84614H26.2308V13.6923H25.3077C24.5385 13.6923 23.3077 13.4615 22.3846 13.0769C21.4615 12.6923 20.3077 11.7692 20.3077 11.7692H20.0769V19.8462C20.0769 24.9231 16.7018 28 12.5385 28C8.37508 28 5 24.6249 5 20.4615C5 16.2982 8.37508 12.9231 12.5385 12.9231L13.7692 12.9231V16.8462H12.5385C10.3846 16.8462 8.94409 18.4649 8.92308 20.4615C8.90184 22.4795 10.4615 24.1538 12.5385 24.1538C15.9231 24.1538 16.2308 20.6154 16.2308 19.8462Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a
                                                    class="team__social-link"
                                                    href="https://www.instagram.com/"
                                                    target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M9.60919 4C6.57471 4 4 6.65649 4 9.58778V22.3206C4 25.3435 6.57471 28 9.60919 28H22.4828C25.3333 28 28 25.3435 28 22.3206V9.58778C28 6.65649 25.3333 4 22.2989 4H9.60919ZM5.15862 9.58778C5.2 7.17852 7.2 5.05649 9.60919 5.05649H22.2989C24.6521 5.05649 26.9333 7.17852 26.9333 9.58778V22.3206C26.9333 24.3785 24.6521 26.9435 22.2989 26.9435H9.60919C7.05212 26.9435 5.15862 24.7785 5.15862 22.3206V9.58778Z"
                                                            fill="#1E1E1E" />
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M9.60919 5.05649C7.2 5.05649 5.2 7.17852 5.15862 9.58778V22.3206C5.15862 24.7785 7.05212 26.9435 9.60919 26.9435H22.2989C24.6521 26.9435 26.9333 24.3785 26.9333 22.3206V9.58778C26.9333 7.17852 24.6521 5.05649 22.2989 5.05649H9.60919ZM9.92108 16.1893C9.91762 13.0185 12.6353 10.5989 15.8061 10.5954C18.9265 10.592 21.589 12.8813 21.6912 16C21.7966 19.2172 19.025 21.7691 15.8061 21.771C12.6386 21.7728 9.92454 19.3569 9.92108 16.1893ZM20.8636 9.61985C20.8636 8.91022 21.4418 8.34391 22.151 8.31946C22.8861 8.29411 23.5303 8.88434 23.5303 9.61985C23.5303 10.3374 22.8861 10.9276 22.151 10.9023C21.4418 10.8778 20.8636 10.3295 20.8636 9.61985Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://telegram.org/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.508516 13.9998L7.17576 16.4567L9.77483 24.7207C9.88783 25.2791 10.5659 25.3908 11.0179 25.0558L14.747 22.0405C15.086 21.7055 15.651 21.7055 16.103 22.0405L22.7703 26.8426C23.2223 27.1776 23.9003 26.9543 24.0133 26.3959L28.9855 2.94383C29.0985 2.38545 28.5334 1.82707 27.9684 2.05043L0.508516 12.548C-0.169505 12.7714 -0.169505 13.7764 0.508516 13.9998ZM9.43583 15.2282L22.5442 7.29921C22.7702 7.18754 22.9963 7.52257 22.7703 7.63425L12.0349 17.5735C11.6959 17.9085 11.3569 18.3552 11.3569 18.9136L11.0179 21.5938C11.0179 21.9288 10.4529 22.0405 10.3398 21.5938L8.98379 16.68C8.64478 16.1217 8.87081 15.4516 9.43583 15.2282Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.youtube.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M7.42858 6H24.5714C28 6 30 8.44666 30 11.7143V20.5715C30 23.7143 27.883 26 24.5714 26H7.42858C4.35055 26 1.99999 23.6495 2 20.5715V11.7143C1.99998 8.57141 3.85247 5.99997 7.42858 6ZM12.8572 20.8572V11.7143L20.8572 16.2858L12.8572 20.8572Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <div class="team__item">
                            <div class="team__left">
                                <div class="team__number">[ 01 ]</div>
                                <picture class="team__pic">
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.webp" type="image/webp" />
                                    <source srcset="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.avif" type="image/avif" />
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/images/content/about-page.jpg"
                                        class="team__img"
                                        alt="Team"
                                        width="297"
                                        height="411" />
                                </picture>
                            </div>
                            <div class="team__right team__info">
                                <div class="team__info-top">
                                    <h3 class="team__info-name">Kristina Tichomolow</h3>
                                    <p class="team__info-text">
                                        Lorem ipsum dolor sit amet consectetur. Nisl dui urna consequat condimentum nunc
                                        quisque risus. Sem arcu tincidunt convallis amet. Dignissim at tristique metus
                                        tincidunt tempus nunc neque. Risus ac elementum eu phasellus duis semper.
                                    </p>
                                </div>
                                <dl class="team__list">
                                    <div class="team__item">
                                        <dt>Telefon</dt>
                                        <dd class="team__phone">
                                            <a class="team__link" href="tel:01725821433">+ 0172 58 21 433</a>
                                        </dd>
                                    </div>
                                    <div class="team__item">
                                        <dt>E-Mail</dt>
                                        <dd>
                                            <a class="team__link" href="mailto:info@alexspanndecken.de">info@alexspanndecken.de</a>
                                        </dd>
                                    </div>
                                    <div class="team__item team__social">
                                        <div class="team__social-title">Soziale Netzwerke</div>
                                        <ul class="team__social-list">
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.facebook.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4588 16.9848V28H17.9059V16.9848H21.2941L22 12.6809H17.9059V9.17933C17.9059 8.66187 18.25 8.15805 19.1765 8.15805H22V4H17.4118C15.25 4 13.4588 5.72662 13.4588 8.15805V12.6809H10V16.9848H13.4588Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.tiktok.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.2308 19.8462L16.2308 3.99998H20.1538C20.1538 3.99998 20.1895 4.85354 20.3077 5.3846C20.4834 6.17413 20.6214 6.53844 20.9231 7.0769C21.3499 7.8387 21.8462 8.3846 22.4615 8.84615C23.0769 9.30771 24.3846 9.84614 25.3077 9.84614H26.2308V13.6923H25.3077C24.5385 13.6923 23.3077 13.4615 22.3846 13.0769C21.4615 12.6923 20.3077 11.7692 20.3077 11.7692H20.0769V19.8462C20.0769 24.9231 16.7018 28 12.5385 28C8.37508 28 5 24.6249 5 20.4615C5 16.2982 8.37508 12.9231 12.5385 12.9231L13.7692 12.9231V16.8462H12.5385C10.3846 16.8462 8.94409 18.4649 8.92308 20.4615C8.90184 22.4795 10.4615 24.1538 12.5385 24.1538C15.9231 24.1538 16.2308 20.6154 16.2308 19.8462Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a
                                                    class="team__social-link"
                                                    href="https://www.instagram.com/"
                                                    target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M9.60919 4C6.57471 4 4 6.65649 4 9.58778V22.3206C4 25.3435 6.57471 28 9.60919 28H22.4828C25.3333 28 28 25.3435 28 22.3206V9.58778C28 6.65649 25.3333 4 22.2989 4H9.60919ZM5.15862 9.58778C5.2 7.17852 7.2 5.05649 9.60919 5.05649H22.2989C24.6521 5.05649 26.9333 7.17852 26.9333 9.58778V22.3206C26.9333 24.3785 24.6521 26.9435 22.2989 26.9435H9.60919C7.05212 26.9435 5.15862 24.7785 5.15862 22.3206V9.58778Z"
                                                            fill="#1E1E1E" />
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M9.60919 5.05649C7.2 5.05649 5.2 7.17852 5.15862 9.58778V22.3206C5.15862 24.7785 7.05212 26.9435 9.60919 26.9435H22.2989C24.6521 26.9435 26.9333 24.3785 26.9333 22.3206V9.58778C26.9333 7.17852 24.6521 5.05649 22.2989 5.05649H9.60919ZM9.92108 16.1893C9.91762 13.0185 12.6353 10.5989 15.8061 10.5954C18.9265 10.592 21.589 12.8813 21.6912 16C21.7966 19.2172 19.025 21.7691 15.8061 21.771C12.6386 21.7728 9.92454 19.3569 9.92108 16.1893ZM20.8636 9.61985C20.8636 8.91022 21.4418 8.34391 22.151 8.31946C22.8861 8.29411 23.5303 8.88434 23.5303 9.61985C23.5303 10.3374 22.8861 10.9276 22.151 10.9023C21.4418 10.8778 20.8636 10.3295 20.8636 9.61985Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://telegram.org/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.508516 13.9998L7.17576 16.4567L9.77483 24.7207C9.88783 25.2791 10.5659 25.3908 11.0179 25.0558L14.747 22.0405C15.086 21.7055 15.651 21.7055 16.103 22.0405L22.7703 26.8426C23.2223 27.1776 23.9003 26.9543 24.0133 26.3959L28.9855 2.94383C29.0985 2.38545 28.5334 1.82707 27.9684 2.05043L0.508516 12.548C-0.169505 12.7714 -0.169505 13.7764 0.508516 13.9998ZM9.43583 15.2282L22.5442 7.29921C22.7702 7.18754 22.9963 7.52257 22.7703 7.63425L12.0349 17.5735C11.6959 17.9085 11.3569 18.3552 11.3569 18.9136L11.0179 21.5938C11.0179 21.9288 10.4529 22.0405 10.3398 21.5938L8.98379 16.68C8.64478 16.1217 8.87081 15.4516 9.43583 15.2282Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="team__social-item">
                                                <a class="team__social-link" href="https://www.youtube.com/" target="_blank">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M7.42858 6H24.5714C28 6 30 8.44666 30 11.7143V20.5715C30 23.7143 27.883 26 24.5714 26H7.42858C4.35055 26 1.99999 23.6495 2 20.5715V11.7143C1.99998 8.57141 3.85247 5.99997 7.42858 6ZM12.8572 20.8572V11.7143L20.8572 16.2858L12.8572 20.8572Z"
                                                            fill="#1E1E1E" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="training">
        <div class="container">
            <div class="training__inner">
                <div class="training__box">
                    <div class="training__title">
                        Werden Sie unser Partner und erhalten Sie die Möglichkeit, unser gesamtes Produktsortiment
                        zu Sonderpreisen zu erwerben.
                    </div>
                    <button class="training__btn">Senden Sie Ihre Bewerbung</button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ?>