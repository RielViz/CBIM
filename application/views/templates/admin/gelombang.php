<?php
defined('BASEPATH') or exit('No direct script access allowed');

/* ============================================================================
   KELOLA GELOMBANG PENDAFTARAN (dipakai bersama oleh admin SD dan admin TK)
   Variabel: $unit_kode ('sd'|'tk'), $jenjang ('SD'|'TK'), $data_gelombang
   ========================================================================== */

$base  = 'admin-' . $unit_kode;
$rekam = [];
$hari_ini = date('Y-m-d');
$nama_bln = [1=>'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
$tgl = function ($t) use ($nama_bln) {
    if (empty($t)) { return '—'; }
    $d = DateTime::createFromFormat('Y-m-d', $t);
    return $d ? $d->format('j') . ' ' . $nama_bln[(int) $d->format('n')] . ' ' . $d->format('Y') : '—';
};

foreach ($data_gelombang as $g) {
    $rekam['g' . $g['id_gelombang']] = [
        'id_gelombang'   => $g['id_gelombang'],
        'nama_gelombang' => $g['nama_gelombang'],
        'tgl_mulai'      => $g['tgl_mulai'],
        'tgl_selesai'    => $g['tgl_selesai'],
        'kuota'          => $g['kuota'],
        'keterangan'     => $g['keterangan'],
        'link_daftar'    => isset($g['link_daftar']) ? $g['link_daftar'] : '',
        'urutan'         => $g['urutan'],
        'aktif'          => $g['aktif'],
    ];
}
?>

<div class="kepala">
    <div class="kepala__teks">
        <p>Atur gelombang pendaftaran <strong><?= adm_e($jenjang); ?></strong> yang tampil di halaman
           <a href="<?= base_url($unit_kode . '/ppdb'); ?>" target="_blank" rel="noopener">/<?= adm_e($unit_kode); ?>/ppdb</a>.
           Status (Dibuka / Segera / Ditutup) dihitung otomatis dari tanggal.
           Gelombang yang dinonaktifkan tidak tampil di situs.</p>
    </div>
    <div class="kepala__aksi">
        <button type="button" class="tbl tbl--utama" data-buka="dialogTambah"><?= adm_ikon('tambah', 16); ?> Tambah gelombang</button>
    </div>
</div>

<?php if ($this->session->flashdata('error')): ?>
    <p class="cap cap--merah" style="margin-bottom:14px"><?= adm_e($this->session->flashdata('error')); ?></p>
<?php endif; ?>
<?php if ($this->session->flashdata('success')): ?>
    <p class="cap cap--hijau" style="margin-bottom:14px"><?= adm_e($this->session->flashdata('success')); ?></p>
<?php endif; ?>

<div class="daftar-konten">
    <?php if (empty($data_gelombang)): ?>
        <article class="konten konten--kosong">
            <div class="konten__kepala">
                <span class="konten__ikon"><?= adm_ikon('konten', 17); ?></span>
                <div><small>Belum ada data</small><h3>Belum ada gelombang</h3></div>
            </div>
            <div class="konten__isi"><p style="margin:0">Halaman pendaftaran hanya menampilkan tombol daftar sampai ada gelombang yang ditambahkan.</p></div>
            <div class="konten__kaki">
                <span class="cap">Kosong</span>
                <button type="button" class="tbl tbl--utama tbl--kecil" data-buka="dialogTambah"><?= adm_ikon('tambah', 14); ?> Tambah sekarang</button>
            </div>
        </article>
    <?php endif; ?>

    <?php foreach ($data_gelombang as $g):
        $st = Gelombang_model::status($g, $hari_ini);
        if (!(int) $g['aktif']) { $cap = ['Nonaktif', '']; }
        elseif ($st === 'buka')  { $cap = ['Dibuka', 'cap--hijau']; }
        elseif ($st === 'segera') { $cap = ['Segera dibuka', 'cap--kuning']; }
        else { $cap = ['Ditutup', 'cap--merah']; }
    ?>
        <article class="konten">
            <div class="konten__kepala">
                <span class="konten__ikon"><?= adm_ikon('konten', 17); ?></span>
                <div style="min-width:0">
                    <small>Urutan <?= (int) $g['urutan']; ?> &middot; <?= adm_e($jenjang); ?></small>
                    <h3><?= adm_e($g['nama_gelombang']); ?></h3>
                </div>
            </div>
            <div class="konten__isi">
                <p style="margin:0 0 6px;color:var(--navy);font-weight:600"><?= adm_e($tgl($g['tgl_mulai'])); ?> &ndash; <?= adm_e($tgl($g['tgl_selesai'])); ?></p>
                <?php if ($g['kuota'] !== NULL && $g['kuota'] !== ''): ?>
                    <p style="margin:0 0 6px">Kuota: <strong><?= (int) $g['kuota']; ?></strong> siswa</p>
                <?php endif; ?>
                <?php if (!empty($g['keterangan'])): ?>
                    <p class="potong-2" style="margin:0"><?= adm_e($g['keterangan']); ?></p>
                <?php endif; ?>
                <?php if (!empty($g['link_daftar'])): ?>
                    <p class="potong-2" style="margin:6px 0 0">Link daftar: <a href="<?= adm_e($g['link_daftar']); ?>" target="_blank" rel="noopener"><?= adm_e($g['link_daftar']); ?></a></p>
                <?php else: ?>
                    <p style="margin:6px 0 0;color:#a06a00">Link pendaftaran belum diisi.</p>
                <?php endif; ?>
            </div>
            <div class="konten__kaki">
                <span class="cap <?= $cap[1]; ?>"><?= adm_e($cap[0]); ?></span>
                <div class="aksi">
                    <button type="button" class="tbl tbl--garis tbl--kecil" data-buka="dialogUbah" data-rekam="g<?= (int) $g['id_gelombang']; ?>"><?= adm_ikon('ubah', 14); ?> Ubah</button>
                    <button type="button" class="ikon-tbl ikon-tbl--hapus" title="Hapus" aria-label="Hapus <?= adm_e($g['nama_gelombang']); ?>"
                            data-hapus="<?= base_url($base . '/delete_gelombang'); ?>"
                            data-kirim='<?= adm_e(adm_json(['id_gelombang' => $g['id_gelombang']])); ?>'
                            data-judul="Hapus gelombang ini?"
                            data-ket="Gelombang akan hilang dari halaman pendaftaran."
                            data-nama="<?= adm_e($g['nama_gelombang']); ?>"><?= adm_ikon('hapus', 15); ?></button>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</div>

<script type="application/json" id="data-halaman"><?= adm_json($rekam); ?></script>

<?php
/* Isi formulir tambah/ubah dipakai dua kali, hanya prefiks id & aksi yang beda */
$bidang = function ($p) { ob_start(); ?>
            <div class="bidang">
                <label for="<?= $p; ?>_nama">Nama gelombang <span class="wajib">*</span></label>
                <input type="text" id="<?= $p; ?>_nama" name="nama_gelombang" required maxlength="150" placeholder="Contoh: Gelombang 1">
            </div>
            <div class="baris-bidang">
                <div class="bidang">
                    <label for="<?= $p; ?>_mulai">Tanggal mulai</label>
                    <input type="date" id="<?= $p; ?>_mulai" name="tgl_mulai">
                </div>
                <div class="bidang">
                    <label for="<?= $p; ?>_selesai">Tanggal selesai</label>
                    <input type="date" id="<?= $p; ?>_selesai" name="tgl_selesai">
                </div>
            </div>
            <div class="baris-bidang">
                <div class="bidang">
                    <label for="<?= $p; ?>_kuota">Kuota (opsional)</label>
                    <input type="number" id="<?= $p; ?>_kuota" name="kuota" min="0" placeholder="Contoh: 30">
                </div>
                <div class="bidang">
                    <label for="<?= $p; ?>_urutan">Urutan tampil</label>
                    <input type="number" id="<?= $p; ?>_urutan" name="urutan" value="0">
                </div>
            </div>
            <div class="bidang">
                <label for="<?= $p; ?>_ket">Keterangan (opsional)</label>
                <textarea id="<?= $p; ?>_ket" name="keterangan" rows="3" maxlength="500" placeholder="Contoh: Potongan uang pangkal untuk pendaftar awal"></textarea>
            </div>
            <div class="bidang">
                <label for="<?= $p; ?>_link">Link tombol pendaftaran</label>
                <input type="text" id="<?= $p; ?>_link" name="link_daftar" maxlength="500" placeholder="https://forms.gle/... atau https://situs-ppdb.com">
            </div>
            <div class="bidang">
                <label style="display:flex;gap:8px;align-items:center;cursor:pointer">
                    <input type="checkbox" name="aktif" value="1" checked> Tampilkan di situs
                </label>
            </div>
<?php return ob_get_clean(); };
?>

<dialog class="dialog dialog--lebar" id="dialogTambah" aria-labelledby="judulTambah">
    <form action="<?= base_url($base . '/add_gelombang'); ?>" method="post" data-kosongkan data-sukses="Gelombang pendaftaran sudah ditambahkan.">
        <?= csrf_field(); ?>
        <?= adm_kepala_dialog('Tambah gelombang pendaftaran', '', 'judulTambah'); ?>
        <div class="dialog__isi"><?= $bidang('t'); ?></div>
        <div class="dialog__kaki">
            <button type="button" class="tbl tbl--garis" data-tutup>Batal</button>
            <button type="submit" class="tbl tbl--utama">Simpan</button>
        </div>
    </form>
</dialog>

<dialog class="dialog dialog--lebar" id="dialogUbah" aria-labelledby="judulUbah">
    <form action="<?= base_url($base . '/update_gelombang'); ?>" method="post" data-sukses="Perubahan gelombang sudah disimpan.">
        <?= csrf_field(); ?>
        <?= adm_kepala_dialog('Ubah gelombang pendaftaran', '', 'judulUbah'); ?>
        <div class="dialog__isi">
            <input type="hidden" name="id_gelombang">
            <?= $bidang('u'); ?>
        </div>
        <div class="dialog__kaki">
            <button type="button" class="tbl tbl--garis" data-tutup>Batal</button>
            <button type="submit" class="tbl tbl--utama">Simpan perubahan</button>
        </div>
    </form>
</dialog>
