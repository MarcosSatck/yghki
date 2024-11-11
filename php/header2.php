<header>
    <!-- CON ESTE CODIGO SE COLOCA UN LOGO Y UN TITULO DE LA PAGINA -->
    <table width="100%" align="center" border="0">
    <tr>
    <!-- LOGO DEL PERRO -->
    <th width="12%" align="right" style="text-align: right;" scope="col">
    <img src="../img/logo.png" width="100%" alt=""/>
    </th>

    <!-- TITULO -->
    <th width="90%" align="center" scope="col">
    <div align="center">
    <img src="../img/2.png" width="80%" height="70px" alt=""/>
    </div>
    </th>
    </tr>
    </table>

    <style>
    header {
        background-color: black;
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
        font-size: 1.8em;
        cursor: pointer;
        display: none;
        color: yellow;
        width: 40px;
        margin-right: 5px; /* Ajusta el margen derecho según tus preferencias */
        transition: transform 0.3s ease;
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
        color: red;
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
        background-color: yellow;
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
            left: 0;
            right: 0;
            background-color: black;
            z-index: 1;
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

<nav>
    <div class="logo"><img src="../img/logo.png" width="100%" alt=""/></div>
    <div class="menu-toggle">&#9776;</div>
    <ul class="nav-list">
        <li><a href="../index.php">Home</a></li>
        <li><a href="php/historias.php">Historias de Terror</a></li>
        <li><a href="#">Creepypastas</a></li>
        <li><a href="#">Leyendas Mexicanas</a></li>
        <li><a href="#">Cuentos Cortos</a></li>
        <li><a href="#">Cuentos Infantiles</a></li>
    </ul>
</nav>
</header>
