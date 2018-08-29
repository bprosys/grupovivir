<?php
/*
Calculo de dias transcurridos desde la firma de contrato creado por Sebastian Mujica
*/
class diasTranscurridos {
  function calcDiasTranscurridos($bean,$event,$arguments){

    $currentDate = new DateTime();
    $currentDateformat = $currentDate->format('Y-m-d');
    $fecha_firma_contrato_c = $bean->fecha_firma_contrato_c;
    $dateDBimport = DateTime::createFromFormat('d/m/Y', $fecha_firma_contrato_c);
    
    if ($dateDBimport) 
     {$dateDBformat = $dateDBimport->format('Y-m-d');
    $dateDBformatDate = new DateTime($dateDBformat);
    $dateDifference = $currentDate->diff($dateDBformatDate);

    $bean->dias_trascurridos = $dateDifference->d;}
    else{
        $bean->dias_trascurridos =0;
    }
    //$bean->dias_trascurridos = "prueba";
    //$birthDate = $GLOBALS['timedate']->fromString($bean->birthdate);




  }
}
?>