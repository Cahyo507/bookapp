<?php
namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Laravel\Lumen\Routing\Controller as BaseController;

class BooksController extends BaseController
{
    public function index()
{
  return Book::all();

}

    public function getid(Request $request,$id){
        $result = DB::select("SELECT * FROM books WHERE id = $id");
        if(empty($result)){
            return response()->json(['message'=> 'Book Not Found'], 404);
        }
        else{
        return $result;
        }
    }
}