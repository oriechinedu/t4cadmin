<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


Use App\Levels;
use App\Api\v1\APILevel as LevelsAPI;

class LevelController extends Controller
{
    public function index(){

        $levels = LevelsAPI::index(); 
       
        json_decode($levels);
        echo json_last_error();
        return view('level.level')->with('levels',json_decode($levels));       
       
    }

    public function create(Request $request){
        
        $data = $request->all();
        
        //collect API's response and display result based on that

        $apiResponse = LevelsAPI::create($data);        
       // $obj2 = json_decode( $json, true );
        //feed view based on response
        //return('level.levels')->with('message',$response);
        

    }

    public function update(Request $request){
        
        $data = $request->all();   
        
        //call API
        $apiResponse = LevelsAPI::update($data);
        return  $apiResponse;
        
    }

    public function level($id){

        $data = ['id'=>$id];

        //call API
        $apiResponse = LevelsAPI::level($data); 

        return  $apiResponse;

    }

    public function delete($id){

       $data = ['id'=>$id];
       $apiResponse = Levels::delete($data);

        //normally this should feed a view

       return $apiResponse;

       
    }

}
