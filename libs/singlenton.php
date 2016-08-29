<?php
class db {
    // Declare instance
    private static $instance = NULL;
	var $errmsg;
	var $errsql;

    /**
    * The constructor is set to private so
    * no one can create a new instance using new
    */
    private function __construct() {
      /*** maybe set the db name here later ***/
    }
    
    /**
    * Like the constructor, we make __clone private
    * so nobody can clone the instance
    */
    private function __clone(){}

    /**
    * Return DB instance or create intitial connection
    *
    * @return object (PDO)
    * @access public
    */
    /*    public static function instance() {
            if (!self::$instance) {
    		    try {
                    self::$instance = new PDO("pgsql:host=localhost;dbname=sharePrintDB", 'postgres', 'postgres');
    			  self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			}
    		    catch(PDOException $e)
        		{
                    error_log("Error: Conexion BD, ".date("d/m/Y H:m:s",time())." ".$e->getMessage()."\n",3,"error.txt");
            
                }
                
            }


            return self::$instance;
        }
    	
    	function logDb($errmsg,$errsql)
    		{
       			$dt = date("Y-m-d H:i:s");

        		$err = "<errorentry>\n";
    		    $err .= "\t<datetime>" . $dt . "</datetime>\n";
    		    $err .= "\t<errormsg>" . $errmsg . "</errormsg>\n";
    		    $err .= "\t<query>" . $errsql . "</query>\n";
    		    $err .= "</errorentry>\n\n";
        
        		error_log($err, 3, "error.xml");
    			
    		}
*/
}
?>