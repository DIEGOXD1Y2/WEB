
<?php 
    //print "Hola xd";     
    //echo " pero mundo :)" ;
    //$dinero =0;
    //$dormir =0;
    //$feliz = $dinero + $dormir;
    //$varName = 'foo';
    //$foo = 'bar';
    //Varihable de varihable
    //echo $foo;
    //echo $$varName;    
    //echo $($varName);
    $ara = [12,'1234', 123," "];
    //echo $ara[0];
    //echo $ara[3];
    //echo $ara[1];
    //echo $ara[3];
    //echo $ara[2];

?><!-- php -S host -->


<?php 

function xd(){
    global $pandemia;
    $foo = true;
    $bar = 12345678;
    $array = array(1,2,3);
    $array2 = [4,5,6,];
    if ($bar < 700){
        echo "Si es verdad ";
    } else {
        echo "No es verdad ";
    }
    echo $bar;
    $bar = "a b c";
    echo $bar;
    echo $array[1];
    echo $array2[1];
    $dinero = NAN;
    echo $dinero;

    $output = 'ls';
    // $a; $b; $c = $a . $b;
    //
    //for($i=0, $j=1; $i <=9; $j+=$i,  echo $i, ",", $i++)
    $ar = ["Dinero","Comer","Dormir"];
    foreach ($ar as $item => $index){
        echo  'I love ',$item;
    }
        

}

function html(){
    // Si no esta asigna el valor nobody
     $xd = $_POST["Numero"] ?? 'nobody';
}

function hello($name){
    echo "Hola ",$name;
}

interface Foo {
    const BAR = 'Bar';
}


//Parametros por referencia
//Herencia 
//Proyecto con php, recordar
?>













<!-- escuchar barracuda de heart -->