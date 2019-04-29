<?php
/**
 * Class that operate on table 'piecejointes'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class PiecejointesMySqlDAO implements PiecejointesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PiecejointesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM piecejointes WHERE idPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM piecejointes';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM piecejointes ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param piecejointe primary key
 	 */
	public function delete($idPj){
		$sql = 'DELETE FROM piecejointes WHERE idPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPj);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PiecejointesMySql piecejointe
 	 */
	public function insert($piecejointe){
		$sql = 'INSERT INTO piecejointes (id_rec, photoPj, emailPj, bcPj, blPj, riPj, autrePj) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($piecejointe->idRec);
		$sqlQuery->setNumber($piecejointe->photoPj);
		$sqlQuery->setNumber($piecejointe->emailPj);
		$sqlQuery->setNumber($piecejointe->bcPj);
		$sqlQuery->setNumber($piecejointe->blPj);
		$sqlQuery->setNumber($piecejointe->riPj);
		$sqlQuery->setNumber($piecejointe->autrePj);

		$id = $this->executeInsert($sqlQuery);	
		$piecejointe->idPj = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PiecejointesMySql piecejointe
 	 */
	public function update($piecejointe){
		$sql = 'UPDATE piecejointes SET id_rec = ?, photoPj = ?, emailPj = ?, bcPj = ?, blPj = ?, riPj = ?, autrePj = ? WHERE idPj = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($piecejointe->idRec);
		$sqlQuery->setNumber($piecejointe->photoPj);
		$sqlQuery->setNumber($piecejointe->emailPj);
		$sqlQuery->setNumber($piecejointe->bcPj);
		$sqlQuery->setNumber($piecejointe->blPj);
		$sqlQuery->setNumber($piecejointe->riPj);
		$sqlQuery->setNumber($piecejointe->autrePj);

		$sqlQuery->setNumber($piecejointe->idPj);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM piecejointes';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRec($value){
		$sql = 'SELECT * FROM piecejointes WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhotoPj($value){
		$sql = 'SELECT * FROM piecejointes WHERE photoPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailPj($value){
		$sql = 'SELECT * FROM piecejointes WHERE emailPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBcPj($value){
		$sql = 'SELECT * FROM piecejointes WHERE bcPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBlPj($value){
		$sql = 'SELECT * FROM piecejointes WHERE blPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRiPj($value){
		$sql = 'SELECT * FROM piecejointes WHERE riPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutrePj($value){
		$sql = 'SELECT * FROM piecejointes WHERE autrePj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRec($value){
		$sql = 'DELETE FROM piecejointes WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhotoPj($value){
		$sql = 'DELETE FROM piecejointes WHERE photoPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailPj($value){
		$sql = 'DELETE FROM piecejointes WHERE emailPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBcPj($value){
		$sql = 'DELETE FROM piecejointes WHERE bcPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBlPj($value){
		$sql = 'DELETE FROM piecejointes WHERE blPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRiPj($value){
		$sql = 'DELETE FROM piecejointes WHERE riPj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutrePj($value){
		$sql = 'DELETE FROM piecejointes WHERE autrePj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PiecejointesMySql 
	 */
	protected function readRow($row){
		$piecejointe = new Piecejointe();
		
		$piecejointe->idPj = $row['idPj'];
		$piecejointe->idRec = $row['id_rec'];
		$piecejointe->photoPj = $row['photoPj'];
		$piecejointe->emailPj = $row['emailPj'];
		$piecejointe->bcPj = $row['bcPj'];
		$piecejointe->blPj = $row['blPj'];
		$piecejointe->riPj = $row['riPj'];
		$piecejointe->autrePj = $row['autrePj'];

		return $piecejointe;
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
	 * @return PiecejointesMySql 
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