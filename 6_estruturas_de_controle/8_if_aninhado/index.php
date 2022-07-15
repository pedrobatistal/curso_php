<!-- If aninhado: significa inserir um "if" dentro de outro "if" -->

<?php

if(10 > 2) {
    echo "Entrou no primeiro if 1 <br>";
    
    if("teste" == "teste") {
        echo "Entrou no segundo if 1 <br>";

    }
}

if(10 > 2) {
    echo "Entrou no primeiro if 2 <br>";
    
    if("teste" != "teste") {
        echo "Entrou no segundo if 2 <br>";
        
    }else {
        echo "Entrou no segundo else 2 <br>";
    }
}

if(10 < 2) {
    echo "Entrou no primeiro if 3 <br>";
    
    if("teste" != "teste") {
        echo "Entrou no segundo if 3 <br>";
        
    }else {
        echo "Entrou no segundo else 3 <br>";
    }
} else {
    echo "Entrou no primeiro else 3 <br>"; // esse else vai entrar pois a condição do primeiro if não foi satisfeita, portando ele pulará diretamente para o primeiro else. Lembrando que "primeiro" não é em relação a qual vem primeiro em cada linha, e sim em qual bloco de execução ele está. EX.: if 1 > else 1 (externos) > if 2 > else 2 (internos)
}