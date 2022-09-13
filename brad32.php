<?php
    function sayYa(){
        echo "ya<br>";
    }
    function sayHello($name){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name, $times){
        for($i=0;$i<$times;$i++){
            echo "Hello, {$name}<br>";
        }
    }

    function sayHelloV3($name = 'World', $times = 1){
        for($i=0;$i<$times;$i++){
            echo "Hello, {$name}<br>";
        }
    }

    function sayHelloV4(){
        // if(func_num_args()>0){
        //     echo func_get_arg(0);
        // }
        $args = func_get_args();
        // var_dump($args);
        // count()取得陣列元素個數
        if(count($args)>0){
            foreach ($args as $name){
                echo "Hello, {$name}<br>";
            }

        }
        
    }


    sayYa();
    sayYa();
    sayYa();
    //@sort($a) or die('Server Busy');  //@用來抑制錯誤或警告訊息
    sayHelloV2('Brad',3);
    echo "<hr>";
    sayHelloV3('Brad');

    echo "<hr>";
    sayHelloV3('Brad',2);
    echo "<hr>";
    // 有預設值
    sayHelloV3();
    echo "<hr>";
    sayHelloV4(123,'brad',3,4,5,6);
?>