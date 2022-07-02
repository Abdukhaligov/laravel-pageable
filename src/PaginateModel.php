<?php

namespace Abdukhaligov\LaravelPageable;

use Illuminate\Database\Eloquent\Model;

class PaginateModel extends Model {
  /**
   * @return PaginationBuilder
   */
  public static function query() {
    return parent::query();
  }

  public function newEloquentBuilder($query): PaginationBuilder {
    return new PaginationBuilder($query);
  }
}
