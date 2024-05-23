<?php 

namespace App\Filters;
use App\Filters\ApiFilter;

class ClassesFilter extends ApiFilter
{
  protected $safeParams = [
    'class_name' => ['eq', 'like'],
    'class_code' => ['eq'],
    'class_description' => ['eq', 'like'],
    'class_teacher' => ['eq', 'like'],
    'class_time' => ['eq', 'like'],
    'class_day' => ['eq', 'like'],
];

protected $columnMap = [
    'class_name' => 'class_name',
    'class_code' => 'class_code',
    'class_description' => 'class_description',
];

protected $operatorMap = [
    'eq' => '=',
    'like' => 'LIKE',
    'gt' => '>',
    'lt' => '<',
    'gte' => '>=',
    'lte' => '<=',
    'ne' => '!=',
];
}
//http://127.0.0.1:8000/api/v1/clases?class_name[eq]=Movimiento
