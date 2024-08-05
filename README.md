## Kenalan dengan AWS S3: Penyimpanan Objek Andal dan Skalabel Kebutuhan akan penyimpanan data yang andal, skalabel dan aman

Object Storage S3 adalah layanan penyimpanan awan yang disediakan oleh Amazon Web Services. Dengan kata lain, s3 memungkinkan kita untuk menyimpan dan mengelola sejumlah besar data dalam format objek, gambar, video, dokumen, dan file lainnya. Ini biasanya tersedia untuk menyimpan konten statis seperti yang saat ini berfungsi sebagai gambar, video di web yang menarikatau file lain yang diperlukan untuk aplikasi baik web dan mobile.

1. Mempersiapkan Object Storage

Dalam artikel ini menggunakan BackBlaze B2 Cloud Storage sebagai service. Masuk akun yang telah dibuat, kemudian membuat bucket baru seperti di gambar .

<p align="center">
<img src="/public/assets/images/bucket-page.jpg" width="400" alt="Bucket page">
</p>

Kemudian selanjutnya ke tab “application key” untuk membuat application key baru kemudian simpan, kemudian akan mendapatkan sebuah key yang digunakan untuk service di projeck Laravel

<p align="center">
<img src="/public/assets/images/make-key.png" width="400" alt="Bucket page">
</p>

2.  Setting APP laravel

-   **Buat Salinan file .env**
    ```bash
    cp .env.example .env
    ```
-   **Instal Dependencies**

    ```bash
    composer install
    ```

-   **Tambahkan dan Sesuaikan pengaturan AWS Bucket S3**

    ```
    AWS_ACCESS_KEY_ID=keyID
    AWS_SECRET_ACCESS_KEY=applicationKey
    AWS_DEFAULT_REGION=us-west-000
    AWS_BUCKET=bucket-name
    AWS_ENDPOINT=S3 Endpoint
    ```

3. Jalankan Laravel

    ```bash
    php artisan serve
    ```

4. Jalakan Laravel Menggunakan Browser di halaman [http://127.0.0.1:8000](http://127.0.0.1:8000/upload)

5. Upload Image dan jika berhasil maka akan tampil dan tersimpan di BackBlaze

<p align="center">
<img src="/public/assets/images/result.png" width="400" alt="Bucket page">
</p>
