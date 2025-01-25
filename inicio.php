<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADRIA</title>
    <link rel="stylesheet" href="css.css">
    
</head>
<body>
    <header id="inicio">
        <img class="img-logo" src="img/logo.png" alt="logo">
        <h1 class="h1tituloprincipal">HADRIA</h1>
        
    </header>
    <main>
        <div class="nav">
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#maquillaje">Maquillaje</a>
                <a href="#perfumes">Perfumes</a>
                <a href="#accesorios">Accesorios para el movil</a>
                <a href="#contacto">Contacta con nosotros</a>

            </nav>
        </div>
        <section id="maquillaje">
            <h2>Maquillaje</h2>
            <p>todos estos productos son de _________________</p>
            <article class="maquillaje">
                <a href="img/maquillaje1.img" target="_blank">
                    <img src="img/maquillaje1.img" alt="producto1" >
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('maquillaje1',15)">Añadir a Lista</button></p>
                    
                <a href="img/maquillaje2.img" target="_blank">
                    <img src="img/maquillaje2.img" alt="producto2">
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('maquillaje2',15)">Añadir a Lista</button></p>
            </article>
        </section>
        <section id="perfumes">
            <h2>Perfumes</h2>
            <p>todos estos productos son de _________________</p>
            <article class="perfumes">
                <a href="img/perfume1" target="_blank">
                    <img src="img/perfume1" alt="perfume1" >
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('perfume1',15)">Añadir a Lista</button></p>
                <a href="img/perfume2" target="_blank">
                    <img src="img/perfume2" alt="perfume2">
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('perfume2',15)">Añadir a Lista</button></p>
                <a href="img/perfume3" target="_blank">
                    <img src="img/perfume3" alt="perfume3" >
                </a>
                    <p>precio 20€<button class="buttonlista" onclick="añadiralista('perfume3',20)">Añadir a Lista</button></p>
            </article>
        </section>

        <section id="accesorios">
            <h2>Accesorios para el Movil</h2>
            <p>todos estos productos son de _________________</p>
            <article class="accesorios">
                <a href="img/accesoriomovil1" target="_blank">
                    <img src="img/accesoriomovil1" alt="accesoriomovil1" >
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('accesoriomovil1',15)">Añadir a Lista</button></p>
                <a href="img/accesoriomovil2" target="_blank">
                    <img src="img/accesoriomovil2" alt="accesoriomovil2">
                </a>
                    <p>precio 15€<button class="buttonlista" onclick="añadiralista('accesoriomovil2',15)">Añadir a Lista</button></p>
            </article>
        </section>
        
        <section id="contacto">
            <h2>Contacta con nosotros</h2>
            <p>puedes contactar con nosotros por medio de nuestras redes sociales</p>
            <a href="img/whatsapp.png" target="_blank">
                <img src="img/whatsapp.png" alt="whatsapp"/>
            </a>
            <a href="img/instagram.png" target="_blank">
                <img src="img/instagram.png" alt="instagram"/>
            </a>


        </section>
    </main>
    
    <!---pie de pagina -->
    <footer class="footerinicio">
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
        <nav>
            <a href="about.html">Acerca de</a> |
            <a href="#contacto">Contacto</a> |
            <a href="privacy.html">Política de Privacidad</a>
        </nav>
    </footer> 
</body>

<!-- Botón flotante -->
<section class="floating-button">
    <a href="listadeproductos.html"><button class="floating-button2lista">TU LISTA</button></a>
    <a href="login.php"><button class="floating-button3login">LOGIN</button></a>
</section>



<script>
    // Función para añadir a la lista
    function añadiralista(producto, precio) {
        // Obtener la lista actual de productos del localStorage
        let lista = JSON.parse(localStorage.getItem('listaProductos')) || [];
        
        // Añadir el nuevo producto
        lista.push({ producto: producto, precio: precio });

        // Guardar la lista actualizada en localStorage
        localStorage.setItem('listaProductos', JSON.stringify(lista));
        
        alert(`${producto} añadido a tu lista.`);
    }
</script>


<script>
    // Seleccionar todos los enlaces de navegación y las secciones correspondientes
    const enlaces = document.querySelectorAll(".nav a");
    const secciones = {
        maquillaje: document.getElementById("maquillaje"),
        perfumes: document.getElementById("perfumes"),
        accesorios: document.getElementById("accesorios"),
        contacto: document.getElementById("contacto")
    };

    // Iterar sobre los enlaces y agregar eventos de clic
    enlaces.forEach(enlace => {
        enlace.addEventListener("click", (e) => {
            e.preventDefault(); // Evitar comportamiento predeterminado del enlace

            // Obtener el id de la sección desde el atributo href del enlace
            const idSeccion = enlace.getAttribute("href").replace("#", "");

            // Verificar si la sección existe
            if (secciones[idSeccion]) {
                // Alternar visibilidad de la sección correspondiente
                const seccion = secciones[idSeccion];
                if (seccion.style.display === "none" || seccion.style.display === "") {
                    seccion.style.display = "block"; // Mostrar la sección
                } else {
                    seccion.style.display = "none"; // Ocultar la sección
                }
            }
        });
    });
</script>