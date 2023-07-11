<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/vistaCatalogo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Visualizar Catalogo</title>
    <?php include "../compartido/sesion.php"; ?>
<div class="encabezado">
    <header>
        <div class="titulo">
            <h1>FERRETERIA MEISSEN</h1>
        </div>    
        <div class="logo">
            <img src="../imagenes/ferreteria.jpeg" alt="logo ferreteria">
        </div>
    </header>
    <nav class="navbar">
        <div class="lista">
            <button class="btn-login">
                <a class="btn-login" href="../Php/index.php?logout">Cerrar Sesión</a>
            </button>
        </div>
    </nav>
</div>
    <div id="contenedor">
            <div id="menu-lateral">
                <h3>Administrador</h3>
                <div id="foto">
                    <img src="../imagenes/administrador ferreteria.jpg" alt="">    
                </div>
                <div class="nom-usuario">
                <h3>Nombre Usuario</h3>
                </div>
                <select id="selec-admin" onchange="location.href=this.value;">
                    <option selected>Opciones</option>
                    <option value="vistaCatalogo.php">Inicio</option>
                    <option value="inventario.php">Gestión Catálogo e Inventario</option>
                    <option value="gestionarFuncionarios.php">Gestionar Usuarios</option>
                    <option value="ventas.php">Ventas</option>
                </select>
            </div>
        <!--contenedor de elementos-->
        <div class="organizar">
            <h2 id="t-catalogo">Catálogo</h2>
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Clavos 2.5"</span>
                <img class="img-catalogo" src="../imagenes/clavos.jpg" alt="img Clavos">
                <span class="precio-item">$3.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bombillo 100w</span>
                <img class="img-catalogo"src="../imagenes/Bombillo.jpg" alt="img Bombillo">
                <span class="precio-item">$7.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">martillo</span>
                <img class="img-catalogo" src="../imagenes/martillo.jpg" alt="img martillo">
                <span class="precio-item">$12.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Tubos PVC</span>
                <img class="img-catalogo" src="../imagenes/tubos.jpg" alt="img Tubos pvc">
                <span class="precio-item">$30.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Luz led</span>
                <img class="img-catalogo" src="../imagenes/Luz led.jpg" alt="img Luz led">
                <span class="precio-item">$25.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Escalera de Aluminio</span>
                <img class="img-catalogo" src="../imagenes/Escalera.jpg" alt="img Escalera">
                <span class="precio-item">$120.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Drywall 240cm x 120cm</span>
                <img class="img-catalogo" src="../imagenes/Drywall.jpg" alt="img Drywall">
                <span class="precio-item">$70.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Corta Frio</span>
                <img class="img-catalogo" src="../imagenes/corta frio.jpg" alt="img corta frio">
                <span class="precio-item">$10.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cemento x 50 Kl</span>
                <img class="img-catalogo" src="../imagenes/cemento.jpg" alt="img cemento">
                <span class="precio-item">$60.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Hobre solo</span>
                <img class="img-catalogo" src="../imagenes/Himbre solo.jpg" alt="img Hombre solo">
                <span class="precio-item">$12.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Segueta con Marco</span>
                <img class="img-catalogo" src="../imagenes/cegueta.jpg" alt="img Segueta">
                <span class="precio-item">$35.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bombillo Ahorrador</span>
                <img class="img-catalogo" src="../imagenes/Bombillo ahorrador.jpg" alt="img Bombillo">
                <span class="precio-item">$10.000</span>
                <button class="boton-item" onclick="agregarAlCarrito()">Agregar al Carrito</button>
            </div>
        </div>
    </div>
    </div>
        <div class="slider">
            <ul>
                <li>
                    <img src="../imagenes/ferreteria-norte-banner.jpg" alt="Herramientas1">
                </li>
                <li>
                    <img src="../imagenes/herramientas-png.png" alt="Herramientas2">
                </li>
                <li>
                    <img src="../imagenes/slide1-1ferreteria.png" alt="Herramientas3">
                </li>
                <li>
                    <img src="../imagenes/ferreteria-ferromar-.jpg" alt="Herramientas4">
                </li>
            </ul>
        </div>
        <footer>
            <h4>Ferreteria Meissen</h4>
            <div class="enlaces">
                <ul>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="index.html">Catalogo</a></li>
                    <li><a href="#">Pintura</a></li>
                    <li><a href="elctricas.html">Electricas</a></li>
                    <li><a href="#">Herramientas Manuales</a></li>
                    <li><a href="#">Accesorios</a></li>

                </ul>
            </div>
            <h4>Redes sociales</h4>
            <div class="sociales">
            <div class="sociales-link">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <p>Derechos de autor &copy; 2023 Ferretería Meissen. Todos los derechos reservados.</p>
        
            </div>
            </div>
        </footer>
    </body>