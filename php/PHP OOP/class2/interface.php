<?php


interface bankAccount{
    public function credit(int $amount,$string name,string $accNumber);
    public function debit(int $amount,$stringname,string $accNumber);
}

class manageAccount implements bankAccount{
    
    public function debit(int $amount,$stringname,string $accNumber){   
    
    }

    public function debit(int $amount,$stringname,string $accNumber){
    
    }
}





?>