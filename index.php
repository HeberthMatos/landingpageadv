<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page ADV</title>
    <!-- favicon -->
    <link rel="icon" href="#">
    <link rel="stylesheet" href="/css/main.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Section 1 - Home -->
    <section id="home">
        <div class="container">
            <img src="/img/logo.png" alt="Logo do Escritório" class="logo">
            <h1>Título Principal</h1>
            <h2>Subtítulo</h2>
            <a href="#areas" class="scroll-down">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Section 2 - Áreas de Atuação -->
    <section id="areas">
        <h1>Nossas Áreas de Atuação</h1>
        <div class="areas-grid">
            <div class="area-item">
                <img src="./img/area.png" alt="Área 1">
                <h2>Título Área 1</h2>
                <p>Subtítulo Área 1</p>
            </div>
            <!-- Repetir para as outras áreas -->
            <div class="area-item">
                <img src="./img/area.png" alt="Área 2">
                <h2>Título Área 2</h2>
                <p>Subtítulo Área 2</p>
            </div>

            <div class="area-item">
                <img src="./img/area.png" alt="Área 3">
                <h2>Título Área 3</h2>
                <p>Subtítulo Área 3</p>
            </div>
        </div>
        <button class="contact-btn">Entrar em Contato</button>
    </section>

    <!-- Section 3 - Sobre Nós -->
    <section id="sobre-nos">
        <div class="about-content">
            <img src="/img/adv.png" alt="Advogado" class="advogado-foto">
            <div class="sobre-texto">
                <h1>Sobre o Advogado</h1>
                <ul>
                    <li class="hover-qualificacao"><i class="fa fa-check"></i> Qualificação 1</li>
                    <li class="hover-qualificacao"><i class="fa fa-check"></i> Qualificação 2</li>
                    <li class="hover-qualificacao"><i class="fa fa-check"></i> Qualificação 3</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 4 - Como Podemos te Ajudar -->
    <section id="ajuda">
        <h1>Como Podemos te Ajudar?</h1>
        <button class="fale-conosco-btn">Fale Conosco</button>
    </section>

    <?php include 'include/footer.php'; ?>
</body>