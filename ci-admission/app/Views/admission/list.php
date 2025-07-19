<h2>Student List</h2>
<a href="/admission/create">Add New</a>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Father</th><th>Course</th><th>DOB</th><th>Phone</th><th>Email</th><th>Photo</th><th>Action</th></tr>
<?php foreach($students as $s): ?>
<tr>
<td><?= $s['id'] ?></td>
<td><?= $s['name'] ?></td>
<td><?= $s['father_name'] ?></td>
<td><?= $s['course'] ?></td>
<td><?= $s['dob'] ?></td>
<td><?= $s['phone'] ?></td>
<td><?= $s['email'] ?></td>
<td><img src="/uploads/<?= $s['photo'] ?>" width="50"></td>
<td>
    <a href="/admission/edit/<?= $s['id'] ?>">Edit</a> |
    <a href="/admission/delete/<?= $s['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>
