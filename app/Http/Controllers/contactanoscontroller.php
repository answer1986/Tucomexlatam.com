<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\Contactosweb;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
/*{
    public function index()
    {
     return view('contacto');   
    }
    public function store(request $request){

        $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'massege' => 'required',
                'tel' => 'required',
                'razon'=>'required',
                'rut'=>'required', 
                'form-file'=>'required',

        ]);


        $correo =new Contactosweb($request->all());
        
        Mail::to("inv.riquelme@gmail.com")->send($correo);
        return "Mensaje enviado";

        return redirect()->route('contacto')->with('info','Mensaje enviado');
    }
}