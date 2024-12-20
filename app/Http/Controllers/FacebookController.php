<?php
namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function publishPost($data1)
    {
        // Replace with your actual token
        //$accessToken = "EAAWIQNLvg18BO50X1qLXurCNilgxddzYwZCYj1MwVfXwPh8eFi45Y4YHiWygbQy3Poz1ZAEH0OxOrilHCueC41U362W5PWwrZBtfCsfQFnt7royVYI224V697ZCnzNviriJd9fmZAOHlIoHZCWdzZB4Mv5gujLZCWwTZBOUTmpGRDE6VqDLfSz9fgOJ6Cz22oGP0TcleiB1XZACHjunemU2JZBSY2UJjMtBl9bPLV3NxObp";
        $accessToken = "EAAWIQNLvg18BOyFSFFnjB2pALxTYV6Ik2h60iabi36L2UVRJrL1JN2TL7l4M3XSTyOriMZCuUslPFSy5GlZCrG54WYYZAkNMCXScdcKwJVQb0xdUiYn4SmZAPRkT8SeDW8Op9NwOzUqZAPQlZCsyoRfV9CBxJXRBhqEJ6SPHKW4r863ExCWONFSdsiLOL9kF3mAqNDdmMco9cymwmS";
        // Page ID for your fan page
        $pageId = "820381691310927";
        print_r($data1);
        // Define your post content
        $message = $data1["message"];
        $imageUrl = $data1["link"]; // Optional image URL

        // Create Facebook client
        $fb = new Facebook([
            'app_id' => "1557186881749855", // Replace with your app ID
            'app_secret' => "f0656664c02fc907a8ec3944066c10ef", // Replace with your app secret
            "default_graph_version"=>"v19.0"
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