@extends('layouts.layout')

@section('content')
    <section class="projects">
        <h1>Afgewerkte Projecten</h1>

        <div class="project" id="project1">
            <h2 id="project1Title">Afvoeren resten badkamer</h2>
            <p class="date" id="project1Date">
                2 maart 2021, Wilrijk
            </p>
            <p class="projectText" id="project1P">
                Deze klant heeft een nieuwe badkamer laten zetten en wij hebben de resten van de oude afgevoerd. Deze resten bestonden uit kasten, een plastic badkuip, lavabo, droogkast, wasmachine en dergelijke. Weer een tevreden klant!
            </p>
            <img src="{{url('../../public/images/project1_done.webp')}}" id="project1Img" alt="image project 1 The Box Verhuizingen">
        </div>

        <div class="project" id="project2">
            <h2 id="project2Title">Afvoeren bouwafval</h2>
            <p class="date" id="project2Date">
                24 februari 2021, Hove
            </p>
            <p class="projectText" id="project2P">
                Bij het zetten van een nieuwbouwwoning komt heel wat afval kijken. Voor het afvoeren van cement, steenpuin en dergelijk bouwafval kan u steeds bij ons terecht.
            </p>
            <img src="{{url('../../public/images/project2_done.webp')}}" id="project2Img" alt="image project 2 The Box Verhuizingen">
        </div>

        <div class="project" id="project3">
            <h2 id="project3Title">Afvoeren tegels, gootsteen en PVC</h2>
            <p class="date" id="project3Date">
                20 februari 2021, Hoboken
            </p>
            <p class="projectText" id="project3P">
                Dit was de eerste volledige badkamer die we hebben afgevoerd naar het containerpark. De eigenaar wou deze vervuilde spullen niet in zijn auto steken dus kwamen wij langs met de aanhangwagen.
            </p>
            <img src="{{url('../../public/images/project3_done.webp')}}" id="project3Img" alt="image project 3 The Box Verhuizingen">
        </div>

        <div class="project" id="project4">
            <h2 id="project4Title">Afbraak van tuinmuur, afvoeren steenpuin</h2>
            <p class="date" id="project4Date">
                29 maart 2021, Deurne
            </p>
            <p class="projectText" id="project4P">
                Deze klant benaderde ons via de website voor de afbraak en het afvoeren van een tuinmuur. Enkele dagen later begonnen wij aan deze klus en binnen een paar uur was deze kamer leeg!
            </p>
            <img src="{{url('../../public/images/project3_done.webp')}}" id="project4Img" alt="image project 3 The Box Verhuizingen">
        </div>

        <div class="project" id="project5">
            <h2 id="project5Title">Afvoeren grasmat</h2>
            <p class="date" id="project5Date">
                13 april 2021, Wilrijk
            </p>
            <p class="projectText" id="project5P">
                Naast steen, metaal en hout voeren wij ook tuinafval af. Heeft u in grote hoeveelheden groen-afval liggen dat u niet in uw groencontainer krijgt, neem dan snel contact met ons op.
            </p>
            <img src="{{url('../../public/images/project3_done.webp')}}" id="project5Img" alt="image project 3 The Box Verhuizingen">
        </div>
    </section>

    <div class="contact" id="contactProjects">
        <h2 id="h2Contact">Contacteer Ons</h2>
        <p id="pContact">
            Heeft u een soort gelijke opdracht voor ons of een vraag? Neem dan zeker contact met ons op via social media of onze contactpagina.
        </p>
        <a href="contact" class="button">Contact <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>

    <div class="contact">
        <h2 id="h2Oproep">Oproep zelfstandigen</h2>
        <p>
            Bent u een (kleine) zelfstandige die periodiek zijn (bouw)afval wilt laten afvoeren door een externe partij? Dan bent u bij The Box verhuizingen aan het juiste adres. Wij komen met onze aanhangwagen langs om uw afval op te halen zodat u zich kan
            concentreren op uw core business. Bij interesse kan u ons steeds contacteren via ons contactformulier of social media.
        </p>
    </div>
@endsection