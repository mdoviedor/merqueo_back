<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 05:41 PM
 */

namespace www\products\controllers;


use Illuminate\Http\Request;
use models\Product;
use mysql_xdevapi\Exception;
use repositories\ProductRepository;
use usecases\products\Commands;

/**
 * Class CsvLoadController
 * @package www\products\controllers
 */
class CsvLoadController
{
    /**
     * @var Commands
     */
    private $commandsUC;
    /**
     * @var ProductRepository
     */
    private $productRepository;


    /**
     * CsvLoadController constructor.
     * @param Commands $commandsUC
     * @param ProductRepository $productRepository
     */
    public function __construct(Commands $commandsUC, ProductRepository $productRepository)
    {

        $this->commandsUC = $commandsUC;
        $this->productRepository = $productRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function csvLoadAction()
    {
        return view('products::csv_load');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function executeAction(Request $request)
    {
        $request->validate([
            'csv' => 'required|string',
        ]);

        list($commands, $errors) = $this->commandsUC->execute($request->get('csv'));


        foreach ($commands as $command) {
            switch ($command['name']) {
                case Commands::COMMAND_ADD:
                    $this->productRepository->addItem($command['id'], $command['param']);
                    break;
                case Commands::COMMAND_SUB:
                    $this->productRepository->subItem($command['id'], $command['param']);
                    break;
                case Commands::COMMAND_ACTIVATE:
                    $this->productRepository->changeState($command['id'], Product::STATE_ACTIVE);
                    break;
                case Commands::COMMAND_INACTIVATE:
                    $this->productRepository->changeState($command['id'], Product::STATE_INACTIVE);
                    break;
                default:
                    throw new \Exception(sprintf("No debería presentarse, comando %s", $command['name']));
            }
        }

        return redirect()->route('products-list');
    }

}