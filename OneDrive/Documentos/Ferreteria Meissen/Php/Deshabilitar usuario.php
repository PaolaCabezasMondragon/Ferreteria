<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Deshabilitar usuario.css">
    <title>Document</title>
</head>
    <body>
        <header class="container">
            <div class="inicio">
                <img src="../imagenes/ferreteria.jpeg">
            </div>
            <div>
                <h1 class="titulo">Fereteria meissen</h1>
            </div>
    </header>
    
        <main class="Contenedorgestioncliente">
            <section class="contenedor_foto3gescli">
                <div class="info-usuario3">
                    <div>
                        <p>Administrador</p>
                        <figure>
                            <img src="../imagenes/download.jpg" alt="">
                        </figure>
                    </div>
                    </div>
                        <div class="botonesgesclie">
                            <select id="menu-administrador" onchange="location.href=this.value;">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="../inicio/index.html">Inicio</option>
                                <option value="../cotizacionadmin/cotizacionadm.html">Cotizaciones</option>
                                <option value="../catalogo/gestionarCATALOGO/gesticatalogo.html">Gestionar Catálogo</option>
                                <option value="../diseno/Gestionarclientes.html">Gestionar Clientes</option>
                                <option value="../inventario/admininventario.html">Inventario</option>
                                <option value="entrada">Entrada</option>
                                <option value="salidas">Salidas</option>
                                <option value="../Registro/registro_funcionario.html">Registro Funcionarios</option>
                                <option value="../Deshabilitar/usuario.html">Deshabilitar Usuario</option>
                                <option value="../diseno/ventaadministracion.html">Ventas</option>
                              </select>
                        </div>    
            </section>
                    <section class="seccioncontenedor2">
                            <div class="contenedortilulo">
                                <h1>Deshabilitar usuario</h1>
                            </div>
                                <div class="contenedorbotongesclie">
                                    <div class="botonesbuscarcliente">
                                        <button class="botonbuscarsuperior" >Buscar</button>
                                        <button class="botonbuscarsuperior">ID Cliente</button>
                                    </div>
                                    <table class="Contenedortablagesclie">
                                        <tr class="centrartitulotabla">
                                            <td class="congesclinombre">Nombre</td>
                                            <td class="congesclinombre">Identificación</td>
                                            <td class="congesclinombre">Correo</td>
                                            <td class="congesclinombre"> Fecha Ingreso</td>
                                            <td class="congesclinombre">Seleccionar</td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                </table>
                                        <div class="contenedormensajegesclie">
                                            <form class="tablaingresomensaje" action="">
                                                <label class="mensaje" for="Mensaje">
                                                    <span class="mensagesclie">Mensaje</span><br>
                                                    <input class="contenidomensajegesclie" type="text" id="Mensaje"placeholder>
                                                </label>
                                            </form>
                                            <div class="bottonenviarcancelar">
                                                <button class="boton-c">Enviar</button>
                                                <button  class="boton-c">Cancelar</button>
                                            </div>
                                        </div>  
                                </div>                
            </section>      
        </main>
        <script src="https://kit.fontawesome.com/a432d16de7.js" crossorigin="anonymous"></script>  
        <div class="final">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="text-light mb-0">contactanos</h3>
            </div>
            <div class="contactos">
                <div class="grupo1">
                    <div class="contacto">
                        <a class="fa-solid fa-phone footer-icon" href=""></a>
                        <p class="mb-0">+57 305 8202979</p>
                    </div>
                    <div class="contacto">
                        <a class="fa-solid fa-envelope footer-icon" href=""></a>
                        <p class="mb-0">reparamostodomenoscorazones@gmail.com</p>
                    </div>
                </div>
                <div class="grupo2">
                    <div class="contacto">
                        <a class="fa-solid fa-location-dot footer-icon" href=""></a>
                        <p class="mb-0">KR 19D 61B 50 SUR</p>
                    </div>
                    <div class="contacto">
                        <a class="fa-brands fa-whatsapp footer-icon" href=""></a>
                        <p class="mb-0">+3160401400</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>