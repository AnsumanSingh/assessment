<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model {
   protected $fillable = ['id', 'created_at', 'file_name', 'file_type', 'file_url', 'from_user_first_name', 'from_user_id', 'is_read', 'message', 'message_type', 'timestamp', 'to_user_first_name', 'to_user_id', 'updated_at', 'user_id'];
   protected $table = 'chat';
}