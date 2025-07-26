<!DOCTYPE html>
<html>
<head>
    <title>Fee Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .receipt-container {
            border: 1px solid #000;
            padding: 20px;
            margin-bottom: 50px;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 10px;
        }
        .receipt-header img {
            float: left;
            height: 60px;
        }
        .receipt-title {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .section {
            width: 48%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
        }
        .cut-line {
            text-align: center;
            margin: 30px 0;
            font-style: italic;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<?php
$rollno = 'L25' . str_pad($student['id'], 4, '0', STR_PAD_LEFT);
$receiptCode = 'A-' . date('Ymd', strtotime($student['admission_date'])) . '-' . $rollno . '-' . $fee['installment_number'];
?>

<!-- Office Copy -->
<div class="receipt-container">
    <div class="receipt-header">
        <img src="<?= base_url('assets/images/logo.jpg') ?>">
        <div class="receipt-title">OFFICE COPY</div>
        <div style="clear: both;"></div>
        <h3>Arun computer & IT</h3>
        <p>Allahabad Road, Urrhat Rewa (M.P.) | 92014 88597</p>
    </div>

    <div class="row">
        <div><strong>No.:</strong> <?= esc($fee['receipt_number']) ?></div>
        <div><strong>Date:</strong> <?= date('d-M-y') ?></div>
    </div>
    <div class="row">
        <div><strong>Roll No:</strong> <?= $rollno ?></div>
        <div><strong>Receipt No.:</strong> <?= $receiptCode ?></div>
    </div>
    <div class="row">
        <div><strong>Student Name:</strong> <?= esc($student['name']) ?></div>
        <div><strong>Father's Name:</strong> <?= esc($student['father_name']) ?></div>
    </div>
    <div class="row">
        <div><strong>Course:</strong> <?= esc($student['course']) ?></div>
        <div><strong>Admission Date:</strong> <?= date('d-m-Y', strtotime($student['admission_date'])) ?></div>
    </div>

    <div class="row">
        <div class="section">
            <h4>Fees Details</h4>
            <table>
                <tr><th>Particulars</th><th>Amount</th></tr>
                <tr><td>Admission Fees</td><td>₹<?= number_format($fee['amount']) ?></td></tr>
                <tr><td>Fees Installment</td><td>₹<?= number_format($fee['amount']) ?></td></tr>
                <tr><td>Library Fees</td><td>₹0</td></tr>
                <tr><td><strong>Total Fees Paid</strong></td><td><strong>₹<?= number_format($fee['amount']) ?></strong></td></tr>
            </table>
            <p><strong>Mode of Payment:</strong> CASH</p>
        </div>
        <div class="section">
            <h4>Due Details</h4>
            <table>
                <tr><th>Particulars</th><th>Amount</th></tr>
                <tr><td>Course Fees</td><td>₹<?= number_format($courseFee) ?></td></tr>
                <tr><td>Discount if any</td><td>₹<?= number_format($discount) ?></td></tr>
                <tr><td>Total Deposited</td><td>₹<?= number_format($totalPaid) ?></td></tr>
                <tr><td><strong>Pending Fees Till Date</strong></td><td><strong>₹<?= number_format($due) ?></strong></td></tr>
            </table>
            <p><strong>Next Installment:</strong> 1000 Rs Aug, <?= date('Y') ?></p>
        </div>
    </div>

    <div class="footer">
        Received with thanks. <br>
        Discount will be deducted from the Fees in the last Installment.<br><br>
        <strong>School Stamp & Signature</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>(Authorized Signatory)</strong>
    </div>
</div>

<!-- Cut Line -->
<div class="cut-line">--- Cut Here ---</div>

<!-- Student Copy -->
<div class="receipt-container">
    <div class="receipt-header">
        <img src="<?= base_url('assets/images/logo.jpg') ?>">
        <div class="receipt-title">STUDENT COPY</div>
        <div style="clear: both;"></div>
        <h3>Arun computer & IT</h3>
        <p>Allahabad Road, Urrhat Rewa (M.P.) | 92014 88597</p>
    </div>

    <div class="row">
        <div><strong>No.:</strong> <?= esc($fee['receipt_number']) ?></div>
        <div><strong>Date:</strong> <?= date('d-M-y') ?></div>
    </div>
    <div class="row">
        <div><strong>Roll No:</strong> <?= $rollno ?></div>
        <div><strong>Receipt No.:</strong> <?= $receiptCode ?></div>
    </div>
    <div class="row">
        <div><strong>Student Name:</strong> <?= esc($student['name']) ?></div>
        <div><strong>Father's Name:</strong> <?= esc($student['father_name']) ?></div>
    </div>
    <div class="row">
        <div><strong>Course:</strong> <?= esc($student['course']) ?></div>
        <div><strong>Admission Date:</strong> <?= date('d-m-Y', strtotime($student['admission_date'])) ?></div>
    </div>

    <div class="row">
        <div class="section">
            <h4>Fees Details</h4>
            <table>
                <tr><th>Particulars</th><th>Amount</th></tr>
                <tr><td>Admission Fees</td><td>₹<?= number_format($fee['amount']) ?></td></tr>
                <tr><td>Fees Installment</td><td>₹<?= number_format($fee['amount']) ?></td></tr>
                <tr><td>Library Fees</td><td>₹0</td></tr>
                <tr><td><strong>Total Fees Paid</strong></td><td><strong>₹<?= number_format($fee['amount']) ?></strong></td></tr>
            </table>
            <p><strong>Mode of Payment:</strong> CASH</p>
        </div>
        <div class="section">
            <h4>Due Details</h4>
            <table>
                <tr><th>Particulars</th><th>Amount</th></tr>
                <tr><td>Total Course Fees</td><td>₹<?= number_format($courseFee) ?></td></tr>
                <tr><td>Discount if any</td><td>₹<?= number_format($discount) ?></td></tr>
                <tr><td>Total Deposited</td><td>₹<?= number_format($totalPaid) ?></td></tr>
                <tr><td><strong>Pending Fees Till Date</strong></td><td><strong>₹<?= number_format($due) ?></strong></td></tr>
            </table>
            <p><strong>Next Installment:</strong> 1000 Rs Aug, <?= date('Y') ?></p>
        </div>
    </div>

    <div class="footer">
        Received with thanks. <br>
        Discount will be deducted from the Fees in the last Installment.<br><br>
        <strong>School Stamp & Signature</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>(Authorized Signatory)</strong>
    </div>
</div>

<div class="no-print" style="text-align:center; margin-top:20px;">
    <button onclick="window.print()">🖨 Print</button>
    <a href="<?= site_url('admin/fees/view/' . $student['id']) ?>">⬅ Back</a>
</div>

</body>
</html>
