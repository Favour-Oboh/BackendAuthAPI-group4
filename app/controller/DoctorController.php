<?php

class DoctorController
{

    public function index()
    {

        $doctors = [

            [
                "id" => 1,
                "fullname" => "Dr. Michael Adams",
                "specialty" => "Cardiology",
                "license_number" => "DOC12345",
                "bio" => "Senior cardiologist"
            ],

            [
                "id" => 2,
                "fullname" => "Dr. Grace Lee",
                "specialty" => "Neurology",
                "license_number" => "DOC67890",
                "bio" => "Neurology specialist"
            ]

        ];

        echo json_encode($doctors);
    }
}
