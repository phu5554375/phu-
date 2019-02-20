<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TblIntro;
use App\Model\images;
class HomeController extends Controller
{

    public function index()
    {
        $data= TblIntro::all();
        return view("frontend.index", ["tbl_intros"=>$data]);
        
    }

    public function editor(Request $request)
    {
                 // return $request->session()->get('images');;

        return view('frontend.editor');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function fqa()
    {
        return view('frontend.fqa');
    }
    public function terms()
    {
        return view('frontend.terms');
    }

    public function imagesUploadPost(Request $request)

    {

         if($files=$request->file('images')){
            
         foreach($files as $file){
            $name=$file->getClientOriginalName();
            $imageName = time().$name;
            $file->move(public_path('images'), $imageName);
            $images[]=$imageName;

        }
          $request->session()->put('images',$images);

        }
        return $images;

       //  request()->validate([

       //    'uploadFile' => 'required',

       // ]);


        // foreach ($request->file('uploadFile') as $key => $value) {

        //     $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

        //     $value->move(public_path('images'), $imageName);

        // }




    }
}
