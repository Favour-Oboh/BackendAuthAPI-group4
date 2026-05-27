# 🏥 Hospital Management System API

## Base URL

=======

# 🏥 Hospital Management System (HMS) API

A RESTful Hospital Management System backend API built with PHP MVC architecture.

This project currently uses mock/dummy data to mimic the HMS ERD structure while frontend development continues.

---

# 🚀 Tech Stack

- PHP
- MySQL
- MVC Architecture
- REST API
- JSON
- Apache (.htaccess)

---

# 📁 Project Structure

```text
hms/
├─ app/
│  ├─ controller/
│  │  ├─ AuthController.php
│  │  ├─ PatientController.php
│  │  ├─ DoctorController.php
│  │  └─ AppointmentController.php
│  │
│  ├─ model/
│  │  └─ User.php
│  │
│  └─ view/
│
├─ config/
│  └─ database.php
│
├─ core/
│
├─ public/
│
├─ routes/
│  └─ index.php
│
├─ .htaccess
│
└─ README.md
```

---

# 🌐 Base URL

> > > > > > > bc34484 (Added HMS mock API modules and README documentation)

```bash
http://localhost/hms
```

---

# 🔐 Authentication Endpoints

HEAD

## 1. Register User

## =======

## ✅ Register User

> > > > > > > bc34484 (Added HMS mock API modules and README documentation)

### Endpoint

```http
POST /register
```

### Full URL

```bash
http://localhost/hms/register
```

### Headers

```json
Content-Type: application/json
```

### Request Body

```json
{
  "fullname": "John Doe",
  "email": "john@gmail.com",
  "password": "123456"
}
```

### Success Response

```json
{
  "status": "success",
  "message": "User registered successfully"
}
```

### Error Response

```json
{
  "status": "error",
  "message": "Email already exists"
}
```

---

# 🔑 Login User

=======

## ✅ Login User

> > > > > > > bc34484 (Added HMS mock API modules and README documentation)

### Endpoint

```http
POST /login
```

### Full URL

```bash
http://localhost/hms/login
```

### Headers

```json
Content-Type: application/json
```

### Request Body

```json
{
  "email": "john@gmail.com",
  "password": "123456"
}
```

### Success Response

```json
{
  "status": "success",
  "message": "Login successful",
  "user": {
    "id": 1,
    "fullname": "John Doe",
    "email": "john@gmail.com"
  }
}
```

### Error Response

````json
{
  "status": "error",
  "message": "Invalid credentials"
=======
---

# 👨‍⚕️ Patients API

---

## ✅ Get All Patients

### Endpoint

```http
GET /patients
````

### Full URL

```bash
http://localhost/hms/patients
```

### Response

```json
[
  {
    "id": 1,
    "fullname": "John Doe",
    "date_of_birth": "1998-05-12",
    "blood_type": "O+",
    "emergency_contact": "08012345678"
  },
  {
    "id": 2,
    "fullname": "Sarah James",
    "date_of_birth": "2000-08-21",
    "blood_type": "A-",
    "emergency_contact": "08087654321"
  }
]
```

---

## ✅ Get Single Patient

### Endpoint

```http
GET /patient?id=1
```

### Full URL

```bash
http://localhost/hms/patient?id=1
```

### Response

```json
{
  "id": 1,
  "fullname": "John Doe",
  "date_of_birth": "1998-05-12",
  "blood_type": "O+",
  "emergency_contact": "08012345678"
>>>>>>> bc34484 (Added HMS mock API modules and README documentation)
}
```

---

# 📌 Notes

- All requests must use JSON
- All requests must use POST method
- Content-Type must be `application/json`
- # Passwords are hashed securely

## ✅ Create Patient

### Endpoint

```http
POST /patients
```

### Full URL

```bash
http://localhost/hms/patients
```

### Request Body

```json
{
  "fullname": "Jane Doe",
  "blood_type": "B+"
}
```

### Response

```json
{
  "status": "success",
  "message": "Patient created successfully"
}
```

---

# 👨‍⚕️ Doctors API

---

## ✅ Get All Doctors

### Endpoint

```http
GET /doctors
```

### Full URL

```bash
http://localhost/hms/doctors
```

### Response

```json
[
  {
    "id": 1,
    "fullname": "Dr. Michael Adams",
    "specialty": "Cardiology",
    "license_number": "DOC12345",
    "bio": "Senior cardiologist"
  },
  {
    "id": 2,
    "fullname": "Dr. Grace Lee",
    "specialty": "Neurology",
    "license_number": "DOC67890",
    "bio": "Neurology specialist"
  }
]
```

---

# 📅 Appointments API

---

## ✅ Get All Appointments

### Endpoint

```http
GET /appointments
```

### Full URL

```bash
http://localhost/hms/appointments
```

### Response

```json
[
  {
    "id": 1,
    "patient_id": 1,
    "doctor_id": 2,
    "appointment_date": "2026-08-20",
    "time_slot": "10:00 AM",
    "status": "Scheduled",
    "notes": "Routine checkup"
  }
]
```

---

## ✅ Create Appointment

### Endpoint

```http
POST /appointments
```

### Full URL

```bash
http://localhost/hms/appointments
```

### Request Body

```json
{
  "patient_id": 1,
  "doctor_id": 2,
  "appointment_date": "2026-08-20",
  "time_slot": "10:00 AM"
}
```

### Response

```json
{
  "status": "success",
  "message": "Appointment created successfully"
}
```

---

# 📌 API Features

✅ RESTful Routing  
✅ MVC Architecture  
✅ JSON API Responses  
✅ Password Hashing  
✅ Mock HMS Modules  
✅ Frontend Integration Ready  
✅ Apache URL Rewriting

---

# 📌 Important Notes

- All requests and responses use JSON
- Authentication endpoints use POST requests
- API currently uses mock data
- Database integration will be added later

---

# 📌 Frontend Testing

Use:

- Thunder Client
- Postman
- Fetch API
- Axios

to test the endpoints.

---

# 📌 Future Improvements

- JWT Authentication
- MySQL Integration
- Role-Based Access Control
- Medical Records Module
- Billing Module
- Labs Module
- Prescriptions Module
- Deployment

---

# 👨‍💻 Backend Developer

Hospital Management System Backend/API Development
Built with PHP MVC Architecture

> > > > > > > bc34484 (Added HMS mock API modules and README documentation)
