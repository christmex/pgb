# tahap
1. Install laravel ``` composer create-project laravel/laravel pgb ```
2. Masuk ke project ``` cd pgb ```
3. Buka kode editor ``` code . ```
4. Install Filament ``` composer require filament/filament:"^3.2" -W ```
5. Install Panel Filament ``` php artisan filament:install --panels ```
6. Buat Filament User ``` php artisan make:filament-user ```
7. Buat Teacher Model dan Migration ``` php artisan make:model Teacher -m ```
8. Lakukan Migrasi database ```  php artisan migrate ```
9. Buat Resource(CRUD) Teacher Model ``` php artisan make:filament-resource Teacher --generate --simple ```
10. Buat Criteria Model dan Migration ``` php artisan make:model Criteria -m ```
11. Lakukan Migrasi Database ``` php artisan migrate ```
12. Buat Resource(CRUD) Criteria Model ``` php artisan make:filament-resource Criteria --generate --simple ```



Kenapa harus pakai laravel 
supaya mempercepat proses development



apa itu migration? 
ini untuk database, mendefenisikan kolom lewat migration