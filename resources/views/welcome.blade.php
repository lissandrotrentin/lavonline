<!DOCTYPE html>
<html lang="pr_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICON -->

    <link rel="shortcut icon" href="assents/imgs/Logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assents/imgs/nav/Logo.png" type="image/x-icon">

    <!-- FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- CSS -->
    
    <link rel="stylesheet" href="../css/extends.css">

    <!-- JS -->

    <script src="../js/script.js" defer></script>



    <title>Lavonline - Home</title>

</head>
<body>

    <section class="Sec_header">

        <header class="header">
            
            <a class="logo" href="index.html"><img src="assents/imgs/nav/Logo.png" class="img" alt="Logo"></a>

            <a class="title-nav" href="index.html">Lavonline</a>

            <nav class="navbar">
                
            <ul class="nav_links">
                <a href="{{ route('owner.form') }}">lavacao</a>
                <a href="#">Objetivo</a>
                <a href="#">Beneficios</a>
                <a href="#">Quem Somos</a>
                <a class="cadastro" href="/register">Criar Conta</a>
                <a class="login" href="/login">Login</a>
            </ul>

        </nav>

        </header>
    </section>

    <div class="container-slide">

        <button id="voltar-btn"><img src="assents/imgs/arrow.png" alt="voltar-btn"></button>

        <div class="container-image">
            <img id="img1" data-image="1" src="assents/imgs/carrossel/img1_2.png" alt="LavandoCarro1" class="slide on">
            <img id="img2" data-image="2" src="assents/imgs/carrossel/img2.png" alt="LavandoCarro2" class="slide">
            <img id="img3" data-image="3" src="assents/imgs/carrossel/img3.png" alt="LavandoCarro3" class="slide">
            <img id="img4" data-image="4" src="assents/imgs/carrossel/img4.jpg" alt="LavandoCarro4" class="slide">
        </div>

        <button id="prox-btn"><img src="assents/imgs/arrow.png" alt="prox-btn"></button>

    </div>


    <div class="container-bola">
        <i class="bola" data-image="1" id="bola1"></i>
        <i class="bola" data-image="2" id="bola2"></i>
        <i class="bola" data-image="3" id="bola3"></i>
        <i class="bola" data-image="4" id="bola4"></i>
    </div>

    <section class="container-btn">
        <a href="#"><button class="btn-click">Teste</button></a>
    </section>

    <section class="container-cards">

        <div class="card1">
            <div class="container-text">

                 <h1>É Dono de uma lavação?</h1>

                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica
                    e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor
                    desconhecido pegou uma bandeja de tipos e os embaralhou
                    para fazer um livro de modelos de tipos.</p>

                 <a href="#"><button>Venha fazer parte do nosso App!</button></a>
            </div>
        </div>
    </section>

        <div class="container-card2">

        <div class="card2">

            <div class="container-text">
                <h1>Objetivo</h1>

                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de 
                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido 
                    pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
           </div>
        </div>
            
        </div>

        <div class="card3">


        </div>

        <div class="card4">


        </div>



    <main class="footer">

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1><img src="assents/imgs/nav/Logo.png" class="img" alt="Logo"></h1>
                <p>Veja Algum de nossos exemplos nas nossas redes</p>

                <div id="footer_social">
                    <a href="#" class="footer_link" id="instagram">
                        <img src="assents/imgs/footer/instagram.svg" alt="Instagram">
                    </a>

                    <a href="#" class="footer_link" id="facebook">
                        <img src="assents/imgs/footer/facebook.svg" alt="facebook">
                    </a>

                    <a href="#" class="footer_link" id="whatsapp">
                        <img src="assents/imgs/footer/whatsapp.svg" alt="whatsapp">
                    </a>
                </div>
            </div>
       

        <ul class="footer_list">
            <li>
                <h3>Outros</h3>
            </li>

            <li>
                <a href="#" class="footer_link">Testeee</a>
            </li>
            
            <li>
                <a href="#" class="footer_link">Testeee2</a>
            </li>
            
            <li>
                <a href="#" class="footer_link">Testeee3</a>
            </li>
        </ul>

        <ul class="footer_list">
            <li>
                <h3>Outros2</h3>
            </li>

            <li>
                <a href="#" class="footer_link">Teste4</a>
            </li>
            
            <li>
                <a href="#" class="footer_link">Testeee5</a>
            </li>
            
            <li>
                <a href="#" class="footer_link">Testeee6</a>
            </li>
        </ul>

        <div class="footer_contato">

            <h3>Entre em Contato</h3>

            <p>
                Nos envie um email dando sujestões ou algo do tipo
            </p><br>

            <div id="input_group">
                <input type="email" name="email" id="email">
                <button>
                    <img src="assents/imgs/footer/gmail.svg" alt="email">
                </button>
            </div>

        </div>

    </div>

    <div id="footer_copyright">
        © Todos os direitos reservados para Lavonline
    </div>
        
    </footer>
</main>


    
</body>
</html>