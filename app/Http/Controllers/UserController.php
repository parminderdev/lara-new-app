<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index()
    {
        // $user = new User();
        // var_dump($user);
        // DB::insert('insert into users ( name,email,password) values (?, ?,?)', ['Marc3','parm3@demo.com','pinka']);
        // # code...
  
          $user = new User();
        dd($user);

        User::where('id',11)->delete();
    //     $user = User::all();
    //     //return $user;
    //    $deletedRows = User::where('id', 2)->delete();

    //    $data = [
    //     'name' => 'parminder12',
    //     'email' => 'parm85@demo.com',
    //     'password' => '154641'

    //    ];

    // //    User::create($data);
    // DB::table('users')
    // ->updateOrInsert(
    //     ['email' => 'parm@demo.com', 'name' => 'rahul'],['password' => 'new']
    // );
    
    // DB::table('customer')
    // ->updateOrInsert(
    //     ['email' => 'parm@demo.com', 'name' => 'rahul'],['password' => 'new']
    // );
    //    $user1 = User::create([
    //     'name' => 'Taylor',
    //     'email' => 'Otwell',
    //     'password' => bcrypt('Developer'),
    // ]);

        foreach ($user as $U) {
            echo  $U->name;
        }
        //return 'This is from the User Controller ! Entry inserted successfully';
    }
}
