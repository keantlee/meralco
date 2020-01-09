<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ip_address_site;
use App\sensor_datalog;

class dashboardController extends Controller
{
    public function showMap()
    {
        $markers = ip_address_site::select('id','ip_address','name', 'address','latitude','longitude')->get();

        return view('pages.dashboard', ['markers' => $markers]);
    }

    public function showSiteLog(Request $request, $id)
    {
        /**
         * To retrieve the id of site id on database to site_dashboard view
         **/
        $site_numbers = sensor_datalog::findOrFail($id);

        /**
         * To get the latest dataset on database to dataset card view
         **/
        $latest_datalogs = sensor_datalog::where('sensor_datalogs.ip_address_sites_id', $request->id)->orderBy('sensor_datalogs.id','desc')->first();

        /**
         * To retrieve a set of sensors_datalog array on database to site_datalog view
         **/
        $datalogs = sensor_datalog::where('sensor_datalogs.ip_address_sites_id', $request->id)->get();

        return view('pages.site_datalog', compact('site_numbers', 'latest_datalogs', 'datalogs'));
    }
}
