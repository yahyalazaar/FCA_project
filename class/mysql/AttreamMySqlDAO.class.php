<?php
/**
 * Class that operate on table 'attream'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class AttreamMySqlDAO implements AttreamDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AttreamMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM attream WHERE idAttrEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM attream';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM attream ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param attream primary key
 	 */
	public function delete($idAttrEam){
		$sql = 'DELETE FROM attream WHERE idAttrEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAttrEam);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AttreamMySql attream
 	 */
	public function insert($attream){
		$sql = 'INSERT INTO attream (id_eam, domaineEam, poidsEam, critereEam, indicateurEam, priseEam, importanceEam, ponderationEam, notationEam, noteEam) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($attream->idEam);
		$sqlQuery->set($attream->domaineEam);
		$sqlQuery->set($attream->poidsEam);
		$sqlQuery->set($attream->critereEam);
		$sqlQuery->set($attream->indicateurEam);
		$sqlQuery->set($attream->priseEam);
		$sqlQuery->set($attream->importanceEam);
		$sqlQuery->set($attream->ponderationEam);
		$sqlQuery->set($attream->notationEam);
		$sqlQuery->set($attream->noteEam);

		$id = $this->executeInsert($sqlQuery);	
		$attream->idAttrEam = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AttreamMySql attream
 	 */
	public function update($attream){
		$sql = 'UPDATE attream SET id_eam = ?, domaineEam = ?, poidsEam = ?, critereEam = ?, indicateurEam = ?, priseEam = ?, importanceEam = ?, ponderationEam = ?, notationEam = ?, noteEam = ? WHERE idAttrEam = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($attream->idEam);
		$sqlQuery->set($attream->domaineEam);
		$sqlQuery->set($attream->poidsEam);
		$sqlQuery->set($attream->critereEam);
		$sqlQuery->set($attream->indicateurEam);
		$sqlQuery->set($attream->priseEam);
		$sqlQuery->set($attream->importanceEam);
		$sqlQuery->set($attream->ponderationEam);
		$sqlQuery->set($attream->notationEam);
		$sqlQuery->set($attream->noteEam);

		$sqlQuery->setNumber($attream->idAttrEam);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM attream';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdEam($value){
		$sql = 'SELECT * FROM attream WHERE id_eam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDomaineEam($value){
		$sql = 'SELECT * FROM attream WHERE domaineEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPoidsEam($value){
		$sql = 'SELECT * FROM attream WHERE poidsEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCritereEam($value){
		$sql = 'SELECT * FROM attream WHERE critereEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIndicateurEam($value){
		$sql = 'SELECT * FROM attream WHERE indicateurEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPriseEam($value){
		$sql = 'SELECT * FROM attream WHERE priseEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByImportanceEam($value){
		$sql = 'SELECT * FROM attream WHERE importanceEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPonderationEam($value){
		$sql = 'SELECT * FROM attream WHERE ponderationEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNotationEam($value){
		$sql = 'SELECT * FROM attream WHERE notationEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNoteEam($value){
		$sql = 'SELECT * FROM attream WHERE noteEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdEam($value){
		$sql = 'DELETE FROM attream WHERE id_eam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDomaineEam($value){
		$sql = 'DELETE FROM attream WHERE domaineEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPoidsEam($value){
		$sql = 'DELETE FROM attream WHERE poidsEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCritereEam($value){
		$sql = 'DELETE FROM attream WHERE critereEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIndicateurEam($value){
		$sql = 'DELETE FROM attream WHERE indicateurEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPriseEam($value){
		$sql = 'DELETE FROM attream WHERE priseEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByImportanceEam($value){
		$sql = 'DELETE FROM attream WHERE importanceEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPonderationEam($value){
		$sql = 'DELETE FROM attream WHERE ponderationEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNotationEam($value){
		$sql = 'DELETE FROM attream WHERE notationEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNoteEam($value){
		$sql = 'DELETE FROM attream WHERE noteEam = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AttreamMySql 
	 */
	protected function readRow($row){
		$attream = new Attream();
		
		$attream->idAttrEam = $row['idAttrEam'];
		$attream->idEam = $row['id_eam'];
		$attream->domaineEam = $row['domaineEam'];
		$attream->poidsEam = $row['poidsEam'];
		$attream->critereEam = $row['critereEam'];
		$attream->indicateurEam = $row['indicateurEam'];
		$attream->priseEam = $row['priseEam'];
		$attream->importanceEam = $row['importanceEam'];
		$attream->ponderationEam = $row['ponderationEam'];
		$attream->notationEam = $row['notationEam'];
		$attream->noteEam = $row['noteEam'];

		return $attream;
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
	 * @return AttreamMySql 
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