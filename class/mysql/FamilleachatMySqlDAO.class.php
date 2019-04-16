<?php
/**
 * Class that operate on table 'familleachat'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-16 19:38
 */
class FamilleachatMySqlDAO implements FamilleachatDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FamilleachatMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM familleachat WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM familleachat';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM familleachat ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param familleachat primary key
 	 */
	public function delete($id_fa){
		$sql = 'DELETE FROM familleachat WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_fa);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FamilleachatMySql familleachat
 	 */
	public function insert($familleachat){
		$sql = 'INSERT INTO familleachat (nom_fa, code_fa, type_fa, segement1_fa, segement2_fa, segement3_fa, segement4_fe, service_fa, classe_fa, levier_fa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($familleachat->nomFa);
		$sqlQuery->set($familleachat->codeFa);
		$sqlQuery->set($familleachat->typeFa);
		$sqlQuery->set($familleachat->segement1Fa);
		$sqlQuery->set($familleachat->segement2Fa);
		$sqlQuery->set($familleachat->segement3Fa);
		$sqlQuery->set($familleachat->segement4Fe);
		$sqlQuery->set($familleachat->serviceFa);
		$sqlQuery->set($familleachat->classeFa);
		$sqlQuery->set($familleachat->levierFa);

		$id = $this->executeInsert($sqlQuery);	
		$familleachat->idFa = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FamilleachatMySql familleachat
 	 */
	public function update($familleachat){
		$sql = 'UPDATE familleachat SET nom_fa = ?, code_fa = ?, type_fa = ?, segement1_fa = ?, segement2_fa = ?, segement3_fa = ?, segement4_fe = ?, service_fa = ?, classe_fa = ?, levier_fa = ? WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($familleachat->nomFa);
		$sqlQuery->set($familleachat->codeFa);
		$sqlQuery->set($familleachat->typeFa);
		$sqlQuery->set($familleachat->segement1Fa);
		$sqlQuery->set($familleachat->segement2Fa);
		$sqlQuery->set($familleachat->segement3Fa);
		$sqlQuery->set($familleachat->segement4Fe);
		$sqlQuery->set($familleachat->serviceFa);
		$sqlQuery->set($familleachat->classeFa);
		$sqlQuery->set($familleachat->levierFa);

		$sqlQuery->setNumber($familleachat->idFa);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM familleachat';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNomFa($value){
		$sql = 'SELECT * FROM familleachat WHERE nom_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCodeFa($value){
		$sql = 'SELECT * FROM familleachat WHERE code_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeFa($value){
		$sql = 'SELECT * FROM familleachat WHERE type_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySegement1Fa($value){
		$sql = 'SELECT * FROM familleachat WHERE segement1_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySegement2Fa($value){
		$sql = 'SELECT * FROM familleachat WHERE segement2_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySegement3Fa($value){
		$sql = 'SELECT * FROM familleachat WHERE segement3_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySegement4Fe($value){
		$sql = 'SELECT * FROM familleachat WHERE segement4_fe = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByServiceFa($value){
		$sql = 'SELECT * FROM familleachat WHERE service_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClasseFa($value){
		$sql = 'SELECT * FROM familleachat WHERE classe_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLevierFa($value){
		$sql = 'SELECT * FROM familleachat WHERE levier_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNomFa($value){
		$sql = 'DELETE FROM familleachat WHERE nom_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCodeFa($value){
		$sql = 'DELETE FROM familleachat WHERE code_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeFa($value){
		$sql = 'DELETE FROM familleachat WHERE type_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySegement1Fa($value){
		$sql = 'DELETE FROM familleachat WHERE segement1_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySegement2Fa($value){
		$sql = 'DELETE FROM familleachat WHERE segement2_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySegement3Fa($value){
		$sql = 'DELETE FROM familleachat WHERE segement3_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySegement4Fe($value){
		$sql = 'DELETE FROM familleachat WHERE segement4_fe = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByServiceFa($value){
		$sql = 'DELETE FROM familleachat WHERE service_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClasseFa($value){
		$sql = 'DELETE FROM familleachat WHERE classe_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLevierFa($value){
		$sql = 'DELETE FROM familleachat WHERE levier_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FamilleachatMySql 
	 */
	protected function readRow($row){
		$familleachat = new Familleachat();
		
		$familleachat->idFa = $row['id_fa'];
		$familleachat->nomFa = $row['nom_fa'];
		$familleachat->codeFa = $row['code_fa'];
		$familleachat->typeFa = $row['type_fa'];
		$familleachat->segement1Fa = $row['segement1_fa'];
		$familleachat->segement2Fa = $row['segement2_fa'];
		$familleachat->segement3Fa = $row['segement3_fa'];
		$familleachat->segement4Fe = $row['segement4_fe'];
		$familleachat->serviceFa = $row['service_fa'];
		$familleachat->classeFa = $row['classe_fa'];
		$familleachat->levierFa = $row['levier_fa'];

		return $familleachat;
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
	 * @return FamilleachatMySql 
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