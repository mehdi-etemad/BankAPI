<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Card extends Model
{
    use HasFactory;
    protected $table = 'card';
    public function account() {
        return $this->belongsTo(Account::class, 'id_account', 'id');
    }
}
