<?php
/**
 * Created by PhpStorm.
 * User: Rudys Natanael Acosta Crousset
 * Date: 14/8/15 -33
 * Time: 10:00 AM
 */
namespace MiCatalogo\Http\Helpers;

/**
 * Class ArrayComplement
 *
 * @autor Rudys Natanael Acosta <natanael926@gmail.com>
 * @package MiCatalogo\Http\Helpers
 */
trait ArrayComplement {


    /**
     * Get the first value in first element in an array
     * 
     * @param  Array  $item 
     * @return string  
     */
    public static function getFirstValueInArray(Array $item)
    {
        // $firstElement = current($item);

        // while (is_array($firstElement)) {
        //     $firstElement = $firstElement[key($firstElement)];
        // }
        
        return head($item);
    }

    /**
     * @param $array Array
     * @return string [return the last value in the last element]
     */
    public static function getLastValueInArray(Array $item)
    {

        $lastElement = last($item); // get the last element

        /*
         * If the last element is array, 
         * We are to get the last value in the element
         */
        // while(is_array($lastElement)) {

        //     $lastElement = (count($lastElement) > 0) ? end($lastElement) 
        //                                             : $lastElement[key($lastElement)];
        // }
        
        return $lastElement;
    }

   

}