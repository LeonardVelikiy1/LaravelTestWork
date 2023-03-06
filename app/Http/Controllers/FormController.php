<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Models\FormData;

class FormController extends Controller
{
    public function getForm()
    {
       return view('form');
    }
    public function createFormData(FormDataRequest $request)
    {
        $validatedRequest = $request->validated();
        $formData = new FormData($validatedRequest);
        $formData->save();

        return redirect()->action([FormController::class, 'getResaultPositive']);
    }

    public function getResaultPositive()
    {
        return view('form-resault', ['formsuckselfulssaved' => true]);
    }

    public function getResaultNegative()
    {
        return view('form-resault', ['formsuckselfulssaved' => false]);
    }
}
