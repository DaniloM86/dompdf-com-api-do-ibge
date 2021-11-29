<?php
require_once('api.php');

echo '<h1 style="text-align:center;">Estados e municípios da região sul</h1>';
$relatorio = new Relatorio;
$relatorio->ufPR();
$relatorio->ufSC();
$relatorio->ufRS();
