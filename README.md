# 🚗 CarBookingWeb

A **Car Booking Website** built with **native PHP (PDO)** and **MySQL** to manage vehicle rental data. Includes car search, online booking, customer testimonials, and a contact form — all powered by a simple, secure CRUD system.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

---

## ✨ Features

- 🔍 **Search Cars** — filter by brand, type, and maximum price
- 📅 **Online Booking** — booking form with auto-generated invoice ID
- 💬 **Customer Testimonials** — dynamic slider from database
- 📧 **Contact Form** — messages saved to database
- 🗄️ **PDO + Prepared Statements** — secure against SQL injection
- 🎨 **Responsive Design** — powered by Bootstrap 4

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP (native, PDO) |
| Database | MySQL / MariaDB |
| Frontend | HTML5, CSS3, JavaScript |
| Framework | Bootstrap 4 |
| Server | Laragon / XAMPP |

---

## 📂 Project Structure
carbookingweb/
├── css/ # Stylesheets
├── js/ # JavaScript files
├── images/ # Vehicle & UI images
├── index.php # Main page (search + listings)
├── save_booking.php # Handle booking form
├── koneksi.php # DB connection (not tracked)
├── koneksi.example.php # DB connection template
├── about.html # About page
├── services.html # Services page
├── gallery.html # Vehicles gallery
├── client.html # Client testimonials
├── contact.html # Contact page
├── .gitignore
└── README.md
