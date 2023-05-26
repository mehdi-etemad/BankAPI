<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\ServiceCharge;

class Account extends Model
{
    use HasFactory;
    protected $table = 'account';
    public function customer() {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
    public function cards() {
        return $this->hasMany(Account::class, 'id_account', 'id');
    }
    public function transactions() {
        return $this->hasMany(Transaction::class, 'id_account', 'id');
    }
    public function serviceCharges() {
        return $this->hasMany(ServiceCharge::class, 'id_account', 'id');
    }
}
