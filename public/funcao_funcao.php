<?php 
    function calcular_idade($ano_nascimento){
        return date('Y') - $ano_nascimento;
    }
    echo 'você tem ' . calcular_idade(1992) . ' anos!';
?>