
<!--ZONE DE PARTENAIRE -->
@extends("layout.template")

@section("corps")
<link rel="stylesheet" href="{{ asset("assets/style.css")}}">
<section class="Partenaire">
    <h2>Nos Partenaire</h2>
    <div class="Logo_container">
        <img src="{{ asset("assets/NGA.png") }}" alt="">
        <img src="{{ asset("assets/IPFMP.png") }}" alt="">
        <img src="{{ asset("assets/UPGC.png") }}" alt="">
        <img src="{{ asset("assets/UN4.png") }}" alt="">
        <img src="{{ asset("assets/UN5.png") }}" alt="">
        <img src="{{ asset("assets/UN6.png") }}" alt="">
    </div>
</section>
@endsection