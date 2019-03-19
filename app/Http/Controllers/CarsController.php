<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
  

  public function __construct(){
    $this->middleware('auth')->except(['index','show']);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('type')){
          $cars = Car::where('type', request('type'))->paginate(8)->appends('type', request('type'));
        }else if(request()->has('search')){
          $search = request()->get('search');
          $cars = Car::where('make', 'like', '%'.$search.'%')->
          orWhere('model', 'like', '%'.$search.'%')->
          orWhere('year', 'like', '%'.$search.'%')->orWhere('type', 'like', '%'.$search.'%')->paginate(8);
        }else{
          $cars = Car::paginate(8);
        }
      
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      if($request->has('image1')){
        $fileNameWithExt = $request->file('image1')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image1')->getClientOriginalExtension();
        $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
        $request->image1->storeAs('public/img',$fileNameToStore1);
      }

      if($request->has('image2')){
        $fileNameWithExt = $request->file('image2')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image2')->getClientOriginalExtension();
        $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
        $request->image2->storeAs('public/img',$fileNameToStore2);
      }

      if($request->has('image3')){
        $fileNameWithExt = $request->file('image3')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image3')->getClientOriginalExtension();
        $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
        $request->image3->storeAs('public/img',$fileNameToStore3);
      }

      if($request->has('image4')){
        $fileNameWithExt = $request->file('image4')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image4')->getClientOriginalExtension();
        $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
        $request->image4->storeAs('public/img',$fileNameToStore4);
      }

        Car::create(['make'=> request('make'),
        'model'=> request('model'),
        'year'=> request('year'),
        'milleage'=> request('milleage'),
        'description'=> request('description'),
        'fueltype'=> request('fueltype'),
        'drivetype'=> request('drivetype'),
        'engine'=> request('engine'),
         'price'=> request('price'),
         'type'=> request('type'),
         'transmission'=> request('transmission'),
         'doors'=> request('doors'),
          'features'=> request('features'),
         'image1'=> $request->image1 = $fileNameToStore1,
         'image2'=> $request->image2 = $fileNameToStore2,
         'image3'=> $request->image3 = $fileNameToStore3,
          'image4'=> $request->image4 = $fileNameToStore4]);



        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
      
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Car $car)
    {
        $car->make = request('make');
        $car->model = request('model');
        $car->year = request('year');
        $car->milleage = request('milleage');
        $car->description = request('description');
        $car->fueltype = request('fueltype');
        $car->drivetype = request('drivetype');
        $car->engine = request('engine');
        $car->price = request('price');
        $car->type = request('type');
        $car->transmission = request('transmission');
        $car->doors = request('doors');
        $car->features = request('features');

        $car->save();

        return redirect('/cars'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
      $car->delete();
      return redirect('/cars'); 
    }
}
