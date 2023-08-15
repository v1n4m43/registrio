<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BirthCertificateDetail;
use Illuminate\Support\Facades\Validator;

class BirthCertController extends Controller
{
    public function index()
    {
        $birthcerts = BirthCertificateDetail::all();

        return view('admin.registers.birth.index', ['birthcerts' => $birthcerts]);
    }

    public function SubmitBirth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'child_lastname' => 'required',
            'child_firstname' => 'required',
            'child_middlename' => 'required',
            'child_sex' => 'required',
            'child_date_of_birth' => 'required',
            'child_place_of_barangay_hospitalname' => 'required',
            'child_municipality' => 'required',
            'child_province' => 'required',
            'child_type_of_birth' => 'required',
            'child_multiple_birth' => 'required',
            'child_birth_order' => 'required',
            'child_weight_at_birth' => 'required',

            'mother_lastname' => 'required',
            'mother_firstname' => 'required',
            'mother_middlename' => 'required',
            'mother_citizenship' => 'required',
            'mother_religion' => 'required',
            'mother_children_born_alive' => 'required',
            'mother_children_still_living' => 'required',
            'mother_children_born_alive_but_dead' => 'required',
            'mother_age' => 'required',
            'mother_barangay' => 'required',
            'mother_municipality' => 'required',
            'mother_province' => 'required',
            'mother_country' => 'required',

            'father_lastname' => 'required',
            'father_firstname' => 'required',
            'father_middlename' => 'required',
            'father_citizenship' => 'required',
            'father_religion' => 'required',
            'father_occupation' => 'required',
            'father_age' => 'required',
            'father_barangay' => 'required',
            'father_municipality' => 'required',
            'father_province' => 'required',
            'father_country' => 'required',

            'informant_signature' => 'required',
            'informant_name' => 'required',
            'informant_relationship' => 'required',
            'informant_address' => 'required',
            'informant_date' => 'required',

            'prepared_by_signature' => 'required',
            'prepared_by_name' => 'required',
            'prepared_by_position' => 'required',
            'prepared_by_date' => 'required',

            'received_by_signature' => 'required',
            'received_by_name' => 'required',
            'received_by_position' => 'required',
            'received_by_date' => 'required',

            'registered_by_signature' => 'required',
            'registered_by_name' => 'required',
            'registered_by_position' => 'required',
            'registered_by_date' => 'required',

            'remarks' => 'required'

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $birthcert = new BirthCertificateDetail();

            $tData = [
                'child_lastname' => $request->child_lastname,
                'child_firstname' => $request->child_firstname,
                'child_middlename' => $request->child_middlename,
                'child_sex' => $request->child_sex,
                'child_date_of_birth' => $request->child_date_of_birth,
                'child_place_of_barangay_hospitalname' => $request->child_place_of_barangay_hospitalname,
                'child_municipality' => $request->child_municipality,
                'child_province' => $request->child_province,
                'child_type_of_birth' => $request->child_type_of_birth,
                'child_multiple_birth' => $request->child_multiple_birth,
                'child_birth_order' => $request->child_birth_order,
                'child_weight_at_birth' => $request->child_weight_at_birth,

                'mother_lastname' => $request->mother_lastname,
                'mother_firstname' => $request->mother_firstname,
                'mother_middlename' => $request->mother_middlename,
                'mother_citizenship' => $request->mother_citizenship,
                'mother_religion' => $request->mother_religion,
                'mother_children_born_alive' => $request->mother_children_born_alive,
                'mother_children_still_living' => $request->mother_children_still_living,
                'mother_children_born_alive_but_dead' => $request->mother_children_born_alive_but_dead,
                'mother_occupation' => $request->mother_occupation,
                'mother_age' => $request->mother_age,
                'mother_barangay' => $request->mother_barangay,
                'mother_municipality' => $request->mother_municipality,
                'mother_province' => $request->mother_province,
                'mother_country' => $request->mother_country,

                'father_lastname' => $request->father_lastname,
                'father_firstname' => $request->father_firstname,
                'father_middlename' => $request->father_middlename,
                'father_citizenship' => $request->father_citizenship,
                'father_religion' => $request->father_religion,
                'father_occupation' => $request->father_occupation,
                'father_age' => $request->father_age,
                'father_barangay' => $request->father_barangay,
                'father_municipality' => $request->father_municipality,
                'father_province' => $request->father_province,
                'father_country' => $request->father_country,

                'parents_marriage_date' => $request->parents_marriage_date,
                'parents_marriage_municipality' => $request->parents_marriage_municipality,
                'parents_marriage_province' => $request->parents_marriage_province,
                'parents_marriage_country' => $request->parents_marriage_country,

                'informant_signature' => $request->informant_signature,
                'informant_name' => $request->informant_name,
                'informant_relationship' => $request->informant_relationship,
                'informant_address' => $request->informant_address,
                'informant_date' => $request->informant_date,

                'prepared_by_signature' => $request->prepared_by_signature,
                'prepared_by_name' => $request->prepared_by_name,
                'prepared_by_position' => $request->prepared_by_position,
                'prepared_by_date' => $request->prepared_by_date,

                'received_by_signature' => $request->received_by_signature,
                'received_by_name' => $request->received_by_name,
                'received_by_position' => $request->received_by_position,
                'received_by_date' => $request->received_by_date,

                'registered_by_signature' => $request->registered_by_signature,
                'registered_by_name' => $request->registered_by_name,
                'registered_by_position' => $request->registered_by_position,
                'registered_by_date' => $request->registered_by_date,

                'remarks' => $request->remarks,

              ];
              BirthCertificateDetail::create($tData);
              return response()->json([
                'status' => "200",
              ]);

    }

    public function edit($id)
    {
        $birthcert = BirthCertificateDetail::find($id);
        if (!$birthcert) {
            return response()->json(['message' => 'Birth Certificate not found'], 404);
        }

        return view('birth.edit', compact('birthcert'));

    }

    public function BirthEdit(Request $request) {

        $validator = Validator::make($request->all(), [
            'child_lastname' => 'required',
            'child_firstname' => 'required',
            'child_middlename' => 'required',
            'child_sex' => 'required',
            'child_date_of_birth' => 'required',
            'child_place_of_barangay_hospitalname' => 'required',
            'child_municipality' => 'required',
            'child_province' => 'required',
            'child_type_of_birth' => 'required',
            'child_multiple_birth' => 'required',
            'child_birth_order' => 'required',
            'child_weight_at_birth' => 'required',

            'mother_lastname' => 'required',
            'mother_firstname' => 'required',
            'mother_middlename' => 'required',
            'mother_citizenship' => 'required',
            'mother_religion' => 'required',
            'mother_children_born_alive' => 'required',
            'mother_children_still_living' => 'required',
            'mother_children_born_alive_but_dead' => 'required',
            'mother_age' => 'required',
            'mother_barangay' => 'required',
            'mother_municipality' => 'required',
            'mother_province' => 'required',
            'mother_country' => 'required',

            'father_lastname' => 'required',
            'father_firstname' => 'required',
            'father_middlename' => 'required',
            'father_citizenship' => 'required',
            'father_religion' => 'required',
            'father_occupation' => 'required',
            'father_age' => 'required',
            'father_barangay' => 'required',
            'father_municipality' => 'required',
            'father_province' => 'required',
            'father_country' => 'required',

            'informant_signature' => 'required',
            'informant_name' => 'required',
            'informant_relationship' => 'required',
            'informant_address' => 'required',
            'informant_date' => 'required',

            'prepared_by_signature' => 'required',
            'prepared_by_name' => 'required',
            'prepared_by_position' => 'required',
            'prepared_by_date' => 'required',

            'received_by_signature' => 'required',
            'received_by_name' => 'required',
            'received_by_position' => 'required',
            'received_by_date' => 'required',

            'registered_by_signature' => 'required',
            'registered_by_name' => 'required',
            'registered_by_position' => 'required',
            'registered_by_date' => 'required',

            'remarks' => 'required'

            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }


        $curr = BirthCertificateDetail::find($request->id);

        $currData = [
            'child_lastname' => $request->child_lastname,
            'child_firstname' => $request->child_firstname,
            'child_middlename' => $request->child_middlename,
            'child_sex' => $request->child_sex,
            'child_date_of_birth' => $request->child_date_of_birth,
            'child_place_of_barangay_hospitalname' => $request->child_place_of_barangay_hospitalname,
            'child_municipality' => $request->child_municipality,
            'child_province' => $request->child_province,
            'child_type_of_birth' => $request->child_type_of_birth,
            'child_multiple_birth' => $request->child_multiple_birth,
            'child_birth_order' => $request->child_birth_order,
            'child_weight_at_birth' => $request->child_weight_at_birth,

            'mother_lastname' => $request->mother_lastname,
            'mother_firstname' => $request->mother_firstname,
            'mother_middlename' => $request->mother_middlename,
            'mother_citizenship' => $request->mother_citizenship,
            'mother_religion' => $request->mother_religion,
            'mother_children_born_alive' => $request->mother_children_born_alive,
            'mother_children_still_living' => $request->mother_children_still_living,
            'mother_children_born_alive_but_dead' => $request->mother_children_born_alive_but_dead,
            'mother_occupation' => $request->mother_occupation,
            'mother_age' => $request->mother_age,
            'mother_barangay' => $request->mother_barangay,
            'mother_municipality' => $request->mother_municipality,
            'mother_province' => $request->mother_province,
            'mother_country' => $request->mother_country,

            'father_lastname' => $request->father_lastname,
            'father_firstname' => $request->father_firstname,
            'father_middlename' => $request->father_middlename,
            'father_citizenship' => $request->father_citizenship,
            'father_religion' => $request->father_religion,
            'father_occupation' => $request->father_occupation,
            'father_age' => $request->father_age,
            'father_barangay' => $request->father_barangay,
            'father_municipality' => $request->father_municipality,
            'father_province' => $request->father_province,
            'father_country' => $request->father_country,

            'parents_marriage_date' => $request->parents_marriage_date,
            'parents_marriage_municipality' => $request->parents_marriage_municipality,
            'parents_marriage_province' => $request->parents_marriage_province,
            'parents_marriage_country' => $request->parents_marriage_country,

            'informant_signature' => $request->informant_signature,
            'informant_name' => $request->informant_name,
            'informant_relationship' => $request->informant_relationship,
            'informant_address' => $request->informant_address,
            'informant_date' => $request->informant_date,

            'prepared_by_signature' => $request->prepared_by_signature,
            'prepared_by_name' => $request->prepared_by_name,
            'prepared_by_position' => $request->prepared_by_position,
            'prepared_by_date' => $request->prepared_by_date,

            'received_by_signature' => $request->received_by_signature,
            'received_by_name' => $request->received_by_name,
            'received_by_position' => $request->received_by_position,
            'received_by_date' => $request->received_by_date,

            'registered_by_signature' => $request->registered_by_signature,
            'registered_by_name' => $request->registered_by_name,
            'registered_by_position' => $request->registered_by_position,
            'registered_by_date' => $request->registered_by_date,

            'remarks' => $request->remarks,
        ];

        $curr->update($currData);
        return response()->json([
        'status' => "200",
    ]);
}

    public function delete($id)
    {
        $birthcert = BirthCertificateDetail::find($id);
        if (!$birthcert) {
            return response()->json(['message' => 'Birth Certificate not found'], 404);
        }

        $birthcert->delete();

        return redirect()->route('birth')->with('success', 'Birth Certificate Deleted Successfully');
    }
}
