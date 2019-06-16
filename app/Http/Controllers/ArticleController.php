<?php

namespace App\Http\Controllers;
use App\Http\Requests\InsertionConfRequest;
use App\Modeles\ArticleDAO;
use App\Metier\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles(){
        $article = new ArticleDAO();
        $lesArticles = $article->getLesArticles();
        return view('listeArticles',compact('lesArticles'));
    }

    public function modifierCommande($id){
        $article = new ArticleDAO();
        $lesArticles = $article->getLesArticles();
        session(['CurrentCommande'=> $id]);
        return view('listeArticles',compact('lesArticles'));
    }

    public function ajoutArticle(){
        return view('formAjoutAricle');
    }

    public function addToCart($id){
        $Article = new ArticleDAO();
        $article = $Article->getArticle($id);
        return view('AddToCart', compact('article'));
    }

    public function postAjoutArticle(InsertionConfRequest $request){
        $monArticle = new Article();
        $monArticle->setIdArticle($request->input('IdArticle'));
        $monArticle->setLibArticle($request->input('LibArticle'));
        $monArticle->setQte($request->input('Qte'));
        $monArticle->setVille($request->input('Ville'));
        $monArticle->setPrix($request->input('Prix'));
        $monArticle->setInt(false);
        $monArticleDAO = new ArticleDAO();
        $monArticleDAO->creationArticle($monArticle);
        return view('insertionOK');
    }
}
