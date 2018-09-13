<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|max:55',
                'img' => 'required'
            ]);

            if($validator->fails()){
                return redirect()->route('index')->withErrors($validator)->withInput();
            }

            if($request->hasFile('img')){
                $file = $request->file('img');
                $input['img'] = time().$file->getClientOriginalName();

                $img = Image::make($file);
                $img->insert('http://pngimage.net/wp-content/uploads/2018/06/proof-watermark-png-4.png',
                    'center');
                $img->save(public_path().'/assets/img/'.$input['img']);
//                $file->move(public_path().'/assets/img', $input['img']);
            }

            $medicine = new Medicine();
            $medicine->fill($input);

            if($medicine->save()){
                return redirect()->route('index')->with('status', 'The Medicine is added');
            }

        }

        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('index', [
                                    'categories' => $categories,
                                    'suppliers' => $suppliers,
                                ]);
    }
}
