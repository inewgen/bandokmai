<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

class ImageController extends Controller
{
	/**`
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
    	//globals $destinationPath = public_path('/images/001.png');
    	$GLOBALS['destinationPath'] = public_path('/images/001.png');
    	//$img = Image::make($destinationPath)->fit(195, 195)->brightness(10)->contrast(65);

    	$img = Image::cache(function($image) {
    		// $destinationPath = public_path('/images/001.png');
		   $image->make($GLOBALS['destinationPath'])->fit(195, 195)->brightness(10)->contrast(10);
		}, 10, true);

    	return $img->response('jpg');
    	//return view('admin.upload.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
	    $this->validate($request, [
	    	'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     
   
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        //$postImage->add($input);

        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }

}