<?php
/**
 * Class that operate on table 'reclamation'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
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
		$sql = 'INSERT INTO reclamation (id_admin, id_acht, id_frn, ncmdRec, contact_rec, date_rec, date_rep_rec, description_rec, etatRec) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($reclamation->idAdmin);
		$sqlQuery->setNumber($reclamation->idAcht);
		$sqlQuery->setNumber($reclamation->idFrn);
		$sqlQuery->set($reclamation->ncmdRec);
		$sqlQuery->set($reclamation->contactRec);
		$sqlQuery->set($reclamation->dateRec);
		$sqlQuery->set($reclamation->dateRepRec);
		$sqlQuery->set($reclamation->descriptionRec);
		$sqlQuery->set($reclamation->etatRec);

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
		$sql = 'UPDATE reclamation SET id_admin = ?, id_acht = ?, id_frn = ?, ncmdRec = ?, contact_rec = ?, date_rec = ?, date_rep_rec = ?, description_rec = ?, etatRec = ? WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($reclamation->idAdmin);
		$sqlQuery->setNumber($reclamation->idAcht);
		$sqlQuery->setNumber($reclamation->idFrn);
		$sqlQuery->set($reclamation->ncmdRec);
		$sqlQuery->set($reclamation->contactRec);
		$sqlQuery->set($reclamation->dateRec);
		$sqlQuery->set($reclamation->dateRepRec);
		$sqlQuery->set($reclamation->descriptionRec);
		$sqlQuery->set($reclamation->etatRec);

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

	public function queryByIdFrn($value){
		$sql = 'SELECT * FROM reclamation WHERE id_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNcmdRec($value){
		$sql = 'SELECT * FROM reclamation WHERE ncmdRec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContactRec($value){
		$sql = 'SELECT * FROM reclamation WHERE contact_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateRec($value){
		$sql = 'SELECT * FROM reclamation WHERE date_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateRepRec($value){
		$sql = 'SELECT * FROM reclamation WHERE date_rep_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescriptionRec($value){
		$sql = 'SELECT * FROM reclamation WHERE description_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEtatRec($value){
		$sql = 'SELECT * FROM reclamation WHERE etatRec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
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

	public function deleteByIdFrn($value){
		$sql = 'DELETE FROM reclamation WHERE id_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNcmdRec($value){
		$sql = 'DELETE FROM reclamation WHERE ncmdRec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContactRec($value){
		$sql = 'DELETE FROM reclamation WHERE contact_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateRec($value){
		$sql = 'DELETE FROM reclamation WHERE date_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateRepRec($value){
		$sql = 'DELETE FROM reclamation WHERE date_rep_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescriptionRec($value){
		$sql = 'DELETE FROM reclamation WHERE description_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEtatRec($value){
		$sql = 'DELETE FROM reclamation WHERE etatRec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
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
		$reclamation->idFrn = $row['id_frn'];
		$reclamation->ncmdRec = $row['ncmdRec'];
		$reclamation->contactRec = $row['contact_rec'];
		$reclamation->dateRec = $row['date_rec'];
		$reclamation->dateRepRec = $row['date_rep_rec'];
		$reclamation->descriptionRec = $row['description_rec'];
		$reclamation->etatRec = $row['etatRec'];

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