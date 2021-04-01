@extends('layouts.layout')

@section('content')
        <main class="welcome">
            <div id="mainText">
                <h1>The Box Verhuizingen/Puinophaling</h1>
                <p>
                    Welkom! The Box Verhuizingen is een verhuisbedrijf dat gespecialiseerd is in het afvoeren van puin. Dit kan gaan van oude kasten, tot steenpuin, metaal en dergelijke.<br><br>
                    Dit komen wij bij u ophalen met onze aanhangwagen alvorens we het vervoeren naar het containerpark. Lekker makkelijk en uw auto blijft proper.
                <p>

                <div class="ctas">
                    <div id="divForHr" class="cta">
                        <h3>Vragen</h3>
                        <a href="contact" class="button">Contact <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="cta">
                        <h3>Prijsofferte</h3>
                        <a href="offerte" class="button">Offerte <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <picture id="mainLogo">
                <source media="(max-width: 1440px)" srcset="{{url('../../public/images/TheBox_updated_full_black.png')}}">
                <source media="(max-width: 2539px)" srcset="{{url('../../public/images/name_icon_up.png')}}">
                <img src="{{url('../../public/images/TheBox_updated_full_black.png')}}" alt="Logo the box verhuizingen and description of activities">
            </picture>
        </main>

        <section class="about">
            <h2>Over Ons</h2>
            <p id="p1">
                In 2020 zijn wij begonnen met onze bedrijfsactiviteiten. Wat begon met het afvoeren van één oude kast is intussen uitgelopen tot het leeghalen van kelders en het afvoeren van bouwafval. Wij streven naar een perfecte dienstverlening en staan garant voor een professionele aanpak.
            </p>

            <div id="imageAbout">
                <img src="{{url('../../public/images/home_done.webp')}}" alt="Utah Dierckx, founder of The Box Verhuizingen">
            </div>
            
            <div id="textAbout">
                <h3>Utah Dierckx</h3>
                <p>
                    Hallo! Mijn naam is Utah Dierckx en ik ben de eigenaar en oprichter van The Box Verhuizingen. Voor het verhuizen van uw binnenhuisarchitectuur of het afvoeren van eender welk puin kan u steeds rekenen op onze diensten.
                </p>
                <a href="projects" class="button">Projecten <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </section>

        <section class="location">
            <div id="gridLocation">
                <h2 id="locationTitle">Locatie</h2>

                <div id="mapsWidget">
                    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.046116316301!2d4.381667116332205!3d51.18137294230821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f6b535088a75%3A0xff8584b9a78182d!2sHof%20van%20Tichelen%202%2C%202610%20Antwerpen!5e0!3m2!1snl!2sbe!4v1615219392467!5m2!1snl!2sbe" height="250px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <p id="locationP">
                    Sinds 2021 zijn wij gevestigd in Wilrijk, Antwerpen. Over het algemeen voeren wij vooral puin af binnen de provincie Antwerpen, maar wij staan zeker ook open voor verdere verplaatsingen. Neem bij twijfel zeker contact met ons op via ons contactformulier of social media.
                </p>
            </div>
        </section>

    <script src="js/app.js"></script>

@endsection