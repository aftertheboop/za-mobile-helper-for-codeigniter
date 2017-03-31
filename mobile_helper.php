<?php
/**
 * Mobile Helper
 * 
 * Helper class for mobile numbers
 */

function human_to_db($number) {
    
    $db_number = '27' . substr($number, -9);
    
    return $db_number;
    
}

function db_to_human($number) {
    
    $human_number = '0' . substr($number, -9);
    
    return $human_number;
    
}