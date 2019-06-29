<?php

namespace kindergestion\Http\Controllers\Root;

use Illuminate\Http\Request;
use kindergestion\Blog;
use kindergestion\Http\Controllers\Controller;
use Image;

class BlogController extends Controller
{
    public function list()
    {
        $lists = Blog::all();

        return view('root.parts.blog.list', compact('lists'));
    }

    public function active($id)
    {
        $post = Blog::find($id);

        $post->status = 'Active';
        $post->update();

        return back();
    }

    public function show($id)
    {
        $post = Blog::find($id);

        return view('root.parts.blog.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Blog::find($id);

        $post->slug = str_slug($request['title']);
        $post->fill($request->all())->update();

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'front/images/blog/thumbnail/';
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $input['photo']);

            $destinationPath = 'front/images/blog';
            $image->move($destinationPath, $input['photo']);

            $post->photo = $input['photo'];
        }

        $post->update();

        return back();
    }

    public function create()
    {
        return view('root.parts.blog.create');
    }

    public function store(Request $request)
    {

        $post = new Blog;
        $post->slug = str_slug($request['title']);
        $post->fill($request->all())->save();

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'front/images/blog/thumbnail/';
            $img = Image::make($image->getRealPath());
            $img->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $input['photo']);

            $destinationPath = 'front/images/blog';
            $image->move($destinationPath, $input['photo']);

            $post->photo = $input['photo'];
        }

        $post->update();

        return back();
    }

    public function desactive($id)
    {
        $post = Blog::find($id);

        $post->status = 'Desactive';
        $post->update();

        return back();
    }

    public function destroy($id)
    {
        $post = Blog::find($id);
        $post->delete();

        return back();
    }
}
