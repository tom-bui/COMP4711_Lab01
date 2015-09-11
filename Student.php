<?php

/**
 * Student class used to represent students with properties such as surname, first name, email addresses and grades
 * Methods are included to report on the student's contact info and their grades.
 *
 * @author tombui
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds an email address to this student's array of emails
     * @param type $which
     * @param type $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds a grade to this student's array of grades
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the student's average grade using the student's grades array
     * @return type
     */
    function average() {
        $total = 0;
        foreach($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Reports all of this student's information using fancy formatting
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
