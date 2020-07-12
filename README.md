<h2>Project for "Phát triển ứng dụng web" - "UIT - VNUHCM"</h2>
<p>Live Demo: https://koroko.dev </p>
<div>
<h3>Thành viên tham gia</h3>
<hr>
<ul>
    <li>Đặng Ngọc Tân - 18521374</li>
    <li>Nguyễn Văn Phát - 18521231</li>
    <li>Nguyễn Trần Thị Bích Trâm - 18521520</li>
    <li>Trần Bình Tú - 18521588</li>
<ul>
    </div>
    <div>
<h3>Hướng dẫn cài trên localhost</h3>
<hr>
<h4>Chuẩn bị</h4>
<ul>
    <li>Composer</li>
    <li>NodeJS (dùng để cài đặt gói) </li>
    <li>Apache Http Server (có thể dùng Wamp, Xamp hoặc Laragon)</li>
</ul>
<h4>Tiến hành các bước</h4>
<h5>Bước 1: Git clone dự án về máy, sau đó <code>cd</code> tới đường dẫn của bạn </h5>
<h5>Bước 2: Cài các gói composer </h5>
Bạn vào cmd, gõ câu lệnh sau: <code>composer install</code> và chờ các gói được cài đặt xong
<h5>Bước 3: Cài các gói npm</h5>
Gõ câu lệnh sau: <code>npm install</code> và chờ các gói được cài đặt xong
<h5>Bước 4: Tạo key</h5>
Gõ câu lệnh sau <code>php artisan key:generate</code>
<h5>Bước 5: Tạo database</h5>
Bạn có thể tự tạo db, sau đó dùng <code>php artisan migrate</code> để laravel đồng bộ với db và tạo sẵn table, tuy nhiên trong file mình up có sẵn db có sẵn dữ liệu, và web được code theo db đó nên để không phát sinh lỗi, khuyến nghị nên import file sql trên
<h5>Bước 6: Chạy</h5>
Trước khi chạy, cần phải mở WAMP, XAMP hoặc gì đó để bật Apache server, sau đó gõ <code>php artisan serve</code>. Web sẽ nằm trên localhost:8000.
    </div>
    
