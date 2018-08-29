<?php
/*
Calculo de dias transcurridos desde la firma de contrato creado por Sebastian Mujica
*/
class diasTranscurridosIng {
  function calcDiasTranscurridos($bean,$event,$arguments){

    $currentDate = new DateTime();
    $currentDateformat = $currentDate->format('Y-m-d');
    $bean->load_relationship('ing_ingenieria_ecep_excepciones_1');
    //$exceptioBean = BeanFactory::getBean('ecep_excepciones');
    $excepcionList = $bean->ing_ingenieria_ecep_excepciones_1->getBeans();
    if (!function_exists('sortFunction')) {
     function sortFunction( $a, $b ) {
        return strtotime($b->date_entered) - strtotime($a->date_entered);
      }
    }
    
    usort($excepcionList, "sortFunction");

    
    //$ultimaExcep = 

    //$dateDBimport = DateTime::createFromFormat('d/m/Y', $excepcionList[0]->date_entered);
    $ultimaExcep = new DateTime($excepcionList[0]->date_entered);
    $dateDifference = $currentDate->diff($ultimaExcep);
    //var_dump($dateDifference->d);
    $bean->dias_trascurridos_entrega = $dateDifference->d;
    //exit('<br>');

 


  }
}
?>