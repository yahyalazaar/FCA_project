<?php
/**
 * Class that operate on table 'disposition'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class DispositionMySqlDAO implements DispositionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DispositionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM disposition WHERE idDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM disposition';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM disposition ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param disposition primary key
 	 */
	public function delete($idDisp){
		$sql = 'DELETE FROM disposition WHERE idDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idDisp);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DispositionMySql disposition
 	 */
	public function insert($disposition){
		$sql = 'INSERT INTO disposition (id_rec, actionDisp, quiDisp, quandDisp, commDisp) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($disposition->idRec);
		$sqlQuery->set($disposition->actionDisp);
		$sqlQuery->set($disposition->quiDisp);
		$sqlQuery->set($disposition->quandDisp);
		$sqlQuery->set($disposition->commDisp);

		$id = $this->executeInsert($sqlQuery);	
		$disposition->idDisp = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DispositionMySql disposition
 	 */
	public function update($disposition){
		$sql = 'UPDATE disposition SET id_rec = ?, actionDisp = ?, quiDisp = ?, quandDisp = ?, commDisp = ? WHERE idDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($disposition->idRec);
		$sqlQuery->set($disposition->actionDisp);
		$sqlQuery->set($disposition->quiDisp);
		$sqlQuery->set($disposition->quandDisp);
		$sqlQuery->set($disposition->commDisp);

		$sqlQuery->setNumber($disposition->idDisp);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM disposition';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRec($value){
		$sql = 'SELECT * FROM disposition WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActionDisp($value){
		$sql = 'SELECT * FROM disposition WHERE actionDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuiDisp($value){
		$sql = 'SELECT * FROM disposition WHERE quiDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuandDisp($value){
		$sql = 'SELECT * FROM disposition WHERE quandDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCommDisp($value){
		$sql = 'SELECT * FROM disposition WHERE commDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRec($value){
		$sql = 'DELETE FROM disposition WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActionDisp($value){
		$sql = 'DELETE FROM disposition WHERE actionDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuiDisp($value){
		$sql = 'DELETE FROM disposition WHERE quiDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuandDisp($value){
		$sql = 'DELETE FROM disposition WHERE quandDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCommDisp($value){
		$sql = 'DELETE FROM disposition WHERE commDisp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DispositionMySql 
	 */
	protected function readRow($row){
		$disposition = new Disposition();
		
		$disposition->idDisp = $row['idDisp'];
		$disposition->idRec = $row['id_rec'];
		$disposition->actionDisp = $row['actionDisp'];
		$disposition->quiDisp = $row['quiDisp'];
		$disposition->quandDisp = $row['quandDisp'];
		$disposition->commDisp = $row['commDisp'];

		return $disposition;
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
	 * @return DispositionMySql 
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