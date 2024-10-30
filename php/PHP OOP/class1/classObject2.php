<?php
class MileageCalculator{
   // public $totalFuelPrice ;
   // public $pricePerLitre ;
  //  public $distance ;
    function __construct(public $totalFuelPrice,public $pricePerLitre,public $distance){
        // $this->totalFuelPrice = $totalFuelPrice;;
        // $this->pricePerLitre = $pricePerLitre;
        // $this->distance = $distance;
    }  /// this is called property constructor
    function mileage(){
        $totalFuel= $this->totalFuelPrice / $this->pricePerLitre ;
        $mileage= $this->distance / $totalFuel ;
        return $mileage;
        // echo "The Mileage of car1 is {$mileage}\n" ;
    }
}

$car1 = new MileageCalculator(1000,200,20);  //instantiate
$car2 = new MileageCalculator(2000,500,50) ;

// $car1->totalFuelPrice= 1000;
// $car1->pricePerLitre=200;
// $car1->distance = 20 ;

// $car2->totalFuelPrice= 2000;
// $car2->pricePerLitre= 500;
// $car2->distance = 50;


echo "The Mileage of car1 is ", $car1->mileage()."\n" ;
echo "The Mileage of car2 is ", $car2->mileage()."\n" ;

// $car1->mileage();
// $car2->mileage();


?> 