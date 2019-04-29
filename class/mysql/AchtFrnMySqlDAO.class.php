<?php
/**
 * Class that operate on table 'acht_frn'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class AchtFrnMySqlDAO implements AchtFrnDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AchtFrnMySql 
	 */
	public function load($idAcht, $idFrn){
		$sql = 'SELECT * FROM acht_frn WHERE id_acht = ?  AND id_frn = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAcht);
		$sqlQuery->setNumber($idFrn);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM acht_frn';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM acht_frn ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param achtFrn primary key
 	 */
	public function delete($idAcht, $idFrn){
		$sql = 'DELETE FROM acht_frn WHERE id_acht = ?  AND id_frn = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAcht);
		$sqlQuery->setNumber($idFrn);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AchtFrnMySql achtFrn
 	 */
	public function insert($achtFrn){
		$sql = 'INSERT INTO acht_frn (date_acht_frn, type, id_acht, id_frn) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($achtFrn->dateAchtFrn);
		$sqlQuery->set($achtFrn->type);

		
		$sqlQuery->setNumber($achtFrn->idAcht);

		$sqlQuery->setNumber($achtFrn->idFrn);

		$this->executeInsert($sqlQuery);	
		//$achtFrn->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AchtFrnMySql achtFrn
 	 */
	public function update($achtFrn){
		$sql = 'UPDATE acht_frn SET date_acht_frn = ?, type = ? WHERE id_acht = ?  AND id_frn = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($achtFrn->dateAchtFrn);
		$sqlQuery->set($achtFrn->type);

		
		$sqlQuery->setNumber($achtFrn->idAcht);

		$sqlQuery->setNumber($achtFrn->idFrn);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM acht_frn';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDateAchtFrn($value){
		$sql = 'SELECT * FROM acht_frn WHERE date_acht_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM acht_frn WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDateAchtFrn($value){
		$sql = 'DELETE FROM acht_frn WHERE date_acht_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM acht_frn WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AchtFrnMySql 
	 */
	protected function readRow($row){
		$achtFrn = new AchtFrn();
		
		$achtFrn->idAcht = $row['id_acht'];
		$achtFrn->idFrn = $row['id_frn'];
		$achtFrn->dateAchtFrn = $row['date_acht_frn'];
		$achtFrn->type = $row['type'];

		return $achtFrn;
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
	 * @return AchtFrnMySql 
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