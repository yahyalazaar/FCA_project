<?php
/**
 * Class that operate on table 'action'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class ActionMySqlDAO implements ActionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ActionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM action WHERE idAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM action';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM action ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param action primary key
 	 */
	public function delete($idAct){
		$sql = 'DELETE FROM action WHERE idAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAct);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ActionMySql action
 	 */
	public function insert($action){
		$sql = 'INSERT INTO action (id_rec, actionAct, quiAct, quandAct, commAct) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($action->idRec);
		$sqlQuery->set($action->actionAct);
		$sqlQuery->set($action->quiAct);
		$sqlQuery->set($action->quandAct);
		$sqlQuery->set($action->commAct);

		$id = $this->executeInsert($sqlQuery);	
		$action->idAct = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ActionMySql action
 	 */
	public function update($action){
		$sql = 'UPDATE action SET id_rec = ?, actionAct = ?, quiAct = ?, quandAct = ?, commAct = ? WHERE idAct = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($action->idRec);
		$sqlQuery->set($action->actionAct);
		$sqlQuery->set($action->quiAct);
		$sqlQuery->set($action->quandAct);
		$sqlQuery->set($action->commAct);

		$sqlQuery->setNumber($action->idAct);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM action';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRec($value){
		$sql = 'SELECT * FROM action WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActionAct($value){
		$sql = 'SELECT * FROM action WHERE actionAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuiAct($value){
		$sql = 'SELECT * FROM action WHERE quiAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuandAct($value){
		$sql = 'SELECT * FROM action WHERE quandAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCommAct($value){
		$sql = 'SELECT * FROM action WHERE commAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRec($value){
		$sql = 'DELETE FROM action WHERE id_rec = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActionAct($value){
		$sql = 'DELETE FROM action WHERE actionAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuiAct($value){
		$sql = 'DELETE FROM action WHERE quiAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuandAct($value){
		$sql = 'DELETE FROM action WHERE quandAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCommAct($value){
		$sql = 'DELETE FROM action WHERE commAct = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ActionMySql 
	 */
	protected function readRow($row){
		$action = new Action();
		
		$action->idAct = $row['idAct'];
		$action->idRec = $row['id_rec'];
		$action->actionAct = $row['actionAct'];
		$action->quiAct = $row['quiAct'];
		$action->quandAct = $row['quandAct'];
		$action->commAct = $row['commAct'];

		return $action;
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
	 * @return ActionMySql 
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