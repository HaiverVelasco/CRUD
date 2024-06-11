<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function food(){
        return view('markets.articlee');
        }
    
    public function shop (Request $request){
        $Article=new Article();
        $Article-> name=$request->name;
        $Article-> price=$request->price;
        $Article-> description=$request->description;
        $Article-> cantidad=$request->cantidad;
        $Article-> fecha=$request->fecha;
        $Article->save();
        return $Article;
    }
    
    public Function list(){
        $markets = Article::orderBy('id','desc')->get();
        return view('markets/list', compact('markets'));
        }
    
        public function show($id){
            $markets=Article::find($id);  
            return $markets;
        }
    
        public function destroy(Article $markets){
          $markets->delete();
          return redirect()->route('markets.list');
        }

        public function edit (Article $markets){

            return view('markets.edit',compact('markets'));
    
        }
        public function update(Request $request,Article $markets ){
            $markets-> name=$request->name;
            $markets-> price=$request->price;
            $markets-> description=$request->description;
            $markets-> cantidad=$request->cantidad;
            $markets-> fecha=$request->fecha;
            $markets->save();
            return redirect()->route('markets.list');
    
        }
}
