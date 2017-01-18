<?php 
						class EmailConfig {
							public $default = array(
								"transport" => "Smtp", 
								"from" => array("kwonnil95@gmail.com" => ""), 
								"host" => "ssl://smtp.gmail.com", 
								"port" => 465, 
								"timeout" => 30, 
								"emailFormat" => "html", 
								"username" => "kwonnil95@gmail.com", 
								"password" => "admin123", 
								"tls" => false, 
								"log" => false, 
								"charset" => "utf-8", 
								"headerCharset" => "utf-8", 
								
							);
						}
					?>