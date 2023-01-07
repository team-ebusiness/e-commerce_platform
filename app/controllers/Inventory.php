<?php

class Inventory extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->load_model('Product');
        $this->load_model('ProductVariant');
        $this->view->setLayout('default');
    }

    public function indexAction(){
        $details=[];
        $result = $this->ProductModel->find();
        foreach ($result as $value) {
            $productid=$value->product_id;
            $productName=$value->product_name;
            $details[$productid]=[$productName,$this->ProductVariantModel->getVariants($productid)];
        }
        $this->view->details=$details;
        $this->view->render('inventory/inventory');

    }
}