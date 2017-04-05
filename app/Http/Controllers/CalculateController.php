<?php

namespace App\Http\Controllers;

require('BmiController.php');

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class CalculateController extends Controller
{
    public function index(Request $request)
    {
        $bmiObject= new BmiController();

        $weight = $request->input('weight',null);
        $height = $request->input('height',null);
        $age = $request->input('age',null);
        $gender = $request->input('gender','male');
        $activity = $request->input('activity','sedentary');
        $gender = $request->input('gender','male');
        $calChecked= $request->has('calories');
        $bmi=0;
        $calories=0;
        $submitted=$request->all();

        if ($submitted)
        {
            $this->validate($request, [
                'weight' => 'required|numeric|min:1',
                'height' => 'required|numeric|min:1',
                'age' => 'required|numeric|min:1',
            ],

            [
                'weight.required' => 'Please enter your weight',
                'weight.numeric' => 'Please enter a numerical value',
                'weight.min:1' => 'Please enter a positive number',

                'height.required' => 'Please enter your height',
                'height.numeric' => 'Please enter a numerical value',
                'height.min' => 'Please enter a positive number',

                'age.required' => 'Please enter your age',
                'age.numeric' => 'Please enter a numerical value',
                'age.min' => 'Please enter a positive integer',
            ]);

            $submitted=true;
            $bmi=$bmiObject->bmiCal($weight,$height);

            if($calChecked)
            {
                $calories=$bmiObject->caloriesCal($weight, $height,$gender,$age,$activity);
            }
        }
        return view('bmi.index')->with([
            'weight' => $weight,
            'height' => $height,
            'age' => $age,
            'calories' => $calories,
            'gender' => $gender,
            'activity' => $activity,
            'submitted'=>$submitted,
            'bmi' =>$bmi,
            'calChecked'=>$calChecked
        ]);
    }
}
