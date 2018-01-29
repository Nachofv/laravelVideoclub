<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Movie;

class CatalogController extends Controller
{
    /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
         
        return view('catalog.index', array('arrayPeliculas'=>Movie::all() ));

        
    }

    public function getShow($id)
    {
        return view('catalog.show', array('pelicula'=>Movie::findOrFail($id+1), 'id'=>$id));
    }

    
    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        return view('catalog.edit', array(Movie::findOrFail($id+1),'id'=>$id));
    }

    

}

