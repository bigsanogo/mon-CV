@extends("layout.template")

@section("corps")

    @include("mes sections.entete", compact('entetes'))
    @include("mes sections.about", compact('abouts'))
    @include("mes sections.parcour")
    @include("mes sections.engagement")
    @include("mes sections.actualite")
    @include("mes sections.temoignage")
    @include("mes sections.event")
    @include("mes sections.partenaire")
@endsection