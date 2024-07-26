<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      $data = User::get();
      return view('pages.Home', compact('data'));
    }

    public function add() {
      return view('pages.AddUser');
    }

    public function storeUser(Request $request){
       
        $data=$request->validate([
          'name'=>'required ',
          'email'=>'required|email',
           'phone' => 'required',
           'city' => 'required',
           'image' =>'required',
           'password' =>'required'
        ]);
        $path= $request->image->store('images', 'public');
        $data['image'] = $path
        ;
        
        User::create($data);
        return redirect('/')->with('status', "Data stored successfully.");

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->city = $request->city;
        // $user->image = $path;
        // $user->save();
    }

    public function details(string $id){
       $user = User::find($id);
       return view('pages.userDetails', compact('user'));
    }

    public function edit(string $id){
       $user = User::find($id);
       if($user){
        return view('pages.userEdit', compact('user'));
       }else{
        return redirect('/')->with('status', 'No record found.');
       }
    }

    public function userUpdate(Request $request,string $id){
      $request->validate([
        'name'=>'required ',
        'email'=>'required|email',
         'phone' => 'required',
         'city' => 'required',
         
      ]);

      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->city = $request->city;
      $user->phone = $request->phone;
      if($request->image){
        $path = public_path('storage/'). $user->image;
        if($path){
          @unlink($path);
        }

        $image_path = $request->image->store('images', 'public');
        $user->image = $image_path;
      }
      $user->save();
      return redirect('/')->with('status', 'data updated successfully.');
    }

    public function delete(string $id){
      $user = User::find($id);
      if($user){
        $user->delete();
        return redirect('/')->with('status',' record deleted successfully');
      }else{
        return redirect('/')->with('status', "No record found.");
      }
    }
}
