<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Path\To\DOMDocument;

class ClientAddressController extends Controller
{
    // Client IP Address
    public function getUserIpAddr(Request $request)
    {
        /**
         * get RPI3B ip address
         * 
         * Output: 192.168.1.7
         * 
         *  $ip_address = gethostbyname("192.168.10.111"); -> meralco project sample IP
         **/
        $ip_address = gethostbyname("RPI3B");

        /**
         * get contents of RPI3B ip address
         **/
        $contents = file_get_contents("http://".$ip_address."/");

        /**
         * DOMDocument = Represents an entire HTML or XML document
         **/
        $doc = new \DOMDocument();

        $doc->loadHtml($contents);

        $doc->preserveWhiteSpace = false; 

        /**
         * Array of table data tag (<td>)
         **/
        $sensor1 = $doc->getElementsByTagName('td')->item(0); 
        $sensor2 = $doc->getElementsByTagName('td')->item(1);
        $sensor3 = $doc->getElementsByTagName('td')->item(2);
        $sensor4 = $doc->getElementsByTagName('td')->item(3);
        $sensor5 = $doc->getElementsByTagName('td')->item(4);
        $sensor6 = $doc->getElementsByTagName('td')->item(5);
        
        /**
         * This should be array
         * The value from set of <td> array
         **/
        $temperature = $sensor1->attributes->getNamedItem("value")->nodeValue;
        $light = $sensor2->attributes->getNamedItem("value")->nodeValue;
        $battery = $sensor3->attributes->getNamedItem("value")->nodeValue;
        $EC = $sensor4->attributes->getNamedItem("value")->nodeValue;
        $PH = $sensor5->attributes->getNamedItem("value")->nodeValue;
        $water = $sensor6->attributes->getNamedItem("value")->nodeValue;

        return view('index', compact('ip_address','temperature', 'light', 'battery', 'EC', 'PH', 'water'));
    }
}
