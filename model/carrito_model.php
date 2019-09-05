<?php
include "db.php";

class Carro{
	protected productos = $array();


	public function __construct(){

            $this->productos = array('total_precio' => 0, 'total_produc' => 0);
        }
    }
    
    /**
     * Cart Contents: Returns the entire cart array
     * @param    bool
     * @return    array
     */
    public function productos(){
        // rearrange the newest first
        $cart = array_reverse($this->productos);

        // remove these so they don't create a problem when showing the cart table
        unset($cart['total_items']);
        unset($cart['cart_total']);

        return $cart;
    }
    
    /**
     * Get cart item: Returns a specific cart item details
     * @param    string    $row_id
     * @return    array
     */
    public function get_item($row_id){
        return (in_array($row_id, array('total_items', 'cart_total'), TRUE) OR ! isset($this->productos[$row_id]))
            ? FALSE
            : $this->productos[$row_id];
    }
    
    /**
     * Total Items: Returns the total item count
     * @return    int
     */
    public function total_items(){
        return $this->productos['total_items'];
    }
    
    /**
     * Cart Total: Returns the total price
     * @return    int
     */
    public function total(){
        return $this->productos['cart_total'];
    }
    
    /**
     * Insert items into the cart and save it to the session
     * @param    array
     * @return    bool
     */
    public function insert($item = array()){
        if(!is_array($item) OR count($item) === 0){
            return FALSE;
        }else{
            if(!isset($item['id'], $item['name'], $item['price'], $item['qty'])){
                return FALSE;
            }else{
                /*
                 * Insert Item
                 */
                // prep the quantity
                $item['qty'] = (float) $item['qty'];
                if($item['qty'] == 0){
                    return FALSE;
                }
                // prep the price
                $item['price'] = (float) $item['price'];
                // create a unique identifier for the item being inserted into the cart
                $rowid = md5($item['id']);
                // get quantity if it's already there and add it on
                $old_qty = isset($this->productos[$rowid]['qty']) ? (int) $this->productos[$rowid]['qty'] : 0;
                // re-create the entry with unique identifier and updated quantity
                $item['rowid'] = $rowid;
                $item['qty'] += $old_qty;
                $this->productos[$rowid] = $item;
                
                // save Cart Item
                if($this->save_cart()){
                    return isset($rowid) ? $rowid : TRUE;
                }else{
                    return FALSE;
                }
            }
        }
    }
    
    /**
     * Update the cart
     * @param    array
     * @return    bool
     */
    public function update($item = array()){
        if (!is_array($item) OR count($item) === 0){
            return FALSE;
        }else{
            if (!isset($item['rowid'], $this->productos[$item['rowid']])){
                return FALSE;
            }else{
                // prep the quantity
                if(isset($item['qty'])){
                    $item['qty'] = (float) $item['qty'];
                    // remove the item from the cart, if quantity is zero
                    if ($item['qty'] == 0){
                        unset($this->productos[$item['rowid']]);
                        return TRUE;
                    }
                }
                
                // find updatable keys
                $keys = array_intersect(array_keys($this->productos[$item['rowid']]), array_keys($item));
                // prep the price
                if(isset($item['price'])){
                    $item['price'] = (float) $item['price'];
                }
                // product id & name shouldn't be changed
                foreach(array_diff($keys, array('id', 'name')) as $key){
                    $this->productos[$item['rowid']][$key] = $item[$key];
                }
                // save cart data
                $this->save_cart();
                return TRUE;
            }
        }
    }
    
    /**
     * Save the cart array to the session
     * @return    bool
     */
    protected function save_cart(){
        $this->productos['total_items'] = $this->productos['cart_total'] = 0;
        foreach ($this->productos as $key => $val){
            // make sure the array contains the proper indexes
            if(!is_array($val) OR !isset($val['price'], $val['qty'])){
                continue;
            }
     
            $this->productos['cart_total'] += ($val['price'] * $val['qty']);
            $this->productos['total_items'] += $val['qty'];
            $this->productos[$key]['subtotal'] = ($this->productos[$key]['price'] * $this->productos[$key]['qty']);
        }
        
        // if cart empty, delete it from the session
        if(count($this->productos) <= 2){
            unset($_SESSION['productos']);
            return FALSE;
        }else{
            $_SESSION['productos'] = $this->productos;
            return TRUE;
        }
    }
    
    /**
     * Remove Item: Removes an item from the cart
     * @param    int
     * @return    bool
     */
     public function remove($row_id){
        // unset & save
        unset($this->productos[$row_id]);
        $this->save_cart();
        return TRUE;
     }
     
    /**
     * Destroy the cart: Empties the cart and destroy the session
     * @return    void
     */
    public function destroy(){
        $this->productos = array('cart_total' => 0, 'total_items' => 0);
        unset($_SESSION['productos']);
    }
}


}


?>