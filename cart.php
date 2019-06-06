<?php

namespace App;



class cart
{
    public $items = null;
    public $totalqty=0;
    public $totalprice=0;


    public function __construct($oldcart)
    {
    	if ($oldcart) {
    		$this->items = $oldcart->items;
    		$this->totalqty = $oldcart->totalqty;
    		$this->totalprice = $oldcart->totalprice;

    }
}

    public function add($item,$id)
    {
        $storeditem= ['qty' => 0,'price' => $item->price, 'item' => $item];
    	
    	if($this->items)
    	{
    		if(array_key_exists($id,$this->items))
    		{
    			$storeditem = $this->items[$id];
    		}
    	}

    	$storeditem['qty']++;
    	$storeditem['price'] = $item->price * $storeditem['qty'];
    	$this->items[$id] = $storeditem;
    	$this->totalqty++;
    	$this->totalprice +=$item->price;

    }

        public function inc($item,$id)
    {


        $storeditem= ['qty' => 0,'price' => $item->price, 'item' => $item];
        
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {
                $storeditem = $this->items[$id];
            }
        }

        $storeditem['qty']++;
        $storeditem['price'] = $item->price * $storeditem['qty'];
        $this->items[$id] = $storeditem;
        $this->totalqty++;
        $this->totalprice +=$item->price;
        

       


    }


       public function dec($item,$id)
    {

        $storeditem= ['qty' => 0,'price' => $item->price, 'item' => $item];
        
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {
                $storeditem = $this->items[$id];
            }
        }

        $storeditem['qty']--;
        $storeditem['price'] = $item->price * $storeditem['qty'];
        $this->items[$id] = $storeditem;
        $this->totalqty--;
        $this->totalprice -=$item->price;

        if($storeditem['qty'] <= 0)
            unset($this->items[$id]);



    }
 

       public function remove($item,$id)
    {

        $storeditem= ['qty' => 0,'price' => $item->price, 'item' => $item];
        
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {
                $storeditem = $this->items[$id];
            }
        }

        $temp_qty=$storeditem['qty'];
        $storeditem['qty']=0;
        $temp_price= $item->price * $temp_qty;
        $storeditem['price']=0;
        $this->items[$id] = $storeditem;
        $this->totalqty-=$temp_qty;
        $this->totalprice -=$temp_price;

         if($storeditem['qty'] <= 0)
            unset($this->items[$id]);







    }  
   


}




