<?php
// Simple database check script

$config = [
    'host' => 'localhost',
    'dbname' => 'affiliate_harsyad_utama',
    'username' => 'root',
    'password' => ''
];

try {
    $pdo = new PDO(
        "mysql:host={$config['host']};dbname={$config['dbname']}",
        $config['username'],
        $config['password']
    );

    // Check if affiliate data exists
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM affiliate_registrations");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "🔍 Affiliate registrations in database: " . $result['count'] . "\n";

    // Check if admin user exists
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM users WHERE email = 'admin@gentleliving.com'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "👤 Admin users in database: " . $result['count'] . "\n";

    // If no admin, create one
    if ($result['count'] == 0) {
        $hashedPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, email_verified_at, password, created_at, updated_at) VALUES (?, ?, NOW(), ?, NOW(), NOW())");
        $stmt->execute(['Admin Gentle Living', 'admin@gentleliving.com', $hashedPassword]);
        echo "✅ Admin user created!\n";
    }

    echo "\n📋 Login credentials:\n";
    echo "Email: admin@gentleliving.com\n";
    echo "Password: admin123\n";
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "\n";
    echo "ℹ️  Please check your database configuration in .env file\n";
}
