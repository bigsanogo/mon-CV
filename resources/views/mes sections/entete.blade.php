<!--HEADER(HAUT DE PAGE)-->
@extends("layout.template")

@section("corps")
<link rel="stylesheet" href="{{ asset("assets/style.css")}}">
<header class="hautde_page">
    <div class="title_soustitle">
        <h4>
            {{ $entetes["titre"] }}
        </h4>
        <p class="sous_titre">
            {{ $entetes["description"] }}
        </p>
    </div>
    <span class="img_header">
        <img src="{{ asset("storage/".$entetes["image"]) }}" alt=" {{ $entetes["titre"] }}">
    </span>
</header>
@endsection