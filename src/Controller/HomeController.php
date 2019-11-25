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
    public function index(): string
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function form(): string
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $matchManager = new MatchManager();
            $lovers = $matchManager->selectMatch();
            foreach ($lovers as $lover) {
                $loveUser = 50 - ($_POST['loveStyle1'] + $_POST['loveStyle2'] + $_POST['loveStyle3'] +
                        $_POST['loveStyle4'] + $_POST['loveStyle5']);

                $foodUser = 50 - ($_POST['food1'] + $_POST['food2'] + $_POST['food3'] +
                        $_POST['food4'] + $_POST['food5']);
                $ethicUser = 50 - ($_POST['ethic1'] + $_POST['ethic2'] + $_POST['ethic3'] +
                        $_POST['ethic4'] + $_POST['ethic5']);
                $partyUser = 50 - ($_POST['partyMonster1'] + $_POST['partyMonster2'] + $_POST['partyMonster3'] +
                        $_POST['partyMonster4'] + $_POST['partyMonster5']);
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
            return $this->twig->render('Home/results.html.twig', ["soulmates" => $soulmates,
            ]);
        } else {
            return $this->twig->render('Home/form.html.twig');
        }
    }


    /* public function results() :string
     {
         $matchManager = new MatchManager();
         $lovers = $matchManager->selectMatch();
         foreach ($lovers as $lover) {
             $loveUser = 100; // remplacer par $_POST['loveStyle'] etc.
             $foodUser = 50;
             $ethicUser = 0;
             $partyUser = 60;
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
         return $this->twig->render('Home/results.html.twig', ["soulmates" => $soulmates,
         ]);
        } */

    public function monsters()
    {
        $monstersApi = new ApiMonstersModel();
        $id = rand(0, 20);
        $monster = $monstersApi->getMonsterById($id);

        header("Access-Control-Allow-Origin :*");
        return $this->twig->render('Home/monsters.html.twig', ["monster" => $monster,
        ]);
    }
}
