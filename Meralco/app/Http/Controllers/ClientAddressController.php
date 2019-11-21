<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\site_01_sensor;

// use Path\To\DOMDocument;

class ClientAddressController extends Controller
{
    // Client IP Address
    public function getSiteData(Request $request)
    {
        /**
         * get RPI3B ip address
         * 
         * Output: 192.168.1.7
         * 
         *  $ip_address = gethostbyname("192.168.10.111"); -> meralco project sample IP
         **/
        $ip_address_01 = gethostbyname("RPI3B");
        $ip_address_02 = gethostbyname("192.168.1.2");

        /**
         * get contents of RPI3B ip address
         **/
        if($ip_address_01 === "192.168.1.3" || $ip_address_02 === "192.168.1.2"){
            $site_01_contents = file_get_contents("http://".$ip_address_01."/");
            $site_02_contents = file_get_contents("http://".$ip_address_02."/");

            /**
             * DOMDocument = Represents an entire HTML or XML document
             **/
            $doc1 = new \DOMDocument();
            $doc2 = new \DOMDocument();
    
            $doc1->loadHtml($site_01_contents);
            $doc2->loadHtml($site_02_contents);
    
            $doc1->preserveWhiteSpace = false; 
            $doc2->preserveWhiteSpace = false; 

            // $sensors = [];

            /**
             * Array of table data tag (<td>)
             **/
            $site_01_datas = [        
                        $site_01_sensor1 = $doc1->getElementsByTagName('td')->item(0),
                        $site_01_sensor2 = $doc1->getElementsByTagName('td')->item(1),
                        $site_01_sensor3 = $doc1->getElementsByTagName('td')->item(2),
                        $site_01_sensor4 = $doc1->getElementsByTagName('td')->item(3),
                        $site_01_sensor5 = $doc1->getElementsByTagName('td')->item(4),
                        $site_01_sensor6 = $doc1->getElementsByTagName('td')->item(5)
                    ];

            $site_02_datas = [
                        $site_02_sensor1 = $doc2->getElementsByTagName('td')->item(0),
                        $site_02_sensor2 = $doc2->getElementsByTagName('td')->item(1),
                        $site_02_sensor3 = $doc2->getElementsByTagName('td')->item(2),
                        $site_02_sensor4 = $doc2->getElementsByTagName('td')->item(3),
                        $site_02_sensor5 = $doc2->getElementsByTagName('td')->item(4),
                        $site_02_sensor6 = $doc2->getElementsByTagName('td')->item(5)                   
            ];
            /**
             * The value from set of <td> array
             **/
            // foreach($datas as $data){
            //     if(!is_null($data->attributes->getNamedItem("value")))
            //     {
            //         array_push($sensors, $data->nodeValue);
            //     }
            // }
    
            /**
             * Store all sensors to the database table called "site_01_sensors"
             **/
            $site_01 = new site_01_sensor();
            $site_01->id = $request->id;
            $site_01->ip_address = $ip_address_01;
            $site_01->temperature = $site_01_sensor1->attributes->getNamedItem("value")->nodeValue;
            $site_01->light = $site_01_sensor2->attributes->getNamedItem("value")->nodeValue;
            $site_01->battery = $site_01_sensor3->attributes->getNamedItem("value")->nodeValue;
            $site_01->EC = $site_01_sensor4->attributes->getNamedItem("value")->nodeValue;
            $site_01->PH = $site_01_sensor5->attributes->getNamedItem("value")->nodeValue;
            $site_01->water_level = $site_01_sensor6->attributes->getNamedItem("value")->nodeValue;
            $site_01->status_id = 1;
            $site_01->save();

            $site_02 = new site_01_sensor();
            $site_02->id = $request->id;
            $site_02->ip_address = $ip_address_02;
            $site_02->temperature = $site_02_sensor1->attributes->getNamedItem("value")->nodeValue;
            $site_02->light = $site_02_sensor2->attributes->getNamedItem("value")->nodeValue;
            $site_02->battery = $site_02_sensor3->attributes->getNamedItem("value")->nodeValue;
            $site_02->EC = $site_02_sensor4->attributes->getNamedItem("value")->nodeValue;
            $site_02->PH = $site_02_sensor5->attributes->getNamedItem("value")->nodeValue;
            $site_02->water_level = $site_02_sensor6->attributes->getNamedItem("value")->nodeValue;
            $site_02->status_id = 1;
            $site_02->save();

            /**
             * retreive all sensors 
             **/
            $sensors = site_01_sensor::all();
            
            return view("index", compact('sensors'));
        }
        else{
            return view('index');
        }
    }
    
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function site01(Request $request)
    {
        // $sensors = site_01_sensor::select('id','ip_address', 'temperature', 'light', 'battery', 'EC', 'PH', 'water_level', 'status_id')->where('ip_address','LIKE', '%'."192.168.1.3".'%')->get();

        // return view('pages.site_01_datalog', compact('sensors'));
        return view('pages.site_01_datalog');
    }

    public function site02(Request $request)
    {
        // $sensors = site_01_sensor::select('id','ip_address', 'temperature', 'light', 'battery', 'EC', 'PH', 'water_level', 'status_id')->where('ip_address','LIKE', '%'."192.168.1.2".'%')->get();

        // return view('pages.site_02_datalog', compact('sensors'));
        return view('pages.site_02_datalog');
    }
}
