@extends('template')

@section('titrePage')
    Liste des articles
@endsection



@section('contenu')<table class="table table-bordered table-stripped">
    <thead>
    <th>Id</th>
    <th>Libellé</th>
    <th>Quantite</th>
    <th>Prix</th>
    <th>Ville</th>
    <th>Interrompu</th>
    <th></th>
    </thead>
    @foreach ($lesArticles as $article)
        <tr>
            <td>{{{ $article->getIdArticle() }}}</td>
            <td>{{{ $article->getLibArticle() }}}</td>
            <td>{{{ $article->getQte() }}}</td>
            <td>{{{ $article->getPrix() }}}</td>
            <td>{{{ $article->getVille() }}}</td>
            <td>{{{ $article->getInt() }}}</td>
            <td><button><a href="Article/{{{$article->getIdArticle()}}}">Ajouter au panier</a></button></td>
        </tr>
    @endforeach
</table>
@endsection
