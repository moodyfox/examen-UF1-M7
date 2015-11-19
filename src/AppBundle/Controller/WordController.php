<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/11/15
 * Time: 19:23
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WordController extends Controller
{

    /**
     * @Route("/word", name="word")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/concat", name="app_word_concat")
     */
    public function concatAction(Request $request)
    {
        return $this->render('word/concat.html.twig');
    }

    /**
     * @Route("/do-concat", name="app_word_doConcat")
     */
    public function doConcatAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $word->setOp1($op1);
        $word->setOp2($op2);
        $word->concatAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-concat.html.twig',
            [
                'op1'       => $op1,
                'op2'       => $op2,
                'result'    => $result,
                'title'     => 'concat Palabras',
            ]
        );
    }

    /**
     * @Route("/count", name="app_word_count")
     */
    public function countAction(Request $request)
    {
        return $this->render('word/count.html.twig');
    }

    /**
     * @Route("/do-count", name="app_word_doCount")
     */
    public function doCountAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $word->setOp1($op1);
        $word->countAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-count.html.twig',
            [
                'op1'       => $op1,
                'result'    => $result,
                'title'     => 'count Palabra'
            ]
        );
    }

    /**
     * @Route("/localiza", name="app_word_localiza")
     */
    public function localizaAction(Request $request)
    {
        return $this->render('word/localiza.html.twig');
    }

    /**
     * @Route("/do-localiza", name="app_word_doLocaliza")
     */
    public function doLocalizaAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $word->setOp1($op1);
        $word->setOp2($op2);
        $word->localizaAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-localiza.html.twig',
            [
                'op1'       => $op1,
                'op2'       => $op2,
                'result'    => $result,
                'title'     => 'localiza Palabra'
            ]
        );
    }

    /**
     * @Route("/lower", name="app_word_lower")
     */
    public function lowerAction(Request $request)
    {
        return $this->render('word/lower.html.twig');
    }

    /**
     * @Route("/do-lower", name="app_word_doLower")
     */
    public function doLowerAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $word->setOp1($op1);
        $word->lowerAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-lower.html.twig',
            [
                'op1'       => $op1,
                'result'    => $result,
                'title'     => 'Frase minuscula'
            ]
        );
    }

    /**
     * @Route("/toarray", name="app_word_toarray")
     */
    public function toarrayAction(Request $request)
    {
        return $this->render('word/toarray.html.twig');
    }

    /**
     * @Route("/do-toarray", name="app_word_doToarray")
     */
    public function doToarrayAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $word->setOp1($op1);
        $word->toarrayAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-toarray.html.twig',
            [
                'op1'       => $op1,
                'result'    => $result,
                'title'     => 'Frase a array'
            ]
        );
    }

    /**
     * @Route("/upper", name="app_word_upper")
     */
    public function upperAction(Request $request)
    {
        return $this->render('word/upper.html.twig');
    }

    /**
     * @Route("/do-upper", name="app_word_doUpper")
     */
    public function doUpperAction(Request $request)
    {
        $word = $this->get('app.service.word');
        $op1 = $request->request->get('op1');
        $word->setOp1($op1);
        $word->upperAction();
        $result = $word->getResult();

        return $this->render(
            ':word:do-upper.html.twig',
            [
                'op1'       => $op1,
                'result'    => $result,
                'title'     => 'Frase mayuscula'
            ]
        );
    }
}