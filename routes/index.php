
<?php
/*
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

header("Content-Type: application/json");



require_once __DIR__ . '/../app/controller/AuthController.php';

//require_once __DIR__ . '/../app/controller/AuthController.php';



//require_once __DIR__ . '/../app/controller/AuthController.php';


//require_once "app/controller/AuthController.php";

$url = $_GET['url'] ?? '';

$auth = new AuthController();

switch ($url) {

    case 'register':
        $auth->register();
        break;

    case 'login':
        $auth->login();
        break;

    default:
        echo json_encode([
            "message" => "Route not found"
        ]);
}
*/



header("Content-Type: application/json");

$url = $_GET['url'] ?? '';

$method = $_SERVER['REQUEST_METHOD'];


// AUTH CONTROLLER
require_once "../app/controller/AuthController.php";

// HMS CONTROLLERS
require_once "../app/controller/PatientController.php";
require_once "../app/controller/DoctorController.php";
require_once "../app/controller/AppointmentController.php";


switch ($url) {

    // AUTH ROUTES
    case 'register':

        $controller = new AuthController();
        $controller->register();

        break;


    case 'login':

        $controller = new AuthController();
        $controller->login();

        break;


    // PATIENT ROUTES
    case 'patients':

        $controller = new PatientController();

        if ($method == 'GET') {

            $controller->index();
        } elseif ($method == 'POST') {

            $controller->store();
        }

        break;


    // SINGLE PATIENT
    case 'patient':

        $controller = new PatientController();

        $id = $_GET['id'] ?? 1;

        $controller->show($id);

        break;


    // DOCTORS
    case 'doctors':

        $controller = new DoctorController();

        $controller->index();

        break;


    // APPOINTMENTS
    case 'appointments':

        $controller = new AppointmentController();

        if ($method == 'GET') {

            $controller->index();
        } elseif ($method == 'POST') {

            $controller->store();
        }

        break;


    default:

        echo json_encode([
            "status" => "error",
            "message" => "Route not found"
        ]);
}
