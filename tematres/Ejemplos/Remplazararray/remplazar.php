    <?php
     
    $precios = array (
     
        "frutas" => array (
     
    "manzanas" => 15,
    "peras" => 5,
    "naranjas" => 3,
    ),
     
    "verduras" => array (
      "clave" => 15,
      "clave2" => 5,
      "clave3" => 3,
    )
     
    );
    echo "<pre>";
    print_r($precios);
    echo "</pre>";
    echo "<pre>";
    var_dump($precios);
    echo "</pre>";
    // Los precios de frutas suben 5%
     
    $tmp = array();
     
    foreach ($precios['frutas'] as $clave => $valor) {
      $tmp[$clave]=ceil($valor*(1+0.05));
    //  $precios['frutas'][$clave]=ceil($valor*(1+0.05));
    }
     
     
     
    $precios=array_replace($precios,array('frutas'=>$tmp));
     
    $tmp = array();
    // los precios de las verduras suben un 3%
    foreach ($precios['verduras'] as $clave => $valor) {
      $tmp[$clave]=ceil($valor*(1+0.03));
     // $precios['verduras'][$clave]=ceil($valor*(1+0.03));
    }
    $precios=array_replace($precios,array('verduras'=>$tmp));
     
     
echo "=========================================================";
echo "<pre>";
print_r($precios);
echo "</pre>";
echo "<pre>";
var_dump($precios);
echo "</pre>";
     
    ?>