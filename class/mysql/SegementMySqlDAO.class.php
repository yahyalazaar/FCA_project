<?php
/**
 * Class that operate on table 'segement'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class SegementMySqlDAO implements SegementDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SegementMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM segement WHERE id_seg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM segement';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM segement ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param segement primary key
 	 */
	public function delete($id_seg){
		$sql = 'DELETE FROM segement WHERE id_seg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_seg);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SegementMySql segement
 	 */
	public function insert($segement){
		$sql = 'INSERT INTO segement (id_admin, id_fa, nom_seg) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($segement->idAdmin);
		$sqlQuery->setNumber($segement->idFa);
		$sqlQuery->set($segement->nomSeg);

		$id = $this->executeInsert($sqlQuery);	
		$segement->idSeg = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SegementMySql segement
 	 */
	public function update($segement){
		$sql = 'UPDATE segement SET id_admin = ?, id_fa = ?, nom_seg = ? WHERE id_seg = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($segement->idAdmin);
		$sqlQuery->setNumber($segement->idFa);
		$sqlQuery->set($segement->nomSeg);

		$sqlQuery->setNumber($segement->idSeg);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM segement';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdAdmin($value){
		$sql = 'SELECT * FROM segement WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdFa($value){
		$sql = 'SELECT * FROM segement WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNomSeg($value){
		$sql = 'SELECT * FROM segement WHERE nom_seg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdAdmin($value){
		$sql = 'DELETE FROM segement WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdFa($value){
		$sql = 'DELETE FROM segement WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNomSeg($value){
		$sql = 'DELETE FROM segement WHERE nom_seg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SegementMySql 
	 */
	protected function readRow($row){
		$segement = new Segement();
		
		$segement->idSeg = $row['id_seg'];
		$segement->idAdmin = $row['id_admin'];
		$segement->idFa = $row['id_fa'];
		$segement->nomSeg = $row['nom_seg'];

		return $segement;
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
	 * @return SegementMySql 
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