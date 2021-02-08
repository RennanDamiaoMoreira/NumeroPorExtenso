<?php

function extenso($param)
{
    $valor = ((int) $param);
    $centavos = $param - $valor;
    $tamanho = strlen($valor);
    $vetor = array();
    $final="";
    for ($i = 0; $i < $tamanho; $i ++) {
      
        $vetor[$i] = ((int) ($valor / 10 ** $i));
       
    }
    
    for ($i = 0; $i < $tamanho; $i ++) {
        if ($i == $tamanho - 1) {} else {
            $vetor[$i] = ($vetor[$i] - ($vetor[$i + 1] * 10));
        }
        echo $vetor[$i]."--\n";
    }
    echo $final;
  

    for ($tamanho = $tamanho - 1; 0 <= $tamanho; $tamanho --) {
        
        switch ($tamanho) {
            case 3: // milhar

                switch ($vetor[$tamanho]) {
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

                switch ($vetor[$tamanho]) {
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

                switch ($vetor[$tamanho]) {
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

                switch ($vetor[$tamanho]) {
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
    return $final;
}

