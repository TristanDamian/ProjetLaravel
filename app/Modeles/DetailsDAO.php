<?php

namespace App\Modeles;
use DB;
use App\Metier\Detail;
use Illuminate\Database\Eloquent\Model;

class DetailsDAO extends Model
{
    public function getLesDetails($idComm)
    {
        $lesDetails=array();
        $Details=DB::table('detail_cde')->where('NO_COMMAND','=',$idComm)->get();
        $i=0;
        if($Details)
        {
            foreach ($Details as $leDetail){
                //On récupère l'auteur du Detail sous la forme d'un objet métier
                $article = new ArticleDAO();
                $lArticle = $article->getArticle($leDetail->NO_ARTICLE);
                $idCom = $i;
                $lesDetails[$idCom] = $this->creerDetail($leDetail,$lArticle->getLibArticle());
                //On affecte le user associé au Detail qui vient d'être ajouté au tableau
                $i++;
            }
        }
        return $lesDetails;
    }

    private function creerDetail(\stdClass $unDetail, $LibArticle)
    {
        $leDetail = new Detail();
        $leDetail->setIdDetail($unDetail->NO_COMMAND);
        $leDetail->setNoArticle($unDetail->NO_ARTICLE);
        $leDetail->setQteDetail($unDetail->QTE_CDEE);
        $leDetail->setLibDetail($LibArticle);
        return $leDetail;
    }

    public function ajoutDetail($id, $Qte){
        $Details=DB::table('detail_cde')->where([['NO_COMMAND','=',session('CurrentCommande')],['NO_ARTICLE','=',$id]])->first();
        if($Details){
            $Qte=$Qte+$Details->QTE_CDEE;
            DB::table('detail_cde')->where([['NO_COMMAND','=',session('CurrentCommande')],['NO_ARTICLE','=',$id]])
                ->update(array('QTE_CDEE'=>$Qte));
        }
        else{
            DB::table('detail_cde')->insert(['NO_COMMAND'=>session('CurrentCommande'),'NO_ARTICLE'=>$id,'QTE_CDEE'=>$Qte,'LIVREE'=>'F']);
        }
    }

}
