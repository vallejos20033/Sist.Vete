<?php
class ProveedorManager {
    

    public function verStock() {
        echo "Stock:\n";
        
       
        $stock = [
            "Producto A" => 50,
            "Producto B" => 30,
            "Producto C" => 20
           
        ];

        
        foreach ($stock as $producto => $cantidad) {
            echo "$producto: $cantidad unidades\n";
        }
    }
}




$proveedorManager = new ProveedorManager();
$proveedorManager->verStock();
?>