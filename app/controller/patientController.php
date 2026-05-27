<?php

class PatientController
{

    // GET ALL PATIENTS
    public function index()
    {

        $patients = [

            [
                "id" => 1,
                "fullname" => "John Doe",
                "date_of_birth" => "1998-05-12",
                "blood_type" => "O+",
                "emergency_contact" => "08012345678"
            ],

            [
                "id" => 2,
                "fullname" => "Sarah James",
                "date_of_birth" => "2000-08-21",
                "blood_type" => "A-",
                "emergency_contact" => "08087654321"
            ]

        ];

        echo json_encode($patients);
    }


    // GET SINGLE PATIENT
    public function show($id)
    {

        $patient = [

            "id" => $id,
            "fullname" => "John Doe",
            "date_of_birth" => "1998-05-12",
            "blood_type" => "O+",
            "emergency_contact" => "08012345678"

        ];

        echo json_encode($patient);
    }


    // CREATE PATIENT
    public function store()
    {

        $data = json_decode(file_get_contents("php://input"));

        echo json_encode([

            "status" => "success",
            "message" => "Patient created successfully",
            "data" => $data

        ]);
    }
}
