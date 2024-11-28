<?php
$title = "Inicio - MotoShop";
include 'partials/header.php';
?>
 <link rel="stylesheet" href="css/estylos.css">

<body>
  <!-- Menú de Redes Sociales -->
    <div class="social-menu">
        <a href="https://www.facebook.com" target="_blank" class="social-link" title="Facebook">
            <img src="img/faccebook.jpg" alt="Facebook">
        </a>
        <a href="https://www.twitter.com" target="_blank" class="social-link" title="Twitter">
            <img src="img/twitter.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com" target="_blank" class="social-link" title="Instagram">
            <img src="img/instagram.jpg" alt="Instagram">
        </a>
        <a href="https://www.youtube.com" target="_blank" class="social-link" title="YouTube">
            <img src="img/logodeyou.png" alt="YouTube">
        </a>
    </div>
   
    <!-- Header -->
    <div id="header-container"></div>

    <!-- Contenido principal -->
    <main>
       <section class="main-banner">
    <div class="banner-content">
        <h1>¡Encuentra la Moto de tus Sueños!</h1>
        <p>Aprovecha nuestras ofertas exclusivas y lleva tu pasión al siguiente nivel.</p>
        <a href="#motos" class="btn-banner">Explorar Motos</a>
    </div>
</section>
        <section class="hero">
            <h2>Bienvenido a MotoShop</h2>
            <p>Explora nuestra tienda para encontrar la moto de tus sueños.</p>
        </section>
<!-- Motos Destacadas (Slider) -->
<section id="motos" class="featured-motos">
    <h3>Motos Destacadas</h3>
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="img/moto11.jpg" alt="Moto 1" class="moto-image"></div>
            <div class="slide"><img src="img/Foto-portada-25-1.jpg" alt="Moto 2" class="moto-image"></div>
            <div class="slide"><img src="img/LIFAN-KPF-150-1024x804-2.jpg" alt="Moto 3" class="moto-image"></div>
            <div class="slide"><img src="img/moto13.jpg" alt="Moto 4" class="moto-image"></div>
            <div class="slide"><img src="img/moto14.jpg" alt="Moto 5" class="moto-image"></div>
            <div class="slide"><img src="img/moto15.jpg" alt="Moto 6" class="moto-image"></div>
        </div>
        <!-- Controles del slider -->
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</section>

        

        <section class="about">
            <h3>¿Por qué elegirnos?</h3>
            <p>En MotoShop, nos apasiona ofrecerte las mejores motos del mercado. Ya sea que busques velocidad, comodidad o estilo, tenemos la moto perfecta para ti.</p>
        </section>
    </main>
    <!-- Sobre Nosotros -->
        <section class="about">
            <h3>¿Por qué elegir MotoShop?</h3>
            <p>Somos más que una tienda de motocicletas; somos un equipo apasionado dedicado a brindarte una experiencia inigualable. En MotoShop, ofrecemos:</p>
            <ul>
                <li>Una amplia variedad de modelos de motocicletas, desde deportivas hasta utilitarias.</li>
                <li>Asesoramiento personalizado para ayudarte a encontrar la moto ideal según tus necesidades.</li>
                <li>Accesorios y repuestos de alta calidad para mantener tu moto en óptimas condiciones.</li>
                <li>Soporte técnico y talleres de mantenimiento certificados.</li>
            </ul>
            <p>Tu satisfacción es nuestra prioridad. Nos esforzamos por ofrecerte no solo productos de calidad, sino también una experiencia de compra única que te inspire a disfrutar al máximo de la carretera.</p>
        </section>

        <!-- Beneficios de Comprar en MotoShop -->
        <section class="benefits">
            <h3>Beneficios Exclusivos</h3>
            <p>Al comprar en MotoShop, disfrutas de ventajas únicas:</p>
            <div class="benefits-list">
                <div class="benefit">
                    <h4>Financiamiento Flexible</h4>
                    <p>Ofrecemos planes de pago adaptados a tu presupuesto, para que adquirir tu moto soñada sea más sencillo que nunca.</p>
                </div>
                <div class="benefit">
                    <h4>Entrega a Domicilio</h4>
                    <p>Recibe tu motocicleta directamente en la puerta de tu casa con nuestro servicio de entrega rápida y segura.</p>
                </div>
                <div class="benefit">
                    <h4>Garantía Extendida</h4>
                    <p>Disfruta de una garantía ampliada en todas nuestras motocicletas para mayor tranquilidad.</p>
                </div>
                <div class="benefit">
                    <h4>Eventos Exclusivos</h4>
                    <p>Participa en nuestras rodadas y eventos para conocer a otros entusiastas del motociclismo.</p>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <div id="footer-container"></div>
    <script>
let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    currentSlide = (currentSlide + step + totalSlides) % totalSlides;

    // Mover el slider a la nueva posición
    const slider = document.querySelector('.slider');
    const offset = -currentSlide * 100;
    slider.style.transform = `translateX(${offset}%)`;
}

// Configurar el slider para que pase automáticamente cada 5 segundos
setInterval(() => moveSlide(1), 5000);
    </script>
</body>

<?php include 'partials/footer.php'; ?>
