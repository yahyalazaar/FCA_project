<?php
/**
 * Class that operate on table 'evalamont'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-16 19:38
 */
class EvalamontMySqlDAO implements EvalamontDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EvalamontMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM evalamont WHERE id_eam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM evalamont';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM evalamont ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param evalamont primary key
 	 */
	public function delete($id_eam){
		$sql = 'DELETE FROM evalamont WHERE id_eam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_eam);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EvalamontMySql evalamont
 	 */
	public function insert($evalamont){
		$sql = 'INSERT INTO evalamont () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$evalamont->idEam = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EvalamontMySql evalamont
 	 */
	public function update($evalamont){
		$sql = 'UPDATE evalamont SET  WHERE id_eam = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->setNumber($evalamont->idEam);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM evalamont';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return EvalamontMySql 
	 */
	protected function readRow($row){
		$evalamont = new Evalamont();
		
		$evalamont->idEam = $row['id_eam'];

		return $evalamont;
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
	 * @return EvalamontMySql 
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