<?php 

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter
{
  protected $safeParams = [
    'name' => ['eq', 'like'],
    'email' => ['eq'],
    'phone' => ['eq'],
    'address' => ['eq', 'like'],
    'city' => ['eq', 'like'],
    'state' => ['eq', 'like'],
    'status' => ['eq'],
    'created_at' => ['eq', 'like'],
    'updated_at' => ['eq', 'like'],
    'class_name' => ['like'],
    'start_date' => ['eq', 'gt', 'lt'], // Agregada la coma que faltaba
    'payment_status'=> ['eq'],
    'pay_day'=> ['eq', 'gt'],
    'customer_id'=> ['eq', 'like'],
];

protected $columnMap = [
    'name' => 'name',
    'email' => 'email',
    'phone' => 'phone',
    'address' => 'address',
    'city' => 'city',
    'state' => 'state',
    'status' => 'status',
    'created_at' => 'created_at',
    'updated_at' => 'updated_at',
    'class_name' => 'class_name',
    'start_date' => 'start_date',
    'payment_status' => 'payment_status',
    'pay_day' => 'pay_day',
    'customer_id' => 'customer_id',
];

protected $operatorMap = [
    'eq' => '=',
    'like' => 'LIKE',
    'gt' => '>',
    'lt' => '<',
    'gte' => '>=',
    'lte' => '<=',
];
}
