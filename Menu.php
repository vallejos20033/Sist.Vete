<?php
require_once ('cliente.php');
require_once('Proveedores.php');
require_once ('Stock.php');
require_once ('Productos.php')
  class Menu {
function menuGestion($opcion){
    while($opcion != 0){
        switch ($opcion) {
            case 1:
                echo("Gestion de Clientes");
                $opcionClientes = readline("Ingrese una opcion: 1=(AGREGAR CLIENTE), 2=(BORRAR CLIENTE), 3=(MODIFICAR DATOS): ");
                if($opcionClientes == 1){
                    // agregarCliente();
                    break;
                }else if($opcionClientes == 2){
                    // borrarCliente();
                    break;
                }else if($opcionClientes == 3){
                    // modificarCliente();
                    break;
                }else{
                    echo("ERROR: Dato mal Ingresado");
                }
            break;
            case 2:
                echo("Gestion de Producto");
                $opcionProducto = readline("Ingrese una opcion: 1=(AGREGAR Producto), 2=(BORRAR Producto), 3=(MODIFICAR Producto): ");
                if($opcionProducto == 1){
                    // agregarProducto();
                    break;
                }else if($opcionProducto == 2){
                    // borrarPedido();
                    break;
                }else if($opcionProducto == 3){
                    // modificarPedido();
                    break;
                }else{
                    echo("ERROR: Dato mal Ingresado");
                }
            break;
            case 3:
                echo("Gestion de proveedores");
                $opcionProveedores = readline("Ingrese una opcion: 1=(AGREGAR proveedor), 2=(BORRAR proveedor), 3=(MODIFICAR proveedor): ");
                if($opcionProveedores == 1){
                    // agregarProveedor();
                    break;
                }else if($opcionProveedores == 2){
                    // borrarProveedores();
                    break;
                }else if($opcionProveedores == 3){
                    // modificarpProveedores();
                    break;
                }else{
                    echo("ERROR: Dato mal Ingresado");
                }
            break;
            
        }
        $opcion = readline("Ingrese una opcion: 1=(GESTIONAR CLIENTES), 2=(GESTIONAR Productos), 3=(GESTIONAR Proveedores): ");
    }
}
}
?>