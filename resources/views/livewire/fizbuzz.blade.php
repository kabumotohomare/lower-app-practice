<?php

use function Livewire\Volt\{state};

state([
    'count' => 0,
    'result' => 0
]);

$increment = function(){
    $this->count++;
    
    if($this->count % 3 == 0 && $this -> count % 5 == 0){
        $this->result = "FizzBuzz";
    }elseif($this->count % 5 == 0){
        $this->result = "Buzz";
    }elseif($this->count % 3 == 0){
        $this->result = "Fizz";
    }else{
        $this->result = $this->count;
    }
};

?>

<div>
    <h1>FizzBuzzカウンター</h1>
    <div>カウント: {{$result}}</div>
    <button wire:click="increment">+</button>
</div>


