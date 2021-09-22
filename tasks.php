<?php

class Task {
    public $description;
    public $completed;

    function complete() {           
        $this->completed=true;
    }
    

    public function isComplete() {
        return $this->completed;
    }

    // public function description()
    // {
    //     return $this->description();
    // }

}




