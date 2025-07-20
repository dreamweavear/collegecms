<h2>Add Chapter</h2>
<form method="post" action="<?= site_url('admin/chapters/store') ?>">
    <div class="form-group">
        <label for="name">Chapter Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>


<div class="form-group">
    <label for="paper_id">Select Paper</label>
        <select name="paper_id" id="paper_id" class="form-control" required>


        <option value="">-- Select Paper --</option>
        <?php foreach ($papers as $paper): ?>
            <option value="<?= $paper['id'] ?>"><?= $paper['name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="form-group">
      <label for="unit_id">Select Unit</label>
        
          <select name="unit_id" id="unit_id" class="form-control" required>  
        <option value="">-- Select Unit --</option>
        </select>

    </div>




    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="editor"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
<script
src="https://cdn.tiny.cloud/1/b2kytk0kpljz3uc9a5bo3vm4r3azd0jdov9qzdltds0ixm1h/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({ selector: '#editor' });
</script>
<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>
$('#paper_id').change(function() {
  $.get('<?= site_url('admin/chapters/getUnitsByPaper') ?>', {paper_id: $(this).val()}, function(data) {
    let options = '<option value="">-- Select Unit --</option>';
    data.forEach(function(unit) {
      options += `<option value="${unit.id}">${unit.name}</option>`;
    });
    $('#unit_id').html(options);
  });
});
</script>





               </main>
        </div>
    </div>