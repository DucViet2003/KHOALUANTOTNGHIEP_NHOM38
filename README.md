# 🚀 Dự án Laravel - Tên dự án

Mô tả ngắn gọn về dự án của bạn.  

## 📌 Yêu cầu hệ thống

- PHP >= 10.x
- Composer
- MySQL: Để lưu trữ dữ liệu
- Git: Để tải mã nguồn từ GitHub

## 📥 Hướng dẫn cài đặt và khởi chạy dự án
- Clone dự án từ GitHub (tuỳ chọn, nếu chưa có mã nguồn):
    https://github.com/DucViet2003/KHOALUANTOTNGHIEP_NHOM38

- Tạo tệp cấu hình .env: Tạo tệp .env trong thư mục gốc dự án và thêm các thông tin cần thiết:
# Server configuration

# Database configuration
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=homedata

DB_USERNAME=root

DB_PASSWORD=

# Email Configuration for Nodemailer
MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME="nguyenducviet2033@gmail.com"
MAIL_PASSWORD="hawpcxwyjwmtcrmd"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="nguyenducviet2033@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"

- Tạo cơ sở dữ liệu 
    Đảm bảo rằng cơ sở dữ liệu đã tạo trong MySQL.


### 1️⃣ Khởi chạy ứng dụng
1. Chạy server:
    php artisan serve
2. Truy cập ứng dụng tại: http://localhost:3000