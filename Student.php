<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * 
 * @Author Calvin Truong
 */

class Student
{
    //constructor
    function _construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // add an email to an array list of emails as well as the value
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    // add a grade to an arraylist of grades
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    // calculate the average grade
    function average(){
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // Build fancy text representation for reporting 
    function toString(){
        $result = '<b>' . $this->first_name . ' ' .
                $this->surname . '</b>';
        $result .= ' (' .$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= '<b>' . $which . '</b>: ' . $what. "\n";
        $result .= "\n";
        return '<pre>' . $result . '<hr/></pre>';
    }
    
}
