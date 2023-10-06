<?php

namespace App\Http\Controllers;

use App\Repositories\NotebookRepositoryInterface;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    public function __construct(
        private NotebookRepositoryInterface $notebookRepository
    ) {
    }

    public function index(Request $req)
    {
        $page = $req->input('page');

        if ($page !== NULL) {
            return $this->notebookRepository->paginate($page);
        }

        return $this->notebookRepository->all();
    }

    public function store(Request $req)
    {
        $data = $this->validate($req, [
            'fio' => 'required',
            'company' => '',
            'phone' => 'required',
            'email' => 'required|email',
            'birth' => 'date_format:Y-m-d',
            'photo' => '',
        ]);

        return $this->notebookRepository->create($data);
    }

    public function show($id)
    {
        $notebook = $this->notebookRepository->find($id);

        if ($notebook === NULL) {
            throw new \Exception('Notebook not found');
        }

        return $notebook;
    }

    public function update($id, Request $req)
    {
        $data = $this->validate($req, [
            'fio' => '',
            'company' => '',
            'phone' => '',
            'email' => 'email',
            'birth' => 'date_format:Y-m-d',
            'photo' => '',
        ]);

        $notebook = $this->show($id);

        return $this->notebookRepository->update($notebook, $data);
    }

    public function destroy($id)
    {
        $notebook = $this->show($id);

        return $notebook->delete();
    }
}
