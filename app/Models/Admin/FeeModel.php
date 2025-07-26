<?php
namespace App\Models\Admin;

use CodeIgniter\Model;

class FeeModel extends Model
{
    protected $table = 'fees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['student_id', 'installment_number', 'amount', 'payment_date', 'receipt_number'];
    protected $useTimestamps = true;
}
