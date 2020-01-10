<?php 

class Cesta{

    protected $cesta_contenido = array();
    
    public function __construct(){
        $this->cesta_contenido = !empty($_SESSION['cesta_contenido'])?$_SESSION['cesta_contenido']:NULL;
        if ($this->cesta_contenido === NULL){
            $this->cesta_contenido = array('cesta_total' => 0, 'total_items' => 0);
        }
    }

    public function contenido(){
        $cesta = array_reverse($this->cesta_contenido);//
        unset($cesta['total_items']);
        unset($cesta['cesta_total']);

        return $cesta;
    }
 
    public function get_item($row_id){
        return (in_array($row_id, array('total_items', 'cesta_total'), TRUE) OR ! isset($this->cesta_contenido[$row_id]))
            ? FALSE
            : $this->cesta_contenido[$row_id];
    }
    
   
    public function total_items(){
        return $this->cesta_contenido['total_items'];
    }
    

    public function total(){
        return $this->cesta_contenido['cesta_total'];
    }

    public function insert($item = array()){
        if(!is_array($item) OR count($item) === 0){
            return FALSE;
        }else{
            if(!isset($item['id'], $item['name'], $item['price'], $item['qty'])){
                return FALSE;
            }else{
         
                $item['qty'] = (float) $item['qty'];
                if($item['qty'] == 0){
                    return FALSE;
                }

                $item['price'] = (float) $item['price'];
                $rowid = md5($item['id']);
                $old_qty = isset($this->cesta_contenido[$rowid]['qty']) ? (int) $this->cesta_contenido[$rowid]['qty'] : 0;
                $item['rowid'] = $rowid;
                $item['qty'] += $old_qty;
                $this->cesta_contenido[$rowid] = $item;
                if($this->save_cesta()){
                    return isset($rowid) ? $rowid : TRUE;
                }else{
                    return FALSE;
                }
            }
        }
    }

    public function update($item = array()){
        if (!is_array($item) OR count($item) === 0){
            return FALSE;
        }else{
            if (!isset($item['rowid'], $this->cesta_contenido[$item['rowid']])){
                return FALSE;
            }else{
               
                if(isset($item['qty'])){
                    $item['qty'] = (float) $item['qty'];
                   
                    if ($item['qty'] == 0){
                        unset($this->cesta_contenido[$item['rowid']]);
                        return TRUE;
                    }
                }
                
              
                $keys = array_intersect(array_keys($this->cesta_contenido[$item['rowid']]), array_keys($item));
              
                if(isset($item['price'])){
                    $item['price'] = (float) $item['price'];
                }
             
                foreach(array_diff($keys, array('id', 'name')) as $key){
                    $this->cesta_contenido[$item['rowid']][$key] = $item[$key];
                }
             
                $this->save_cesta();
                return TRUE;
            }
        }
    }
    
  
    protected function save_cesta(){
        $this->cesta_contenido['total_items'] = $this->cesta_contenido['cesta_total'] = 0;
        foreach ($this->cesta_contenido as $key => $val){
            if(!is_array($val) OR !isset($val['price'], $val['qty'])){
                continue;
            }
     
            $this->cesta_contenido['cesta_total'] += ($val['price'] * $val['qty']);
            $this->cesta_contenido['total_items'] += $val['qty'];
            $this->cesta_contenido[$key]['subtotal'] = ($this->cesta_contenido[$key]['price'] * $this->cesta_contenido[$key]['qty']);
        }
      
        if(count($this->cesta_contenido) <= 2){
            unset($_SESSION['cesta_contenido']);
            return FALSE;
        }else{
            $_SESSION['cesta_contenido'] = $this->cesta_contenido;
            return TRUE;
        }
    }
    
     public function remove($row_id){
     
        unset($this->cesta_contenido[$row_id]);
        $this->save_cesta();
        return TRUE;
     }
     
    public function destroy(){
        $this->cesta_contenido = array('cesta_total' => 0, 'total_items' => 0);
        unset($_SESSION['cesta_contenido']);
    }

}


?>