<div class="container py-4">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary mb-3">हमारे पूर्व छात्र</h1>
        <p class="lead">वर्षों से अरुण कम्प्यूटर के सफल छात्रों की यादगार झलकियाँ</p>
        <div class="divider bg-primary mx-auto" style="width: 80px; height: 3px;"></div>
    </div>

    <!-- Gallery Filters -->
    <div class="mb-4 text-center">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary active">सभी</button>
            <button type="button" class="btn btn-outline-primary">PGDCA</button>
            <button type="button" class="btn btn-outline-primary">DCA</button>
            <button type="button" class="btn btn-outline-primary">वार्षिक</button>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4 gallery-grid">
        <?php foreach($gallery as $item): ?>
        <div class="col-md-6 col-lg-4 gallery-item">
            <div class="card h-100 border-0 shadow-sm overflow-hidden">
                <img src="<?= base_url('assets/images/gallery/' . $item['image']) ?>" 
                     class="card-img-top" 
                     alt="<?= $item['title'] ?>"
                     style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-primary"><?= $item['year'] ?></span>
                        <small class="text-muted"><?= $item['students_count'] ?></small>
                    </div>
                    <h3 class="h5"><?= $item['title'] ?></h3>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- View More Button -->
    <div class="text-center mt-5">
        <button class="btn btn-primary px-4" id="loadMore">
            <i class="fas fa-plus-circle me-2"></i>और तस्वीरें देखें
        </button>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="galleryModalImage" class="img-fluid" alt="">
            </div>
            <div class="modal-footer">
                <small class="text-muted me-auto" id="galleryModalInfo"></small>
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">बंद करें</button>
            </div>
        </div>
    </div>
</div>

<style>
.gallery-item {
    transition: transform 0.3s ease;
}
.gallery-item:hover {
    transform: translateY(-5px);
}
.gallery-grid img {
    transition: transform 0.5s ease;
    cursor: pointer;
}
.gallery-grid img:hover {
    transform: scale(1.03);
}
</style>

<script>
// Simple lightbox functionality
document.querySelectorAll('.gallery-grid img').forEach(img => {
    img.addEventListener('click', function() {
        const title = this.closest('.gallery-item').querySelector('h3').textContent;
        const year = this.closest('.gallery-item').querySelector('.badge').textContent;
        const info = this.closest('.gallery-item').querySelector('.text-muted').textContent;
        
        document.getElementById('galleryModalTitle').textContent = title;
        document.getElementById('galleryModalImage').src = this.src;
        document.getElementById('galleryModalInfo').textContent = `${year} • ${info}`;
        
        var modal = new bootstrap.Modal(document.getElementById('galleryModal'));
        modal.show();
    });
});

// Load more functionality
document.getElementById('loadMore').addEventListener('click', function() {
    // AJAX call to load more images would go here
    this.disabled = true;
    this.innerHTML = '<i class="fas fa-check-circle me-2"></i>सभी तस्वीरें लोड हो चुकी हैं';
});
</script>