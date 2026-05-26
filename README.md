# 🏥 Hospital Management System API

## Base URL

```bash
http://localhost/hms
```

---

# 🔐 Authentication Endpoints

## 1. Register User

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

```json
{
  "status": "error",
  "message": "Invalid credentials"
}
```

---

# 📌 Notes

- All requests must use JSON
- All requests must use POST method
- Content-Type must be `application/json`
- Passwords are hashed securely
