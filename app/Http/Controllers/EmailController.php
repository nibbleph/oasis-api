<?php

namespace App\Http\Controllers;

use App\Mail\SendForm;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
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
        $pdf->save(public_path('generated.pdf'));

        Mail::to($request->email)->bcc('support@oasisdentalcallcenter.com')->send(new SendForm());
        return response()->json(['message' => 'Successfully Sent!', 'status' => 1]);
        // return view('clientele', $request->all());
    }

    public function send_contact(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);
        Mail::to($request->email)->bcc('support@oasisdentalcallcenter.com')->send(new SendContact($request->email, $request->name, $request->subject, $request->message));
        return response()->json(['message' => 'Successfully Sent!', 'status' => 1]);
    }

    public function send_form(Request $request){
        $pdf = PDF::loadView('insurance', $request->all());
        $pdf->save(public_path('generated.pdf'));
        Mail::to($request->email)->bcc('support@oasisdentalcallcenter.com')->send(new SendForm());
        return response()->json(['message' => 'Successfully Sent!', 'status' => 1]);
    }

    public function send_pricing(Request $request){
        $pdf = PDF::loadView('customized_support', $request->all());
        $pdf->save(public_path('generated.pdf'));
        Mail::to($request->email)->bcc('support@oasisdentalcallcenter.com')->send(new SendForm());
        return response()->json(['message' => 'Successfully Sent!', 'status' => 1]);
    }
}
