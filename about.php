<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <picture></picture>
            <img src="OllesABvitver2.png" width="333" height="58">
        </picture>
    </header>        
    <nav>
    <button class="menu-toggle">☰</button>
    <div class="nav-links">
        <a href="index.php">Hem</a>
        <a href="about.php">Om oss</a>
        <a href="contact.php">Kontakt</a>
    </div>       
    </nav>

    <script>
    const toggle = document.querySelector('.menu-toggle');
    const links = document.querySelector('.nav-links');

    toggle.addEventListener('click', () => {
        links.classList.toggle('active');
    });
    </script>

    <main>
        <article class="main-article2"> 
            <h1 id="head">Vilka är vi?</h1>
        </article>
        <article class="second-article2"><h3>Olles AB som jobbar med utveckling och produktion av maskindelar är organiserat enligt följande</h3>
            <ul> 
                <li>&lt;STYR&gt;</li>
                <li>&lt;PROD&gt;</li>
                <li>&lt;UTV&gt;</li>
                <li>&lt;IT&gt;</li>
                <li>&lt;SALG&gt;</li>
            </ul>
        </article>
        <article class="personer"><div>


            <div class="rad">
                <div>
                    <p>Glenn Klappfentrikel </p>
                    <img src="glenn.jpg">
                    <p>Styr </p>
                    <p>VD </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Helga Braun </p>
                    <img src="helga.jpg">
                    <p>Styr </p>
                    <p>Löner, Personal </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Paulina Olsson </p>
                    <img src="paulina.jpg">
                    <p>Styr </p>
                    <p>Sekreterare, Telefonväxel </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Greger Andersson </p>
                    <img src="greger.jpg">
                    <p>Produktion </p>
                    <p>Avdelningschef, Produktionsansvarig </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Bob "Lillen" Mkumba </p>
                    <img src="bob.jpg">
                    <p>Produktion </p>
                    <p>CNC-programmering, CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Pekka Miillikainen </p>
                    <img src="pekka.jpg">
                    <p>Produktion </p>
                    <p>CNC, Lager/Truck </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Gunilla Eriksson </p>
                    <img src="gunilla.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Eva Braun </p>
                    <img src="eva.jpg">
                    <p>Produktion </p>
                    <p>CNC, Facklig företrädare för IF Metall </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Patrik Svensson </p>
                    <img src="patrik.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Lisbeth Puktrumma </p>
                    <img src="lisbeth.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Henry Mitäpää </p>
                    <img src="henry.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Omar Muhammed </p>
                    <img src="omar.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Bruce Bannerhag </p>
                    <img src="bruce.jpg">
                    <p>Produktion </p>
                    <p>CNC </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Hans von Lilleskog </p>
                    <img src="hans.jpg">
                    <p>Utveckling </p>
                    <p>Utvecklingsledare<br> Designer </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Pamela Andersson </p>
                    <img src="pamela.jpg">
                    <p>Utveckling </p>
                    <p>Designer/Beräkningar, Ritningsunderlag </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Peter Norrut </p>
                    <img src="peter.jpg">
                    <p>Utveckling </p>
                    <p>Ritningsunderlag<br> Forskning </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Muhammed Ahdmin </p>
                    <img src="muhammed.jpg">
                    <p>IT </p>
                    <p>Datorsystem, Telefonväxelprogrammering, Hemsida </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Åke "CZ" Carlzon </p>
                    <img src="åke.jpg">
                    <p>Säljare </p>
                    <p>Säljchef<br> Marknadsföring </p>
                </div>
            </div>

            <div class="rad">
                <div>
                    <p>Lisa Karlsson </p>
                    <img src="lisa.jpg">
                    <p>Säljare </p>
                    <p>Säljare<br> Marknadsföring </p>
                </div>
            </div>



        </div></article>
    </main>
    <footer>&copy;Måns Jansson</footer>