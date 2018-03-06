<?php

echo "<pre>";

// Variável super global que monta configuração da máquina no servidor

array_push($_ENV, ['bd' => 'localhost']);

print_r($_ENV);