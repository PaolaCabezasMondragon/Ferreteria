<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ventas.css">
</head>
<body>
<?php
    include 'compartido/menu.php';
    ?>

    <main class="Contenedorventasdocventas">
        <section class="contenedor_foto">
            <div class="info-usuario">
                <p>Administrador</p>
                <figure>
                    <img src="./img/download.jpg" alt="">
                </figure>
            </div>
            <div class="botones">
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
        <section class="Contenedorformularioventa">
            <div class="contenedor_ventas">
                <h2 class="title">Ventas</h2>
                <form class="formularioventasydocumentoproductos" action=""></form>
                    <div class="contenedorexistencia">
                        <label  class="label-input"  for="Existencia">
                            <span> Existencia</span>
                            <input  type="text">
                        </label>
                    </div> 
                    <div class="contenedorformularioventa">   
                        <label class="label-input" for="Existencia">
                            <span>Codigo</span> 
                            <input  type="number">
                        </label>
                        <label class="label-input" for="Existencia">
                            <span>Descripcion</span>
                            <input type="text">
                        </label> 
                        <label class="label-input" for="Existencia">
                            <span>Precio</span>
                            <input type="number">
                        </label>
                        <label class="label-input" for="Existencia">
                            <span>Cantidad</span>
                            <input type="number">
                        </label>
                        <label class="label-input" for="Existencia">
                            <span> Descuento</span>
                            <input type="number">
                        </label>
                        <label class="label-input" for="Existencia">
                            <span>Fecha</span>
                            <input type="date">
                        </label>
                    </div>
                    <div class="botonagregar">
                        <button class="botonagregaryeliminar">Agregar</button>
                        <button class="botonagregaryeliminar">Cancelar</button>
                    </div>
                </form>

            </div>
            <div class="contenedor_ventas">
                <h2>Productos de Venta</h2>
                <form action="">
                    <div class="contenedorformularioventa">   
                        <label class="label-input" for="Existencia">
                            <span>Cliente</span> 
                            <input type="text">
                        </label>
                        <Select class="Seleccionventa" name="Seleccione" id="">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Cedula de ciudadania">Cedula de Ciudadania</option>
                            <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                            <option value="Nit">Nit</option>
                        </Select>
                        <label class="label-input" for="Existencia">
                            <span>N° identificacion</span>
                            <input type="number">
                        </label> 
                        <label class="label-input" for="Existencia">
                            <span> Direccion</span>
                            <input type="text">
                        </label>
                        <label class="label-input" for="Existencia">
                            <span> Telefono</span>
                            <input type="number">
                        </label>
                        <label class="label-input"  for="Existencia">
                            <span> Correo</span>
                            <input type="email">
                        </label>
                    </div>
                </form>
            </div>
        </section>       
    </main>
    <main>
        <div class="contenedortabla">
            <p class="titulotabla">Productos</p>
            <table class="tabla">
                <tr class="descripciontabla">
                    <td class="descripciontabla_producto">Codigo</td>
                    <td class="descripciontabla_producto">Cantidad</td>
                    <td class="descripciontabla_producto">Descripcion</td>
                    <td class="descripciontabla_producto">Precio</td>
                    <td class="descripciontabla_producto">Descuento</td>
                    <td class="descripciontabla_producto">Total</td>
                </tr>
                <tr>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                </tr>
                <tr>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                </tr>
                <tr>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                </tr>
                <tr>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                </tr>
                <tr>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                    <td class="descripciontabla_producto"></td>
                </tr>
            </table>
    </div>
    </main>
    <script src="https://kit.fontawesome.com/a432d16de7.js" crossorigin="anonymous"></script>  
    <?php
        include 'compartido/footer.php';
        ?> 

</body>
</html>