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
        <article class="main-article3"> 
            <h1 id="head">Vill du ta kontakt?</h1>
        </article>
        <article class="second-article3">Glenn Klapfventrikel, VD <br> Address: Gruvövägen, 66433 Grums <br> E-post: info@ollesab.se <br> Telefon: 0771-11 23 88 00</article>
    </main>
    <footer>&copy;Måns Jansson</footer>