# 🍛 Indian Masala House – Restaurant Website

A full-stack restaurant web application built with **Laravel**, featuring a dynamic menu categorized by traditional Indian dishes, combo meals, and beverages. Designed for ease of browsing, managing, and updating restaurant offerings.

---

🌐 Live Preview [click here](https://indianmasalahouse.no/)

🚀 [Visit the website (Local)](http://127.0.0.1:8000)

---

## 🔧 Tech Stack

- **Backend:** Laravel 9 (PHP 8+)
- **Frontend:** Blade, Bootstrap 5
- **Database:** SQLite
- **Authentication:** PHP Core
- **Media Handling:** Laravel File Storage
- **Version Control:** Git, GitHub

---

## 🧩 Key Features

- 🧾 **Dynamic Menu** – Fully categorized menu based on Indian cuisines
- 🖼️ **Dish Images** – Upload and display avatars for each food item
- 💰 **Full & Half Prices** – Set different prices for full and half portions
- 🌶️ **Allergen Indicators** – Optional allergen info for each dish
- 🧠 **Searchable & Filterable** – Menu searchable by name/category
- 🥗 **100% Vegan Options** – Filter items by vegan/veg/non-veg
- 🛠️ **Admin Panel** – Manage categories, items, pricing, visibility
- 🖼️ **Media Uploads** – For both categories and individual food items

---

## 🧪 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/singh-sajal/indian_masala_house.git
cd indian-masala-house
```

###  2. Install dependencies
```bash
composer install
```

### 3. Set up environment
#### Copy the example environment file and generate an application key:
```bash
cp .env.example .env
php artisan key:generate
```

#### Update your .env file with database credentials:

```env
DB_DATABASE=travo_leads_db
DB_USERNAME=root
DB_PASSWORD=
```

### Migrate & Seed

```bash
php artisan migrate --seed
```

### Serve the Web Application

```bash
php artisan serve
```

Visit the application 👉 [http://127.0.0.1:8000](http://127.0.0.1:8000) 
