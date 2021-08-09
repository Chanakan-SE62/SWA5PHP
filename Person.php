<?php

include './Job.php';

class Person{
    private $job;

    public function __construct(){
        $this->job = new Job();
        $this->job->setSalary(30000);
    }

    public function getSalary(){
        return $this->job->getSalary();
    }

}

?>