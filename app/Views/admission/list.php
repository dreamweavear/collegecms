<?= $this->include('templates/headeradmin') ?>

<!--   php code for success message -->

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success text-center">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

 <main class="main-content p-4">

<div class="container-fluid">



<h2 class="text-center">Admitted Student List</h2>
<!--<a href="/admission/create">Add New</a>  -->
<!-- changed to below -->

<a href="<?= base_url('admission/create') ?>">Add New</a>

<table class="table  table-bordered table-striped table-hover">
<!-- <table border="1"> -->
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
<!-- <td><img src="/uploads/<?= $s['photo'] ?>" width="50"></td> -->
<td><img src="<?= base_url('uploads/' . $s['photo']) ?>" width="100" alt="photo">

<td>
    <!--<a href="/admission/edit/<?= $s['id'] ?>">Edit</a> -->

    <a href="<?= base_url('admission/edit/' . $s['id']) ?>" >Edit</a>

    <!--<a href="/admission/delete/<?= $s['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a> -->
    <!-- changed to below -->
    <a href="<?= base_url('admission/delete/' . $s['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>
</main>
</div>    

<?= $this->include('templates/footerdash') ?>