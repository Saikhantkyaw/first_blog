<?php 	
  interface all{
    public function pay();
  }
  class kpay implements all{
  	public function pay(){echo "interface";};
   }
  class wavepay implements all{
  	public function pay(){echo "interface";};
  }
   class truemoney implements all{
  	public function pay(){echo "interface";};
  }
  class payment{
  	public function justpay($payment_type){
  		$this->pay();
  	};
  }

   $payment_type=new wavepay();

   $E=new payment();
   $E->justpay($payment_type);
 ?>