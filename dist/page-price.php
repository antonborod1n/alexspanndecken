<?php
/* 
Template Name: Страница Прайс
*/
?>

<?php get_header('page') ?>

<main class="main">
    <section class="price section">
        <div class="container">
            <div class="price__inner">
                <h1 class="price__title section__title">Preisanfrage</h1>
                <div class="section__grid">
                    <div class="price__subtitle section__subtitle">Zahlung</div>
                    <div class="price__slogan section__slogan">
                        Hier können Sie den Preis für Ihre Spanndecke unverbindlich und kostenfrei anfragen! Alle
                        Decken werden individuell und maßangefertigt. Daher ist ein verbindliches Angebot nur nach
                        Besichtigung und Ausmessung Ihrer Räume möglich.
                    </div>
                </div>
                <div class="price__content">
                    <p class="price__text">
                        Für die Berechnung spielen folgende Faktoren eine Rolle: Anzahl der Ecken, Anzahl der
                        Ebenen, eventuelle Farbkombinationen sowie Art der Beleuchtung. Bitte senden Sie uns ein
                        vollständig ausgefülltes Angebotsformular je Raum, wir werden Ihnen kurzfristig ein
                        Angebot erstellen.
                    </p>
                    <p class="price__text">* Pflichtfelder</p>
                    <form class="price__form form" action="#">
                        <h2 class="form__title">Formular zur Vorabberechnung</h2>
                        <div class="form__content">
                            <label class="form__label" for="name">
                                Name*
                                <input class="form__name form__input" id="name" type="text" />
                            </label>
                            <label class="form__label" for="email">
                                E-Mail*
                                <input class="form__email form__input" id="email" type="text" />
                            </label>
                            <label class="form__label" for="mob">
                                Mobil/Festnetz*
                                <input class="form__mob form__input" id="mob" type="text" />
                            </label>
                            <label class="form__label" for="address">
                                Straße/Hausnummer*
                                <input class="form__address form__input" id="address" type="text" />
                            </label>
                            <label class="form__label" for="plz">
                                PLZ/Ort*
                                <input class="form__plz form__input" id="plz" type="text" />
                            </label>
                            <label class="form__label" for="room">
                                Raum*
                                <input class="form__room form__input" id="room" type="text" />
                            </label>
                            <label class="form__label" for="kamin">
                                Kamin
                                <input class="form__kamin form__input" id="kamin" type="text" />
                            </label>
                            <label class="form__label" for="size">
                                Größe des Raumes Länge x Breite oder m²
                                <input class="form__size form__input" id="size" type="text" />
                            </label>
                            <label class="form__label" for="corners">
                                Anzahl der Ecken in Ihrem Raum
                                <input class="form__corners form__input" id="corners" type="text" />
                            </label>
                            <label class="form__label" for="light">
                                Eigene Einbaustrahler / Leuchtmittel vorhanden?
                                <input class="form__light form__input" id="light" type="text" />
                            </label>
                            <label class="form__label" for="lamps">
                                Anzahl der zu montierenden Einbaustrahler
                                <input class="form__lamps form__input" id="lamps" type="text" />
                            </label>
                            <label class="form__label" for="lamps2">
                                Anzahl der zu montierenden Hängelampen / Deckenleuchten
                                <input class="form__lamps2 form__input" id="lamps2" type="text" />
                            </label>

                            <div class="form__box">
                                <label class="form__label" for="info">
                                    Sonstige Informationen (Montage von Rauchmelder, Abzugshaube, Gardinen)
                                    <textarea
                                        class="form__textarea"
                                        name="message-info"
                                        id="info"
                                        placeholder="Placeholder"
                                        maxlength="150"></textarea>
                                </label>
                                <div class="form__row">
                                    <span class="form__textarea-text">Information Text</span>
                                    <span class="form__textarea-num">0/150</span>
                                </div>
                            </div>

                            <div class="form__box">
                                <label class="form__label" for="moreInfo">
                                    Zusätzliche Informationen und Wünsche
                                    <textarea
                                        class="form__textarea"
                                        name="message-info"
                                        id="moreInfo"
                                        placeholder="Placeholder"
                                        maxlength="150"></textarea>
                                </label>
                                <div class="form__row">
                                    <span class="form__textarea-text">Information Text</span>
                                    <span class="form__textarea-num">0/150</span>
                                </div>
                            </div>

                            <button class="form__btn" type="submit">Schicken</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ?>