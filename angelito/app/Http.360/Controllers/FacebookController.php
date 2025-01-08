<?php
namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function publishPost($data1)
    {
        // Replace with your actual token
        $accessToken = "9a20764ffe5a012f9b7aa6d34e6db938";

        // Page ID for your fan page
        $pageId = "820381691310927";
        print_r($data1);
        // Define your post content
        $message = $data1["message"];
        $imageUrl = $data1["link"]; // Optional image URL

        // Create Facebook client
        $fb = new Facebook([
            'app_id' => "3068789229840012", // Replace with your app ID
            'app_secret' => "ffb84e6ab9aff7acf091ac3a0ea13863", // Replace with your app secret
        ]);

        try {
            // Prepare post data
            $data = [
                'message' => $message,
            ];

            // Add image if provided
            if ($imageUrl) {
                $data['link'] = $imageUrl;
            }

            // Publish post to page
            $response = $fb->post("/$pageId/feed", $data, $accessToken);

            // Check for successful response
            if ($response->isSuccess()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post published successfully!',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => $response->getErrorMessage(),
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}