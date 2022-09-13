<?php
    function checkTWId($id){
        // 長度為10
        // A-Z *1
        // 0-9 *9
        // 第二碼 1 / 2
        // 檢查碼驗證
        $isRight = false;
        if(strlen($id) == 10){
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $c1 =  substr($id,0,1);
            if(strpos($letters,$c1)!==false){

                $isRight = true;
            }
            
        }
        return $isRight;
    }

?>