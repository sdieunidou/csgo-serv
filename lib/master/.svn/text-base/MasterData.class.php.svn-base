<?php

/**
 * Description of MasterData
 *
 * @author Administrator
 */
class MasterData
{
    /**
     * Return a byte and split it out of the string
     *  - unsigned char
     *
     * @param string	$string	String
     */
    static function getByte(&$string)
    {
    	$data = substr($string, 0, 1);

    	$string = substr($string, 1);

    	$data = unpack('Cvalue', $data);

    	return $data['value'];
    }

    /**
     * Return an unsigned short and split it out of the string
     *  - unsigned short (16 bit, big endian byte order)
     *
     * @param string	$string	String
     */
    static function getShortUnsigned(&$string)
    {
    	$data = substr($string, 0, 2);

    	$string = substr($string, 2);

    	$data = unpack('nvalue', $data);

    	return $data['value'];
    }

    /**
     * Return a signed short and split it out of the string
     *  - signed short (16 bit, machine byte order)
     *
     * @param string	$string	String
     */
    static function getShortSigned(&$string)
    {
    	$data = substr($string, 0, 2);

    	$string = substr($string, 2);

    	$data = unpack('svalue', $data);

    	return $data['value'];
    }

    /**
     * Return a long and split it out of the string
     * 	- unsigned long (32 bit, little endian byte order)
     *
     * @param string	$string	String
     */
    static function getLong(&$string)
    {
    	$data = substr($string, 0, 4);

    	$string = substr($string, 4);

    	$data = unpack('Vvalue', $data);

    	return $data['value'];
    }

    /**
     * Return a float and split it out of the string
     *
     * @param string	$string	String
     */
    static function getFloat(&$string)
    {
    	$data = substr($string, 0, 4);

    	$string = substr($string, 4);

    	$array = unpack("fvalue", $data);

    	return $array['value'];
    }

    /**
     * Return a string and split it out of the string
     *
     * @param string	$string	String
     */
    static function getString(&$string)
    {
    	$data = "";

    	$byte = substr($string, 0, 1);

    	$string = substr($string, 1);

    	while (ord($byte) != "0")
    	{
    		$data .= $byte;
    		$byte = substr($string, 0, 1);
    		$string = substr($string, 1);
    	}

    	return $data;
    }
}
?>
