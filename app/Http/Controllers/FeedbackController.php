<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{

    public function index()
    {
        //TODO get the currently authenticated user rather than hardcoding
        $currentUser = User::findOrFail(1);
        $allBrands = Brand::all();
        foreach ($allBrands as $brand) {
            $currentBrandFeedback[] = $brand->feedback;
        }

//        $currentBrandFeedback = $currentUser->brand->feedback;
        //TODO make a competitors table with a relationship - then can retrieve a brand's competitors and display this feedback too
        return $currentBrandFeedback;
    }
//    public function index()
//    {
//        $currentUser = Auth::user();
//        $feedback = $currentUser->brand->feedback;
//
//        return $feedback;
//    }
}
