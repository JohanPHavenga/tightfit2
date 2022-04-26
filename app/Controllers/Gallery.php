<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public $data = [];

    public function index($type = false, $product = null)
    {
        if ($type === null) {
            return redirect()->to(base_url());
        }


        switch ($type) {
            case "garagedoors":
                $this->data['heading'] = "Garage Doors";
                break;
            case "doorautomation":
                $this->data['heading'] = "Garage Door Automation";
                break;
            case "gateautomation":
                $this->data['heading'] = "Gate Automation";
                break;
            default:
                return redirect()->to(base_url());
                break;
        }
        $this->data['type']=$type;

        $dir_to_map = './uploads/' . $type;
        if (isset($product)) {
            $this->data['product']=$product;
            $this->data['heading'] = ucfirst($product) . " " . $this->data['heading'];
            $dir_to_map = $dir_to_map . "/" . $product;
        }

        $this->data['dir_map'] = directory_map($dir_to_map);

        echo view('templates/header', $this->data);
        echo view('gallery', $this->data);
        echo view('templates/footer', $this->data);
    }
}
