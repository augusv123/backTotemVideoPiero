<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tablet;
use Illuminate\Http\Request;
use App\Http\TabletResource;
use Illuminate\Support\Facades\Validator;
class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tablets = Tablet::all();
        return response()->json($tablets,200);
        return response([ 'tablets' => TabletResource::collection($tablets), 'message' => 'Retrieved successfully'], 200);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'descripcion' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $tablet = Tablet::create($data);
        return response()->json("Created successfully",200);

        return response(['project' => new TabletResource($tablet), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function show(Tablet $tablet)
    {
        return response(['tablet' => new TabletResource($tablet), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tablet $tablet)
    {
        $tablet->update($request->all());

        return response(['tablet' => new TabletResource($tablet), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tablet $tablet)
    {
        $tablet->delete();

        return response(['message' => 'Deleted']);
    }

    public function getVideos(Request $request){
        
        $tablet = Tablet::where('identificacion',$request->nombretablet)->first();
        if($tablet == null) return response()->json("totem no encontrado",404);
        return response()->json($tablet,200);

    }
    public function getTablets(Request $request){
        
        $tablets = Tablet::all();
        return response()->json($tablets,200);

    }
    
}
