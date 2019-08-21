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
        $task = '[{
        "id": "0",
        "author": "Pop it records",
        "methods": ["Sketched wire frames", "created mock composition"],
        "services": ["Brand Development", "Web Site development"]
    }]';

        $images = '[{
        "id": "0",
        "author": "Everything Hair &amp; Nails",
        "thumbnail": "everything-hair-and-nails/images/everything-hair-and-nails-display-01.png",
        "display_image": "everything-hair-and-nails/images/everything-hair-and-nails-comp01.jpg"
    }, {
        "id": "1",
        "author": "Everything Hair &amp; Nails",
        "thumbnail": "everything-hair-and-nails/images/everything-hair-and-nails-display-02.png",
        "display_image": "everything-hair-and-nails/images/everything-hair-and-nails-comp02.jpg"
    }]';

        $client = [
            'name' => 'DeMario',
            'web' => 'd3mario.com',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et nisi eu quam scelerisque ultricies<span rel="caseStudy-dots">...</span> <span class="more" rel="caseStudy-more">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi sit amet auctor nisl. Aenean fermentum justo in pulvinar rhoncus. Nullam cursus eros et massa facilisis, vestibulum condimentum orci gravida. Vivamus egestas placerat diam, a convallis arcu ultricies a. Quisque sed magna sit amet lacus sollicitudin imperdiet. Quisque rutrum elit a justo dapibus iaculis. Suspendisse mauris enim, viverra vitae velit eu, malesuada finibus sem. Vivamus et ex enim. Mauris sagittis ut dui a efficitur.</span>',
            'images' => json_decode($images),
            'tasks' => json_decode($task)
        ];

        return view('about', [
            'client' => $client,
            'error' => null
        ]);
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
