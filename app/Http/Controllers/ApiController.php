<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class ApiController extends Controller
{
    public function index()
    {
        $query = "
        SELECT *
        FROM `movies`
        WHERE 1
        ORDER BY `rating` DESC
        LIMIT 0, 10
        ";

        $movies = DB::select($query);
        //return $movies into the response as JSON string
        return $movies;
        
        

    
        // return [
        //     'success' => true,
        //     'message' => 'Response successfully returned.',
        //     'errors' => [],
        //     'data' => []
        // ];
    }
}