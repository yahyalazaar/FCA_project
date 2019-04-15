<?php
/**
 * Class that operate on table 'reclamation'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class ReclamationMySqlDAO implements ReclamationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ReclamationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM reclamation WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM reclamation';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM reclamation ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param reclamation primary key
 	 */
	public function delete($id_rec){
		$sql = 'DELETE FROM reclamation WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_rec);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ReclamationMySql reclamation
 	 */
	public function insert($reclamation){
		$sql = 'INSERT INTO reclamation (id_admin, id_acht) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($reclamation->idAdmin);
		$sqlQuery->setNumber($reclamation->idAcht);

		$id = $this->executeInsert($sqlQuery);	
		$reclamation->idRec = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ReclamationMySql reclamation
 	 */
	public function update($reclamation){
		$sql = 'UPDATE reclamation SET id_admin = ?, id_acht = ? WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($reclamation->idAdmin);
		$sqlQuery->setNumber($reclamation->idAcht);

		$sqlQuery->setNumber($reclamation->idRec);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM reclamation';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdAdmin($value){
		$sql = 'SELECT * FROM reclamation WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdAcht($value){
		$sql = 'SELECT * FROM reclamation WHERE id_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdAdmin($value){
		$sql = 'DELETE FROM reclamation WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdAcht($value){
		$sql = 'DELETE FROM reclamation WHERE id_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ReclamationMySql 
	 */
	protected function readRow($row){
		$reclamation = new Reclamation();
		
		$reclamation->idRec = $row['id_rec'];
		$reclamation->idAdmin = $row['id_admin'];
		$reclamation->idAcht = $row['id_acht'];

		return $reclamation;
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
	 * @return ReclamationMySql 
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