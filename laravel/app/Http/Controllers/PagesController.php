<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Project;
use Psr\Log\InvalidArgumentException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
     * TODO remove logic from this controller and move it to a service class. Check for strings passed as well as integers and return exception
     */
    public function showClient($id){
        try{
            $client = Client::findOrFail($id);
            $images = $client->projects[0]["images"];
            $tasks = json_decode($client->projects[0]["tasks"]);


            $json = json_decode($images);
            $client = [
                'name' => $client->name,
                'web' => $client->websiteUrl,
                'body' => $client->caseStudy,
                'images' => $json,
                'tasks' => $tasks
            ];

            return view('clients.caseStudy', [
                'client' => $client,
//                'tasks' => $tasks,
                'error' => null
            ]);
        }catch (ModelNotFoundException $exception){
            return view('clients.caseStudy', [
                'error' => $exception->getMessage()
            ]);
        }

    }

    /**
     * 
     */
    public function contact(){
        return view('contact');
    }
}
