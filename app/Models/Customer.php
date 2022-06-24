<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
   protected $fillable = ['id', 'created_at', 'default_office_id', 'phone', 'email', 'encrypted_password', 'first_name', 'gender', 'is_blocked', 'is_signed_in_with_google', 'is_signed_in_with_linkedin', 'last_login', 'last_name', 'organization_id', 'organization_name', 'password', 'role_id', 'updated_at', 'user_custom_status', 'user_image_name', 'user_image_path', 'user_status'];
   protected $table = 'customers';
}