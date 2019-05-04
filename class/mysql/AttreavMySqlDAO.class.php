<?php
/**
 * Class that operate on table 'attreav'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class AttreavMySqlDAO implements AttreavDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AttreavMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM attreav WHERE idAttrEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM attreav';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM attreav ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param attreav primary key
 	 */
	public function delete($idAttrEav){
		$sql = 'DELETE FROM attreav WHERE idAttrEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAttrEav);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AttreavMySql attreav
 	 */
	public function insert($attreav){
		$sql = 'INSERT INTO attreav (id_eav, domaineEav, poidsEav, critereEav, indicateurEav, priseEav, importanceEav, ponderationEav, notationEav, noteEav) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($attreav->idEav);
		$sqlQuery->set($attreav->domaineEav);
		$sqlQuery->set($attreav->poidsEav);
		$sqlQuery->set($attreav->critereEav);
		$sqlQuery->set($attreav->indicateurEav);
		$sqlQuery->set($attreav->priseEav);
		$sqlQuery->set($attreav->importanceEav);
		$sqlQuery->set($attreav->ponderationEav);
		$sqlQuery->set($attreav->notationEav);
		$sqlQuery->set($attreav->noteEav);

		$id = $this->executeInsert($sqlQuery);	
		$attreav->idAttrEav = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AttreavMySql attreav
 	 */
	public function update($attreav){
		$sql = 'UPDATE attreav SET id_eav = ?, domaineEav = ?, poidsEav = ?, critereEav = ?, indicateurEav = ?, priseEav = ?, importanceEav = ?, ponderationEav = ?, notationEav = ?, noteEav = ? WHERE idAttrEav = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($attreav->idEav);
		$sqlQuery->set($attreav->domaineEav);
		$sqlQuery->set($attreav->poidsEav);
		$sqlQuery->set($attreav->critereEav);
		$sqlQuery->set($attreav->indicateurEav);
		$sqlQuery->set($attreav->priseEav);
		$sqlQuery->set($attreav->importanceEav);
		$sqlQuery->set($attreav->ponderationEav);
		$sqlQuery->set($attreav->notationEav);
		$sqlQuery->set($attreav->noteEav);

		$sqlQuery->setNumber($attreav->idAttrEav);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM attreav';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdEav($value){
		$sql = 'SELECT * FROM attreav WHERE id_eav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDomaineEav($value){
		$sql = 'SELECT * FROM attreav WHERE domaineEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPoidsEav($value){
		$sql = 'SELECT * FROM attreav WHERE poidsEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCritereEav($value){
		$sql = 'SELECT * FROM attreav WHERE critereEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIndicateurEav($value){
		$sql = 'SELECT * FROM attreav WHERE indicateurEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPriseEav($value){
		$sql = 'SELECT * FROM attreav WHERE priseEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByImportanceEav($value){
		$sql = 'SELECT * FROM attreav WHERE importanceEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPonderationEav($value){
		$sql = 'SELECT * FROM attreav WHERE ponderationEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNotationEav($value){
		$sql = 'SELECT * FROM attreav WHERE notationEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNoteEav($value){
		$sql = 'SELECT * FROM attreav WHERE noteEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdEav($value){
		$sql = 'DELETE FROM attreav WHERE id_eav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDomaineEav($value){
		$sql = 'DELETE FROM attreav WHERE domaineEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPoidsEav($value){
		$sql = 'DELETE FROM attreav WHERE poidsEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCritereEav($value){
		$sql = 'DELETE FROM attreav WHERE critereEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIndicateurEav($value){
		$sql = 'DELETE FROM attreav WHERE indicateurEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPriseEav($value){
		$sql = 'DELETE FROM attreav WHERE priseEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByImportanceEav($value){
		$sql = 'DELETE FROM attreav WHERE importanceEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPonderationEav($value){
		$sql = 'DELETE FROM attreav WHERE ponderationEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNotationEav($value){
		$sql = 'DELETE FROM attreav WHERE notationEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNoteEav($value){
		$sql = 'DELETE FROM attreav WHERE noteEav = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AttreavMySql 
	 */
	protected function readRow($row){
		$attreav = new Attreav();
		
		$attreav->idAttrEav = $row['idAttrEav'];
		$attreav->idEav = $row['id_eav'];
		$attreav->domaineEav = $row['domaineEav'];
		$attreav->poidsEav = $row['poidsEav'];
		$attreav->critereEav = $row['critereEav'];
		$attreav->indicateurEav = $row['indicateurEav'];
		$attreav->priseEav = $row['priseEav'];
		$attreav->importanceEav = $row['importanceEav'];
		$attreav->ponderationEav = $row['ponderationEav'];
		$attreav->notationEav = $row['notationEav'];
		$attreav->noteEav = $row['noteEav'];

		return $attreav;
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
	 * @return AttreavMySql 
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