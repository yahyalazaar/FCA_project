<?php
/**
 * Class that operate on table 'ad_acht'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class AdAchtMySqlDAO implements AdAchtDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdAchtMySql 
	 */
	public function load($idAdmin, $idAcht){
		$sql = 'SELECT * FROM ad_acht WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idAcht);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM ad_acht';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM ad_acht ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param adAcht primary key
 	 */
	public function delete($idAdmin, $idAcht){
		$sql = 'DELETE FROM ad_acht WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idAcht);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdAchtMySql adAcht
 	 */
	public function insert($adAcht){
		$sql = 'INSERT INTO ad_acht (date_ad_acht, type, id_admin, id_acht) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adAcht->dateAdAcht);
		$sqlQuery->set($adAcht->type);

		
		$sqlQuery->setNumber($adAcht->idAdmin);

		$sqlQuery->setNumber($adAcht->idAcht);

		$this->executeInsert($sqlQuery);	
		//$adAcht->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdAchtMySql adAcht
 	 */
	public function update($adAcht){
		$sql = 'UPDATE ad_acht SET date_ad_acht = ?, type = ? WHERE id_admin = ?  AND id_acht = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adAcht->dateAdAcht);
		$sqlQuery->set($adAcht->type);

		
		$sqlQuery->setNumber($adAcht->idAdmin);

		$sqlQuery->setNumber($adAcht->idAcht);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM ad_acht';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDateAdAcht($value){
		$sql = 'SELECT * FROM ad_acht WHERE date_ad_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM ad_acht WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDateAdAcht($value){
		$sql = 'DELETE FROM ad_acht WHERE date_ad_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM ad_acht WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AdAchtMySql 
	 */
	protected function readRow($row){
		$adAcht = new AdAcht();
		
		$adAcht->idAdmin = $row['id_admin'];
		$adAcht->idAcht = $row['id_acht'];
		$adAcht->dateAdAcht = $row['date_ad_acht'];
		$adAcht->type = $row['type'];

		return $adAcht;
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
	 * @return AdAchtMySql 
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