<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('showClients');
    }

    /**
     * 
     */
    public function showClient(){
        $client = [
            'name' => 'Mobile Mod Center',
            'web' => 'www.local.com',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, porro deserunt praesentium consectetur consequuntur sit illum placeat eum. Repudiandae, facilis deserunt! Provident eius voluptate corporis et omnis, dolore laboriosam nostrum.',
            'images' => 'images/mobile-mod-center/images/mobile-mod-center-display-01.png',
        ];
    
        return view('caseStudy', [
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
