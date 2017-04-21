<?

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
// https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/index.php

CModule::IncludeModule('highloadblock'); //модуль highload инфоблоков

/*
$HL_BLOCK_ID = 1;
$hlblock = HLBT::getById($HL_BLOCK_ID)->fetch();
$entity = HLBT::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

var_dump($entity->getFields()); //all fields
var_dump($entity_data_class::getCount()); //count

$result = $entity_data_class::add(array( //add
      'UF_NAME'         => 'Желтый',
      'UF_CODE'         => 'YELLOW',
      'UF_VALUE'         => '#ffff00',
      'UF_ACTIVE'   => '1'
   ));
   
   $result = $entity_data_class::delete($idForDelete); //remove
   
   $result = $entity_data_class::update($idForUpdate, array( //update
  'UF_NAME'         => 'Фиолетовый',
  'UF_CODE'         => 'PURPLE',
  'UF_VALUE'         => '#5A009D',
  'UF_ACTIVE'   => '1'
));
*/
   $rsData = HLBT::getList(
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
      $hlentity = HLBT::compileEntity($hldata); //entity
      $hlDataClass = $hldata['NAME'].'Table';                                       // data
   }
   else{
     //not found
   }
?>
