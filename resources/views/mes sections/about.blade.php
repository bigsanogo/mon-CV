<!--ZONE A propos de nous-->
@extends("layout.template")

@section("corps")
<link rel="stylesheet" href="{{ asset("assets/style.css")}}">
{{-- @php
    $images = json_decode($abouts["images"]);
@endphp --}}
<section class="A_propos">
    <div class="apropos_droit">
        <img class="img1" src="{{ asset("assets/femme  etic.png") }}" alt="etudiante">
        <img class="img2" src="{{ asset("assets/groupe etud.png") }}" alt="etudiants">
        <img class="img3" src="{{ ("assets/un etudiant.png") }}" alt="etudiant">
    </div>
    <div class="apropos_gauche">
        <h3 class="title_vert">
            {{ "L excellence académique au service des innovations." }}
        </h3>
        <p class="sous_titre">
            {{"Engagés dans l'excellence académique, notre université d'ingénierie se distingue par sa mission de former des esprits innovants et compétents, prêts à relever les défis technologiques du monde en constante évolution."}}
        </p>
        <button class="Inscription">Lire la suite</button>
    </div>
</section>
@endsection