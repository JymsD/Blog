<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Laracasts\Flash\FlashServiceProvider;
class CategoriesController extends Controller
{
    //

    public function index(){
      
        
        $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.categories.index')->with('categories',$categories);

   }

    public function create(){
    	return view('admin.categories.create');
    }


    public function store(CategoryRequest $request){
        
      $category =new Category($request->all());
      $category->save();

      flash('La categoria '.$category->name.' ha sido creada con exito', 'success');
       return redirect()->route('admin.categories.index');
    }
    public function edit($id){
        
         $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
   
    }

    public function show($id){
    	
    }

    public function destroy($id){
        
        $category = Category::find($id);
        $category -> delete();

        flash('La categoria '.$category->name.' ha sido borrada de forma exitosa.', 'danger');
        
        return redirect() -> route('admin.categories.index');
   
    }

    public function update(Request $request, $id){
        
      $category = Category::find($id);
        $category->name = $request->name;
        
        $category->save();

    flash('La categoria '.$category->name.' ha sido editada de forma exitosa.', 'warning');
          return redirect() -> route('admin.categories.index');
     
    }
}
