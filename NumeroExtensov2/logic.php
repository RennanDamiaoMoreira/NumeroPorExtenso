<?php
require_once 'ConnectionCreator.php';
searchNumber(1);
echo engine(2378);

function updateNumber($number,$string) {
    $insert="INSERT INTO numbers (id,extenso) VALUES(2,DOIS)";
    $pdo=ConnectionCreator::createConnection();
//    $stmt=$pdo->prepare($insert);
//    $stmt->bindParam(':id', $number);
//    $stmt->bindParam(':extenso', $string);
    var_dump( $pdo->query($insert));
}
function searchNumber($param){
    $pdo = ConnectionCreator::createConnection();
    $sql = 'SELECT extenso FROM numbers WHERE (id ="'.$param.'");';
    var_dump($pdo->exec($sql));
}
function engine($param)
{
    $value = ((int) $param);
    $length = strlen($value);
    $vector = array();
    $final='';
    for ($i = 0; $i < $length; $i ++) {
        $vector[$i] = ((int) ($value / 10 ** $i));
//         echo "--" . $vector[$i];
    }
    for ($i = 0; $i < $length; $i ++) {
        if ($i == $length - 1){} else{
            $vector[$i] = ($vector[$i] - ($vector[$i + 1] * 10));
        }
        echo "--" . $vector[$i] . "\n";
    }
    
    for ($length = $length - 1; 0 <= $length; $length --) {
        
        switch ($length) {
            case 3: // milhar
                
                switch ($vector[$length]) {
                    case 1:
                        $final = $final . " MIL";
                        
                        break;
                    case 2:
                        $final = $final . " DOIS MIL";
                        break;
                    case 3:
                        $final = $final . " TRÊS MIL";
                        break;
                    case 4:
                        $final = $final . " QUATRO MIL";
                        break;
                    case 5:
                        $final = $final . " CINCO MIL";
                        break;
                    case 6:
                        $final = $final . " SEIS MIL";
                        break;
                    case 7:
                        $final = $final . " SETE MIL";
                        break;
                    case 8:
                        $final = $final . " OITO MIL";
                        break;
                    case 9:
                        $final = $final . " NOVE MIL";
                        break;
                    default:
                        ;
                        break;
                }
                break;
            case 2: // centena
                
                switch ($vector[$length]) {
                    case 1:
                        $final = $final . " UM";
                        break;
                    case 2:
                        $final = $final . " DUZENTOS";
                        break;
                    case 3:
                        $final = $final . " TREZENTOS";
                        break;
                    case 4:
                        $final = $final . " QUATROCENTOS";
                        break;
                    case 5:
                        $final = $final . " QUINHENTOS";
                        break;
                    case 6:
                        $final = $final . " SEISCENTOS";
                        break;
                    case 7:
                        $final = $final . " SETECENTOS";
                        break;
                    case 8:
                        $final = $final . " OITOCENTOS";
                        break;
                    case 9:
                        $final = $final . " NOVECENTOS";
                        break;
                    default:
                        ;
                        break;
                }
                break;
            case 1: // dezena
                
                switch ($vector[$length]) {
                    case 1:
                        $final = $final . " UM";
                        break;
                    case 2:
                        $final = $final . " VINTE";
                        break;
                    case 3:
                        $final = $final . " TRINTA";
                        break;
                    case 4:
                        $final = $final . " QUARENTA";
                        break;
                    case 5:
                        $final = $final . " CINQUENTA";
                        break;
                    case 6:
                        $final = $final . " SESSENTA";
                        break;
                    case 7:
                        $final = $final . " SETENTA";
                        break;
                    case 8:
                        $final = $final . " OITENTA";
                        break;
                    case 9:
                        $final = $final . " NOVENTA";
                        break;
                    default:
                        ;
                        break;
                }
                break;
                
            case 0: // unidade
                
                switch ($vector[$length]) {
                    case 1:
                        $final = $final . " UM";
                        break;
                    case 2:
                        $final = $final . " DOIS";
                        break;
                    case 3:
                        $final = $final . " TRÊS";
                        break;
                    case 4:
                        $final = $final . " QUATRO";
                        break;
                    case 5:
                        $final = $final . " CINCO";
                        break;
                    case 6:
                        $final = $final . " SEIS";
                        break;
                    case 7:
                        $final = $final . " SETE";
                        break;
                    case 8:
                        $final = $final . " OITO";
                        break;
                    case 9:
                        $final = $final . " NOVE";
                        break;
                    default:
                        ;
                        break;
                }
                break;
            default:
                
                break;
        }
    }
    updateNumber($value, $final);
    return $final;
}