<?php

namespace App\Http\Client\Api\Controllers;


use App\Http\Client\Api\Resources\PictureResource;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * @api {get} /api/pictures 01. List
     * @apiVersion 1.0.0
     * @apiName PicturesIndex
     * @apiGroup Pictures
     *
     */
    public function index(Request $request)
    {
        $pictures = Picture::when($val = request('search'), function ($q) use ($val) {
            return $q->where('name', $val);
        })->with('media', 'author');

        return PictureResource::collection($pictures->paginate());
    }

    /**
     * @api {get} /api/pages/{picture:slug} 01. Show
     * @apiVersion 1.0.0
     * @apiName PageShow
     * @apiGroup Pages
     *
     */
    public function show(Request $request, $slug)
    {
        /** @var Picture $page */
        $page = Picture::where('slug', $slug)->first();

        return PictureResource::make($page);
    }

}
