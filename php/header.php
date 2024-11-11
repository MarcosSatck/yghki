<header>
    <!-- CON ESTE CODIGO SE COLOCA UN LOGO Y UN TITULO DE LA PAGINA -->
    <table width="100%" align="center" border="0">
    <tr>
    <!-- LOGO DEL PERRO -->
    <th width="12%" align="right" style="text-align: right;" scope="col">
    <img src="img/logo.png" width="100%" alt="" draggable="false"/>
    </th>

    <!-- TITULO -->
    <th width="90%" align="center" scope="col">
    <div align="center">
    <img src="img/2.png" width="80%" height="70px" alt="" draggable="false"/>
    </div>
    </th>
    </tr>
    </table>

    <style>
    header {
        background-image: url("img/FinalFon.jpg");
        background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding-left: 9%;
    padding-right: 9%;
    padding-top: 1%;
        /* background-color: transparent; */
        /* filter: blur(5px); DIFUMINADO*/
        padding: 10px;
    }

    .logo {
        flex-grow: 0;
        margin-right: 5px; /* Ajusta el margen derecho según tus preferencias */
        position: relative;
        z-index: 3;
    }
    .logo img {
        width: 50px;
        height: auto;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .menu-toggle {
        font-size: 2.2em;
        cursor: pointer;
        display: none;
        color: black;
        width: 40px;
        margin-right: 10px; /* Ajusta el margen derecho según tus preferencias */
        transition: transform 0.9s ease;
    }

    .menu-toggle.active {
        transform: rotate(90deg);
    }

    .nav-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .nav-list li {
        position: relative;
        margin-right: 20px;
    }

    .nav-list a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        display: block;
        padding: 10px;
    }

    .nav-list a:hover {
        color: yellow;
    }

    .nav-list li::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: black;
        transition: width 0.3s ease;
    }

    .nav-list li:hover::after {
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        .nav-list {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 1px;
            left: 10%;
            right: 10%;
            background-color: white;
            z-index: 1;
            border-radius: 5%;
        }

        .nav-list.show {
            display: flex;
        }

        .nav-list li {
            margin: 0;
            text-align: center;
            border-bottom: 1px solid white;
        }

        .menu-toggle {
            display: block;
        }
    }

    .nav-list.show {
        margin-top: 60px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.menu-toggle');
        const navList = document.querySelector('.nav-list');

        menuToggle.addEventListener('click', function () {
            navList.classList.toggle('show');
            menuToggle.classList.toggle('active');
        });

        document.addEventListener('click', function (event) {
            const isClickInsideNav = navList.contains(event.target);
            const isClickOnMenuToggle = menuToggle.contains(event.target);

            if (!isClickInsideNav && !isClickOnMenuToggle) {
                navList.classList.remove('show');
                menuToggle.classList.remove('active');
            }
        });
    });
</script>

<style> 
 .search-form {
                margin-bottom: 10px; /* Margen inferior para separar de la lista de navegación */
            }
</style>
<nav>
    <div class="logo"><img src="" width="100%" alt="" draggable="false"/></div>
    <div class="menu-toggle">&#9776;</div>
    <ul class="nav-list">
    <li>











            <form id="search-form" class="search-form" onsubmit="return false;"> <!-- Agregamos un id al formulario para poder referenciarlo desde JavaScript, y evitamos que se envíe por defecto -->
                <input type="search" id="search-input" name="q" placeholder="Buscar..." autocomplete="off" onkeydown="handleSearch(event)"> <!-- Añadimos un id al campo de búsqueda para poder referenciarlo desde JavaScript, y llamamos a la función handleSearch cuando se presiona una tecla -->
                <button type="button" onclick="buscar()">Buscar</button> <!-- Cambiamos el tipo de botón para evitar el envío del formulario por defecto -->
            </form>
        </li>
        <li><a href="index.php" draggable="false">Hogar</a></li>
        <li><a href="php/historias.php" draggable="false">Historias de Terror</a></li>
        <li><a href="#" draggable="false">Creepypastas</a></li>
        <li><a href="#" draggable="false">Las Leyendas</a></li>
        <li><a href="#" draggable="false">Relatos Olvidados</a></li>
        <li><a href="#" draggable="false">???</a></li> 
    </ul>
</nav>

<script>
    function buscar() {
        // Obtener el valor del campo de búsqueda
        var searchTerm = document.getElementById("search-input").value.toLowerCase(); // Convertimos el valor a minúsculas para hacer la comparación insensible a mayúsculas y minúsculas

        // Verificar si el término de búsqueda coincide con la palabra específica
        if (searchTerm === "secreto") {
            // Redirigir a la página secreta
            window.location.href = "php/pagina_secreta.php";
        } else {
            // Si no coincide, enviar el formulario normalmente
            document.getElementById("search-form").submit();
        }
    }

    function handleSearch(event) {
        // Verificar si la tecla presionada es la tecla "Enter"
        if (event.key === "Enter") {
            // Prevenir el comportamiento predeterminado del evento (enviar el formulario)
            event.preventDefault();
            // Ejecutar la función de búsqueda
            buscar();
        }
    }
</script>
<!-- <style>
    .pagina-secreta {
    display: block; /* Convertir el enlace en un bloque para que ocupe todo el ancho disponible */
    text-align: center; /* Centrar el texto del enlace */
    margin-top: 20px; /* Añadir un margen superior para separarlo del contenido anterior */
    text-decoration: none; /* Quitar la subrayado predeterminado */
    background-color: #000; /* Color de fondo negro */
    color: #fff; /* Color de texto blanco */
    padding: 10px 20px; /* Añadir relleno alrededor del texto */
    border-radius: 5px; /* Agregar bordes redondeados */
}

.pagina-secreta:hover {
    background-color: #444; /* Cambiar el color de fondo al pasar el mouse sobre el enlace */
}
</style>
Enlace a la página secreta 
<a href="pagina_secreta.php" class="pagina-secreta">Página Secreta</a> -->

<style>
    /* Estilos para la barra de búsqueda */
.search-form {
    margin-top: 10px; /* Ajusta el margen superior según sea necesario */
}

.search-form input[type="search"],
.search-form button {
    padding: 5px 10px; /* Ajusta el relleno (padding) del campo de búsqueda y el botón */
    border: 2px solid purple; /* Establece el borde rojo */
    background-color: black; /* Establece el fondo negro */
    color: purple; /* Establece el color del texto blanco */
}

.search-form input[type="search"]::placeholder {
    color: purple; /* Establece el color del texto de marcador de posición (placeholder) blanco */
}

.search-form button {
    cursor: pointer; /* Cambia el cursor a un puntero al pasar por encima del botón */
}



.nav-list li {
    margin-right: 10px; /* Ajusta el margen derecho entre los elementos del menú */
}

.nav-list li:last-child {
    margin-right: 0; /* Quita el margen derecho del último elemento del menú */
}

.nav-list a {
    text-decoration: none; /* Quita la decoración de subrayado predeterminada de los enlaces */
    color: black; /* Establece el color del texto negro */
}

.nav-list a:hover {
    color: purple; /* Cambia el color del texto a rojo al pasar por encima del enlace */
}

</style>
</header>