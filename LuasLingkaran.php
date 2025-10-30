<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran {$nama} Hasilnya adalah:{$rumus}";
    }
    public static function testing(){
        echo "ini dari static";
    }
}

$Lingkaran = new LuasLingkaran();
$Lingkaran -> jari = 16;
$Lingkaran -> tampil('roda');

LuasLingkaran::testing();