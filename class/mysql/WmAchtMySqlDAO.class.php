<?php
/**
 * Class that operate on table 'wm_acht'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class WmAchtMySqlDAO implements WmAchtDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WmAchtMySql 
	 */
	public function load($idAdmin, $idAcht){
		$sql = 'SELECT * FROM wm_acht WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idAcht);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wm_acht';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wm_acht ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wmAcht primary key
 	 */
	public function delete($idAdmin, $idAcht){
		$sql = 'DELETE FROM wm_acht WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idAcht);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WmAchtMySql wmAcht
 	 */
	public function insert($wmAcht){
		$sql = 'INSERT INTO wm_acht (date_wm_acht, type, id_admin, id_acht) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wmAcht->dateWmAcht);
		$sqlQuery->set($wmAcht->type);

		
		$sqlQuery->setNumber($wmAcht->idAdmin);

		$sqlQuery->setNumber($wmAcht->idAcht);

		$this->executeInsert($sqlQuery);	
		//$wmAcht->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WmAchtMySql wmAcht
 	 */
	public function update($wmAcht){
		$sql = 'UPDATE wm_acht SET date_wm_acht = ?, type = ? WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wmAcht->dateWmAcht);
		$sqlQuery->set($wmAcht->type);

		
		$sqlQuery->setNumber($wmAcht->idAdmin);

		$sqlQuery->setNumber($wmAcht->idAcht);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wm_acht';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDateWmAcht($value){
		$sql = 'SELECT * FROM wm_acht WHERE date_wm_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM wm_acht WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDateWmAcht($value){
		$sql = 'DELETE FROM wm_acht WHERE date_wm_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM wm_acht WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WmAchtMySql 
	 */
	protected function readRow($row){
		$wmAcht = new WmAcht();
		
		$wmAcht->idAdmin = $row['id_admin'];
		$wmAcht->idAcht = $row['id_acht'];
		$wmAcht->dateWmAcht = $row['date_wm_acht'];
		$wmAcht->type = $row['type'];

		return $wmAcht;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return WmAchtMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>