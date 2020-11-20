<?php
class InfoStudent {

//function to be exposed must be public
public function getInfoStudent($cin) {
$info = array("CIN:".$cin , "ikram", "Turki","02/09/1996", 
"Level: 3", "Result:succeeded"); 
return $info;
}
}
?>