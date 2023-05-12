<?php
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $mysqli = new mysqli("localhost", "root", "");

    // Buat Database Jika Belum Ada
    $query = "CREATE DATABASE IF NOT EXISTS db_pegawai ";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->erorr, $mysqli->errno);
    } else {
        echo "Database 'db_pegawai' berhasil dibuat <br>";
    };

    // Pilih Database
    $mysqli->select_db("db_pegawai");
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'db_pegawai' berhasil dipilih <br>";
    };

    // Hapus Tabel jika ada
    $query = "DROP TABLE IF EXISTS pegawai";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    $query = "DROP TABLE IF EXISTS golongan";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    $query = "DROP TABLE IF EXISTS proyek";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    // Buat Tabel
    $query = "CREATE TABLE pegawai (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nip int,
        nama VARCHAR(50),
        gender enum('L','P'),
        tgl_lahir date,
        alamat VARCHAR(50),
        golongan INT,
        nama_file varchar(100)
        )";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'pegawai' berhasil dibuat <br>";
    };

    $query = "CREATE TABLE golongan (
        id INT PRIMARY KEY AUTO_INCREMENT,
        jabatan varchar(50),
        gaji INT
        )";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'golongan' berhasil dibuat <br>";
    };

    $query = "CREATE TABLE proyek (
        id INT PRIMARY KEY AUTO_INCREMENT,
        kode VARCHAR(4),
        nama VARCHAR(50),
        lokasi VARCHAR(50)
        )";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'proyek' berhasil dibuat <br>";
    };

    // Isi Tabel
    $query = "INSERT INTO pegawai VALUES
        ('', '111', 'Ariana', 'P', '1999/05/12', 'Jakarta', 4, 'avatar2.png'),
        ('', '112', 'Boby', 'L', '2001/11/27', 'Sidoarjo', 2, 'avatar.png'),
        ('', '113', 'Chisa', 'P', '1890/02/14', 'Osaka', 6, 'avatar3.png')
        ;";

    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'pegawai' berhasil diisi " . $mysqli->affected_rows . " baris data <br>";
    };

    $query = "INSERT INTO golongan (jabatan, gaji) VALUES
        ('Magang', 500000),
        ('Paruh Waktu', 1000000),
        ('Karyawan Tetap', 2500000),
        ('Asisten Proyek', 5000000),
        ('Ketua Proyek', 7500000),
        ('Kepala Departemen', 10000000)
        ;";

    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'golongan' berhasil diisi " . $mysqli->affected_rows . " baris data <br>";
    };

    $query = "INSERT INTO proyek (kode, nama, lokasi) VALUES
        ('AAA', 'Berusaha Bangkit', 'Online'),
        ('BBB', 'Wonderful Sulawesi', 'Manado'),
        ('CCC', 'Your Majesty', 'Taipei'),
        ('DDD', 'Rakyat Maju', 'Online'),
        ('EEE', 'Prokarta Kita', 'Probolinggo')
        ;";

    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Tabel 'proyek' berhasil diisi " . $mysqli->affected_rows . " baris data <br>";
    };

} catch (Exception $e) {
    echo "koneksi / Query bermasalah : " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}
?>