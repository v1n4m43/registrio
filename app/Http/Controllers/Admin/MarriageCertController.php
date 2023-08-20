<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarriageLicense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MarriageCertController extends Controller
{
    public function index()
    {
        $marriagelicense = MarriageLicense::all();

        return view('admin.registers.marriage.index', ['marriagelicense' => $marriagelicense]);
    }
    
    
    public function SubmitMarriageLicense(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //Groom
            'groom_firstname' => 'required',
            'groom_middlename' => 'required',
            'groom_lastname' => 'required',
            'groom_dob' => 'required',
            'groom_age' => 'required',
            'groom_place_of_birth' => 'required',
            'groom_sex' => 'required',
            'groom_citizenship' => 'required',
            'groom_residence' => 'required',
            'groom_religion' => 'required',
            'groom_civil_status' => 'required',

            'groom_father_firstname' => 'required',
            'groom_father_middlename' => 'required',
            'groom_father_lastname' => 'required',
            'groom_father_citizenship' => 'required',
            'groom_father_residence' => 'required',
            'groom_mother_firstname' => 'required',
            'groom_mother_middlename' => 'required',
            'groom_mother_lastname' => 'required',
            'groom_mother_citizenship' => 'required',
            'groom_mother_residence' => 'required',

            'groom_parental_consent_advice' => 'required',
            'groom_relationship' => 'required',
            'groom_consent_giver_residence' => 'required',

            'groom_previous_marriage_dissolution_method' => 'required',
            'groom_place_dissolution' => 'required',
            'groom_date_dissolution' => 'required',
            'groom_degree_of_relationship' => 'required',

            //Bride
            'bride_firstname' => 'required',
            'bride_middlename' => 'required',
            'bride_lastname' => 'required',
            'bride_dob' => 'required',
            'bride_age' => 'required',
            'bride_place_of_birth' => 'required',
            'bride_sex' => 'required',
            'bride_citizenship' => 'required',
            'bride_residence' => 'required',
            'bride_religion' => 'required',
            'bride_civil_status' => 'required',

            'bride_father_firstname' => 'required',
            'bride_father_middlename' => 'required',
            'bride_father_lastname' => 'required',
            'bride_father_citizenship' => 'required',
            'bride_father_residence' => 'required',
            'bride_mother_firstname' => 'required',
            'bride_mother_middlename' => 'required',
            'bride_mother_lastname' => 'required',
            'bride_mother_citizenship' => 'required',
            'bride_mother_residence' => 'required',

            'bride_parental_consent_advice' => 'required',
            'bride_relationship' => 'required',
            'bride_consent_giver_residence' => 'required',

            'bride_previous_marriage_dissolution_method' => 'required',
            'bride_place_dissolution' => 'required',
            'bride_date_dissolution' => 'required',
            'bride_degree_of_relationship' => 'required',
            


        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $birthcert = new MarriageLicense();

            $tData = [
                'groom_firstname' => $request->groom_firstname,
                'groom_middlename' => $request->groom_middlename,
                'groom_lastname' => $request->groom_lastname,
                'groom_dob' => $request->groom_dob,
                'groom_age' => $request->groom_age,
                'groom_place_of_birth' => $request->groom_place_of_birth,
                'groom_sex' => $request->groom_sex,
                'groom_citizenship' => $request->groom_citizenship,
                'groom_residence' => $request->groom_residence,
                'groom_religion' => $request->groom_religion,
                'groom_civil_status' => $request->groom_civil_status,

                'groom_father_firstname' => $request->groom_father_firstname,
                'groom_father_middlename' => $request->groom_father_middlename,
                'groom_father_lastname' => $request->groom_father_lastname,
                'groom_father_citizenship' => $request->groom_father_citizenship,
                'groom_father_residence' => $request->groom_father_residence,
                'groom_mother_firstname' => $request->groom_mother_firstname,
                'groom_mother_middlename' => $request->groom_mother_middlename,
                'groom_mother_lastname' => $request->groom_mother_lastname,
                'groom_mother_citizenship' => $request->groom_mother_citizenship,
                'groom_mother_residence' => $request->groom_mother_residence,

                'groom_parental_consent_advice' => $request->groom_parental_consent_advice,
                'groom_relationship' => $request->groom_relationship,
                'groom_consent_giver_residence' => $request->groom_consent_giver_residence,
                

                'groom_previous_marriage_dissolution_method' => $request->groom_previous_marriage_dissolution_method,
                'groom_place_dissolution' => $request->groom_place_dissolution,
                'groom_date_dissolution' => $request->groom_date_dissolution,
                'groom_degree_of_relationship' => $request->groom_degree_of_relationship,
                
                //Bride
                'bride_firstname' => $request->bride_firstname,
                'bride_middlename' => $request->bride_middlename,
                'bride_lastname' => $request->bride_lastname,
                'bride_dob' => $request->bride_dob,
                'bride_age' => $request->bride_age,
                'bride_place_of_birth' => $request->bride_place_of_birth,
                'bride_sex' => $request->bride_sex,
                'bride_citizenship' => $request->bride_citizenship,
                'bride_residence' => $request->bride_residence,
                'bride_religion' => $request->bride_religion,
                'bride_civil_status' => $request->bride_civil_status,

                'bride_father_firstname' => $request->bride_father_firstname,
                'bride_father_middlename' => $request->bride_father_middlename,
                'bride_father_lastname' => $request->bride_father_lastname,
                'bride_father_citizenship' => $request->bride_father_citizenship,
                'bride_father_residence' => $request->bride_father_residence,
                'bride_mother_firstname' => $request->bride_mother_firstname,
                'bride_mother_middlename' => $request->bride_mother_middlename,
                'bride_mother_lastname' => $request->bride_mother_lastname,
                'bride_mother_citizenship' => $request->bride_mother_citizenship,
                'bride_mother_residence' => $request->bride_mother_residence,

                'bride_parental_consent_advice' => $request->bride_parental_consent_advice,
                'bride_relationship' => $request->bride_relationship,
                'bride_consent_giver_residence' => $request->bride_consent_giver_residence,
                

                'bride_previous_marriage_dissolution_method' => $request->bride_previous_marriage_dissolution_method,
                'bride_place_dissolution' => $request->bride_place_dissolution,
                'bride_date_dissolution' => $request->bride_date_dissolution,
                'bride_degree_of_relationship' => $request->bride_degree_of_relationship,
                

              ];
              MarriageLicense::create($tData);
              return response()->json([
                'status' => "200",
              ]);

    }

    public function edit($id)
    {
        $birthcert = MarriageLicense::find($id);
        if (!$birthcert) {
            return response()->json(['message' => 'Marriage License not found'], 404);
        }

        return view('marriagelicense.edit', compact('marriagelicense'));

    }

    public function MarriageLicenseEdit(Request $request) {

        $validator = Validator::make($request->all(), [
            //Groom
            'groom_firstname' => 'required',
            'groom_middlename' => 'required',
            'groom_lastname' => 'required',
            'groom_dob' => 'required',
            'groom_age' => 'required',
            'groom_place_of_birth' => 'required',
            'groom_sex' => 'required',
            'groom_citizenship' => 'required',
            'groom_residence' => 'required',
            'groom_religion' => 'required',
            'groom_civil_status' => 'required',

            'groom_father_firstname' => 'required',
            'groom_father_middlename' => 'required',
            'groom_father_lastname' => 'required',
            'groom_father_citizenship' => 'required',
            'groom_father_residence' => 'required',
            'groom_mother_firstname' => 'required',
            'groom_mother_middlename' => 'required',
            'groom_mother_lastname' => 'required',
            'groom_mother_citizenship' => 'required',
            'groom_mother_residence' => 'required',

            'groom_parental_consent_advice' => 'required',
            'groom_relationship' => 'required',
            'groom_consent_giver_residence' => 'required',

            'groom_previous_marriage_dissolution_method' => 'required',
            'groom_place_dissolution' => 'required',
            'groom_date_dissolution' => 'required',
            'groom_degree_of_relationship' => 'required',

            //Bride
            'bride_firstname' => 'required',
            'bride_middlename' => 'required',
            'bride_lastname' => 'required',
            'bride_dob' => 'required',
            'bride_age' => 'required',
            'bride_place_of_birth' => 'required',
            'bride_sex' => 'required',
            'bride_citizenship' => 'required',
            'bride_residence' => 'required',
            'bride_religion' => 'required',
            'bride_civil_status' => 'required',

            'bride_father_firstname' => 'required',
            'bride_father_middlename' => 'required',
            'bride_father_lastname' => 'required',
            'bride_father_citizenship' => 'required',
            'bride_father_residence' => 'required',
            'bride_mother_firstname' => 'required',
            'bride_mother_middlename' => 'required',
            'bride_mother_lastname' => 'required',
            'bride_mother_citizenship' => 'required',
            'bride_mother_residence' => 'required',

            'bride_parental_consent_advice' => 'required',
            'bride_relationship' => 'required',
            'bride_consent_giver_residence' => 'required',

            'bride_previous_marriage_dissolution_method' => 'required',
            'bride_place_dissolution' => 'required',
            'bride_date_dissolution' => 'required',
            'bride_degree_of_relationship' => 'required',

            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }


        $curr = MarriageLicense::find($request->id);

        $currData = [
            'groom_firstname' => $request->groom_firstname,
                'groom_middlename' => $request->groom_middlename,
                'groom_lastname' => $request->groom_lastname,
                'groom_dob' => $request->groom_dob,
                'groom_age' => $request->groom_age,
                'groom_place_of_birth' => $request->groom_place_of_birth,
                'groom_sex' => $request->groom_sex,
                'groom_citizenship' => $request->groom_citizenship,
                'groom_residence' => $request->groom_residence,
                'groom_religion' => $request->groom_religion,
                'groom_civil_status' => $request->groom_civil_status,

                'groom_father_firstname' => $request->groom_father_firstname,
                'groom_father_middlename' => $request->groom_father_middlename,
                'groom_father_lastname' => $request->groom_father_lastname,
                'groom_father_citizenship' => $request->groom_father_citizenship,
                'groom_father_residence' => $request->groom_father_residence,
                'groom_mother_firstname' => $request->groom_mother_firstname,
                'groom_mother_middlename' => $request->groom_mother_middlename,
                'groom_mother_lastname' => $request->groom_mother_lastname,
                'groom_mother_citizenship' => $request->groom_mother_citizenship,
                'groom_mother_residence' => $request->groom_mother_residence,

                'groom_parental_consent_advice' => $request->groom_parental_consent_advice,
                'groom_relationship' => $request->groom_relationship,
                'groom_consent_giver_residence' => $request->groom_consent_giver_residence,
                

                'groom_previous_marriage_dissolution_method' => $request->groom_previous_marriage_dissolution_method,
                'groom_place_dissolution' => $request->groom_place_dissolution,
                'groom_date_dissolution' => $request->groom_date_dissolution,
                'groom_degree_of_relationship' => $request->groom_degree_of_relationship,
                
                //Bride
                'bride_firstname' => $request->bride_firstname,
                'bride_middlename' => $request->bride_middlename,
                'bride_lastname' => $request->bride_lastname,
                'bride_dob' => $request->bride_dob,
                'bride_age' => $request->bride_age,
                'bride_place_of_birth' => $request->bride_place_of_birth,
                'bride_sex' => $request->bride_sex,
                'bride_citizenship' => $request->bride_citizenship,
                'bride_residence' => $request->bride_residence,
                'bride_religion' => $request->bride_religion,
                'bride_civil_status' => $request->bride_civil_status,

                'bride_father_firstname' => $request->bride_father_firstname,
                'bride_father_middlename' => $request->bride_father_middlename,
                'bride_father_lastname' => $request->bride_father_lastname,
                'bride_father_citizenship' => $request->bride_father_citizenship,
                'bride_father_residence' => $request->bride_father_residence,
                'bride_mother_firstname' => $request->bride_mother_firstname,
                'bride_mother_middlename' => $request->bride_mother_middlename,
                'bride_mother_lastname' => $request->bride_mother_lastname,
                'bride_mother_citizenship' => $request->bride_mother_citizenship,
                'bride_mother_residence' => $request->bride_mother_residence,

                'bride_parental_consent_advice' => $request->bride_parental_consent_advice,
                'bride_relationship' => $request->bride_relationship,
                'bride_consent_giver_residence' => $request->bride_consent_giver_residence,
                

                'bride_previous_marriage_dissolution_method' => $request->bride_previous_marriage_dissolution_method,
                'bride_place_dissolution' => $request->bride_place_dissolution,
                'bride_date_dissolution' => $request->bride_date_dissolution,
                'bride_degree_of_relationship' => $request->bride_degree_of_relationship,
                

        ];

        $curr->update($currData);
        return response()->json([
        'status' => "200",
    ]);
}

    public function delete($id)
    {
        $marriagecert = MarriageLicense::find($id);
        if (!$marriagecert) {
            return response()->json(['message' => 'Marriage Certificate not found'], 404);
        }

        $marriagecert->delete();

        return redirect()->route('marriage')->with('success', 'Marriage License Deleted Successfully');
    }
}
