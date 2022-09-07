<form >
    年：<input type="number" name="year">
    <input type="submit" value="判斷">

</form>
<?php
    
    if(isset($_GET['year'])){
        $year =  $_GET['year'];
        if($year === '') return;
        
        if($year % 4 === 0 && $year % 100!== 0 ){
            echo "{$year}是閏年";
        }else if ($year % 400 === 0){
            echo "{$year}是閏年";
        }else{
            echo "{$year}是平年";
        }
    }
    

    
    
?>