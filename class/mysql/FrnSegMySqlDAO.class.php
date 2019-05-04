<?php
/**
 * Class that operate on table 'frn_seg'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class FrnSegMySqlDAO implements FrnSegDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FrnSegMySql 
	 */
	public function load($idFrn, $idSeg){
		$sql = 'SELECT * FROM frn_seg WHERE id_frn = ?  AND id_seg = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idFrn);
		$sqlQuery->setNumber($idSeg);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM frn_seg';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM frn_seg ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param frnSeg primary key
 	 */
	public function delete($idFrn, $idSeg){
		$sql = 'DELETE FROM frn_seg WHERE id_frn = ?  AND id_seg = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idFrn);
		$sqlQuery->setNumber($idSeg);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FrnSegMySql frnSeg
 	 */
	public function insert($frnSeg){
		$sql = 'INSERT INTO frn_seg ( id_frn, id_seg) VALUES ( ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($frnSeg->idFrn);

		$sqlQuery->setNumber($frnSeg->idSeg);

		$this->executeInsert($sqlQuery);	
		//$frnSeg->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FrnSegMySql frnSeg
 	 */
	public function update($frnSeg){
		$sql = 'UPDATE frn_seg SET  WHERE id_frn = ?  AND id_seg = ? ';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($frnSeg->idFrn);

		$sqlQuery->setNumber($frnSeg->idSeg);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM frn_seg';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return FrnSegMySql 
	 */
	protected function readRow($row){
		$frnSeg = new FrnSeg();
		
		$frnSeg->idFrn = $row['id_frn'];
		$frnSeg->idSeg = $row['id_seg'];

		return $frnSeg;
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
	 * @return FrnSegMySql 
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