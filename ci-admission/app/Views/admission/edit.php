<h2>Edit Admission</h2>
<form method="post" action="/admission/update/<?= $student['id'] ?>" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br>
    Father's Name: <input type="text" name="father_name" value="<?= $student['father_name'] ?>"><br>
    DOB: <input type="date" name="dob" value="<?= $student['dob'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>"><br>
    Phone: <input type="text" name="phone" value="<?= $student['phone'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br>
    Photo: <input type="file" name="photo"><br>
    <button type="submit">Update</button>
</form>
