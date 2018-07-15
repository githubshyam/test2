<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserName;
use Illuminate\Support\Facades\Input;
//use Illuminate\Http\Request;
//use app/Http/Controllers/PhotoController.php;



class UserNameController extends Controller
{
    //
    public function user(Request $request){
       
        //public function store(Request $request)
     // $val = Validator:make($request->all ,[
    //'upload' => 'required',
//])

//if($val->fails(){
   //return redirect()->back()->with('message' => 'No file received');
//})
//else{
    //$file = $request->file('upload')->store('images');
    //return redirect()->back();
//}
    // {
        //dd($Obj->all());

        // $name = $Obj->input('name');
        // $name = $Obj->input('lastname');
        // $name = $Obj->input('upload');


        //$this->validate($Obj,[
           //'name'=>'required',
          // 'lastname' =>'required'
           //'upload'=>'required'
       // ]);

        //$destinationPath = 'image/product/';
        // $input = $Obj->all();

        //$image = str_random(6) . '_' . time() . "-" .
            //$Obj->file('upload')->getClientOriginalName();
        //$input['upload'] = $Obj->file('upload')->move($destinationPath, $image);
        //$input['upload'] = str_replace('\\','/',$input['upload']);

        //Product::create($input);
        //session()->flash('message','form has been created successfully');
        //return redirect()->back();
    // }
    //dd($Obj->all());
    //public function user(Request $Obj)
//{
    //return Request::post();
//}
        //public function store(Request $request)
   // {
       // $this->validate($request,[
         //  'name'=>'required',
           // 'product_image'=>'required'
        //]);

        //$destinationPath = 'image/product/';
       // $input = $request->all();

       // $image = str_random(6) . '_' . time() . "-" .
           // $request->file('product_image')->getClientOriginalName();
        //$input['product_image'] = $request->file('product_image')->move($destinationPath, $image);
       // $input['product_image'] = str_replace('\\','/',$input['product_image']);

        //Product::create($input);
       // session()->flash('message','Product has been created successfully');
       // return redirect()->back();
    // }

        // $inputs = $Obj->all();

        //$destinationFolder = 'image/uploads';

        //dd($Obj->upload);

        //$file = Input::file('upload');

        //dd($file);

        //$file->move( $destinationFolder, $file->getClientOriginalName());

       $userName = UserName::create([
        'name'=>$request->name,
           'lastname'=>$request->lastname,
            'upload'=>$request->upload,
        ]);
       //$file = Input::file('upload');
       //dd($file);
       //$file->move(public_path().'/images/',$user->id.'.jpg');

    	return "fill has been submitted";
    }

   public function getuser(){
    	$varaible = UserName::first();
    	return view('index', compact('varaible'));	
    }
    
}
