<?php

class passwordGenerator {
    private $chars;
    private $BigLetters;
    const DEFAULT_CHARS =  "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    public function __construct($chars = null, $BigLetters = false){
        $this->BigLetters = $BigLetters;
        $this->chars = $chars;

        if (is_null($chars) or empty($chars))
            $this->chars = self::DEFAULT_CHARS;
    }

    /**
     * @throws Exception
     */
    public function generate($length = 0){
        $length = intval($length);

        if(!$length or $length < 1)
            throw new Exception("length of password can't be less than 0");

        $chars_length = (strlen($this->getChars()) - 1);
        $string = $this->getChars()[rand(0, $chars_length)];

        for($i = 1; $i < $length; $i = strlen($string)){
            $r = $this->getChars()[rand(0, $chars_length)];
            if($r != $string[$i - 1]) $string .=  $r;
        }

        if($this->getBigLetters())
            return strtoupper($string);

        return $string;
    }

    /**
     * @return string
     */
    public function getChars(){
        return $this->chars;
    }

    /**
     * @return false|mixed
     */
    public function getBigLetters(){
        return $this->BigLetters;
    }
}