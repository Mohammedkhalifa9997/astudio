# ASTUDIO

## Installation & Setup

### **1. Clone the repository**

```sh
git clone https://github.com/Mohammedkhalifa9997/astudio.git
cd astudio
```

### **2. Install dependencies**

```sh
composer install
```

### **3. Configure the environment**

```sh
cp .env.example .env
```

-   Set up your database connection in `.env` file.

### **4. Run database migrations & seeders**

```sh
php artisan migrate --seed
```

### **5. Generate application key**

```sh
php artisan key:generate
```

### **6. Generate Passport Client**

```sh
php artisan passport:client --personal
```

### **7. Start the server**

```sh
php artisan serve
```

---

## API Documentation

### **Full Api Documentation**

link:https://documenter.getpostman.com/view/31408225/2sAYdmjSxn

### **Some Requests & Responses Examples**

### **Authentication**

#### **Register**

**Request:**

```http
POST /api/register
```

```json
{
  "first_name": "astudio",
  "last_name": "task",
  "email": "astudio@gmail.com",
  "password": "password"
  "password_confirmation": "password"
}
```

**Response:**

```json
{
    "data": {
        "user": {
            "id": 4,
            "first_name": "astudio",
            "last_name": "task",
            "full_name": "astudio task",
            "email": "astudio@gmail.com",
            "projects": []
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5ZTcyNGM4MC1lOWM0LTQyYmQtODdjNC01N2YyMzBkM2ZlZWIiLCJqdGkiOiIyODMyYzFhNjFiMDAzZDIyNGM0MmVlOWJlZjk5YzM0ZWFhNzIwZGQ0NTZjMTIzYjdiNWZhNzg1MmU2ZDhiZWRjZDg4Yjk3ZDhkOWRmZTM1YyIsImlhdCI6MTc0MjEzODgwOC41NDE4MDMsIm5iZiI6MTc0MjEzODgwOC41NDE4MTUsImV4cCI6MTc3MzY3NDgwOC41MjgwMDksInN1YiI6IjQiLCJzY29wZXMiOltdfQ.cfeOxBbYVGX5zEbqpnmGbpyC812T3hYS99JmoN5BQI7OeMtfEdjszJySdqOR1km40AimGvIvC7ZlsXcqYYtUNb8o4Xd9JYP3AjTL_-1pFifkoJK6wvFkto1sT5M5UqypJ6lAnlNmBMybc7PehbhCvZ5JVABivpdVPX27UzPnz_D6gjegWolVIuB9uZOz2EgBZmaDeGHJT3vs9u2rf6doxrdJTZExywUU6e9TkeNXIe7w6Qh0qXwrxhN2M3CSIVyiUlZCq8t5EdP12CZZRie6w1ZD6ruagWUCbNtqR54pElDc4qWNsbvr3MJQS9IhQivPP2LpxLwG7EhjpOaL9uq9-3SBGsEJiRPEJTHhKiEml6wa8zyyRCgxFrZy-ofNrBjrCm_gdo7hsZCaUEDoyqVnUJfYSQKkzpdMWOx65_I3geea8xA1npZOFt-iKkkXZxjtXom--643PiqHnRyWjuvf6tBI_QA7EVrSF6uyqgmqatXhRLSW7X8ken50EgBzHpQYK0eVoGnHLHSltuQp3dItJD-VV8GJFivzovmNG9g1DxHDy0xAYhc2vAXi9OIBU2BzqYbxPWviFIL8bU24qJQJbDemf9LMhfqfATXP7xQ99qy5cBWC_t_oW95b0oZ1bNwD1GFSYPJv_Q4lzyB2zskSTFzVfTOLLNQfZYSrSQ3zjZ4"
    },
    "message": "User registered successfully",
    "error": [],
    "status": 200
}
```

#### **Login**

**Request:**

```http
POST /api/login
```

```json
{
    "email": "astudio@gmail.com",
    "password": "password"
}
```

**Response:**

```json
{
    "data": {
        "user": {
            "id": 4,
            "first_name": "astudio",
            "last_name": "task",
            "full_name": "astudio task",
            "email": "astudio@gmail.com",
            "projects": []
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5ZTcyNGM4MC1lOWM0LTQyYmQtODdjNC01N2YyMzBkM2ZlZWIiLCJqdGkiOiIxZDdmZTk0NjkyMmZiZmRlZmY2YjJhYTMwYjcwY2U0NzQ2NWU4MWEzYTMxZTMxYWVmMTkyMjA5MDU0ZTQyMDBiMjYzYzk2ZmI2OGQ3ODZkYSIsImlhdCI6MTc0MjEzODgzOS45Njc1OTYsIm5iZiI6MTc0MjEzODgzOS45Njc2MDIsImV4cCI6MTc3MzY3NDgzOS44MDYzMzgsInN1YiI6IjQiLCJzY29wZXMiOltdfQ.X4PzNL-kdcLQ7LJsm55cDs6BQlaSOOHMypgP6G9mXuUbUSyduzpjq5tkEaYoXKfA8Q0RBf4b52P__ipYSgbT8IYMXrt8F9I2nrfxufGFjPfUCaQ7G7g9UTEYko1att0QwIOhUJkYdvF_sP172HQZRROmkJEPTBYpuWGx0R0owvDfDlGDdNuGyNRpzv2FG98pl3tAPENHCBgA1O_EA3TUfdIntvlCIEDe6OlsIt7ZVbEIktce7lonh8m-KmJ4fQlOZoOJcBZG3YEz12veMKgj2A7nn_uUP9NnvQ1CUrSoZTucrtgbv-jHUbBkug-nczhHrP2NOjBYZ4E_DoP9L-mF5oX7cv5-RvVRVBr9vqS1QlEGKT3kYclYuPn4X9SMJM-a66sQpW5xXWEHUfOpLl5zVK1VK_rBunmKuv2fPjf00fbP7Zf9pzW1boNcttkJtOKOvoZkgMZCdXzEbatr6QE_qDp9-wCD4guUuUhMvNKUQjr3aw_jZKGTswxZn8h3FvS8dEiwmhbIdSx0j98Z4vthErzb_pvrpjUBfO1NMt3WDwinB0M-wgPXe7UdSAUtRl8F_O8Hle5bqWuft4ajmUT-RZI4iJieM_0moPqa_u01fONXIcATRDvSTz3-nmdF44q-0pIVMpw8-Ga4VUQWg7n3_J4X0q7doZVUOONVAyDRFHM"
    },
    "message": "User Login successfully",
    "error": [],
    "status": 200
}
```

#### **Login**

**Request:**

```http
POST /api/logout
```

```
  Authorization: Bearer user_token
  Content-Type: application/json
```

**Response:**

```json
{
    "data": [],
    "message": "Successfully logged out",
    "error": [],
    "status": 200
}
```

### **Projects**

#### **Filtering Projects**

**Request with Operators:**

```http
GET /api/projects?filters[Department]=Marketing
```

**Response:**

```json
{
    "data": {
        "projects": [
            {
                "id": 2,
                "name": "Project Two",
                "status": "pending",
                "creator_id": 2,
                "creator_name": "Mohammed Ayman",
                "users": [],
                "attributes": [
                    {
                        "id": 2,
                        "attribute": {
                            "id": 1,
                            "name": "Department",
                            "type": "select",
                            "options": ["IT", "HR", "Marketing"]
                        },
                        "value": "Marketing"
                    }
                ]
            }
        ],
        "meta": {
            "total": 1,
            "per_page": 15,
            "current_page": 1,
            "last_page": 1
        },
        "links": {
            "first": "http://127.0.0.1:8000/api/projects?page=1",
            "last": "http://127.0.0.1:8000/api/projects?page=1",
            "prev": null,
            "next": null
        },
        "pages": ["http://127.0.0.1:8000/api/projects?page=1"]
    },
    "message": "",
    "error": [],
    "status": 200
}
```

**Request with Operators:**

```http
GET /api/projects/2
```

**Response:**

```json
{
    "data": {
        "project": {
            "id": 2,
            "name": "Project Two",
            "status": "pending",
            "creator_id": 2,
            "creator_name": "Mohammed Ayman",
            "users": [],
            "attributes": [
                {
                    "id": 2,
                    "attribute": {
                        "id": 1,
                        "name": "Department",
                        "type": "select",
                        "options": ["IT", "HR", "Marketing"]
                    },
                    "value": "Marketing"
                }
            ]
        }
    },
    "message": "",
    "error": [],
    "status": 200
}
```

## Test Credentials

Use these credentials to test the API:

```json
{
    "email": "mohammedayman9770@gmail.com",
    "password": "123456789"
}
```

---
