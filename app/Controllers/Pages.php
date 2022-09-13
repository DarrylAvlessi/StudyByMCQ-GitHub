<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function afficher($contenu = 'accueil')
    {
        if ( ! is_file(APPPATH.'/Views/statiques/'.$contenu.'.php'))
        {
        // Whoops, we don't have a page for that!
        throw new
        \CodeIgniter\Exceptions\PageNotFoundException($contenu);
        }
        $data['titre'] = ucfirst($contenu); // Capitalize the first letter
        $data['contenu'] = $contenu;
        echo view('templates/entete', $data);
        echo view('statiques/'.$contenu, $data);
        echo view('templates/pied', $data);
    }
}