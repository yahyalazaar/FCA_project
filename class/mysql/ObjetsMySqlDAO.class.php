<?php
/**
 * Class that operate on table 'objets'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class ObjetsMySqlDAO implements ObjetsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ObjetsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM objets WHERE idObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM objets';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM objets ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param objet primary key
 	 */
	public function delete($idObj){
		$sql = 'DELETE FROM objets WHERE idObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idObj);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ObjetsMySql objet
 	 */
	public function insert($objet){
		$sql = 'INSERT INTO objets (id_rec, retardObj, qteNCObj, qltNCObj, autreObj) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($objet->idRec);
		$sqlQuery->setNumber($objet->retardObj);
		$sqlQuery->setNumber($objet->qteNCObj);
		$sqlQuery->setNumber($objet->qltNCObj);
		$sqlQuery->set($objet->autreObj);

		$id = $this->executeInsert($sqlQuery);	
		$objet->idObj = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ObjetsMySql objet
 	 */
	public function update($objet){
		$sql = 'UPDATE objets SET id_rec = ?, retardObj = ?, qteNCObj = ?, qltNCObj = ?, autreObj = ? WHERE idObj = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($objet->idRec);
		$sqlQuery->setNumber($objet->retardObj);
		$sqlQuery->setNumber($objet->qteNCObj);
		$sqlQuery->setNumber($objet->qltNCObj);
		$sqlQuery->set($objet->autreObj);

		$sqlQuery->setNumber($objet->idObj);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM objets';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRec($value){
		$sql = 'SELECT * FROM objets WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRetardObj($value){
		$sql = 'SELECT * FROM objets WHERE retardObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQteNCObj($value){
		$sql = 'SELECT * FROM objets WHERE qteNCObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQltNCObj($value){
		$sql = 'SELECT * FROM objets WHERE qltNCObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutreObj($value){
		$sql = 'SELECT * FROM objets WHERE autreObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRec($value){
		$sql = 'DELETE FROM objets WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRetardObj($value){
		$sql = 'DELETE FROM objets WHERE retardObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQteNCObj($value){
		$sql = 'DELETE FROM objets WHERE qteNCObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQltNCObj($value){
		$sql = 'DELETE FROM objets WHERE qltNCObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutreObj($value){
		$sql = 'DELETE FROM objets WHERE autreObj = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ObjetsMySql 
	 */
	protected function readRow($row){
		$objet = new Objet();
		
		$objet->idObj = $row['idObj'];
		$objet->idRec = $row['id_rec'];
		$objet->retardObj = $row['retardObj'];
		$objet->qteNCObj = $row['qteNCObj'];
		$objet->qltNCObj = $row['qltNCObj'];
		$objet->autreObj = $row['autreObj'];

		return $objet;
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
	 * @return ObjetsMySql 
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