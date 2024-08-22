<?php namespace App\Libraries;

class Tools
{
    public function toSecond($type, $val)
    {
        $second = 0;
        $val = floatval($val);

        switch ($type) {
            case "Day":
                $second = $val * 24 * 60 * 60;
                break;
            case "Hour":
                $second = $val * 60 * 60;
                break;
            case "Minute":
                $second = $val * 60;
                break;
            default:
                $second = 0;
        }

        return $second;
    }

    public function toTimeType($type, $val)
    {
        $second = 0;
        $val = floatval($val);

        switch ($type) {
            case "Day":
                $second = ($val / 86400). ' '.$type;
                break;
            case "Hour":
                $second = ($val / 3600). ' '.$type;
                break;
            case "Minute":
                $second = ($val / 60). ' '.$type;
                break;
            default:
                $second = 0;
        }

        return $second;
    }

    public function generateCode($code, $num){
        $n = "";
        $bulan = date('m');
        $tahun = date('Y');
        $rome = $this->romawi($bulan);

        if(strlen($num) == 1){
            $n = "00". $num;
        } else if(strlen($num) == 2){
            $n = "0". $num;
        } if(strlen($num) == 3){
            $n = $num;
        }
        
        return $n."/".$code."/".$rome."/".$tahun;
    }

    public function romawi($bulan){		
		switch ($bulan) {
            case 1:
                $bulan = "I";
                break;
            case 2:
                $bulan = "II";
                break;
            case 3:
                $bulan = "III";
                break;
            case 4:
                $bulan = "IV";
                break;
            case 5:
                $bulan = "V";
                break;
            case 6:
                $bulan = "VI";
                break;
            case 7:
                $bulan = "VII";
                break;
            case 8:
                $bulan = "VIII";
                break;
            case 9:
                $bulan = "IX";
                break;
            case 10:
                $bulan = "X";
                break;
            case 11:
                $bulan = "XI";
                break;
            case 12:
                $bulan = "XII";
                break;

            default:
                $bulan = Date('F');
                break;
				
		}
		
		return $bulan;
    }

    public function formaterCurrencyNumber($currency, $number) {
        $fNumber = 0;

        if($currency == 'IDR') {
            $fNumber = 'Rp. '.number_format($number);
        } else if($currency == 'USD') {
            $fNumber = '$'.number_format($number);
        }

        return $fNumber;
    }
}