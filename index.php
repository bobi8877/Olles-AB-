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
        <article class="main-article"> 
            <h1 id="head">För framtiden, redan idag!</h1>
        </article>
        <article class="second-article">Vi säljer, servar och tillverkar slutväxlar, planetväxlar till över 800 modeller i minigrävare och grävmaskiner i viktklasser från 0,8 till 45 ton.
Varför renovera dina slutväxlar och planetväxlar när en ny är billigare? Det är säkert billigare att byta till en nytt slutväxel eller planetväxel i det långa loppet, och väldigt ofta på kort sikt! Kvaliteten på slutväxlarna och planetväxlarna är trots de låga priserna höga. Vi gör delarna till våra slutväxlar och planetväxlar samt distribuerar dem direkt. Det ger dig en ny slutväxel och planetväxel till bästa pris och högsta kvalitet. Nya kunder uppger att de använde ofta renoverade slutväxlar och planetväxlar. Men det är helt enkelt inte lönsamt med våra låga priser.
Därför att köper i stort sett alla våra kunder en ny slutväxel eller planetväxel när den gamla ger upp. Vi kan serva och konfigurera slutväxlar och planetväxlar för att möta dina krav. Vi kan hjälpa till om du behöver en utbytes eller service på din slutväxel eller planetväxel från växellådorna till populära märken som Bonfiglioli, Brevini, Kayaba, Nachi, Oil Motor, Orbit/Eaton, Sumitomo, SOM, Tong Myung, Teijin Seiki eller Nabtesco.
Har du specifika applikationer som behöver en planetväxel eller en slutväxel kan vi fixa det också. Vi har en egen konstruktionsavdelning med lång erfarenhet i branschen. Tillverkningen sker på plats med några av de allra bästa maskinerna på marknaden. Operatörerna är välutbildade och har lång erfarenhet av tillverkning.</article>
        <article class="bildspel"></article>
    </main>
    <footer>&copy;Måns Jansson</footer>
</body>
</html>