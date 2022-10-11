<?php
/* A class that has a method called "A" that returns the string "PHP". */
class B
{
    /**
     * If  is less than zero, return the negative of , otherwise return .
     * 
     * @param a The number to be converted to absolute value.
     * 
     * @return int The absolute value of the number.
     */
    public static function abs($a): int
    {
        return $a < 0 ? -1 * $a : $a;
    }
    /**
     * It adds two numbers together
     * 
     * @param a The first number to add.
     * @param b The second number to add.
     * 
     * @return int The sum of the two numbers.
     */
    public static function sum($a, $b)
    {
        return $a + $b;
    }
    /**
     * It returns the sum of the absolute values of two numbers
     * 
     * @param a The first number to add.
     * @param b The number to be added to the absolute value of a.
     * 
     * @return int The sum of the absolute values of the two numbers.
     */
    public static function sum_abs($a, $b)
    {
        return self::abs($a) + self::abs($b);
    }
    /**
     * > This function returns true if either of the two parameters are true
     * 
     * @param a The first value to compare.
     * @param b The second value to compare.
     */
    public static function or($a, $b)
    {
        return $a || $b;
    }
    /**
     * > This function returns the result of the logical AND operation between the two operands
     * 
     * @param a The first value to be compared.
     * @param b The second value to compare.
     */
    public static function and($a, $b)
    {
        return $a && $b;
    }

   /**
    * If  is less than or equal to 1 or  is less than or equal to 1, return 0. Otherwise, return 1
    * 
    * @param b The first number to be compared.
    * @param a The first number to be used in the operation.
    * 
    * @return 0
    */
    public static function xor($b, $a)
    {
      if($b < 1 xor $a < 1){
        return 0;
      }else{
        return 1;
      }
    }

    /**
     * If $a is not equal to $b, return , otherwise return 
     * 
     * @param a The first parameter.
     * @param b The value to return if a is not equal to b.
     */
    public static function not($a)
    {
        return !$a;
    }
    /**
     * > If both  and  are false, return the result of  or 
     * 
     * @param a true
     * @param b boolean
     */
    public static function nor($a, $b)
    {
        return !($a || $b);
    }
    
    /**
     * If both  and  are true, return false, otherwise return true.
     * 
     * @param a The first value to compare.
     * @param b The number of bits in the output.
     */
    public static function nand($a, $b)
    {
        return !($a && $b);
    }
}
