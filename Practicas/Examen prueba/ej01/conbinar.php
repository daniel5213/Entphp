<?php
function conbinar($str){
    $arr = ['a','as','o','os'];

    $option;

    for($i=0;$i<count($arr);$i++){
        $option .= '<option>'. $str.$arr[$i] .'</option>';
    }
    $str = <<<EOD
    <select>
        $option
    </select>
EOD;
    return $str;
}
?>
