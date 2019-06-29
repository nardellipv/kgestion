<?php

namespace kindergestion\Http\Controllers\Root;

use Illuminate\Http\Request;
use kindergestion\Http\Controllers\Controller;
use kindergestion\Photo;
use Illuminate\Support\Facades\File;
use Image;

class PhotoController extends Controller
{
    public function photoList()
    {
        $photos = Photo::all();

        return view('root.parts.images.list', compact('photos'));
    }

    public function addPhotoView()
    {
        return view('root.parts.images.adimage');
    }

    public function addPhoto(Request $request)
    {
        $photo = new Photo();
        $photo->fill($request->all())->save();

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo'] = time() . '-' . $request->name . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'front/images/images/thumbnail/';
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $input['photo']);

            $destinationPath = 'front/images/images/';
            $image->move($destinationPath, $input['photo']);

            $photo->photo = $input['photo'];
        }

        $photo->update();

        return back();
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);

        File::delete(public_path('front/images/images/thumbnail/' . $photo->photo));
        File::delete(public_path('front/images/images/' . $photo->photo));

        $photo->delete();

        return back();
    }
}
