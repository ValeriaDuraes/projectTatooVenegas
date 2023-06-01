<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tatto Venegas</title>
</head>
<body>
    
    <header id="cabecalho">
        <nav>
            <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>
            
    
            <ul>
                <li><a href="/about">Portfólio</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="/">Feedbacks</a></li>
                <li><a href="">Contatos</a></li>
            </ul>
    
            <div class="menu-mobile-icon">
                <i onclick="menuShow()" class="fa-solid fa-bars fa-2xl" style="color: #ffffff;"></i>
            </div>
        </nav>
    
        <div class="menu-mobile">
            <ul>
                <li><a href="/about">Portfólio</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="">Feedbacks</a></li>
                <li><a href="">Contatos</a></li>
            </ul>
        </div>
    </header>

    <section id="main">
        {{ $slot }}
    </section>


    <footer id="footer">
        <h1>TATTOO VENEGAS</h1>
        <div class="sociais">
            <a href="https://www.instagram.com/" target="_blank">
                <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.whatsapp.com/" target="_blank">
                <i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i>
            </a>
        </div>
    </footer>
</body>
</html>
