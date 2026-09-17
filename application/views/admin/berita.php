<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="g-5 gx-xxl-8">
                <!--begin::Tables Widget 10-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Berita</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk tambah data">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#addBerita" class="btn btn-sm btn-light btn-active-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Berita
                                </button>
                            </div>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="myTable" class="table nowrap table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" style="width: 100%;">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0"></th>
                                        <th class="p-0 min-w-10px"></th>
                                        <th class="p-0 min-w-10px"></th>
                                        <th class="p-0 min-w-10px"></th>
                                        <th class="p-0 min-w-10px"></th>
                                        <th class="p-0 min-w-10px"></th>
                                        <th class="p-0 min-w-100px text-end"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <?php foreach ($data_berita as $key => $berita) : ?>
                                        <tr>
                                            <td>
                                                <?= ++$key; ?>
                                            </td>
                                            <td>
                                                <?= $berita['judul_berita']; ?>
                                            </td>
                                            <td>
                                                <?= substr($berita['isi_berita'], 0, 50); ?> ...
                                            </td>
                                            <td class="text-muted fw-bold">
                                                <strong>Post</strong> : <?= date("d M Y H:i:s", strtotime($berita['tanggal_post'])); ?>
                                            </td>
                                            <td class="text-muted fw-bold">
                                                <strong>Update</strong> : <?= date("d M Y H:i:s", strtotime($berita['tanggal_update'])); ?>
                                            </td>
                                            <td class="text-muted fw-bold">
                                                <a target="_blank" href="<?= base_url() . 'assets/templates/media/news/' . $berita['gambar']; ?>">
                                                    <img width="50" height="50" src="<?= base_url() . 'assets/templates/media/news/' . $berita['gambar']; ?>" class="img-fluid" alt="">
                                                </a>
                                            </td>
                                            <td class="text-start">
                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#updateBerita<?= $berita['id_berita']; ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteBerita<?= $berita['id_berita']; ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 10-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<?php foreach ($data_berita as $key => $berita) : ?>
    <!-- begin::modal update Berita -->
    <div class="modal fade" id="updateBerita<?= $berita['id_berita']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/update_berita/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">
                                <label for="judul_berita" class="form-label">Judul Berita <small class="text-danger">*</small></label>
                                <input type="text" name="judul_berita" value="<?= $berita['judul_berita']; ?>" placeholder="Judul Berita ..." class="form-control form-control-sm" required id="judul_berita">
                            </div>
                            <div class="mb-3">
                                <label for="isi_berita" class="form-label">Isi Berita <small class="text-danger">*</small></label>
                                <textarea class="form-control form-control-sm" name="isi_berita" id="editor<?= $key ?>" cols="30" rows="10"><?= $berita['isi_berita']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="tanggal_post" value="<?= $berita['tanggal_post']; ?>" class="form-control form-control-sm" required id="tanggal_post">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar </label>
                                <input type="file" accept=".jpg,.png,.jpeg" name="gambar" class="form-control form-control-sm" id="gambar">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" required name="gambar_lama" value="<?= $berita['gambar']; ?>" class="form-control form-control-sm" id="gambar_lama">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" name="update_video" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- begin::Ckeditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor<?= $key ?>'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <!-- end::Ckeditor -->
    <!-- end::modal hapus Berita -->
<?php endforeach; ?>
<?php foreach ($data_berita as $key => $berita) : ?>
    <!-- begin::modal delete berita -->
    <div class="modal fade" id="deleteBerita<?= $berita['id_berita']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/delete_berita/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">
                                <p>Apakah anda yakin ingin hapus <strong><?= $berita['judul_berita']; ?></strong>?</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" name="hapus_struktur" class="btn btn-sm btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end::modal hapus berita -->
<?php endforeach; ?>