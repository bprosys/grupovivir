<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class ActualizarCategoria{
  function actualizarCategoriaTrick($bean,$event,$arguments){
    //echo "<pre>";

    //Cargamos la relacion con Productos
    $bean->load_relationship('aos_products_reser_reservas_1');
    
    $producto=array_values($bean->aos_products_reser_reservas_1->getBeans())[0];
    
    
  //Cargamos la relacion de producto con categoria
    //var_dump($producto);
    $producto->load_relationship('aos_product_category');
    //$producto->load_relationship('product_categories');
    $categoria=array_values($producto->aos_product_category->getBeans())[0];
    //var_dump($categoria);
    $bean->load_relationship('reser_reservas_aos_product_categories_1');
    $bean->reser_reservas_aos_product_categories_1->add($categoria->id);
    //Ahora Obtenemos la Informacion del Contacto
    $bean->load_relationship('opportunities_reser_reservas_1');
    $clientePotencial=array_values($bean->opportunities_reser_reservas_1->getBeans())[0];
    //var_dump($clientePotencial);
    $clientePotencial->load_relationship('contacts');
    $contacto=array_values($clientePotencial->contacts->getBeans())[0];
    $bean->load_relationship('reser_reservas_contacts_1');
    $bean->reser_reservas_contacts_1->add($contacto->id);
    //echo "</pre>";
    //exit();
  }
}
?>
