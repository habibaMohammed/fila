<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,bmp,gif|max: 2000'
            ]);
            $title = $request->input('title');
            $caption = $request->input('caption');
            $uploadImage = $request->file('image');
            $imageNameWithExt = $uploadImage->getClientOriginalName(); 
            $imageName =pathinfo($imageNameWithExt, PATHINFO_FILENAME);
            $imageExt=$uploadImage->getClientOriginalExtension();
            $storeImage=$imageName . time() . "." . $imageExt;
            $request->image->move(public_path('images'), $storeImage);
            $carousel= Slider::create([

                'image' => $storeImage,
                'title' => $title,
                'caption' => $caption,
                'status' =>1
            ]);
            return redirect('slider');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sliders = Slider::all();
        return view('slider.show', compact('sliders'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit',compact('slider'));
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
        
      $slider = Slider::find($id);
      $this->validate($request, array(
        'title'=>'required|max:225',
        'caption'=>'required|max:225',
        'image'=>'required|image'
     ));

      $slider = Slider::where('id',$id)->first();

      $slider->title = $request->input('title');
      $slider->caption = $request->input('caption');

      if ($request->hasFile('image')) {
    //    $photo = $request->file('image');
    //    $filename = 'slide' . '-' . time() . '.' . $photo->getClientOriginalExtension();
    //    $location = public_path('images/');
    //    $request->file('image')->move($location, $filename);
    $uploadImage = $request->file('image');
    $imageNameWithExt = $uploadImage->getClientOriginalName(); 
    $imageName =pathinfo($imageNameWithExt, PATHINFO_FILENAME);
    $imageExt=$uploadImage->getClientOriginalExtension();
    $storeImage=$imageName . time() . "." . $imageExt;
    $request->image->move(public_path('images'), $storeImage);

       $oldFilename = $slider->image;
       $slider->image= $storeImage;
       if(!empty($slider->image)){
        \Storage::delete($oldFilename);
       }
     }

     $slider->save();

     return redirect()->route('slider.show',
         $slider->id)->with('success',
         'Slider, '. $slider->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.show')->with('success','Slider has been deleted successfully');
 
    }
}
