<?php
/* 
Template Name: Страница Оплата
*/
?>

<?php get_header('page') ?>

<main class="main">
    <section class="payment section">
        <div class="container">
            <div class="payment__inner section__container">
                <div class="payment__top section__content">
                    <div class="payment__top-box section__box">
                        <a class="payment__top-link section__link active" href="#">[Zahlung]</a>
                        <a class="payment__top-link section__link" href="#">[Lieferung]</a>
                    </div>
                    <h1 class="payment__top-title section__title">Zahlungs-und Lieferbedingungen</h1>
                </div>
                <div class="payment__content section__content">
                    <div class="payment__name section__name">Zahlung</div>
                    <div class="payment__box">
                        <h2 class="payment__title">Für gewerbe Kunde</h2>
                        <p class="payment__text">
                            Alle Preise im Online Shop sind NETTO Preise und gelten nur für GEWERBE Kunden.
                        </p>
                        <h2 class="payment__title">Für privat Kunde</h2>
                        <p class="payment__text">
                            Kauf für PRIVAT Kunden ist möglich , die Preise werden in der Rechnung bzw. Angebot
                            automatisch angepasst.
                        </p>
                        <p class="payment__text section__text section__text-bullet">
                            Nach Auswahl Ihrer gewünschten Artikel, können Sie uns Ihre unverbindliche Bestellung
                            senden. Abhängig von der Größe, dem Gewicht, und der Menge werden wir die Versandkosten
                            für Ihre Bestellung berechnen und Ihnen die Gesamtsumme für Ihre Bestellung mitteilen.
                            Per E-Mail können Sie uns Ihren Kauf bestätigen und den Rechnungsbetrag überweisen oder
                            die Bestellung stornieren, falls die Versandkosten zu hoch sind.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ?>