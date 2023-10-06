<?php

namespace App\Repositories;

use App\Models\Notebook;
use Illuminate\Database\Eloquent\Collection;

interface NotebookRepositoryInterface
{
    public function all(): Collection;
    public function paginate($page = 1): Collection;
    public function find($id): ?Notebook;
    public function create($data): Notebook;
    public function update(Notebook $notebook, $data): bool;
}
