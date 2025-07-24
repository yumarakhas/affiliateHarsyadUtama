<?php

// Create admin user script
require_once __DIR__ . '/vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

try {
    // Create admin user
    $admin = User::create([
        'name' => 'Admin Gentle Living',
        'email' => 'admin@gentleliving.com',
        'email_verified_at' => now(),
        'password' => bcrypt('admin123'),
    ]);

    echo "✅ Admin user created successfully!\n";
    echo "📧 Email: admin@gentleliving.com\n";
    echo "🔑 Password: admin123\n";
    echo "🎯 You can now login to view affiliate data!\n";
} catch (\Exception $e) {
    echo "❌ Error creating admin user: " . $e->getMessage() . "\n";

    // Try to find existing admin
    $existingAdmin = User::where('email', 'admin@gentleliving.com')->first();
    if ($existingAdmin) {
        echo "ℹ️  Admin user already exists!\n";
        echo "📧 Email: admin@gentleliving.com\n";
        echo "🔑 Password: admin123\n";
    }
}
