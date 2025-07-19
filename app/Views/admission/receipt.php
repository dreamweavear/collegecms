<h2 style="text-align:center;">Admission Receipt</h2>
<table>
<tr><td><strong>Name:</strong></td><td><?= $student['name'] ?></td></tr>
<tr><td><strong>Father's Name:</strong></td><td><?= $student['father_name'] ?></td></tr>
<tr><td><strong>DOB:</strong></td><td><?= $student['dob'] ?></td></tr>
<tr><td><strong>Course:</strong></td><td><?= $student['course'] ?></td></tr>
<tr><td><strong>Phone:</strong></td><td><?= $student['phone'] ?></td></tr>
<tr><td><strong>Email:</strong></td><td><?= $student['email'] ?></td></tr>
<tr><td><strong>Photo:</strong></td>
<td><img src="<?= base_url('uploads/'.$student['photo']) ?>" width="80"></td></tr>

  <div class="text-center mt-4">
    <button onclick="window.print()" class="btn btn-primary">🖨 Print</button>
    <a href="<?= base_url('admission') ?>" class="btn btn-secondary">Back to List</a>
  </div>
</div>


</table>



