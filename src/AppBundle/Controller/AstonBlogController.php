<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 17/01/19
 * Time: 15:50
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AstonBlogController extends Controller
{
    /**
     * @Route("/maud", name="maud")
     */
    public function MaudAction(){
        return $this->render('default/maud.html.twig');
    }

    /**
    * @Route("/article/{id}", name="article", requirements={"id"="\d+"})
     */
    public function ArticleAction($id){
        $articles = array(
            array("id"=>1,
                "title"=>"La glace",
                "autor"=>"Donald Trump",
                "date"=>"21/12/2018",
                "resume"=>"Voici un résumé du premier article, qui comporte de la glace",
                "img"=>"glace.jpg",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            ),
            array("id"=>2,
                "title"=>"La route",
                "autor"=>"Picsou",
                "date"=>"04/02/2019",
                "resume"=>"Voici un résumé du deuxieme article, qui montre une route",
                "img"=>"route.jpg",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            ),
            array("id"=>3,
                "title"=>"Les sapins",
                "autor"=>"Mickey",
                "date"=>"31/01/2019",
                "resume"=>"Voici un résumé du troisième article, qui présente des sapins",
                "img"=>"asset('img/sapin.jpg')",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            )
        );

        return $this->render('default/article.html.twig',['article'=>$articles[$id]]);
    }

    /**
     * @Route("/",name="blog")
     */
    public function AstonBlogAction(){

        $articles = array(
            array("id"=>1,
                "title"=>"La glace",
                "autor"=>"Donald Trump",
                "date"=>"21/12/2018",
                "resume"=>"Voici un résumé du premier article, qui comporte de la glace",
                "img"=>"glace.jpg",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            ),
            array("id"=>2,
                "title"=>"La route",
                "autor"=>"Picsou",
                "date"=>"04/02/2019",
                "resume"=>"Voici un résumé du deuxieme article, qui montre une route",
                "img"=>"asset('img/route.jpg')",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            ),
            array("id"=>3,
                "title"=>"Les sapins",
                "autor"=>"Mickey",
                "date"=>"31/01/2019",
                "resume"=>"Voici un résumé du troisième article, qui présente des sapins",
                "img"=>"asset('img/sapin.jpg')",
                "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, lacus elementum iaculis gravida, ligula felis viverra erat, quis suscipit magna "
            )
        );
        return $this->render('default/blog.html.twig',['articles'=>$articles]);

    }
}
