<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FinancialDocument;
use App\Models\Account;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    public function financialDocument() {
        return $this->belongsTo(Customer::class, 'id_financial_document', 'id');
    }
    public function account() {
        return $this->belongsTo(Customer::class, 'id_account', 'id');
    }
}
