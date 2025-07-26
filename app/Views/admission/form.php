<?= $this->include('templates/headerdash1') ?>

<div class="container mt-4">
    <h2 class="text-center">Admission Form</h2>

    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form id="admissionForm" method="post"
        action="<?= isset($student) ? base_url('admin/admission/update/' . $student['id']) : base_url('admin/admission/store') ?>"
        enctype="multipart/form-data">

            <div class="mb-3">
                <label>Course Fee</label>
                <input type="number" name="course_fee" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Discount</label>
                <input type="number" name="discount" class="form-control" value="0" required>
            </div>

            <div class="mb-3">
                <label>Admission Date</label>
                <input type="date" name="admission_date" class="form-control" required>
            </div>


              <div class="mb-3">
                <label>Admission Feees Paid</label>
            <input type="number" name="admission_fee" class="form-control" required>
              </div>


            <div class="mb-3">
                <label> Receipt Number</label>
                
            <input type="number" name="receipt_number" class="form-control" required>
            </div>





        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
                value="<?= isset($student) ? esc($student['name']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="father_name" class="form-label">Father's Name:</label>
            <input type="text" class="form-control" id="father_name" name="father_name"
                value="<?= isset($student) ? esc($student['father_name']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob"
                value="<?= isset($student) ? esc($student['dob']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="course" class="form-label">Course:</label>
            <input type="text" class="form-control" id="course" name="course"
                value="<?= isset($student) ? esc($student['course']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="<?= isset($student) ? esc($student['phone']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email"
                value="<?= isset($student) ? esc($student['email']) : '' ?>" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                <?= isset($student) ? '' : 'required' ?>>
        </div>

        <div class="mt-3">
            <button type="button" class="btn btn-primary" onclick="showPreview()">Preview</button>
            <a href="<?= site_url('admin/admission') ?>" class="btn btn-secondary">Cancel</a>
        </div>

        <!-- Preview Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Admission Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tr><th>Name</th><td id="p_name"></td></tr>
                            <tr><th>Father's Name</th><td id="p_father"></td></tr>
                            <tr><th>Date of Birth</th><td id="p_dob"></td></tr>
                            <tr><th>Course</th><td id="p_course"></td></tr>
                            <tr><th>Phone</th><td id="p_phone"></td></tr>
                            <tr><th>Email</th><td id="p_email"></td></tr>
                            <tr><th>Photo</th><td><img id="p_photo" src="" alt="Preview" width="120" height="140" style="border:1px solid #ccc;"></td></tr>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success" onclick="submitFinal()">Final Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<script>
function showPreview() {
    document.getElementById('p_name').textContent = document.getElementById('name').value;
    document.getElementById('p_father').textContent = document.getElementById('father_name').value;
    document.getElementById('p_dob').textContent = document.getElementById('dob').value;
    document.getElementById('p_course').textContent = document.getElementById('course').value;
    document.getElementById('p_phone').textContent = document.getElementById('phone').value;
    document.getElementById('p_email').textContent = document.getElementById('email').value;

    const photoInput = document.getElementById('photo');
    const previewImg = document.getElementById('p_photo');

    if (photoInput.files && photoInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
        };
        reader.readAsDataURL(photoInput.files[0]);
    } else {
        previewImg.src = '';
    }

    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
    previewModal.show();
}

function submitFinal() {
    document.getElementById('admissionForm').submit();
}
</script>

<?= $this->include('templates/footerdash') ?>
