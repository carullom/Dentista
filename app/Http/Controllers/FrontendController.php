<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function chisiamo(){
        $dentisti=[
            ['name'=>'Giacomo',
            'surname'=>'Rossi',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
            'img'=>'/media/dentista2.jpg'],
            ['name'=>'Giuseppe',
            'surname'=>'Conte',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
            'img'=>'/media/dentista3.jpg'],
            ['name'=>'Alessio',
            'surname'=>'Greco',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
            'img'=>'/media/dentista1.jpg'],
            ['name'=>'Marco',
            'surname'=>'Tuccio',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
            'img'=>'/media/dentista4.jpg'],
            ['name'=>'Luisa',
            'surname'=>'Salpietro',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
            'img'=>'/media/dentista-donna.jpg'],
            ['name'=>'Walter',
            'surname'=>'Totti',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam laborum, dolorum tempore autem vero fuga cupiditate, debitis illum temporibus nesciunt facilis pariatur nisi consequatur porro molestias deleniti voluptate cum iusto!',
                'img'=>'/media/dentista5.jpg']
        ];

        return view ('chi-siamo', ['dentisti'=>$dentisti]);

    }

    public function cosafacciamo()
    {
        $servizi=[
            ['name'=>'Pulizia dei denti',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nemo. Eligendi unde excepturi cumque dolores deserunt delectus repellat quasi. Eius blanditiis laborum asperiores, nobis voluptatibus iste facilis voluptatem dolore iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur natus voluptatibus culpa, voluptate ducimus quidem esse, eius saepe necessitatibus ipsum ea dolores id temporibus laboriosam optio voluptates, quod autem.',
            'img'=>'/media/pulizia.jpg',
            'price'=>'90'],

            ['name'=>'Sfaccettatura',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nemo. Eligendi unde excepturi cumque dolores deserunt delectus repellat quasi. Eius blanditiis laborum asperiores, nobis voluptatibus iste facilis voluptatem dolore iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur natus voluptatibus culpa, voluptate ducimus quidem esse, eius saepe necessitatibus ipsum ea dolores id temporibus laboriosam optio voluptates, quod autem.',
            'img'=>'/media/sfaccettatura.jpg',
            'price'=>'110'],
            
            ['name'=>'Ricostruzione dente',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nemo. Eligendi unde excepturi cumque dolores deserunt delectus repellat quasi. Eius blanditiis laborum asperiores, nobis voluptatibus iste facilis voluptatem dolore iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur natus voluptatibus culpa, voluptate ducimus quidem esse, eius saepe necessitatibus ipsum ea dolores id temporibus laboriosam optio voluptates, quod autem.',
            'img'=>'/media/ricostruzione.jpg',
            'price'=>'75']
        ];

        return view('cosa-facciamo', ['servizi'=>$servizi]);
    }

    public function macchinari()
    {
        $macchinari=[
            ['name'=>'Trapano',
            "img"=>'/media/trapano.jpg',
            'description'=>'Breve descriozione del funzionamento del macchinario'],
            ['name'=>'Sedia',
            "img"=>'/media/sedia.jpg',
            'description'=>'Breve descriozione del funzionamento del macchinario'],
            ['name'=>'Strumeti',
            "img"=>'/media/strumenti.jpg',
            'description'=>'Breve descriozione del funzionamento del macchinario']
        ];
        return view('macchinari',['macchinari'=>$macchinari]);
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function submit(Request $request){
        $name= $request-> input('name');
        $email= $request-> input('email');
        $text= $request-> input('text');
        $contact= compact('name','email','text');

        Mail::to('dottore@gmail.com')->send(new ContactReceived($contact));
        
        return redirect(route('thankyou'));
        
    }

    public function thankyou()
    {
        return view('contacts.thankyou');
    }

}