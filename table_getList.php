<?
CModule::IncludeModule('highloadblock'); //модуль highload инфоблоков

/*
$HL_BLOCK_ID = 1;
$hlblock = HLBT::getById($HL_BLOCK_ID)->fetch();
$entity = HLBT::compileEntity($hlblock);
var_dump($entity->getFields()); //all fields
var_dump($entity_data_class::getCount()); //count
*/
   $rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(
     array(
       'filter'=>array(
         'TABLE_NAME'=> 'b_hlbd_somename'
       ),
       'select' => array("*"), 
       'order' => array(
         'UF_NAME' => 'asc'
       ),
     )
   );
   
   if ( $hldata = $rsData->fetch() ){
      $hlentity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata); //entity
      $hlDataClass = $hldata['NAME'].'Table';                                       // data
   }
   else{
     //not found
   }
?>
