<?php

namespace Abdukhaligov\LaravelPageable;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class PaginationBuilder extends Builder {
  public function paginateFromRequest(Pageable $request): LengthAwarePaginator {
    extract($request->pagination());

    return $this->paginate($perPage, $columns, $pageName, $page);
  }
}
