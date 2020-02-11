<?php

/**
 * 
 */
class Employee
{
    public $name;

    public $title;

    public $salary;

    public function setEmployeeName(string $name)
    {
        $this->name = $name;
    }

    public function getEmployeeTitle()
    {
        return $this->title;
    }

    public function getEmployeeProfile():? array
    {
        return [
            'name' => $this->name,
            'title' => $this->title,
            'salary' => $this->salary,
        ];
    }

    public function getEmployeeMonthlySalary(): int
    {
        return $this->salary;
    }
}