<?php

require './employee_list_removal.php';

$employeeList = new EmployeeList([
    'John Smith',
    'Jackie Jackson',
    'Chris Jones',
    'Amanda Cullen',
    'Jeremy Goodwin',
]);

$employeeList->list();
$employeeList->promptForRemoval();