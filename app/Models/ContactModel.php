<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact_submissions'; // आपकी टेबल का नाम
      protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'message', 'created_at']; // जो फील्ड्स भरने हों
    
    
    

}



