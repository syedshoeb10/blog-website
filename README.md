 Blog Website with Admin Dashboard (Core PHP)

 📌 Project Overview

This is a **Blog Website built using Core PHP** with an **Admin Panel** where the admin can perform full **CRUD (Create, Read, Update, Delete)** operations on blogs. The project includes a **dynamic admin dashboard** that displays real-time statistics such as total blogs, published posts, draft posts, and recent activity.

The project follows a **simple MVC-like structure** using Core PHP, making it easy to understand, maintain, and extend.

---

✨ Features

 👤 Admin Panel

* Secure Admin Login & Logout (Session-based)
* Admin authentication middleware
* Create new blog posts
* Edit existing blog posts
* Delete blog posts
* Publish / Unpublish blogs
* Upload blog featured images
* Category management (optional)

 📊 Dynamic Admin Dashboard

* Total blogs count
* Published blogs count
* Draft blogs count
* Recent blog posts
* Latest activity overview
* Responsive dashboard UI

 🌐 Frontend (User Side)

* Blog listing page
* Single blog detail page
* Search blogs
* Filter blogs by category
* Clean and responsive design

---

## 🛠️ Tech Stack

* **Backend:** Core PHP (OOP)
* **Frontend:** HTML, CSS, Bootstrap 5, JavaScript
* **Database:** MySQL
* **Authentication:** PHP Sessions
* **Version Control:** Git & GitHub

---

 🗂️ Project Folder Structure

```
/blog-website
│── /admin
│   ├── dashboard.php
│   ├── login.php
│   ├── logout.php
│   ├── blog-create.php
│   ├── blog-edit.php
│   ├── blog-list.php
│
│── /config
│   └── db.php
│
│── /includes
│   ├── header.php
│   ├── footer.php
│   ├── auth.php
│
│── /uploads
│   └── blogs
│
│── /public
│   ├── index.php
│   ├── blog.php
│
│── /assets
│   ├── css
│   ├── js
│   └── images
│
│── README.md
```

---

 🗂️ Database Structure

`blogs` Table

| Field Name | Type                      | Description      |
| ---------- | ------------------------- | ---------------- |
| id         | INT                       | Primary Key      |
| title      | VARCHAR(255)              | Blog Title       |
| slug       | VARCHAR(255)              | SEO-friendly URL |
| content    | TEXT                      | Blog Content     |
| image      | VARCHAR(255)              | Featured Image   |
| status     | ENUM('published','draft') | Blog Status      |
| created_at | DATETIME                  | Created Time     |
| updated_at | DATETIME                  | Updated Time     |

 `admins` Table

| Field Name | Type         | Description     |
| ---------- | ------------ | --------------- |
| id         | INT          | Primary Key     |
| email      | VARCHAR(255) | Admin Email     |
| password   | VARCHAR(255) | Hashed Password |
| created_at | DATETIME     | Created Time    |

---

 🔐 Admin Modules

* Dashboard Overview
* Blog Management (CRUD)
* Category Management (Optional)
* Profile Settings
* Logout

---
 🚀 Installation Steps

1. Clone the repository

```bash
git clone https://github.com/syedshoeb10/blog-website.git
```

2. Move project to XAMPP / WAMP / LAMP `htdocs` folder

```bash
C:/xampp/htdocs/blog-website
```

3. Create database in MySQL

```sql
CREATE DATABASE blog_website;
```

4. Configure database connection
   Edit `config/db.php`

```php
$conn = new mysqli('localhost', 'root', '', 'blog_website');
```

5. Import database tables

* Import provided `.sql` file OR
* Manually create tables using SQL

6. Run the project

```
http://localhost/blog-website
```
 🔑 Admin Login (Demo)

* **Email:** [admin@example.com](mailto:admin@example.com)
* **Password:** admin123

 🔒 Security Features

* Password Hashing (`password_hash()`)
* Session-based authentication
* Form validation
* SQL Injection prevention (Prepared Statements)
* Secure image upload validation

---

 📈 Future Enhancements

* Comment System
* Blog Likes & Views Counter
* SEO Meta Management
* REST API Integration
* Multi-Admin Support

---
 👨‍💻 Author

**Syed Shoeb**
Senior PHP Developer
