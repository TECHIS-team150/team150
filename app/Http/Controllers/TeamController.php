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
        $goods = Good::orderBy("created_at" , "asc")->get();
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
//     public function edit(Request $request , goods $goods)
//     {
//         // $id = 1;
//         // $goods = goods::find($id);
//         return view("goodss.edit" ,  [
//             "goods" => $goods,
//         ]);
//     }

//     public function update(Request $request , goods $goods)
//     {
//         $goods -> name =$request -> name;
//         $goods -> tel = $request -> tel;
//         $goods -> email = $request -> email;
//         $goods -> save();
//         // $id = 1;
//         // $goods = goods::find($id);            
//         return redirect('/goodss');
//     }

//    /**
//         * タスク削除
//         *
//         * @param Request $request
//         * @param goods $goods
//         * @return Response
//         */
//         public function delete(Request $request, goods $goods )
//         {
//             $goods->delete();
//             return redirect('/goodss');
//         }

    
    /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
        public function store(Request $request)
        {
            $goods =new Good();
            $goods -> id = $request -> id;
            $goods -> name =$request -> name;
            $goods -> kind = $request -> kind;
            $goods -> price = $request -> price;
            $goods -> content = $request -> content;
            $goods -> save();

            return redirect('/goods');
        }

    }