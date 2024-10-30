<?php
// class DailyDeposit{
//     function __construct(public $deposit){

//     }

//     public $item = [] ;
//    // public $totalCost=0;
   
//    public function addItem($name,$cost){
//     $this->item[$name] = $cost ;
//    }
//    public function createReport(){
//     echo "Initial Deposit was = ",$this->deposit."\n";
//         $totalCost=0;
//         foreach ($this->item as $name => $cost) {
//             echo $name ."\t"."="."\t".$cost."\n";
//             $totalCost += $cost;
//         }
//         echo "---------------------------------------\n" ;
//         echo "Total " ."=".$totalCost."\n";
//         echo "Remaining Balance  = ",$this->deposit-$totalCost."\n";
//    }
   
// }
// $addItem= new DailyDeposit(1000);
// $addItem->addItem("dim","100");
// $addItem->addItem("alu","50");
// $addItem->addItem("murgi","300");
// $addItem->addItem("sobji","200");
// $addItem->createReport() ;



class dailyAccountant{
    public function __construct(public $deposit){

    }




//item add kora lagbe
//calculate
private $item = [] ;
private $totalCost = 0,$f=0;
public function addItem( $name , $cost){
    $this->item[$name] = $cost ;

}

public function totalCost(){
    // $totalCost = 0;
    foreach($this->item as $name => $cost){
        $this->totalCost += $cost ;
        if($this->totalCost < $this->deposit){
            echo "{$name} - {$cost}\n";
        }
       if($this->totalCost > $this->deposit){
            $this->f===1;
           $this->totalCost -= $cost ;
           echo "----------------------------------\n" ;
           echo "Total = ",$this->totalCost ."\n";
           echo "----------------------------------\n" ;
           echo "Initital Deposit = ".$this->deposit."\n";
           echo "Remaining = ",$this->deposit - $this->totalCost ."\n";
           echo "----------------------------------\n" ;
           echo "You want to add {$name} but No More Possible due to insufficient Balance!!!\n" ;
    }
    }
    // echo "----------------------------------\n" ;
    // echo "Initital Deposit = ".$this->deposit."\n";
    // echo "Total = ",$this->totalCost ."\n";
    // echo "Remaining = ",$this->deposit - $this->totalCost ."\n";
    
}

}

$obj1 = new dailyAccountant(1000);
$obj1->addItem("murgi","300") ;
$obj1->addItem("alu","50") ;
$obj1->addItem("sobji","200") ;
$obj1->addItem("mach","500") ;
// $obj1->totalCost();

//$obj1->item =[] ;
$obj1->totalCost();

?>