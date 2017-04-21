<?
CModule::IncludeModule('highloadblock'); //модуль highload инфоблоков

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
