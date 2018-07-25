<?php

namespace App;

class Paypal
{
    private $_apiContex;
    private $_car;
    private $_clientId = 'AbWTim0GOk8nbzMeLOhuCXXCFeN-j95SS0OcRe_tlm75-RAjC1x5Om7PzbykDVpUPPOm0pg9ZRvHpECb';
    private $_clientSecret = 'ELjZQT5VRdRR2BQ2XftuGEm1Nul-5ExqASG3MRngCQNz8PhKJ66Pi8rNiiR19oZPeFfs9OMkZfz-IneL';

    public function __construct($car)
    {
        $this->_apiContex = \PaypalPayment::ApiContext($this->_clientId, $this->_clientSecret);

        $config = config("paypal_payment");

        $flatConfig = array_dot($config);

        $this->_apiContex->setConfig($flatConfig);

        $this->_car = $car;
    }

    public function generate()
    {
        # code...
        $payment = \PaypalPayment::payment()
            ->setIntent("sale")
            ->setPayer($this->payer())
            ->setTransactions([$this->trasaction()])
            ->setRedirectUrls($this->redirectURLs());


        try {
            $payment->create($this->_apiContex);
        } catch (\Exception $e) {
            dd($e);
            exit(1);
        }

        return $payment;
    }

    public function payer()
    {
        return \PaypalPayment::payer()->setPaymentMethod('paypal');
    }

    public function trasaction()
    {
        return \PaypalPayment::transaction()
            ->setAmount($this->amount())
            ->setItemList($this->items())
            ->setDescription('Tu Compra en AlonsoRodríguez')
            ->setInvoiceNumber(uniqid());
    }

    public function amount()
    {
        # code...
        return \PaypalPayment::amount()
            ->setCurrency('USD')
            ->setTotal($this->_car->total());
    }

    public function items()
    {
        # code...
        $items = [];
        $products = $this->_car->products()->get();
        foreach ($products as $product) {
            # code...
            array_push($items, $product->paypalItem());
        }
        return \PaypalPayment::itemList()->setItems($items);
    }

    public function redirectURLs()
    {
        $baseURL = url('/');
        return \PaypalPayment::redirectUrls()
            ->setReturnUrl("$baseURL/tienda/payment/store")
            ->setCancelUrl("$baseURL/tienda/carrito");
    }

    public function execute($paymentId, $payerId)
    {
        # code...
        $payment = \PaypalPayment::getById($paymentId, $this->_apiContex);
        $execution = \PaypalPayment::PaymentExecution()->setPayerId($payerId);
        return $payment->execute($execution, $this->_apiContex);

    }

}
