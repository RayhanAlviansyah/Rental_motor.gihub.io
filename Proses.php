<?php
    class Motoy {
        protected $ppn,
                $member;
        private $honda,
                $ninja,
                $aerox,
                $kawasaki;
        public $jenis;
        public $lama;
        public $nama;

        function __construct() {
            $this->ppn = 10000;
        }

        public function setharga($motor1, $motor2, $motor3, $motor4) {
            $this->honda = $motor1;
            $this->ninja = $motor2;
            $this->aerox = $motor3;
            $this->kawasaki = $motor4;
        }

        public function getharga() {
            $data ["honda"] = $this->honda;
            $data ["ninja"] = $this->ninja;
            $data ["aerox"] = $this->aerox;
            $data ["kawasaki"] = $this->kawasaki;
            return $data;
        }
    }

    class Rental extends Motoy {
        public function bill() {
            $dataharga = $this->getharga();
            $hargasewa = $this->lama * $dataharga[$this->jenis];
            $hargabayar = $hargasewa + $this->ppn;
            if ($this->nama == "Edward" ||$this->nama == "Rayhan" ||$this->nama == "Geo" ||$this->nama == "Nabil") {
                $status = " Member";
                $hargabayar1 = $hargabayar;
                $hargadiskon = $hargabayar1 * 5/100;
                $hargabayar = $hargabayar1 - $hargadiskon;
                $diskon = " Mendapatkan diskon sebesar 5%"; 
            }else {
                $status = " Non-member";
                $diskon = " Tidak Mendapatkan Diskon";
            };

            echo "<center>";
            echo "------------------------------------------------" . "<br>";
            echo  $this->nama . " adalah" . $status . $diskon ."<br>" ;
            echo "menyewa motor dengan tipe " . $this->jenis . "<br>";
            echo "dengan harga sewa perharinya " . $dataharga[$this->jenis] . "<br>";
            echo "dengan waktu " . $this->lama . " Hari <br>";
            echo "total yang harus di bayar adalah Rp. " .$hargabayar . "<br>";
            echo "------------------------------------------------";
            echo "</center>";
        }
    }
?>