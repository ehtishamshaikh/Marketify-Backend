<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function signup(Request $req)
    {
        try{
            
            $NewUser = new User();
            $NewUser->name = $req['name'];
            $NewUser->email = $req['email'];
            $NewUser->password = $req['password'];
            $NewUser->save();

            return response()->json([200]);
        }catch(Exception $ex){
            throw new Exception($ex);
        }
        
    }

    function login(Request $req){
       try{
            $credentials = $req->only('email','password');
            $user = User::where("email",$credentials['email'])->first();
             if($user){
                return $user->password == $credentials['password'] ? response()->json([$user, 'status',200]) : response()->json(['status', 400]);
            }            
       }catch(Exception $ex){
            throw new Exception($ex);
       } 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
