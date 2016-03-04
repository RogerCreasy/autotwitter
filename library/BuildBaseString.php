<?php
/**
 * Author: Roger Creasy
 * Email: Roger.Creasy@gmail.com
 * Date: 10/25/15
 * Time: 5:58 PM
 */

namespace library;

//create and return the base string
class BuildBaseString {

    public $baseString;

    public $sortedParams = [];

    public function __construct($baseURI, $method, $params)
    {
        ksort($params);
        foreach($params as $key=>$value){
            $this->sortedParams[] = "$key=" . rawurlencode($value);
        }

        $this->baseString = $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $this->sortedParams[]));
        return $this->baseString;
    }
}
