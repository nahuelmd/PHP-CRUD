<?php

//Ejemplo de Clase para gestionar carrito de compras

class Carrito
{
	private $db;
	public function __construct($base)
	{
		$this->db = $base;
	}

	//Insertar nuevo producto en base de datos
	public function insertProducto($codigo, $nombre, $descripcion, $precio)
	{
		$respuesta = $this->db->enviarQuery("INSERT INTO compras VALUES ('$codigo', '$nombre', '$descripcion', $precio) ");

		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
	//Obtener todos los productos
	public function getProductos()
	{
		$respuesta = $this->db->enviarQuery("SELECT * FROM compras");
		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
	//Borrar producto de base de datos por $id 
	public function borrarProducto($id)
	{
		$respuesta = $this->db->enviarQuery("DELETE FROM compras WHERE codigo=$id");
		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
}