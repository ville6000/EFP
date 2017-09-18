<?php

class EmployeeList {

    private $employees = [];

    public function __construct($employees = []) {
        $this->employees = $employees;
    }

    public function promptForRemoval() {
        $name = trim($this->promptName());

        $this->remove($name);
        $this->list();
    }

    public function list() {
        printf("There are %s employees: \n", count($this->employees));

        foreach ($this->employees as $employee) {
            echo $employee . "\n";
        }
    }

    public function promptName() {
        echo "\nEnter employee name to remove: ";

        return fgets(STDIN);
    }

    public function remove($name) {
        $key = array_search($name, $this->employees);

        if ($key !== false) {
            unset($this->employees[$key]);
        } else {
            echo "404: Employee not found. \n";
        }
    }
}