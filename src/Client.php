<?php

namespace Codegyan\Compiler;

class Client {
    private $apiKey;
    private $clientId;

    public function __construct($apiKey, $clientId) {
        $this->apiKey = $apiKey;
        $this->clientId = $clientId;
    }

    public function compilePHPCode($code) {
        $url = 'https://api.codegyan.in/v1/compiler/compile';
        $headers = [
            'APIKey: ' . $this->apiKey,
            'ClientID: ' . $this->clientId,
            'Content-Type: application/json'
        ];
        $data = [
            'lang' => 'php',
            'code' => $code
        ];

        $response = $this->sendRequest($url, 'POST', $headers, json_encode($data));
        return $response;
    }

    private function sendRequest($url, $method, $headers, $data = null) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new \Exception("Error sending request: $error");
        }

        curl_close($ch);
        return $response;
    }
}

?>
