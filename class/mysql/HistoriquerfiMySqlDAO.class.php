<?php
/**
 * Class that operate on table 'historiquerfi'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class HistoriquerfiMySqlDAO implements HistoriquerfiDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return HistoriquerfiMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM historiquerfi WHERE id_hrfi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM historiquerfi';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM historiquerfi ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param historiquerfi primary key
 	 */
	public function delete($id_hrfi){
		$sql = 'DELETE FROM historiquerfi WHERE id_hrfi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_hrfi);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param HistoriquerfiMySql historiquerfi
 	 */
	public function insert($historiquerfi){
		$sql = 'INSERT INTO historiquerfi () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$historiquerfi->idHrfi = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param HistoriquerfiMySql historiquerfi
 	 */
	public function update($historiquerfi){
		$sql = 'UPDATE historiquerfi SET  WHERE id_hrfi = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->setNumber($historiquerfi->idHrfi);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM historiquerfi';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return HistoriquerfiMySql 
	 */
	protected function readRow($row){
		$historiquerfi = new Historiquerfi();
		
		$historiquerfi->idHrfi = $row['id_hrfi'];

		return $historiquerfi;
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
	 * @return HistoriquerfiMySql 
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