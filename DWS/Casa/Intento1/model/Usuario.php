<?php 

class Usuario{
	private $pdo;
    
    public $id;
    public $usuario;
    public $pwd;
    public $email;  
    public $rol;
 
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
	public function Listar()
	{
		try
		{
			$result = array();
 
			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();
 
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE id = ?");
			          
 
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE id = ?");			          
 
			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
						usuario      = ?,
						pwd          = ?, 
						email        = ?,
						
				    WHERE id = ?";
 
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->usuario, 
                        $data->pwd,                        
                        $data->email,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO cliente (usuario,pwd,email) 
		        VALUES (?, ?, ?)";
 
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $data->usuario, 
                    $data->pwd,
                    $data->email
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>