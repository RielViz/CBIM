-- ============================================================================
-- MIGRASI: tabel pendaftaran (PPDB terpadu, SD, TK) + role admin TK/SD
-- Aman dijalankan berulang (CREATE TABLE IF NOT EXISTS).
-- Dibutuhkan karena dump u1711594_yayasan_v2.sql tidak memuat tabel-tabel ini.
-- ============================================================================

CREATE TABLE IF NOT EXISTS `pendaftaran` (
    `id_pendaftaran` INT(11) NOT NULL AUTO_INCREMENT,
    `no_registrasi`  VARCHAR(40)  NOT NULL,
    `jenjang`        VARCHAR(20)  NOT NULL,
    `nama_lengkap`   VARCHAR(255) NOT NULL,
    `nik_nisn`       VARCHAR(50)  DEFAULT NULL,
    `jenis_kelamin`  VARCHAR(20)  DEFAULT NULL,
    `tempat_lahir`   VARCHAR(100) DEFAULT NULL,
    `tgl_lahir`      DATE         DEFAULT NULL,
    `agama`          VARCHAR(50)  DEFAULT NULL,
    `nama_ortu`      VARCHAR(255) DEFAULT NULL,
    `pekerjaan_ortu` VARCHAR(255) DEFAULT NULL,
    `no_hp`          VARCHAR(30)  DEFAULT NULL,
    `email`          VARCHAR(255) DEFAULT NULL,
    `alamat`         TEXT         DEFAULT NULL,
    `asal_sekolah`   VARCHAR(255) DEFAULT NULL,
    `catatan`        TEXT         DEFAULT NULL,
    `status`         VARCHAR(30)  NOT NULL DEFAULT 'Baru',
    `tanggal_daftar` DATETIME     NOT NULL,
    PRIMARY KEY (`id_pendaftaran`),
    KEY `idx_no_registrasi` (`no_registrasi`),
    KEY `idx_jenjang` (`jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `pendaftaran_sd` (
    `id_pendaftaran` INT(11) NOT NULL AUTO_INCREMENT,
    `nama_lengkap`   VARCHAR(255) NOT NULL,
    `nisn`           VARCHAR(50)  DEFAULT NULL,
    `jenis_kelamin`  VARCHAR(20)  DEFAULT NULL,
    `tempat_lahir`   VARCHAR(100) DEFAULT NULL,
    `tgl_lahir`      DATE         DEFAULT NULL,
    `nama_ortu`      VARCHAR(255) DEFAULT NULL,
    `no_hp`          VARCHAR(30)  DEFAULT NULL,
    `alamat`         TEXT         DEFAULT NULL,
    `tanggal_daftar` DATETIME     NOT NULL,
    `status`         VARCHAR(30)  NOT NULL DEFAULT 'Baru',
    PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `pendaftaran_tk` (
    `id_pendaftaran` INT(11) NOT NULL AUTO_INCREMENT,
    `nama_lengkap`   VARCHAR(255) NOT NULL,
    `kelompok`       VARCHAR(100) DEFAULT NULL,
    `jenis_kelamin`  VARCHAR(20)  DEFAULT NULL,
    `tgl_lahir`      DATE         DEFAULT NULL,
    `nama_ortu`      VARCHAR(255) DEFAULT NULL,
    `no_hp`          VARCHAR(30)  DEFAULT NULL,
    `alamat`         TEXT         DEFAULT NULL,
    `tanggal_daftar` DATETIME     NOT NULL,
    `status`         VARCHAR(30)  NOT NULL DEFAULT 'Baru',
    PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Role admin_tk / admin_sd (lihat migration_admin_tk_sd.sql langkah 1)
ALTER TABLE `auth` MODIFY `role` VARCHAR(30) NOT NULL DEFAULT 'administrator';

-- Gelombang pendaftaran (dikelola dari admin SD / admin TK). Juga dibuat otomatis oleh Gelombang_model.
CREATE TABLE IF NOT EXISTS `gelombang_ppdb` (
    `id_gelombang`   INT(11) NOT NULL AUTO_INCREMENT,
    `jenjang`        VARCHAR(10)  NOT NULL,
    `nama_gelombang` VARCHAR(150) NOT NULL,
    `tgl_mulai`      DATE         DEFAULT NULL,
    `tgl_selesai`    DATE         DEFAULT NULL,
    `kuota`          INT(11)      DEFAULT NULL,
    `keterangan`     TEXT         DEFAULT NULL,
    `aktif`          TINYINT(1)   NOT NULL DEFAULT 1,
    `urutan`         INT(11)      NOT NULL DEFAULT 0,
    PRIMARY KEY (`id_gelombang`),
    KEY `idx_jenjang` (`jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
