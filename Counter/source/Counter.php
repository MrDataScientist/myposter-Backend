<?php
namespace tarik;
class Counter
{
    private $numbers = array();
    public function getCounter()
    {
        $result = '';
        foreach ($this->numbers as $number => $count){
            $result .= "$number: $count, ";
        }
        $result= substr($result, 0, -2);
        return $result;
    }
    public function count($number)
    {
        if(isset($this->numbers[$number])){
            $this->numbers[$number]++;
        }else{
            $this->numbers[$number] = 1;
        }
    }
}
