<?php
    // $a and $b; //E
    // $a or $b; //OU
    // $a xor $b; //XOR
    // !$a; //NOT
    // $a && $b; //E
    // $a || $b; //OU

    $bool = true && false;
    var_dump($bool);

    $bool = (true and false);
    var_dump($bool);

    var_dump(7 == "7");
    var_dump(7 === "7");
    var_dump(7 != 7);
    var_dump(7 !== "7");
    var_dump(7 <= "7");
    var_dump(7 === "7" xor 9 > 7 );
?>