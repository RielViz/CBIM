<?php
// Helper to extract YouTube Video ID
if (!function_exists('extractYouTubeVideoId')) {
    function extractYouTubeVideoId($youtubeLink)
    {
        $urlComponents = parse_url($youtubeLink);

        if (isset($urlComponents['host']) && ($urlComponents['host'] === 'www.youtube.com' || $urlComponents['host'] === 'youtube.com')) {
            parse_str($urlComponents['query'] ?? '', $queryParams);
            return isset($queryParams['v']) ? $queryParams['v'] : '';
        } elseif (isset($urlComponents['host']) && $urlComponents['host'] === 'youtu.be') {
            $pathSegments = explode('/', $urlComponents['path']);
            return end($pathSegments);
        } else {
            return false;
        }
    }
}
?>

<!--begin::Landing hero spacer-->
<div class="d-flex flex-column flex-center w-100 min-h-1px min-h-lg-1px px-9"></div>
<!--end::Landing hero spacer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::Video Kegiatan Page-->
<div class="py-12 py-lg-18">
    <div class="container">
        <!--begin::Section Header-->
        <div class="cbim-section-header">
            <h2 class="fs-2hx text-dark" id="video-kegiatan-page" data-kt-scroll-offset="{default: 125, lg: 150}">
                Video Kegiatan
            </h2>
            <p class="section-subtitle">Dokumentasi kegiatan Yayasan Citra Bina Insan Mandiri</p>
        </div>
        <!--end::Section Header-->

        <?php if (count($data_all_video) > 0 && count($data_main_video) > 0) : ?>
            <?php $mainVideoId = extractYouTubeVideoId($data_main_video[0]['link']); ?>

            <!--begin::Main Video Player-->
            <div class="cbim-fade-item" data-aos="fade-up" data-aos-duration="800">
                <div class="cbim-video-main">
                    <?php if ($mainVideoId) : ?>
                        <iframe
                            src="https://www.youtube.com/embed/<?= $mainVideoId; ?>?rel=0"
                            title="<?= htmlspecialchars($data_main_video[0]['judul_video']); ?>"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    <?php else : ?>
                        <div class="d-flex align-items-center justify-content-center" style="height: 500px; background: var(--cbim-dark);">
                            <div class="text-center">
                                <i class="bi bi-exclamation-triangle text-warning" style="font-size: 3rem;"></i>
                                <p class="text-white mt-3">Link video tidak valid</p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="video-info">
                        <h3><?= $mainVideoId ? htmlspecialchars($data_main_video[0]['judul_video']) : '<em>Link video tidak valid!</em>'; ?></h3>
                        <?php if (!empty($data_main_video[0]['deskripsi'])) : ?>
                            <p><?= strip_tags(substr($data_main_video[0]['deskripsi'], 0, 200)); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!--end::Main Video Player-->

            <!--begin::Video Playlist Grid-->
            <?php if (count($data_all_video) > 1) : ?>
                <div class="mt-8 mb-6">
                    <div class="d-flex align-items-center justify-content-between mb-6">
                        <h4 class="fw-bolder text-dark mb-0">
                            <i class="bi bi-collection-play me-2 text-cbim-primary"></i>
                            Daftar Video Lainnya
                        </h4>
                        <span class="badge badge-light-primary fs-7 fw-bold px-3 py-2">
                            <?= count($data_all_video); ?> Video
                        </span>
                    </div>

                    <div class="row g-5">
                        <?php foreach ($data_all_video as $key => $video) :
                            $videoId = extractYouTubeVideoId($video['link']);
                            $thumbnail = $videoId ? "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg" : '';
                            $isActive = ($video['id_video'] == $data_main_video[0]['id_video']);
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="<?= ($key % 4) * 80; ?>">
                                <a href="<?= base_url('page/kegiatan/') . bin2hex(base64_encode($video['id_video'])); ?>" class="text-decoration-none">
                                    <div class="cbim-video-card <?= $isActive ? 'active-video' : ''; ?>">
                                        <div class="video-thumbnail">
                                            <?php if ($thumbnail) : ?>
                                                <img src="<?= $thumbnail; ?>"
                                                     alt="<?= htmlspecialchars($video['judul_video']); ?>"
                                                     loading="lazy" decoding="async" />
                                            <?php else : ?>
                                                <div class="d-flex align-items-center justify-content-center h-100">
                                                    <i class="bi bi-film text-muted" style="font-size: 2rem;"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div class="play-overlay">
                                                <div class="play-btn-circle">
                                                    <i class="bi bi-play-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video-card-body">
                                            <h5>
                                                <?php if ($isActive) : ?>
                                                    <i class="bi bi-broadcast text-cbim-primary me-1"></i>
                                                <?php endif; ?>
                                                <?= $videoId ? htmlspecialchars($video['judul_video']) : '<em>Link tidak valid</em>'; ?>
                                            </h5>
                                            <?php if (!empty($video['deskripsi'])) : ?>
                                                <div class="video-desc"><?= strip_tags(substr($video['deskripsi'], 0, 80)); ?>...</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <!--end::Video Playlist Grid-->

        <?php else : ?>
            <!--begin::Empty State-->
            <div class="text-center py-20">
                <div class="mb-6">
                    <i class="bi bi-camera-video" style="font-size: 4rem; color: var(--cbim-gray-200);"></i>
                </div>
                <h3 class="text-muted fw-bold fs-3">Belum Ada Video</h3>
                <p class="text-muted fs-6">Video kegiatan akan segera ditampilkan di sini.</p>
            </div>
            <!--end::Empty State-->
        <?php endif; ?>

    </div>
</div>
<!--end::Video Kegiatan Page-->