<?php include 'partials/header.php';?>
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

    <!-- Sección de Contacto -->
    <section class="contact-section">
        <h2>Contáctanos</h2>
        <p>¿Tienes alguna pregunta o comentario? Rellena el formulario y nos pondremos en contacto contigo lo antes posible.</p>
        
        <!-- Formulario de Contacto -->
        <form action="https://ejemplo.com/form-handler" method="POST" class="contact-form">
            <div class="input-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>
            </div>
            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
            </div>
            <div class="input-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" name="phone" placeholder="Tu número de teléfono">
            </div>
            <div class="input-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí..." rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Enviar Mensaje</button>
        </form>
    </section>

    <!-- Google Maps -->
    <section class="map-section">
        <h2>Nuestra Ubicación</h2>
        <p>Encuentra nuestra tienda en la siguiente dirección:</p>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0196161055545!2d-122.40135118468285!3d37.79361897975611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064b1c5b6d7%3A0x2c09fdfc5b340fb2!2sSalesforce%20Tower!5e0!3m2!1sen!2sus!4v1636701823996!5m2!1sen!2sus" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>
</body>

<?php include 'partials/footer.php'; ?>
