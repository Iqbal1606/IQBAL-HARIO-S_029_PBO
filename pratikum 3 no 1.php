<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border="1" cellpadding="8">
        <tr>
            <td><?php
            class Tabungan {
                protected $saldo;
            }

            class Pengambilanuang extends Tabungan{
                private $proteksi;

                public function __construct($saldo){
                    $this->saldo = $saldo;
                    $this->proteksi = 1000;
                }

                public function getsaldo(){
                    return 'Uang yang ditabung : ' .$this->saldo. '<br> Uang yang di proteksi : ' .$this->proteksi;
                }

                public function ambiluang($jumlah){
                    if ($jumlah === 4500){
                        return 'Uang yang akan diambil : '.$jumlah. ' false <br> saldo sekarang : ' .$this->saldo; 
                    }
                    else {
                        return 'Uang yang akan diambil : '.$jumlah. ' true <br> saldo sekarang : ' .$this->saldo -= $jumlah; 
                    }
                }
            }

            $tabungan = new Pengambilanuang(5000);
            echo $tabungan->getsaldo();
            echo '<br>--------------------------<br>';
            echo $tabungan->ambiluang(4500);
            echo '<br>--------------------------<br>';
            echo $tabungan->ambiluang(2500);


            ?></td>
        </tr>
    </table>
</body>
</html>