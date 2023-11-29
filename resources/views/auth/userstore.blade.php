<!DOCTYPE html>
<html lang="pr_BR">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- ICON -->

    <link rel="shortcut icon" href="/lavonline/assents/imgs/Logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/lavonline/assents/imgs/nav/Logo.png" type="image/x-icon">

    <!-- FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- CSS -->
    
    <link rel="stylesheet" href="/lavonline/css/extends2.css">

    <!-- JS -->

    <script src="/lavonline/script/script2.js" defer></script>
    <script src="/lavonline/script/scroll.js" defer></script>

    <!-- SCROLL REVEAL -->
    
    <script src="https://unpkg.com/scrollreveal"></script>



    <title>Lavonline - Cadastro</title>

</head>
<body>

    <section class="Sec_header">

        <header class="header">
            
            <a class="logo" href="#"><img src="/lavonline/assents/imgs/nav/Logo.png" class="img" alt="Logo"></a>

            <a class="title-nav" href="#">Lavonline</a>


            <nav>

                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>

                    <ul class="nav-list">

                    <li><a href="index.html">Inicio</a></li>    
                    <li><a class="lavacao_btn item" href="{{ route('user.store.form') }}">Agendar Lavação</a></li>
                    <li>

                        <a><img class="person_mob" src="/lavonline/assents/imgs/nav/person.png" alt="Person">

                    <ul class="dropdown_mobile">
                
                        <li class="drop"><a href="{{ route('user.store.form') }}">Criar Conta</a></li>
                        <li class="drop"><a href="{{ route('user.login.form') }}">Login</a></li>
                
                    </ul>

                    </li>

                    </ul>

                    </ul>
                </div>




                <ul class="nav_links">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a class="lavacao_btn item" href="{{ route('user.store.form') }}">Agendar Lavação</a></li>
                    <li>

                        <a><img class="person" src="/lavonline/assents/imgs/nav/person.png" alt="Person">

                    <ul class="dropdown">
                
                        <li class="drop"><a href="{{ route('user.store.form') }}">Criar Conta</a></li>
                        <li class="drop"><a href="{{ route('user.login.form') }}">Login</a></li>
                
                    </ul>

                    </li>

                </ul>
            </nav>

        </header>
    </section>

<!-- 
    <div class="container-slide"> -->
        <!-- 
                <div class="background"> -->
                    <!-- <div class="container_search"> -->
        
                        <!-- <div class="description_1">
                            <h1>Lavonline</h1><br>
                            <p>Pesquise a lavação mais próxima de você:</p><br>
                        </div>
        
                        <input type="search" class="search_text" name="procuar" placeholder="Ex: LAVAÇÃO DICAR" id="procurar">
                        <button type="submit" class="search_btn">
                            <img class="lupa" src="assents/imgs/lupa.svg" alt="Lupa">
                        </button>
                    </div> -->
        
                        <!-- <div class="container_persons">
                        <img class="fernando" src="assents/imgs/carrossel/fernando.png" alt="Fernando">
                        </div> -->
        
                    
                <!-- </div> -->
        
                <!-- <div class="container_devs">
                    <div class="mini_img"></div>
                    <div class="devs">
                        <h4>Fernando:</h4>
                        <p>Programador Front-End</p>
                    </div>
                </div> -->
        
                <!-- <div class="container_persons">
                    <img class="fernando" src="assents/imgs/carrossel/fernando.png" alt="Fernando">
                </div> -->
        
<!--         
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
            </div> -->






    <section class="container_login_pri">
        
        <div class="container_login">

            <div class="container_seta">
                <a href="{{ route('welcome') }}"><img src="/lavonline/assents/imgs/login/seta.png" alt="Seta"></a>
            </div>

            <ul class="container_img">
                <img class="img_carro" src="/lavonline/assents/imgs/login/img_login.png" alt="Carro">
            </ul>

            <ul class="container_form">
                <div class="container_img_logo">
                <img class="logo_img" src="/lavonline/assents/imgs/login/logo.png" alt="Logo">
            </div>
            <div class="container_tittle">
                <div class="tittles">
                <h2>Bem vindo!</h2>
                <p>Selecione um método de Cadastro:</p>
                <div class="container_methods">
                    <a href="#"><img style="height: 48px; width: 48px;" src="/lavonline/assents/imgs/login/facebook.svg" alt="facebook"></a>
                    <a href="#"><img style="height: 48px; width: 48px;" src="/lavonline/assents/imgs/login/google.svg" alt="Google"></a>
                    <a href="#"><img style="height: 48px; width: 48px;" src="/lavonline/assents/imgs/login/intagram.svg" alt="Instagram"></a>
                </div>
                <div class="container_other">
                    <div class="other">
                        <div class="lines"></div><p>Ou continue usando email</p><div class="lines"></div>
                    </div>
                </div>
            </div>
            <br>


                <form action="{{ route('user.store') }}" class="form" method="POST">

                    @csrf

                    <input id="name" placeholder="Nome Completo" type="text" name="name" >

                    <input type="email" name="email" id="email" placeholder="Email">
                    

                    <input type="password" name="password" id="password" placeholder="Senha">

                    <a href="{{ route('user.login.form') }}">Ja tem conta?</a>

                    <!--<input type="password" name="password" id="password" placeholder="Confirme a Senha">-->
                    


                    
                    <div class="container_check">
                    <input class="remember" type="checkbox" name="remember" id="remember">
                    <label for="remember">Lembrar de mim</label>

                    

                    </div>



                    

                    <div class="containers_login">
                        <div class="container_login_btn">
                        <input class="btn_login" type="submit" value="cadastrar">
                        </div>
                        
                    </div>
                </form>
            </ul class="options">

            <ul>


        </ul>
        </div>
    </section>














    <main class="footer">

        <footer>
            <div id="footer_content">
                <div id="footer_contacts">
                    <h1><img src="/lavonline/assents/imgs/nav/Logo.png" class="img" alt="Logo"></h1>
                    <p>Veja Algum de nossos exemplos nas nossas redes</p>
    
                    <div id="footer_social">
                        <a href="#" class="footer_link" id="instagram">
                            <img src="/lavonline/assents/imgs/footer/instagram.svg" alt="Instagram">
                        </a>
    
                        <a href="#" class="footer_link" id="facebook">
                            <img src="/lavonline/assents/imgs/footer/facebook.svg" alt="facebook">
                        </a>
    
                        <a href="#" class="footer_link" id="whatsapp">
                            <img src="/lavonline/assents/imgs/footer/whatsapp.svg" alt="whatsapp">
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
                    <button type="submit">
                        <img src="/lavonline/assents/imgs/footer/gmail.svg" alt="email">
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