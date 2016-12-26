<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {

        $this->load->view('header');
        $this->load->view('insertion');
    }

    public function insertCpu(){
        $product = $this->input->post('product-cpu');
        $price = $this->input->post('price-cpu');
        $socket = $this->input->post('socket-cpu');
        $brand = $this->input->post('brand-cpu');
        $clock = $this->input->post('clock-cpu');
        $core = $this->input->post('core-cpu');
        $thread = $this->input->post('thread-cpu');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertCpu($product, $price, $socket, $brand, $clock, $core, $thread);

        echo '1';

    }

    public function insertMemory(){
        $product = $this->input->post('product-memory');
        $price = $this->input->post('price-memory');
        $brand = $this->input->post('brand-memory');
        $type = $this->input->post('type-memory');
        $fsb = $this->input->post('fsb-memory');
        $sizeperpiece = $this->input->post('size-memory');
        $channel = $this->input->post('channel-memory');
        $total = $this->input->post('total-memory');
        $color = $this->input->post('color-memory');
        $heatsink = $this->input->post('heatsink-memory');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertMemory($product, $price, $type, $fsb, $brand, $sizeperpiece, $channel, $total, $color, $heatsink);

        echo '1';
    }

    public function insertVga(){
        $product = $this->input->post('product-gpu');
        $price = $this->input->post('price-gpu');
        $brand = $this->input->post('brand-gpu');
        $chipset = $this->input->post('chipset-gpu');
        $base = $this->input->post('base-gpu');
        $pinpower = $this->input->post('power-gpu');
        $memory = $this->input->post('memory-gpu');
        $bus = $this->input->post('bus-gpu');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertVga($product, $price, $brand, $chipset, $base, $pinpower, $memory, $bus);

        echo '1';
    }

    public function insertCase(){
        $product = $this->input->post('product-case');
        $price = $this->input->post('price-case');
        $brand = $this->input->post('brand-case');
        $size = $this->input->post('size-case');
        $color = $this->input->post('color-case');
        $psu = $this->input->post('psu-case');
        $usb = $this->input->post('usb-case');
        $ssd = $this->input->post('ssd-case');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertCase($product, $price, $brand, $size, $color, $psu, $usb, $ssd);

        echo '1';
    }

    public function insertPsu(){
        $product = $this->input->post('product-psu');
        $price = $this->input->post('price-psu');
        $brand = $this->input->post('brand-psu');
        $wattage = $this->input->post('watt-psu');
        $powerpin = $this->input->post('powerpin-psu');
        $powersata = $this->input->post('sata-psu');
        $pcisix = $this->input->post('pcisix-psu');
        $pcieight = $this->input->post('pcieight-psu');
        $efficiency = $this->input->post('efficiency-psu');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertPsu($product, $price, $brand, $wattage, $powerpin, $powersata, $pcisix, $pcieight, $efficiency);

        echo '1';
    }

    public function insertHarddisk(){
        $product = $this->input->post('product-hdd');
        $price = $this->input->post('price-hdd');
        $brand = $this->input->post('brand-hdd');
        $space = $this->input->post('space-hdd');
        $interface = $this->input->post('interface-hdd');
        $type = $this->input->post('type-hdd');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertHarddisk($product, $price, $space, $brand, $interface, $type);

        echo '1';
    }

    public function insertMobo(){
        $product = $this->input->post('product-mb');
        $price = $this->input->post('price-mb');
        $brand = $this->input->post('brand-mb');
        $socket = $this->input->post('socket-mb');
        $baytrail = $this->input->post('bay-mb');
        $base = $this->input->post('base-mb');
        $color = $this->input->post('color-mb');
        $memorytype = $this->input->post('memorytype-mb');
        $memoryslot = $this->input->post('memoryslot-mb');
        $memorymax = $this->input->post('memorymax-mb');
        $memoryfsb = $this->input->post('memoryfsb-mb');
        $form = $this->input->post('form-mb');
        $chipset = $this->input->post('chipset-mb');
        $led = $this->input->post('led-mb');
        $pci = $this->input->post('pci-mb');
        $pcigen = $this->input->post('pcigen-mb');
        $sataii = $this->input->post('sata2-mb');
        $sataiii = $this->input->post('sata3-mb');
        $powerpin = $this->input->post('powerpin-mb');
        $k = $this->input->post('4k-mb');
        $usbfront = $this->input->post('usb3-mb');
        $lpt = $this->input->post('lpt-mb');

        $this->load->model('insertionmodel');
        $this->insertionmodel->insertMotherboard($product, $price, $socket, $brand, $baytrail, $base, $color, $memorytype, $memoryslot, $memorymax, $memoryfsb, $form, $chipset, $led, $pci, $pcigen, $sataii, $sataiii, $powerpin, $k, $usbfront, $lpt);

        echo '1';
    }
}
