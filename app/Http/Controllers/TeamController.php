<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Good;

use function Symfony\Component\String\b;

class TeamController extends Controller
{
    /**
     * 
     *  @param Request 
     * 
     */
    public function index(Request $request)
    {
        //検索機能
        $goods = Good::orderBy("created_at" , "asc")->paginate(20);
        $search = $request->input('search');
        $query = Good::query();
        if ($search) {
            $query->where('name','like', '%'.$search.'%');
            $query->orwhere('id','like', '%'.$search.'%');
            $query->orwhere('content','like', '%'.$search.'%');
            $query->orwhere('price','like', '%'.$search.'%');
            $query->orwhere('kind','like', '%'.$search.'%');
        }
        $goods = $query->paginate(20);
        
        return view("goods.goods" , [
            "goods" => $goods,
        ]);
    }



    public function register(Request $request)
    {
        return view("goods.goods_register");
    }

    public function user (Request $request)
    {
        return view("users.users_register");
    }
    public function edit($id)
    {
        $goods = good::find($id);
        return view("goods.edit" ,  [
            "goods" => $goods,
        ]);
    }

    public function update(Request $request , good $goods)
    {
        $goods -> goodsnumber = $request -> goodsnumber;
        $goods -> name =$request -> name;
        $goods -> kind = $request -> kind;
        $goods -> price = $request -> price;
        $goods -> content = $request -> content;
        $goods -> save();
           
        return redirect('/goods');
    }

   /**
        * タスク削除
        *
        * @param Request $request
        * @param goods $goods
        * @return Response
        */
        public function delete(Request $request, good $goods )
        {
            $goods->delete();
            return redirect('/goods');
        }

    
    /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
        public function store(Request $request)
        {
            $goods =new Good();
            // $goods -> goodsnumber = $request -> goodsnumber;
            $goods -> name =$request -> name;
            $goods -> kind = $request -> kind;
            $goods -> price = $request -> price;
            $goods -> content = $request -> content;
            $goods -> goodsnumber = $request -> goodsnumber;
            $goods -> save();

            return redirect('/goods');
        }

    }