<?php
$title = "Formulario de Motos - MotoShop";
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
    <!-- Contenedor del encabezado -->
    <div id="header-container"></div>

    <div class="game-container">
        <h1>Juego de Preguntas sobre Motos</h1>
        <form id="quiz-form">
            <!-- 20 Preguntas -->
            <div class="question">
                <p>1. ¿Cuál es la moto más rápida del mundo?</p>
                <label><input type="radio" name="q1" value="A" required> Ducati Panigale V4</label><br>
                <label><input type="radio" name="q1" value="B"> Kawasaki Ninja H2R</label><br>
                <label><input type="radio" name="q1" value="C"> Yamaha YZF-R1</label>
            </div>

            <div class="question">
                <p>2. ¿Qué significa "cc" en las motos?</p>
                <label><input type="radio" name="q2" value="A" required> Cilindrada</label><br>
                <label><input type="radio" name="q2" value="B"> Codo de conducción</label><br>
                <label><input type="radio" name="q2" value="C"> Carga de combustible</label>
            </div>
             <div class="question">
                <p>3. ¿Qué tipo de moto es más adecuada para viajes largos?</p>
                <label><input type="radio" name="q3" value="A" required> Touring</label><br>
                <label><input type="radio" name="q3" value="B"> Cruiser</label><br>
                <label><input type="radio" name="q3" value="C"> Dirt Bike</label>
            </div>

            <div class="question">
                <p>4. ¿Qué moto es conocida por ser la moto más ligera?</p>
                <label><input type="radio" name="q4" value="A" required> Honda CBR1000RR</label><br>
                <label><input type="radio" name="q4" value="B"> Yamaha YZF-R6</label><br>
                <label><input type="radio" name="q4" value="C"> KTM 390 Duke</label>
            </div>

            <div class="question">
                <p>5. ¿Qué moto es conocida por su diseño clásico y motor V-twin?</p>
                <label><input type="radio" name="q5" value="A" required> Harley-Davidson Sportster</label><br>
                <label><input type="radio" name="q5" value="B"> BMW R Nine T</label><br>
                <label><input type="radio" name="q5" value="C"> Ducati Panigale V4</label>
            </div>

            <div class="question">
                <p>6. ¿Cuáles son los tipos de motos más comunes?</p>
                <label><input type="radio" name="q6" value="A" required> Deportiva, Cruiser, Touring</label><br>
                <label><input type="radio" name="q6" value="B"> Touring, Scooter, Naked</label><br>
                <label><input type="radio" name="q6" value="C"> Cruiser, Scooter, Chopper</label>
            </div>

            <div class="question">
                <p>7. ¿Qué moto es ideal para las competiciones de motocross?</p>
                <label><input type="radio" name="q7" value="A" required> Honda CRF450R</label><br>
                <label><input type="radio" name="q7" value="B"> Yamaha YZ450F</label><br>
                <label><input type="radio" name="q7" value="C"> Kawasaki KX450</label>
            </div>

            <div class="question">
                <p>8. ¿Qué significa "ABS" en las motocicletas?</p>
                <label><input type="radio" name="q8" value="A" required> Sistema de frenos antibloqueo</label><br>
                <label><input type="radio" name="q8" value="B"> Asistencia en frenos</label><br>
                <label><input type="radio" name="q8" value="C"> Sistema de suspensión activa</label>
            </div>

            <div class="question">
                <p>9. ¿Cuál es el tipo de motor más común en las motos deportivas?</p>
                <label><input type="radio" name="q9" value="A" required> Motor de 2 tiempos</label><br>
                <label><input type="radio" name="q9" value="B"> Motor de 4 tiempos</label><br>
                <label><input type="radio" name="q9" value="C"> Motor V-Twin</label>
            </div>

            <div class="question">
                <p>10. ¿Qué moto es la más recomendada para principiantes?</p>
                <label><input type="radio" name="q10" value="A" required> Kawasaki Ninja 300</label><br>
                <label><input type="radio" name="q10" value="B"> Yamaha YZF-R3</label><br>
                <label><input type="radio" name="q10" value="C"> Suzuki GSX-R600</label>
            </div>

            <div class="question">
                <p>11. ¿Qué moto es conocida por sus características de moto de aventura?</p>
                <label><input type="radio" name="q11" value="A" required> BMW GS 1200</label><br>
                <label><input type="radio" name="q11" value="B"> Honda Africa Twin</label><br>
                <label><input type="radio" name="q11" value="C"> Ducati Multistrada</label>
            </div>

            <div class="question">
                <p>12. ¿Qué tipo de moto es ideal para la ciudad?</p>
                <label><input type="radio" name="q12" value="A" required> Naked</label><br>
                <label><input type="radio" name="q12" value="B"> Cruiser</label><br>
                <label><input type="radio" name="q12" value="C"> Sportbike</label>
            </div>

            <div class="question">
                <p>13. ¿Qué característica es crucial para una moto de carretera?</p>
                <label><input type="radio" name="q13" value="A" required> Estabilidad</label><br>
                <label><input type="radio" name="q13" value="B"> Ligereza</label><br>
                <label><input type="radio" name="q13" value="C"> Potencia</label>
            </div>

            <div class="question">
                <p>14. ¿Cuál es la diferencia principal entre un motor de 2 tiempos y uno de 4 tiempos?</p>
                <label><input type="radio" name="q14" value="A" required> El número de ciclos en el motor</label><br>
                <label><input type="radio" name="q14" value="B"> La cantidad de combustible que consume</label><br>
                <label><input type="radio" name="q14" value="C"> El tipo de suspensión que usa</label>
            </div>

            <div class="question">
                <p>15. ¿Qué moto es la más popular en las competiciones de MotoGP?</p>
                <label><input type="radio" name="q15" value="A" required> Yamaha YZR-M1</label><br>
                <label><input type="radio" name="q15" value="B"> Ducati Desmosedici GP</label><br>
                <label><input type="radio" name="q15" value="C"> Honda RC213V</label>
            </div>

            <div class="question">
                <p>16. ¿Qué marca tiene la moto más vendida en el mundo?</p>
                <label><input type="radio" name="q16" value="A" required> Honda</label><br>
                <label><input type="radio" name="q16" value="B"> Yamaha</label><br>
                <label><input type="radio" name="q16" value="C"> Kawasaki</label>
            </div>

            <div class="question">
                <p>17. ¿Qué moto es la más recomendada para largos viajes por carretera?</p>
                <label><input type="radio" name="q17" value="A" required> Honda Gold Wing</label><br>
                <label><input type="radio" name="q17" value="B"> Harley-Davidson Electra Glide</label><br>
                <label><input type="radio" name="q17" value="C"> BMW K1600GTL</label>
            </div>

            <div class="question">
                <p>18. ¿Qué significa "V-twin" en un motor de moto?</p>
                <label><input type="radio" name="q18" value="A" required> Disposición del cilindro en forma de V</label><br>
                <label><input type="radio" name="q18" value="B"> Un motor con dos cilindros en línea</label><br>
                <label><input type="radio" name="q18" value="C"> Un motor de cuatro cilindros</label>
            </div>

            <div class="question">
                <p>19. ¿Qué tipo de moto tiene mayor maniobrabilidad en calles estrechas?</p>
                <label><input type="radio" name="q19" value="A" required> Naked</label><br>
                <label><input type="radio" name="q19" value="B"> Cruiser</label><br>
                <label><input type="radio" name="q19" value="C"> Touring</label>
            </div>

            <div class="question">
                <p>20. ¿Qué moto es famosa por su alto rendimiento en circuitos de carreras?</p>
                <label><input type="radio" name="q20" value="A" required> Kawasaki Ninja ZX-10R</label><br>
                <label><input type="radio" name="q20" value="B"> Suzuki GSX-R1000</label><br>
                <label><input type="radio" name="q20" value="C"> Yamaha R1</label>
            </div>


            <!-- Más preguntas aquí -->

            <button type="submit">Enviar Respuestas</button>
        </form>

        <div id="result" class="result-container"></div>
    </div>

    <!-- Contenedor del pie de página -->
    <div id="footer-container"></div>

    <script>
        // Lógica de JavaScript del juego de preguntas
        document.getElementById("quiz-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar el envío del formulario

            let score = 0;

            // Respuestas correctas
            const correctAnswers = {
                q1: "B",
                q2: "A",
                q3: "A",
                q4: "C",
                q5: "A",
                q6: "A",
                q7: "A",
                q8: "A",
                q9: "B",
                q10: "A",
                q11: "A",
                q12: "A",
                q13: "A",
                q14: "A",
                q15: "C",
                q16: "A",
                q17: "A",
                q18: "A",
                q19: "A",
                q20: "C"
            };

            // Comprobar las respuestas
            const formData = new FormData(this);
            for (let [name, value] of formData.entries()) {
                if (correctAnswers[name] === value) {
                    score++;
                }
            }

            // Mostrar el resultado
            let resultMessage = `Has obtenido ${score} de 20 respuestas correctas.`;
            
            if (score === 20) {
                resultMessage += "<br>¡Excelente! Eres un experto en motos.";
            } else if (score >= 15) {
                resultMessage += "<br>¡Muy bien! Tienes un gran conocimiento.";
            } else {
                resultMessage += "<br>¡Sigue aprendiendo sobre motos!";
            }

            document.getElementById("result").innerHTML = resultMessage;
        });
        
       </script>
</body>
        



<?php include 'partials/footer.php'; ?>
