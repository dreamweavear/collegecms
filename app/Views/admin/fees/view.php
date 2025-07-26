<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h3>Fees Details - <?= esc($student['name']) ?> (ID: <?= esc($student['id']) ?>)</h3>

<p><strong>Course:</strong> <?= esc($student['course']) ?></p>
<p><strong>Admission Date:</strong> <?= date('d-m-Y', strtotime($student['admission_date'])) ?></p>
<!-- <p><strong>Total Course Fee:</strong> ₹<?= number_format($courseFee) ?></p>
<p><strong>Total Paid:</strong> ₹<?= number_format($totalPaid) ?></p>
<p><strong>Pending Amount:</strong> ₹<?= number_format($pendingAmount) ?></p>
-->

<p><strong>Total Course Fee:</strong> ₹<?= number_format($courseFee) ?></p>
<p><strong>Discount Given:</strong> ₹<?= number_format($discount) ?></p>
<p><strong>Total Paid:</strong> ₹<?= number_format($totalPaid) ?></p>
<p><strong>Pending Amount:</strong> ₹<?= number_format($pendingAmount) ?></p>






<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Installment Amount</th>
            <th>Date</th>
            <th>Receipt Number</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($fees): $i = 1; foreach ($fees as $fee): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>₹<?= number_format($fee['amount']) ?></td>
                <td><?= date('d-m-Y', strtotime($fee['payment_date'])) ?></td>
                <td><?= esc($fee['receipt_number']) ?></td>
                <td>
                
                    <a href="<?= site_url('admin/fees/receipt/' . $fee['id']) ?>" class="btn btn-sm btn-primary" target="_blank">Print Receipt</a>
                    <a href="<?= site_url('admin/fees/delete/'.$fee['id']) ?>" onclick="return confirm('Delete this installment?')" class="btn btn-sm btn-danger">Delete</a>
                </td>


            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="3">No fees records found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="<?= site_url('admin/fees') ?>" class="btn btn-secondary">Back</a>

<?= $this->endSection() ?>
