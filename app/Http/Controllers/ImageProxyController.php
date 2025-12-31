<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageProxyController extends Controller
{
    public function getImage(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $imageUrl = $request->input('url');

        try {
            $response = Http::get($imageUrl);

            if ($response->successful()) {
                $imageContent = $response->body();
                $contentType = $response->header('Content-Type');

                return response($imageContent)->header('Content-Type', $contentType);
            }
        } catch (\Exception $e) {
            // Log the error if needed
            // return response('Error fetching image.', 500);
        }

        // Return a placeholder or empty response if fetching fails
        return response('', 404);
    }
}
