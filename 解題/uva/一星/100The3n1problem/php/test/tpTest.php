
<?php
use PHPUnit\Framework\TestCase;

require './src/doublearray.php';

class ProblemTest extends TestCase
{
    public function testone()
    {
        $this->assertSame([1,1,1], problem([1,1]));
    }
    public function testExample()
    {
        $this->assertSame([1,10,20], problem([1,10]));
        $this->assertSame([10,1,20], problem([10,1]));
        $this->assertSame([100,200,125], problem([100,200]));
        $this->assertSame([201,210,89], problem([201,210]));
        $this->assertSame([900,1000,174], problem([900,1000]));
    }
    public function solution($arr)
    {
        $max=max($arr);
        $min=min($arr);
        $tmp1=0;
        //$tmp2=0;
        for ($min;$min<=$max;$min++) {
            $tmp=1;
            $tmp2=$min;
            while ($tmp2!=1) {
                if ($tmp2%2==0) {
                    $tmp2/=2;
                    $tmp++;
                } else {
                    $tmp2=3*$tmp2+1;
                    $tmp++;
                }
            }
            $data[$tmp1++]= $tmp;
        }
        array_push($arr, max($data));
        return $arr;
    }
    public function testRandom()
    {
        for ($i=0;$i<1000;$i++) {
            $this->assertSame($this->solution($arr=[rand(1, 100),rand(100, 200)]), problem($arr));
        }
    }
}
