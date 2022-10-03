<?php 
class conexion{
    


    private $servidor="localhost";
    private $usuario="root";
    private $contrasenia="PYn=RVXk";
    private $conexion;

    public function __construct(){

        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=proyectos",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            return "falla de conexion".$error;
        }
    }
    
    public function ejecutar($sql){

       // $this->conexion->exec($sql) or die(print_r($this->conexion->errorInfo(), true));
        
        if(exec($sql)==0){
            print("entro");
            print(exec($sql));
        }else{
            print("no entro");
        }
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }    
}
?>       
     
    

    





