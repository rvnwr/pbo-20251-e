<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
}

$Lingkaran = new LuasLingkaran();
$Lingkaran -> jari = 16;

$rumus = LuasLingkaran::phi * $Lingkaran->jari * $Lingkaran->jari;

echo "Hasilnya adalah: ". $rumus;