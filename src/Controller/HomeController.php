<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\MatchManager;
use App\Model\ApiMonstersModel;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        header("Access-Control-Allow-Origin :*");
        return $this->twig->render('Home/index.html.twig');
    }

    public function form()
    {
        header("Access-Control-Allow-Origin :*");
        return $this->twig->render('Home/form.html.twig');
    }

    public function results()
    {
        error_log(print_r($_POST, TRUE));
        $datas = decode_json($_POST);
        var_dump($datas);
        $matchManager = new MatchManager();
        $lovers = $matchManager->selectMatch();
        foreach ($lovers as $lover) {
            $loveUser = 100; // remplacer par $_POST['loveStyle'] etc.
            $foodUser = 0;
            $ethicUser = 60;
            $partyUser = 30;
            $id = $lover['id'];
            $loveRate = abs($loveUser - $lover['loveStyle']);
            $loveMatch = 100 - $loveRate;
            $foodRate = abs($foodUser - $lover['food']);
            $foodMatch = 100 - $foodRate;
            $ethicRate = abs($ethicUser - $lover['ethic']);
            $ethicMatch = 100 - $ethicRate;
            $partyRate = abs($partyUser - $lover['partyMonster']);
            $partyMatch = 100 - $partyRate;
            $totalMatch = ($loveMatch + $foodMatch + $ethicMatch + $partyMatch) / 4;

            $matchManager->addMatch($totalMatch, $id);
            $soulmates = $matchManager->selectByMatch();
        }
        header("Access-Control-Allow-Origin :*");
        return json_encode($_POST);
    }

    public function monsters()
    {
        $monstersApi = new ApiMonstersModel();
        $id = rand(0, 20);
        $monster = $monstersApi->getMonsterById($id);

        header("Access-Control-Allow-Origin :*");
        return $this->twig->render('Home/monsters.html.twig', ["monster" => $monster,
        ]);

        // header("Content-Type: application/json");
        // return json_encode($monsters);
    }
}
