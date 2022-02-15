<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home(){
        return view('pages.postcards');
    }
    public function create(){
        return view('pages.postcardCreate');
    }
    public function store(Request $request){

        $data = $request -> validate([
            'sender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'required|image'
        ]);
        $imageFile = $data['image'];
        $imageName = rand(100000,999999) ."_". time() .".". $imageFile ->getClientOriginalExtension();
        $imageFile -> storeAs('/postcards',$imageName,'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('postcards.view');
    }
    public function delete($id){
        $postcard = Postcard::FindOrFail($id);
        $postcard -> delete();

        return redirect() -> route('postcards.view');
    }
}
