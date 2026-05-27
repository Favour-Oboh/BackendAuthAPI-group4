<?php

class AppointmentController
{

    public function index()
    {

        $appointments = [

            [
                "id" => 1,
                "patient_id" => 1,
                "doctor_id" => 2,
                "appointment_date" => "2026-08-20",
                "time_slot" => "10:00 AM",
                "status" => "Scheduled",
                "notes" => "Routine checkup"
            ]

        ];

        echo json_encode($appointments);
    }


    public function store()
    {

        $data = json_decode(file_get_contents("php://input"));

        echo json_encode([

            "status" => "success",
            "message" => "Appointment created successfully",
            "data" => $data

        ]);
    }
}
