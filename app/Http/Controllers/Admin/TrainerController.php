<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['trainers'] = Trainer::select('id' , 'name' , 'img' , 'phone' , 'spec')->orderBy('id' , 'DESC')->get();

        return view('admin.trainers.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|min:2|max:191',
            'spec'  => 'required|string|max:191',
            'phone' => 'nullable',
            'img'   => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $new_img = $data['img']->hashName();
        Image::make($data['img'])->resize(50, 50)->save(public_path('uploads/trainers/' . $new_img));
        $data['img'] = $new_img;
        Trainer::create($data);
        return redirect(route('trainers.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['trainer'] = Trainer::findOrFail($id);
        return view('admin.trainers.edit')->with($data);
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
        $data = $request->validate([
            'name'  => 'required|string|min:2|max:191',
            'spec'  => 'required|string|max:191',
            'phone' => 'nullable',
            'img'   => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        $old_img = Trainer::find($request->id)->img;
        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('trainers/' . $old_img);

            $new_img = $data['img']->hashName();
            Image::make($data['img'])->resize(50, 50)->save(public_path('uploads/trainers/' . $new_img));
            $data['img'] = $new_img;
        }
        else
        {
            $data['img'] = $old_img;
        }

        Trainer::findOrFail($id)->update($data);
        return redirect(route('trainers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $img = Trainer::find($id)->img;

        Storage::disk('uploads')->delete('trainers/' . $img);

        Trainer::findOrFail($id)->delete();

        return redirect(route('trainers.index'));
    }
}
