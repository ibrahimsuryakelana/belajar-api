<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        // return response()->json('bisa');
        $items = Faqs::all();

        return response()->json($items);
    }

    public function read($id)
    {
        $item = Faqs::find($id);
        return response()->json($item);
    }

    public function store(Request $r)
    {
        $data = [
            'question' => $r->question,//'qustion'->samain sama field, $r-question = samain sama di postman
            'answer' => $r->answer,
            'video_url' => $r->video_url
        ];// ngumpuliin data

        Faqs::create($data);

        return response()->json($data);
    }

    public function update(Request $r, $id)
    {

        $data = [
            'question' => $r->question,
            'answer' => $r->answer,
            'video_url' => $r->video_url,
        ];

        $item = Faqs::find($id)->update($data);
        
        $response = [
            'data' => $data,
            'status' => 200
        ];

        return response()->json($response);
    }

    public function delete($id)
    {   
        Faqs::find($id)->delete();

        $response = [
            'massage' => 'berhasil',
            'status' => 200
        ];
        return response()->json($response);
    }
}
