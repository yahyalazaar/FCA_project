<?php
/**
 * Class that operate on table 'evalaval'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class EvalavalMySqlDAO implements EvalavalDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EvalavalMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM evalaval WHERE id_eav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM evalaval';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM evalaval ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param evalaval primary key
 	 */
	public function delete($id_eav){
		$sql = 'DELETE FROM evalaval WHERE id_eav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_eav);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EvalavalMySql evalaval
 	 */
	public function insert($evalaval){
		$sql = 'INSERT INTO evalaval () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$evalaval->idEav = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EvalavalMySql evalaval
 	 */
	public function update($evalaval){
		$sql = 'UPDATE evalaval SET  WHERE id_eav = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->setNumber($evalaval->idEav);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM evalaval';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return EvalavalMySql 
	 */
	protected function readRow($row){
		$evalaval = new Evalaval();
		
		$evalaval->idEav = $row['id_eav'];

		return $evalaval;
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
	 * @return EvalavalMySql 
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