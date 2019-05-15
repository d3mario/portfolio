<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Project;

class PagesController extends Controller
{
    //Home
    public function home(){
        return view('home');
    }

    /**
     * 
     */
    public function about(){
        return view('about');
    }

    /**
     * 
     */
    public function listClients(){
        $clients = Client::all();

        return view('clients.showClients', compact('clients'));
    }

    /**
     * 
     */
    public function showClient($id){
        $client = Client::findOrFail($id);
        $client = [
            'name' => $client->name,
            'web' => $client->websiteUrl,
            'body' => $client->caseStudy,
            'images' => 'images/'.$client->displayIcon,
        ];
    
        return view('clients.caseStudy', [
            'client' => $client
            ]);
    }

    /**
     * 
     */
    public function contact(){
        return view('contact');
    }
}
