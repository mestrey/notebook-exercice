<?php

namespace App\Repositories;

use App\Models\Notebook;
use Illuminate\Database\Eloquent\Collection;

class NotebookRepository implements NotebookRepositoryInterface
{
    public function all(): Collection
    {
        return Notebook::all();
    }

    public function paginate($page = 1): Collection
    {
        return Notebook::paginate(10, ['*'], 'page', $page)->getCollection();
    }

    public function find($id): ?Notebook
    {
        return Notebook::find($id);
    }

    public function create($data): Notebook
    {
        return Notebook::create($data);
    }

    public function update(Notebook $notebook, $data): bool
    {
        return $notebook->update($data);
    }
}
