<?php
echo "<pre>";

$res=[1=>[2,3,7,8,19],3=>[4,12],2=>[5,9],5=>6,7=>[10,13],10=>[11,18],8=>[14,20],12=>15,6=>[16,17]];

class MultiToSingle{
    public $result=[];
    public function __construct($array){
        if(!is_array($array)){
            echo "Give a array";
        }
        foreach($array as $key => $value){
            if(is_array($value)){
                for($i=0;$i<count($value);$i++){
                    $this->result[]=$value[$i];
                }  
            }else{
                $this->result[]=$value;
            }
        }
    }
}
$obj= new MultiToSingle($res);
$array=$obj->result;

print_r($array);


Multi dimensional array to single array with one line code !!!

$array=[1=>[2,5=>[4,2],[7,8=>[3,6]],5],4];
$arr=[];
array_walk_recursive($array, function($k){global $arr; $arr[]=$k;});
print_r($arr);




?>
