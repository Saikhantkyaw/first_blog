<?php 	
  interface all{
    public function pay()
  }
  class kpay implements all{
    public function pay(){}
    public function paymentpro(){
      $this->pay();
    }
   }
  class wavepay implements all{
    public function pay(){}
    public function paymentpro(){
      $this->pay();
    }
  }
   class truemoney implements all{
    public function pay(){}
    public function paymentpro(){
      $this->pay();
    }
  }
  class payment{
    public function justpay(all $payment_type){
      $this->paymentpro();
    }
  }

   $payment_type=new wavepay();

   $E=new payment();
   $E->justpay($payment_type);
 ?>