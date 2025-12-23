
una kay iconfigure sa database gamit ang wamp sa phpadmin ug create db name ng "student_announcements"

php artisan migrate:fresh

php artisan tinker

then type inside sa tinker

use Illuminate\Support\Facades\Hash;

User::create([ 'name' => 'System Admin', 'email' => 'admin@school.com', 'password' => Hash::make('admin123'), 'role' => 'admin', ]);

php artisan config:clear && php artisan cache:clear && php artisan route:clear && php artisan view:clear

php artisan optimize

php artisan serve

8.then ang iya url kay "http://127.0.0.1:8000/admin/login"

then log in Email: admin@school.com Password: admin123
