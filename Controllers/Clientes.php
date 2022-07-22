<?php 

	class Clientes extends Controllers{
		public function __construct()
		{
			//sessionStart();
			parent::__construct();
		}

		public function clientes()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Clientes";
			$data['page_title'] = "Clientes - Tienda Virtual";
			$data['page_name'] = "clientes";
			$data['page_functions_js'] = "functions_clientes.js";			
			$this->views->getView($this,"clientes",$data);
		}

	}
 ?>