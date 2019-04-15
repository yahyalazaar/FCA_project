<?php
/**
 * Class that operate on table 'rfi'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class RfiMySqlDAO implements RfiDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return RfiMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM rfi WHERE id_rfi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM rfi';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM rfi ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param rfi primary key
 	 */
	public function delete($id_rfi){
		$sql = 'DELETE FROM rfi WHERE id_rfi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_rfi);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param RfiMySql rfi
 	 */
	public function insert($rfi){
		$sql = 'INSERT INTO rfi () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$rfi->idRfi = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param RfiMySql rfi
 	 */
	public function update($rfi){
		$sql = 'UPDATE rfi SET  WHERE id_rfi = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->setNumber($rfi->idRfi);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM rfi';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return RfiMySql 
	 */
	protected function readRow($row){
		$rfi = new Rfi();
		
		$rfi->idRfi = $row['id_rfi'];

		return $rfi;
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
	 * @return RfiMySql 
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