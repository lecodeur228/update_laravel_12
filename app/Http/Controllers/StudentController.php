<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $persones = [
            [
                'nom' => 'John',
                'prenom' => 'Doe',
                'age' => 25,
                'sexe' => 'M',
            ],
            [
                'nom' => 'TOMEGAH',
                'prenom' => 'Jordan',
                'age' => 25,
                'sexe' => 'F',
            ],
            [
                'nom' => 'BANA',
                'prenom' => 'irin',
                'age' => 18,
                'sexe' => 'M',
            ],
            [
                'nom' => 'ABALO',
                'prenom' => 'Charly',
                'age' => 30,
                'sexe' => 'F',
            ],
            [
                'nom' => 'AFIVI',
                'prenom' => 'Maxime',
                'age' => 20,
                'sexe' => 'F',
            ],
            [
                'nom' => 'ABOU',
                'prenom' => 'Camile',
                'age' => 50,
                'sexe' => 'F',
            ],

        ];

        return view('students.index',compact('persones'));
    }
    // fonction qui affiche la vue du formulaire
    public function create()
    {
        return view('students.create');
    }

    // fonction qui va stocker le student dans la base de données
    public function store(Request $request)
    {

        dd($request->all());

    }
}
