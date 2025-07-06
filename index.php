<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore aperiam, nobis corporis, cumque exercitationem laudantium corrupti doloribus hic, eligendi sint laborum officia iste sunt magnam. Maxime dolore doloremque dicta laborum!
                    Incidunt illo repellat qui pariatur impedit quas at esse tempora mollitia commodi id ipsum cumque assumenda aut saepe velit, vero reprehenderit libero deserunt totam facere. Maxime nobis officia in esse?.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="img/left.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, aliquid temporibus pariatur consequatur tenetur voluptas omnis nisi quasi dolore debitis neque, eos nemo assumenda! Dicta cum accusamus dolores quia laborum.
                Id, porro veritatis! Voluptates nobis tempora, nesciunt quaerat ea numquam architecto officia, culpa rem ratione beatae saepe, sed expedita cumque mollitia. Consectetur doloribus eveniet totam cupiditate nemo aliquid incidunt magni.
                Adipisci enim iusto a ipsum, praesentium sint dolorum dolorem modi corrupti, voluptates sunt aut quis fugiat! Voluptatem nulla, consequatur non dignissimos qui deleniti delectus quos aperiam est, iusto consectetur laborum!.
            </p>
            <br>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, aliquid temporibus pariatur consequatur tenetur voluptas omnis nisi quasi dolore debitis neque, eos nemo assumenda! Dicta cum accusamus dolores quia laborum.
                Id, porro veritatis! Voluptates nobis tempora, nesciunt quaerat ea numquam architecto officia, culpa rem ratione beatae saepe, sed expedita cumque mollitia. Consectetur doloribus eveniet totam cupiditate nemo aliquid incidunt magni.
                Adipisci enim iusto a ipsum, praesentium sint dolorum dolorem modi corrupti, voluptates sunt aut quis fugiat! Voluptatem nulla, consequatur non dignissimos qui deleniti delectus quos aperiam est, iusto consectetur laborum!.
            </p>
        </div>
    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-solid fa-baby"></i>
                <h3>Pedriatría</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-stethoscope"></i>
                <h3>Dermatología</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiología</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Emergencia</h3>
            </div>
        </div>
    </main>

    <!-- FORMULARIO -->
     
    <section class="formulario conatiner">
        <form method="post" autocomplete="off">
            <h2> Consulta</h2>
            <div class="input group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>  
                </div>
                <input type="submit" name="send" class="btn" onClick="myFunction()">
            </div>
        </form>

    </section>

    <!-- FOOTER -->

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>


<!-- PHP -->

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/MedicalCenterWeb/"
        }
    </script>


<!-- ICONOS -->

    <script src="https://kit.fontawesome.com/fe504c858f.js" crossorigin="anonymous"></script>

</body>
</html>