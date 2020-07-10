<?php


class stringAlgo
{
    public function reverseString($str,$from,$to){

        while ($from<$to){
            //$temp = $str[$from];
            print_r(111);die;
            $str[$from++] = $str[$to];
            $str[$to--] = $temp;
        }
        //return $str;
    }

    public function leftRotateString($str,$n,$m){
        $m %= $n;
        $str = $this->reverseString($str,0,$m-1);
        print_r( $str);die;
        $str = $this->reverseString($str,$m,$n-1);
        $str = $this->reverseString($str,0,$n-1);
        return $str;
    }
}

$test = new stringAlgo();

$str = [a,b,c,d,e,f];
$str1 = $test->leftRotateString($str,1,5);
print_r( $str1);die;
