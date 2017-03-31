# Mobile Helper For Codeigniter
A helper to safely convert South African mobile numbers back and forth into international / db-safe doubles or strings and then back into something more human parseable

## What is this?
People notoriously enter mobile numbers into forms with additional characters or differing notation; and then storing a number starting with 0 in your DB sucks. 
This helper tries to get around it by providing back and forth mobile number conversion.

## Warning
This helper is built specifically to work with South African mobile numbers

## Usage
* Clone or download this repo
* Copy the application folder into your Codeigniter project directory
* Load the restful helper in your controller with
> $this->load->helper('mobile');
* Or autoload the helper file in your autoload.php
> $autoload['helper'] = array('mobile');

### Functions
#### human_to_db($number)
Takes the raw input, removes all characters that aren't numbers and truncates the number to 27... format

#### db_to_human($number, $mask)
Takes the DB output, formats the number back into 0... format and outputs the number with an XXX XXX XXXX mask if set.
