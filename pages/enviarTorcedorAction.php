<?php

    echo "<h1>Dados Enviados </h1>";
    echo "<p> Torcedor:" . $_POST['nome'] . "</p>";
    echo "<p> CPF:" . $_POST['CPF'] . "</p>";
    echo "<p> time:" . $_POST['time'] . "</p>";
    echo "<p> frequencia:" . $_POST['frequencia'] . "</p>";
    $socio = (isset($_POST['socio']) ? "sim" :'Não');
    echo "<p> socio:" . $socio . "</p>";
    $camisa = (isset($_POST['camisa']) ? "sim" :'Não');
     echo "<p> camisa:" . $camisa . "</p>";






















