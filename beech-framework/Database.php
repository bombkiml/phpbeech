<?php 

class Database {
	
	private $_query = null;
	private $_sql = null;
  private $_mysqli = null;
		
	public function __construct(){
		$this->_mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die('Connect failed.');
    $this->_mysqli->query("SET NAMES UTF8");
    
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
		return $this->_query = $this->_mysqli->query($this->_sql) or die('<strong>SQL statment error ></strong> ' . $this->_sql);
	}
	
	public function num_rows(){
		return mysqli_num_rows($this->_query);
	}
	
	public function fetch_all($resulttype = MYSQLI_NUM) {
		return $this->_query->fetch_all($resulttype);
    // Optional specifies what type of array that should be produced. Can be one of the following values:
    // - MYSQLI_NUM (this is default)
    // - MYSQLI_ASSOC
    // - MYSQLI_BOTH
	}
	
	public function fetch_assoc() {
		return $this->_query->fetch_assoc();
	}
	
	public function fetch_array() {
		return $this->_query->fetch_array();
	}
	
	public function fetch_object() {
		return $this->_query->fetch_object();
	}

  public function autocommit() {
    return $this->_mysqli->autocommit(FALSE);
  }

  public function commit() {
    return $this->_mysqli->commit();
  }

  public function rollback($flags = null, $name = null) {
    return $this->_mysqli->rollback($flags, $name);
    // flags  Optional. A constant:
    // - MYSQLI_TRANS_COR_AND_CHAIN - Appends "AND CHAIN"
    // - MYSQLI_TRANS_COR_AND_NO_CHAIN - Appends "AND NO CHAIN"
    // - MYSQLI_TRANS_COR_RELEASE - Appends "RELEASE"
    // - MYSQLI_TRANS_COR_NO_RELEASE - Appends "NO RELEASE"
    // name  Optional. ROLLBACK/*name*/ is executed if this parameter is specified
  }
	
	public function insert($table, $data = array()) { // function INSERT
		$fields = implode(',', array_keys($data));
		$values = implode("','", $data);
		$sth = $this->prepare("INSERT INTO $table($fields) VALUES('".$values."')");
		if(@$sth->execute())
			return true;
		else
			return false;
	}
	
	public function update($table, $rows, $where){ // function UPDATE		
    $keys = array_keys($rows); 
    $a = count($keys);
    for($i = 0; $i < count($rows); $i++) {        
      if($rows[$keys[$i]]) {
        $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
      } else {
        $update .= $keys[$i].'='.$rows[$keys[$i]];
      }

      if($i != count($rows)-1) {
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
	
	public function last_row($table, $field){
		$sth = $this->prepare("SELECT max($field) as id FROM $table");
		$sth->execute();
		while($r = $sth->fetch_assoc()) {
			return $r['id'];
		}
	}

	public function first_row($table, $field) {
		$sth = $this->prepare("SELECT min($field) as id FROM $table");
		$sth->execute();
		while($r = $sth->fetch_assoc()){
			return $r['id'];
		}
	}
	
}