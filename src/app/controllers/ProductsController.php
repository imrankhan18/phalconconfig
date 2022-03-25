<?php



use Phalcon\Mvc\Controller;

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class ProductsController extends Controller
{
    public function indexAction()
    {
        // $this->addAction();
        // $this->view->displayAction();
        
    }
    public function addAction()
    {
        
        $products = new Products();
        $products->assign(
            $this->request->getPost(),
            [
                'pic',
                'productname',
                'qauntity',
                'description',
                'price'
            ]
        );
        $products->save();

        $this->response->redirect('dashboard');
    }
    public function displayAction()
    {
        $products= Products::find();
        $details='';
        $details.="<table<tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Pic</th>
        <th>Price</th></tr>";
        foreach ($products as $v) {
            // print_r($v->productid);
            $details.="<tr>
            <td>'.$v->productname.'</td>
            <td>'.$v->quantity.'</td>
            <td>'.$v->description.'</td>
            <td>'.$v->pic.'</td>
            <td>'.$v->price.'</td></tr>";

            
        }
        $details.="</table>";
        // die();
    }
    // public function listAction()
    // {
    //     // $this->indexAction();
    //     // $this->view->blogs = Blogs::find();
    //     $currentPage = $this->request->getQuery('page', 'int', 1);
    //     $paginator   = new PaginatorModel(
    //         [
    //             'model'  => Blogs::class,
    //             'limit' => 2,
    //             'page'  => $currentPage,
    //         ]
    //     );

    //     $page = $paginator->paginate();
    //     // print_r($page);
    //     // die();

    //     $this->view->setVar('page', $page);
    }

