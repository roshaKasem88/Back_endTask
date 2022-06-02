<?php

namespace App\Http\Controllers\API;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([status=>'success','data'=>post::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=Validator::make($request->all(),[
            'name'=>'required',
            'daily_budget'=>'required',
            'total'=>'required',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);

        if ($validation->fails())
        {

            return response()->json(['status'=>'error','errors'=> $validation->errors()],422);
        }
           $post=new post();
           $post->name=$request->name;
           $post->daily_budget=$request->daily_budget;
           $post->total=$request->total;
           $post->image = json_encode($image_names);

          if($post->save())
          {
            return response()->json(['status'=>'success','data'=>$post], 201);
          }
          else{
              return  response()->json(['status' =>'error'],500);


          }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=post::find($id);
       if(empty($post))
       {
          return  response()->json(['status'=>'error'], 404);

        }
        else
        {
            return  response()->json(['status'=>'success','data'=>$post], 200);
        }



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
        $post=post:: find($id);
        if (empty($post))
        {
           return response()->json(['status'=>'error','message'=>'the post is not found'], 404);

        }

        $validation=Validator::make($request->all(),[
            'name'=>'required',
            'daily_budget'=>'required',
            'total'=>'required',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $image_names = [];
        // loop through images and save to /uploads directory
        foreach ($request->file('images') as $image) {
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/uploads/', $name);
            $image_names[] = $name;
        }
        if ($validation->fails())
        {

            return response()->json(['status'=>'error','errors'=> $validation->errors()],422);
        }
           $post->name=$request->name;
           $post->daily_budget=$request->daily_budget;
           $post->total=$request->total;
           $post->image = json_encode($image_names);

          if($post->update())
          {
            return response()->json(['status'=>'success','data'=>$post], 201);
          }
          else{
              return  response()->json(['status' =>'error'],500);


          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);

        if (empty($post))
        {
           return response()->json(['status'=>'error','message'=>'the post is not found'],  404);

        }
        elseif($post->delete())
        {
            return response()->json(['status'=>'error','data'=>'$post'],  200);

        }
        else{
            return  response()->json(['status' =>'error'], 500);

        }

    }
}
