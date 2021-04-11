<?PHP
 $nota = 2;

if ($nota >= 7) {
    echo "Aprovado: $nota";
} elseif (($nota <7) && ($nota >= 4)) {
    echo "Recuperação:$nota";
} else {
    echo "Reprovado:$nota";
}

?>