<?php

namespace App\Http\Controllers;

use App\Models\Edit;
use App\Http\Requests;
use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

class EditController extends Controller
{

    public function index($id)
    {
        $edit = Edit::findOrFail($id);
        $edit->markdown = Markdown::convertToHtml($edit->content);
        
        return view('edit.edit', ['edit' => $edit]);
    }
    
}
