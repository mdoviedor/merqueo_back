<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 04:15 PM
 */

namespace www\products\controllers;


use Illuminate\Http\Request;
use repositories\ProductRepository;
use www\Controller;

/**
 * Class CreateController
 * @package www\products\controllers
 */
class CreateController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * CreateController constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createAction()
    {
        return view('products::create');
    }

    public function executeAction(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'reference' => 'required|string',
            'price' => 'required|numeric',
            'cost' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        $this->productRepository->create($request->get('name'), $request->get('reference'), $request->get('price'), $request->get('cost'), $request->get('amount'));

        return redirect()->route('products-list');
    }

}