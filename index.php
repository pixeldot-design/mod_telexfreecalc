<?php
$adesao = 100;
$adcentral_value = 289;
$adfamily_value = 1375;
$qtd = 0;
$investimento=0;
$data_registo = "02-07-2014";
//$data_actual = date();


function recompras($data_registo){
    $data_registo=strtotime($data_registo);
    $recompra=array();
    for ($i = 2; $i <= 52 ; $i++){
        switch ($i) {
            case 2:
                $data_recompra=strtotime("+15 days", $data_registo);
                $recompra[$i]['data_recompra']=date('d-m-Y',$data_recompra);
                $recompra[$i]['data_recompra_ISO']=$data_recompra;
                break;
            default:
                $data_recompra=strtotime("+7 days", $data_recompra);
                $recompra[$i]['data_recompra']=date('d-m-Y',$data_recompra);
                $recompra[$i]['data_recompra_ISO']=$data_recompra;
                break;
        }
    }
    return $recompra;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $recompras=recompras($data_registo);
        //var_dump($datas);
        $i=1;
        $cont=count($recompras);
        echo "Total Semanas: ".$cont."<br />";
        foreach ($recompras as $recompra) {
            $i++;
            echo $recompras[$i]['data_recompra']."<br />";
            /*foreach ($recompra as $key => $value) {
                //echo $key.": ";
                echo $value." ".$adcentral_value;
                echo "<br />";
            }*/
        }
        ?>
    </body>
</html>
