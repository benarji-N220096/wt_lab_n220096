# 🎓 LearnHub — Online Learning Platform

A full-stack online course platform built with **HTML, CSS, JavaScript** (frontend) and **PHP + MongoDB** (backend), featuring Google OAuth authentication.

---

## 📁 Project Structure

```
wt_lab_n220096/
├── index.html              # Landing / entry point
├── home.html               # Dashboard (logged-in view)
├── courses.html            # All courses listing
├── course_detail.html      # Individual course detail page
├── signin.html             # Sign-in page
├── signup.html             # Sign-up page
├── about.html              # About page
├── contact.html            # Contact page
│
├── assets/
│   ├── css/
│   │   └── style.css       # Global stylesheet
│   ├── js/
│   │   └── main.js         # Header/footer loader & shared logic
│   ├── images/
│   │   ├── courses/        # SVG thumbnails & logos for 9 course tracks
│   │   ├── java-course.png
│   │   ├── web-course.png
│   │   ├── dsa-course.png
│   │   └── mentor-profile.jpg
│   ├── media/              # Background audio
│   ├── pdf/                # Downloadable PDF resources
│   └── video/              # Background video files
│
├── components/
│   ├── header.html         # Shared site header / navbar
│   └── footer.html         # Shared site footer
│
├── backend/
│   ├── db.php              # MongoDB connection
│   ├── signin_action.php   # Login handler
│   ├── signup_action.php   # Registration handler
│   ├── logout.php          # Session logout
│   ├── auth_status.php     # Auth state checker
│   ├── google-config.php   # Google OAuth config
│   ├── google-login.php    # Redirect to Google
│   ├── google-callback.php # OAuth callback handler
│   ├── check_users.php     # Dev utility: list users
│   ├── list_dbs.php        # Dev utility: list MongoDB DBs
│   ├── generate_svgs.php   # SVG asset generator
│   ├── test_db.php         # DB connection test
│   └── test_db_mongo.php   # MongoDB connection test
│
├── labs/
│   ├── html/
│   │   └── lab01.html      # Lab 1 HTML exercise
│   ├── php/
│   │   ├── file_functions.php
│   │   ├── file_modes.php
│   │   └── file_upload.php
│   ├── js/
│   │   └── sbc.js          # Lab JS exercise
│   └── resources/
│       └── DAA complete 2 units.pdf
│
├── composer.json           # PHP dependencies (MongoDB driver)
└── .gitignore
```

---

## 🚀 Features

- 🔐 **Authentication** — Email/password + Google OAuth 2.0 Sign-In
- 📚 **9 Course Tracks** — Java, DSA, Python, MERN, Cyber Security, C++, Gen AI, Data Science, Cloud
- 🎨 **Dynamic UI** — Animated dashboard, course cards with SVG imagery
- 🗄️ **MongoDB Backend** — User data stored via PHP MongoDB driver
- 🧩 **Reusable Components** — Header & footer loaded dynamically via JS fetch

---

## ⚙️ Setup & Run

### Prerequisites
- PHP 8.x with MongoDB extension
- Composer
- XAMPP / any local server (or PHP built-in server)

### Steps

```bash
# 1. Install PHP dependencies
composer install

# 2. Configure Google OAuth
#    Edit backend/google-config.php with your Client ID & Secret

# 3. Start a local server from project root
php -S localhost:8000

# 4. Open in browser
http://localhost:8000/index.html
```

---

## 👨‍💻 Author

**K. Benarji** — Roll No: N220096  
Web Technologies Lab | Academic Project
