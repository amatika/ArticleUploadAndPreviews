<?php

namespace App\Controllers;
use App\Models\ArticleModel;
use CodeIgniter\Controller;

class Articles extends Controller
{
     public function index()
    {
        $model = new ArticleModel();
        $data['articles'] = $model->findAll();

        return view('articles/index', $data);
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store()
    {
        $model = new ArticleModel();

        $file = $this->request->getFile('pdf');
        $title = $this->request->getVar('title');
        $author = $this->request->getVar('author');
        $source = $this->request->getVar('source');

        $newName = $file->getRandomName();
       /* $file->move(WRITEPATH . 'uploads', $newName);*/
       $file->move(FCPATH . 'uploads', $newName);


        $model->save([
            'title'  => $title,
            'author' => $author,
            'source' => $source,
            'pdf'    => $newName,
        ]);

        return redirect()->to('/articles');
    }

    public function show($id)
    {
        $model = new ArticleModel();
        $data['article'] = $model->find($id);

        return view('articles/show', $data);
    }
}
