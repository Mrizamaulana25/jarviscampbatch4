<?php

class Kendaraan
{
    public $roda;
    public $warna;

    function __construct($roda,  $warna)
    {
        $this->roda = $roda;
        $this->warna = $warna;
    }
    function print()
    {
        echo "ini adalah kendaraan beroda $this->roda, dan warna $this->warna";
    }
}


class Motor extends Kendaraan
{
    public $merk;

    function __construct($warna, $merk)
    {
        parent::__construct(2, $warna);
        $this->merk = $merk;
    }

    function print()
    {
        echo "ini adalah kendaraan beroda $this->roda, dengan merk $this->merk, dan warna $this->warna";
    }
}

$supra = new Kendaraan(4, "merah");
$supra->print();

$supra_kebut = new motor("merah", "honda");
$supra_kebut->print();
