# Paperus Frontend

Paperus is a website designed to showcase company profiles and facilitate online product sales. Utilizing Laravel, Laravel Breeze, Filament, and Livewire, this site offers a modern and responsive interface, allowing users to easily access company information and explore and purchase the products offered. These features support a smooth and efficient user experience when interacting with the company. [Paperus backend](https://github.com/Akbarwp/Project-Paperus-AdminPanel) can be accessed at the following link.

## Tech Stack

- **Laravel 8**
- **MySQL Database**
- **Laravel Breeze**
- **Livewire**
- **TailwindCSS**
- **daisyUI**

## Features

- Main features available in this application:
  - Company profile
  - Product sales

## Installation

Follow the steps below to clone and run the project in your local environment:

1. Clone repository:

    ```bash
    git clone https://github.com/Akbarwp/Project-Paperus-ECommerce.git
    ```

2. Install dependencies use Composer and NPM:

    ```bash
    composer install
    npm install
    ```

3. Copy file `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Setup database in the `.env` file:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Run migration database:

    ```bash
    php artisan migrate
    ```

7. Run website:

    ```bash
    npm run watch
    php artisan serve
    ```

## Screenshot

- ### **Homepage**

<img src="https://github.com/user-attachments/assets/5e609fac-265c-456b-9c97-9eacaf4a3414" alt="Halaman Utama" width="" />
<br><br>

- ### **Portofolio page**

<img src="https://github.com/user-attachments/assets/8acfd0b1-2467-450d-8a0e-a7217096bc6f" alt="Halaman Portofolio" width="" />
<br><br>

- ### **Product page**

<img src="https://github.com/user-attachments/assets/0190cb52-10bb-4c69-8a7a-4edea2f27f5e" alt="Halaman Toko" width="" />
&nbsp;&nbsp;&nbsp;
<img src="https://github.com/user-attachments/assets/bacdb95a-9cad-4289-97a3-1e89a47b4b65" alt="Halaman Detail Produk" width="" />
<br><br>

- ### **About me page**

<img src="https://github.com/user-attachments/assets/013b9bef-731c-4fa6-bb37-afd5e6f15ec9" alt="Halaman Tentang Kami" width="" />
<br><br>

- ### **Profile page**

<img src="https://github.com/user-attachments/assets/83baff8d-f476-4bb6-8448-cff840363d05" alt="Halaman Profil" width="" />
<br><br>

- ### **Cart page**

<img src="https://github.com/user-attachments/assets/2e9cdefe-c9c6-40ea-b246-efe97de6d8ae" alt="Halaman Keranjang" width="" />
<br><br>
