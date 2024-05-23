<?php 

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter
{
  // Variables protegidas
  protected $safeParams = [];
  protected $columnMap = [];
  protected $operatorMap = [];
  
  // Función para transformar los parámetros y operadores
  public function transform(Request $request)
  {
      $filters = [];

      foreach ($this->safeParams as $param => $operators) {
          $queryParam = $request->query($param);

          if (!isset($queryParam)) {
              continue;
          }

          $column = $this->columnMap[$param] ?? $param;

          foreach ($operators as $operator) {
              if (isset($queryParam[$operator])) {
                  $filters[] = [$column, $this->operatorMap[$operator], $queryParam[$operator]];
              }
          }
      }

      return $filters;
  }
}
