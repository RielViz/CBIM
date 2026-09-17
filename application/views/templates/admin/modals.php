<!-- begin::modal struktur -->
<!-- begin::create modal struktur -->
<div class="modal fade" id="addStruktur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/add_struktur/'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Struktur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="nama_pejabat" class="form-label">Nama Pejabat <small class="text-danger">*</small></label>
                            <input type="text" name="nama_pejabat" placeholder="Nama Pejabat ..." class="form-control form-control-sm" required id="nama_pejabat">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto <small class="text-danger">*</small></label>
                            <input type="file" required name="foto" accept=".jpg,.png,.jpeg" class="form-control form-control-sm" id="foto">
                        </div>
                        <div class="fmb-3">
                            <label class="form-label" for="jabatan">
                                Jabatan
                            </label>
                            <input class="form-control form-control-sm" required placeholder="Jabatan ..." type="text" id="jabatan" name="jabatan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="save_struktur" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::create modal struktur -->
<!-- end::modal struktur -->
<!-- begin::modal manajemen konten -->
<!-- begin::create modal manajemen konten -->
<div class="modal fade" id="addKonten" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/add_konten/'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Konten</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="judul_konten" class="form-label">Judul Konten <small class="text-danger">*</small></label>
                            <input type="text" name="judul_konten" placeholder="Judul Konten ..." class="form-control form-control-sm" required id="judul_konten">
                        </div>
                        <div class="mb-3">
                            <label for="sub_judul_konten" class="form-label">Sub Judul Konten <small class="text-danger">*</small></label>
                            <input type="text" name="sub_judul_konten" placeholder="Judul Konten ..." class="form-control form-control-sm" required id="sub_judul_konten">
                        </div>
                        <div class="mb-3">
                            <label for="editorKonten" class="form-label">Isi Konten <small class="text-danger">*</small></label>
                            <textarea class="form-control form-control-sm" name="isi_konten" id="editorKonten" cols="30" rows="10"></textarea>
                        </div>

                        <div class="fmb-3">
                            <label class="form-label" for="jenis_konten">
                                Jenis Konten
                            </label>
                            <select class="form-control form-control-sm" name="jenis_konten" id="jenis_konten">
                                <option value="">-- Pilih --</option>
                                <option value="legalitas">Legalitas</option>
                                <option value="visi">Visi</option>
                                <option value="misi">Misi</option>
                                <option value="nilai">Nilai</option>
                                <option value="operasional">Operasional</option>
                                <option value="kontak">Kontak</option>
                                <option value="alamat">Alamat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="save_struktur" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::create modal manajemen konten -->
<!-- end::modal manajemen konten -->
<!-- begin::modal video kegiatan -->
<!-- begin::create modal video kegiatan -->
<div class="modal fade" id="addVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/add_video/'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Video</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="judul_video" class="form-label">Judul Video <small class="text-danger">*</small></label>
                            <input type="text" name="judul_video" placeholder="Judul Video ..." class="form-control form-control-sm" required id="judul_video">
                        </div>
                        <div class="mb-3">
                            <label for="editorVideo" class="form-label">Deskripsi <small class="text-danger">*</small></label>
                            <textarea class="form-control form-control-sm" name="deskripsi" id="editorVideo" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Video <small class="text-danger">*</small></label>
                            <input type="text" name="link" placeholder="Link Video ..." class="form-control form-control-sm" required id="link">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="save_struktur" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::create modal video kegiatan -->
<!-- end::modal video kegiatan -->
<!-- begin::modal berita -->
<!-- begin::create modal berita -->
<div class="modal fade" id="addBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/add_berita/'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="judul_berita" class="form-label">Judul Berita <small class="text-danger">*</small></label>
                            <input type="text" name="judul_berita" placeholder="Judul Berita ..." class="form-control form-control-sm" required id="judul_berita">
                        </div>
                        <div class="mb-3">
                            <label for="editorBerita" class="form-label">Isi Berita <small class="text-danger">*</small></label>
                            <textarea class="form-control form-control-sm" name="isi_berita" id="editorBerita" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar <small class="text-danger">*</small></label>
                            <input type="file" accept=".jpg,.png,.jpeg" required name="gambar" class="form-control form-control-sm" id="gambar">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="save_gambar" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::create modal berita -->
<!-- end::modal berita -->
<!-- begin::modal galeri -->
<!-- begin::create modal galeri -->
<div class="modal fade" id="addFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/add_foto/'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Foto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="judul_foto" class="form-label">Judul Foto <small class="text-danger">*</small></label>
                            <input type="text" name="judul_foto" placeholder="Judul Foto ..." class="form-control form-control-sm" required id="judul_foto">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto <small class="text-danger">*</small></label>
                            <input type="file" accept=".jpg,.png,.jpeg" required name="foto" class="form-control form-control-sm" id="foto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="save_gambar" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::create modal galeri -->
<!-- end::modal galeri -->