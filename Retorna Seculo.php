<?php
  public function seculoAno($ano)
    {

        if (!$ano) {
            return 'Por favor informe pelomenos um ano';
        }
        $ano = (($ano - 1) / 100) + 1;
        $ano = intval($ano);

        return 'Século ' . $ano . '';
    }
?>