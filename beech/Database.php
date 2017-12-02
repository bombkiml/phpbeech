<?php 

class Database {
	
	private $_query = null;
	private $_sql = null;
		
	public function __construct(){
		$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Connect failed.');
		mysql_select_db(DB_NAME, $conn);
		mysql_query("SET NAMES UTF8");
	}
	
	private function sql_command($sql){
		$this->_sql = $sql;
	}
	
	public function prepare($sql){
		$obj = new self;
		$obj->sql_command($sql);
		return $obj;
	}
    public function show(){
        return $this->_sql;
    }
	
	public function execute(){
		return $this->_query = mysql_query($this->_sql) or die('*** SQL Error! *** SQL: '.$this->_sql);
	}
	
	public function numRows(){
		return mysql_num_rows($this->_query);
	}
	
	public function fetch_all(){
		return mysql_fetch_assoc($this->_query);
	}
	
	public function fetch_assoc(){
		$r = array();
		for($n=0; $n<$this->numRows(); $n++){
			$r[] = mysql_fetch_assoc($this->_query);
		}
		return $r;
	}
	
	public function fetch_array(){
		$r = array();
		for($n=0; $n<$this->numRows(); $n++){
			$r[] = mysql_fetch_array($this->_query);
		}
		return $r;
	}
	
	public function fetch_object(){
		$r = array();
		for($i=0; $i<$this->numRows(); $i++){
			$r[] = mysql_fetch_object($this->_query);
		}
		return $r;
	}
	
	public function insert($table, $data = array()){ // function INSERT
		$fields = implode(',', array_keys($data));
		$values = implode("','", $data);
		$sth = $this->prepare("INSERT INTO $table($fields) VALUES('".$values."')");
		//echo("INSERT INTO $table($fields) VALUES('".$values."')");
		if(@$sth->execute())
			return true;
		else
			return false;
	}
	
	public function update($table, $rows, $where){ // function UPDATE
		
			$keys = array_keys($rows); 
			$a = count($keys);
            for($i = 0; $i < count($rows); $i++)
            {
                if($rows[$keys[$i]]){
                    $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                }
				
				else
                {
                    $update .= $keys[$i].'='.$rows[$keys[$i]];
                }
                if($i != count($rows)-1)
                {
                    $update .= ','; 
                }
            }
			
		$sth = $this->prepare("UPDATE $table SET $update WHERE $where");
		if($sth->execute())
			return true;
		else
			return false;
	}
	
	public function delete($table, $where){ // function DELETE
		$sth = $this->prepare("DELETE FROM $table WHERE $where");
		if($sth->execute())
			return true;
		else
			return false;
	}
	
	public function end_row($table, $field){
		$sth = $this->prepare("SELECT max($field) as id FROM $table");
		$sth->execute();
		while($r = $sth->fetch_all()){
			return $r['id'];
		}
	}
	
}