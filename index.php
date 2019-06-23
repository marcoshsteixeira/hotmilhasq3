<?php

$text = "Melhor preço sem escalas R$ 1.367(1)
         Melhor preço com escalas R$ 994 (1)
        
         1 - Incluindo todas as taxas.";

$pattern = "/([0-9.]{2,5}) (.*?)/";
preg_match_all($pattern, $text, $return);

$value = $return[0][0];

echo number_format((float)$value, 2);

?>