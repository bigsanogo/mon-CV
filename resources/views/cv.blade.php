
@extends("layout.template")

@section("corps")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/styleCv.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
    <body>
        <div class="conteneur">
            <div class="droit">
              <!-- gauche -->
              <h1>SANOGO ALI</h1>
              <div class="rectangle"></div>
              <h2>
                Hello👋, je suis <span class="designer">UI UX Designer</span> baser a
                abidjan cote d'ivoire
              </h2>
              <h3>Experiences</h3>
              <section class="az">
                <svg
                  class="one"
                  xmlns="http://www.w3.org/2000/svg"
                  width="15"
                  height="84"
                  viewBox="0 0 15 84"
                  fill="none"
                >
                  <circle
                    cx="7.5"
                    cy="7.5"
                    r="5.5"
                    stroke="#90CDF4"
                    stroke-width="4"
                  />
                  <line
                    x1="8"
                    y1="15"
                    x2="8"
                    y2="84"
                    stroke="#90CDF4"
                    stroke-width="2"
                  />
                </svg>
                <p class="date01">
                  juillet 2023 - Septembre 2023 <br /><span class="entreprise"
                    >AFRICADIDIGITALISER </span
                  ><br /><span class="boulot">ui ux designer</span>
                </p>
                <br />
              </section>
              <section class="ar">
                <svg
                  class="two"
                  xmlns="http://www.w3.org/2000/svg"
                  width="15"
                  height="67"
                  viewBox="0 0 15 67"
                  fill="none"
                >
                  <circle
                    cx="7.5"
                    cy="7.5"
                    r="5.5"
                    stroke="#90CDF4"
                    stroke-width="4"
                  />
                  <line
                    x1="8"
                    y1="15"
                    x2="8"
                    y2="47"
                    stroke="#90CDF4"
                    stroke-width="2"
                  />
                  <line
                    x1="8"
                    y1="50"
                    x2="8"
                    y2="57"
                    stroke="#90CDF4"
                    stroke-width="2"
                  />
                  <line
                    x1="8"
                    y1="60"
                    x2="8"
                    y2="67"
                    stroke="#90CDF4"
                    stroke-width="2"
                  />
                </svg>
                <p class="date02">
                  Septembre 2023 - novembre 2023 <br /><span class="entreprise"
                    >ARNIO STUDIO </span
                  ><br /><span class="boulot">ui ux designer</span>
                </p>
                <br />
              </section>
              <h3>Languages</h3>
              <p class="langue"><b>Francais</b> - courante</p>
              <p class="langue"><strong>Anglais</strong> - intermediare</p>
              <br />
              <h3>Centre d'interet</h3>
              <button class="interet">⛰ voyage</button>
              <button class="interet">⛹️ Sport</button>
              <button class="interet">📚 Lecture</button>
              <p class="motivation">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                soluta at aliquam velit repellendus asperiores fugit ipsam saepe
                perferendis. Beatae natus id animi iste cumque nam dolore consequuntur
                qui quo.
              </p>
            </div>
            <div class="img">
              <!-- droit -->
              <img src="PROFILE PIC.png" alt="pp" />
              <div class="cercle">
                <svg
                  width="188"
                  height="375"
                  viewBox="0 0 188 375"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="187.5" cy="187.5" r="187.5" fill="#BEE3F8" />
                </svg>
                <button class="email">alisanogo105@gmail.com</button>
                <button class="Numero">01 51 73 00 91</button>
                <button class="Nationalite">Ivoirien</button>
              </div>
              <div class="B">
                <svg
                  width="15"
                  height="15"
                  viewBox="0 0 15 15"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect width="15" height="15" fill="#4299E1" />
                </svg>
      
                <div class="C">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                  >
                    <circle cx="10" cy="10" r="9" stroke="#ED8936" stroke-width="2" />
                  </svg>
                </div>
              </div>
              <div class="re"></div>
              <div class="education">
                <h3>Education</h3>
                <p class="annes">2021, 2022 (science informatique)</p>
                <p class="l1">Licence 1 (groupe ITA- Marcory)</p>
                <p class="annes">2022, 2023 (science informatique)</p>
                <p class="l2">Licence 2 (Etic-University)</p>
                <p class="annes">2023, 2024 (science informatique)</p>
                <p class="l3">Licence 3 (Etic-University)</p>
              </div>
              <div class="competance">
                <h3>Competence</h3>
                <button>programation</button>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 128 128"
                  >
                    <path
                      fill="#E44D26"
                      d="M19.037 113.876L9.032 1.661h109.936l-10.016 112.198l-45.019 12.48z"
                    />
                    <path
                      fill="#F16529"
                      d="m64 116.8l36.378-10.086l8.559-95.878H64z"
                    />
                    <path
                      fill="#EBEBEB"
                      d="M64 52.455H45.788L44.53 38.361H64V24.599H29.489l.33 3.692l3.382 37.927H64zm0 35.743l-.061.017l-15.327-4.14l-.979-10.975H33.816l1.928 21.609l28.193 7.826l.063-.017z"
                    />
                    <path
                      fill="#fff"
                      d="M63.952 52.455v13.763h16.947l-1.597 17.849l-15.35 4.143v14.319l28.215-7.82l.207-2.325l3.234-36.233l.335-3.696h-3.708zm0-27.856v13.762h33.244l.276-3.092l.628-6.978l.329-3.692z"
                    />
                    <title>Html 5</title>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 128 128"
                  >
                    <path
                      fill="#1572B6"
                      d="M18.814 114.123L8.76 1.352h110.48l-10.064 112.754l-45.243 12.543z"
                    />
                    <path
                      fill="#33A9DC"
                      d="m64.001 117.062l36.559-10.136l8.601-96.354h-45.16z"
                    />
                    <path
                      fill="#fff"
                      d="M64.001 51.429h18.302l1.264-14.163H64.001V23.435h34.682l-.332 3.711l-3.4 38.114h-30.95z"
                    />
                    <path
                      fill="#EBEBEB"
                      d="m64.083 87.349l-.061.018l-15.403-4.159l-.985-11.031H33.752l1.937 21.717l28.331 7.863l.063-.018z"
                    />
                    <path
                      fill="#fff"
                      d="m81.127 64.675l-1.666 18.522l-15.426 4.164v14.39l28.354-7.858l.208-2.337l2.406-26.881z"
                    />
                    <path
                      fill="#EBEBEB"
                      d="M64.048 23.435v13.831H30.64l-.277-3.108l-.63-7.012l-.331-3.711zm-.047 27.996v13.831H48.792l-.277-3.108l-.631-7.012l-.33-3.711z"
                    />
                    <title>Css</title>
                  </svg>
                </p>
                <br />
                <button>Graphiste</button><br />
                <p class="icongraph">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 256 256"
                  >
                    <g fill="none">
                      <rect width="256" height="256" fill="#470137" rx="60" />
                      <path
                        fill="#FF61F6"
                        d="m134.239 80.215l-30 49.5l32 52.5c.2.4.3.8.2 1.2c-.1.4-.5.1-1.1.2h-22.9c-1.6 0-2.7-.1-3.4-1.1c-2.1-4.2-4.3-8.3-6.4-12.5c-2.1-4.1-4.4-8.3-6.8-12.6c-2.4-4.3-4.8-8.6-7.2-13h-.2c-2.1 4.3-4.4 8.6-6.7 12.9c-2.3 4.3-4.6 8.6-6.8 12.8c-2.3 4.2-4.6 8.5-6.9 12.6c-.4 1-1.2 1.1-2.3 1.1h-22c-.4 0-.7.2-.7-.3c-.1-.4 0-.8.2-1.1l31.1-51l-30.3-51.3c-.3-.4-.4-.8-.2-1c.2-.3.6-.4 1-.4h22.7c.5 0 1 .1 1.4.2c.4.2.7.5 1 .9c1.9 4.3 4.1 8.6 6.4 12.9c2.4 4.3 4.7 8.5 7.2 12.7c2.4 4.2 4.6 8.4 6.7 12.7h.2c2.1-4.4 4.3-8.7 6.5-12.9c2.2-4.2 4.5-8.4 6.8-12.6c2.3-4.2 4.5-8.5 6.7-12.6c.1-.4.3-.8.6-1c.4-.2.8-.3 1.3-.2h21.1c.5-.1 1 .2 1.1.7c.1.1-.1.5-.3.7m46.2 105.501c-7.4.1-14.8-1.4-21.5-4.5c-6.3-2.9-11.5-7.7-15.1-13.6c-3.7-6.1-5.5-13.7-5.5-22.8c-.1-7.4 1.8-14.7 5.5-21.1c3.8-6.5 9.3-11.9 15.9-15.5c7-3.9 15.4-5.8 25.3-5.8c.5 0 1.2 0 2.1.1c.9.1 1.9.1 3.1.2v-31.6c0-.7.3-1.1 1-1.1h20.3c.5-.1.9.3 1 .7v95.4c0 1.8.1 3.8.2 6c.2 2.1.3 4.1.4 5.8c0 .7-.3 1.3-1 1.6c-5.2 2.2-10.7 3.8-16.3 4.8c-5.1.9-10.2 1.4-15.4 1.4m9.8-20v-44c-.9-.2-1.8-.4-2.7-.5c-1.1-.1-2.2-.2-3.3-.2c-3.9 0-7.8.8-11.3 2.6c-3.4 1.7-6.3 4.2-8.5 7.4s-3.3 7.5-3.3 12.7c-.1 3.5.5 7 1.7 10.3c1 2.7 2.5 5.1 4.5 7.1c1.9 1.8 4.2 3.2 6.8 4c2.7.9 5.5 1.3 8.3 1.3c1.5 0 2.9-.1 4.2-.2c1.3.1 2.4-.1 3.6-.5"
                      />
                    </g>
                    <title>Adobe XD</title>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 256 256"
                  >
                    <g fill="none">
                      <rect width="256" height="256" fill="#242938" rx="60" />
                      <g clip-path="url(#skillIconsFigmaDark0)">
                        <path
                          fill="#0ACF83"
                          d="M94.347 228c18.4 0 33.333-14.933 33.333-33.333v-33.334H94.347c-18.4 0-33.334 14.934-33.334 33.334c0 18.4 14.934 33.333 33.334 33.333"
                        />
                        <path
                          fill="#A259FF"
                          d="M61.013 128c0-18.4 14.934-33.333 33.334-33.333h33.333v66.666H94.347c-18.4 0-33.334-14.933-33.334-33.333"
                        />
                        <path
                          fill="#F24E1E"
                          d="M61.013 61.333C61.013 42.933 75.947 28 94.347 28h33.333v66.667H94.347c-18.4 0-33.334-14.934-33.334-33.334"
                        />
                        <path
                          fill="#FF7262"
                          d="M127.68 28h33.333c18.4 0 33.334 14.933 33.334 33.333s-14.934 33.334-33.334 33.334H127.68z"
                        />
                        <path
                          fill="#1ABCFE"
                          d="M194.347 128c0 18.4-14.934 33.333-33.334 33.333c-18.4 0-33.333-14.933-33.333-33.333s14.933-33.333 33.333-33.333S194.347 109.6 194.347 128"
                        />
                      </g>
                      <defs>
                        <clipPath id="skillIconsFigmaDark0">
                          <path fill="#fff" d="M61 28h133.36v200H61z" />
                        </clipPath>
                      </defs>
                    </g>
                    <title>Figma</title>
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32.77"
                    height="32"
                    viewBox="0 0 256 250"
                  >
                    <rect width="256" height="249.6" fill="#300" rx="42.5" />
                    <path
                      fill="#FF9A00"
                      d="M124.054 149.79h-39.67l-8.072 25.073a2.02 2.02 0 0 1-2.061 1.546H54.158c-1.145 0-1.546-.63-1.202-1.89l34.347-98.918c.343-1.03.687-2.203 1.03-3.52c.45-2.292.68-4.62.687-6.955a1.063 1.063 0 0 1 1.202-1.203h27.306c.8 0 1.258.287 1.374.86l38.983 109.908c.344 1.146 0 1.719-1.03 1.718h-22.326a1.587 1.587 0 0 1-1.717-1.202zm-33.488-21.638H117.7l-.387-1.277l-.621-2.022l-.443-1.42l-.707-2.236l-1.503-4.707l-1.322-4.173l-3.433-10.87a334.433 334.433 0 0 1-2.46-8.138l-.628-2.21l-.734-2.613l-1.12-4.05l-.21-.763h-.171a138.781 138.781 0 0 1-3.136 12.23l-2.548 8.196l-1.402 4.528l-1.415 4.584c-.256.828-.51 1.647-.765 2.456l-.76 2.398l-.756 2.342l-.752 2.284l-.748 2.227c-.248.733-.496 1.456-.743 2.17zm90.501-46.025a12.456 12.456 0 0 1-9.445-3.778a13.586 13.586 0 0 1-3.607-9.789a12.6 12.6 0 0 1 3.864-9.53a13.27 13.27 0 0 1 9.165-3.697l.366.004c4.122 0 7.357 1.23 9.704 3.692a13.258 13.258 0 0 1 3.52 9.531a13.412 13.412 0 0 1-3.692 9.79a13.177 13.177 0 0 1-9.508 3.79zm-11.85 92.564V92.603c0-1.03.456-1.546 1.374-1.546h21.124c.915 0 1.373.515 1.374 1.546v82.088c0 1.146-.458 1.719-1.374 1.718h-20.952c-.976 0-1.49-.514-1.541-1.542z"
                    />
                    <title>Illustrator</title>
                  </svg>
                </p>
              </div>
            </div>
          </div>
    </body>
</html>
@endsection