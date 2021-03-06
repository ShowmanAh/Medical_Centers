<?php

use Illuminate\Support\Facades\Config;
function getActiveLanguage(){
   return \App\Models\Language::active()->selection()->get();
}
function get_default_lang(){
    return config::get('app.locale');
}
function uploadImage($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'images/' . $folder . '/' . $filename;
    return $path;
}
function responseJson($status, $message, $data = null)
{
    $response = [
        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];

    return response()->json($response , 200);
}

?>
