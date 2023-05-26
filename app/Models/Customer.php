<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    public function accounts() {
        return $this->hasMany(Account::class, 'id_customer', 'id');
    }
}
