<?php
declare (strict_types=1);
namespace App;
require_once("src/View.php");

class Controller
{
    private const DEFAUL_ACTION = 'list';
    private array $request;
    private View $view;




    public function __construct(array $request) 
    {
        $this->request = $request;
        $this->view = new View;
    }
    public function action (): string{
         
        return $this->getRequestGet()['action'] ?? self::DEFAUL_ACTION;
    }
        public function run(): void{
       
                 $viewParams = [];
            
            switch ($this->action()) {
                case 'create':
                $page = 'create';
                $created = false;

                $data = $this->getRequestPost();
                if (!empty ($data)){
                    $created = true;
                    $viewParams = [
                        'title' => $data['title'],
                        'description' => $data['description']
                    ];
                    }
                $viewParams['created'] = $created;
                break;
                case 'show':
                    $viewParams =
                    [
                    'title' => 'Moja Notatka',
                    'description' => 'Opis'
                    ];
                break;
                default:
                $page = 'list';
                $viewParams['resultList'] = "Wyswietlamy notatki";
                break;
            }

            $this->view->render($page, $viewParams);

        }


private function getRequestPost():array{

        return $this->request['post'];


}
private function getRequestGet():array{

    return $this->request['get'] ;


}



}