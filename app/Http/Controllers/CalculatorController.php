<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // Kalkulator
    public function add(Request $request)
    {
        $result = $request->input('a') + $request->input('b');
        return response()->json(['result' => $result]);
    }

    public function subtract(Request $request)
    {
        $result = $request->input('a') - $request->input('b');
        return response()->json(['result' => $result]);
    }

    public function multiply(Request $request)
    {
        $result = $request->input('a') * $request->input('b');
        return response()->json(['result' => $result]);
    }

    public function divide(Request $request)
    {
        $b = $request->input('b');
        if ($b == 0) {
            return response()->json(['error' => 'Cannot divide by zero'], 400);
        }

        $result = $request->input('a') / $b;
        return response()->json(['result' => $result]);
    }
}
