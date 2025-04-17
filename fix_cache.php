<?php

$cacheDir = __DIR__ . '/bootstrap/cache';

if (!is_dir($cacheDir)) {
    echo "📁 Folder 'bootstrap/cache' belum ada. Membuat...\n";
    mkdir($cacheDir, 0777, true);
    echo "✅ Folder berhasil dibuat.\n";
} else {
    echo "📂 Folder sudah ada.\n";
}

if (!is_writable($cacheDir)) {
    echo "⚠️  Folder tidak bisa ditulis. Mencoba ubah permission...\n";
    if (chmod($cacheDir, 0777)) {
        echo "✅ Permission berhasil diubah.\n";
    } else {
        echo "❌ Gagal ubah permission. Coba run terminal sebagai administrator.\n";
    }
} else {
    echo "🟢 Folder bisa ditulis.\n";
}

echo "✅ Semua siap. Sekarang kamu bisa coba 'php artisan serve'!\n";
