<?php

namespace App\Http\Controllers;

use App\Models\ImagesWashing;
use App\Models\Washing;
use Illuminate\Http\Request;

class ImagesWashingController extends Controller
{
    
    public function washingImageStore(Request $request,ImagesWashing $imaged, Washing $washing)
    {
        $requestImage = $request->file('image');

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $request->image->move(public_path('img/washings'), $imageName);

        $washing_user = $washing->where('owner_id', '=', session('id'))->first();

        $imaged->image = $imageName;

        $imaged->washing_id = $washing_user->id;

        $imaged->save();

        return redirect()->route('owner.dashboard');

    }

}
