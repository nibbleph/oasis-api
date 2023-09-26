<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        switch($request->type){
            case 'consultancy':
                $view = "consult";
            break;
            case 'insurance-verification':
                $view = 'clientele';
            break;

            default: $view = 'clientele';
        }


        $pdf = PDF::loadView($view, $request->all());
        $pdf->save(storage_path('generated.pdf'));
        return response()->json(['message' => 'Successfully Sent!', 'status' => 1]);
        // return view('clientele', $request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
