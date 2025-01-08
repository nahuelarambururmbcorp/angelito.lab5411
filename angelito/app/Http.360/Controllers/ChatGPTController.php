<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatGPTController extends Controller
{
    public function sendMessageToChatGPT($prompt,$noticia)
    {

        // Datos de autenticación para la API de OpenAI (reemplaza con tus credenciales)
        $apiKey = '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'; // Reemplaza con tu clave de API de OpenAI

        // URL de la API de OpenAI
        $url = 'https://api.openai.com/v1/chat/completions';

        // Configuración de la solicitud HTTP utilizando Guzzle
        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ]
        ]);

        // Cuerpo de la solicitud a enviar a la API de OpenAI
        $body = array( 
            'model' => "gpt-3.5-turbo-1106",
            "messages" => array(array("role"=> "system","content"=> $prompt),array("role"=> "user","content"=> $noticia)),             
        );

        // Enviar la solicitud POST a la API de OpenAI ChatGPT
        $response = $client->post($url, [
            'json' => $body,
        ]);

        // Obtener la respuesta de la API
        $result = json_decode($response->getBody()->getContents(), true);

        // Aquí puedes manejar la respuesta como necesites
        $generatedText = $result['choices'][0]['message']['content'] ?? '';

        return $generatedText;
    }
}
