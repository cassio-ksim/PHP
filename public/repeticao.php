<?php require 'inicio.php' ?>
    <p>OLÁ MUNDO, hoje é <?php echo date("d/F/y")?> A hora é <?php echo date("H:i:s")?></p>
    <p>minha idade é: <?php echo 2024 - 1992 ?></p>
    <p><?php $idade = 18;
             $ano_atual = 2024;
             $idade_daqui_cinco_anos = $idade + 5;
             $ano_nascimento = $ano_atual - $idade;          
        ?>
    </p>
    <p><?php echo $ano_nascimento ?></p>
    <p><?php echo $idade_daqui_cinco_anos ?></p>

    <p>
        <?php
        $nome = 'Cassio Lima';
        $mensagem = 'seja bem vindo';
        #contatenar
        $mensagem_final = "$mensagem, $nome";
        $mensagem_final2 = $mensagem. $nome;
        echo $mensagem_final;
        echo '<br>';
        echo $mensagem_final2;
        echo '<br>';


        #condição do se e se não!
        if($idade >= 18){
            echo 'você é maior de idade';
        }else if($idade >= 16){
            echo 'você é menor de idade, mas pode votar';
        }else{
            echo 'você é menor de idade e não pode votar';
        }
        ?>
    </p>
        
    <p>
        <?php 
        $staus = 0;

        if($staus ==0){
            echo 'Aguardando confirmação';
        }elseif($staus == 1){
            echo 'sendo preparado';
        }elseif($staus == 2){
            echo 'a caminho';
        }elseif($staus == 3){
            echo 'entregue';
        }else {
            echo 'desconhecido';
        }
        ?>
    </p>

    <p>
        <?php  #repetição com condição
        switch($staus){
            case 0:
                echo'aguardando a confirmação';
                break;
                case 1:
                    echo'sendo preparado';
                    break;
                    case 2:
                        echo'a caminho';
                        break;
                        case 3:
                            echo'entregue';
                            break;
                            default:
                                echo'desconhecido';
                                break;
        }
        ?>
        
    </p> 
   
    <p>
        <?php  #laço de repetição
        #$ano = 1989;
        #while($ano <= 2024){
        #    $idade = $ano - 1989;
        #    echo "Em $ano eu tinha $idade anos <br>";
        #    $ano++;
        #}
        ?>
    </p>
<?php require 'fim.php' ?>
    <p>
        <?php 
        for($ano = 1989; $ano <= 2024; $ano++){
            $idade = $ano - 1989;
            echo "Em $ano eu tinha $idade anos <br>";
        }
        ?>
    </p>
