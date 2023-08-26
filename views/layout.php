<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hack Puebla</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    
        <!-- WELCOME PAGE --> <!-- JOSS -->
    <section class="welcome_page" id="welcome_page">
        <div class="contenido-welcompe_page">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/hackpng.svg" type="image/svg">
                    <source srcset="/build/img/hackpng.webp" type="image/webp">
                    <source srcset="/build/img/hackpng.png" type="image/png">
                    <img loading="lazy" src="/build/img/hackpng.png" alt="Imagen Logo">
                </picture>
            </div>
            <div class="separacion">
                <a h ref="#" class="boton">REGISTER</a>
            </div>
        </div>
    </section>

    <header class="header">
        <div class="contenido-header">
            <div class="barra">
                <div id="logo">
                    <a href="#welcome_page"><img loading="lazy" src="/build/img/hackpng.png" alt="Imagen Logo"></a>
                </div>
                <div class="mobile-menu">
                   <img src="../build/img/barras.svg" alt="Menú responsive"> 
                </div>
                <div class="derecha">
                    <nav class="navegacion">
                        <a href="#about" class="enlace">About</a>
                        <a href="#schedule" class="enlace">Schedule</a>
                        <a href="#sponsors" class="enlace">Sponsors</a>
                        <a href="#hall_of_fame" class="enlace">Hall Of Fame</a>
                        <a href="#faq" class="enlace">FAQ</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php echo $contenido;?>
    

        
    <footer class="footer">
        <p>Copyright Hack Puebla <?php echo date('Y'); ?> </p>
    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>