<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inventario.css">
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
    </header>   
        <main class="ContenedorInventarioAdmin">
            <section class="contenedor_foto2gescli">
                <div class="info-usuario2">
                        <p>Administrador</p>
                        <figure>
                            <img src="../img/download.jpg" alt="">
                        </figure>
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
                                <h1>Inventario</h1>
                            </div>
                                <div class="contenedorbotongesclie">
                                    <div class="botonesbuscarcliente">
                                        <button class="botonbuscarsuperior" >Buscar</button>
                                        <button class="botonbuscarsuperior">ID Producto</button>
                                    </div>
                                    <table class="Contenedortablagesclie">
                                        <tr class="centrartitulotabla">
                                            <td class="congesclinombre">Nº</td>
                                            <td class="congesclinombre">Producto</td>
                                            <td class="congesclinombre">Entrada</td>
                                            <td class="congesclinombre"> Fecha Entrada</td>
                                            <td class="congesclinombre">Salida</td>
                                            <td class="congesclinombre">Fecha Salida</td>
                                            <td class="congesclinombre">Stock</td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
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
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                        <tr>
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
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
                                            <td class="congesclinombre"></td>
                                            <td class="congesclinombre"></td>
                                        </tr>
                                </table>
                                <br> <br>
                                <section class="bottonenviarcancelar">

                                            <class="bottonenviar">
                                                    <button class="boton-c1">Enviar</button>  
                                                    <class="bottoncancelar">
                                                    <button class="boton-c2">Cancelar</button>
                                                
                                            </div>
                                            </section>        
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