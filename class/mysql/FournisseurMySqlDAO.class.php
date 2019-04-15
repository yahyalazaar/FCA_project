<?php
/**
 * Class that operate on table 'fournisseur'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class FournisseurMySqlDAO implements FournisseurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FournisseurMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM fournisseur WHERE id_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM fournisseur';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM fournisseur ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param fournisseur primary key
 	 */
	public function delete($id_frn){
		$sql = 'DELETE FROM fournisseur WHERE id_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_frn);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FournisseurMySql fournisseur
 	 */
	public function insert($fournisseur){
		$sql = 'INSERT INTO fournisseur (id_fa, nom_frn, prenom_frn, email_frn, mdp_frn, tel_frn) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fournisseur->idFa);
		$sqlQuery->set($fournisseur->nomFrn);
		$sqlQuery->set($fournisseur->prenomFrn);
		$sqlQuery->set($fournisseur->emailFrn);
		$sqlQuery->set($fournisseur->mdpFrn);
		$sqlQuery->set($fournisseur->telFrn);

		$id = $this->executeInsert($sqlQuery);	
		$fournisseur->idFrn = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FournisseurMySql fournisseur
 	 */
	public function update($fournisseur){
		$sql = 'UPDATE fournisseur SET id_fa = ?, nom_frn = ?, prenom_frn = ?, email_frn = ?, mdp_frn = ?, tel_frn = ? WHERE id_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fournisseur->idFa);
		$sqlQuery->set($fournisseur->nomFrn);
		$sqlQuery->set($fournisseur->prenomFrn);
		$sqlQuery->set($fournisseur->emailFrn);
		$sqlQuery->set($fournisseur->mdpFrn);
		$sqlQuery->set($fournisseur->telFrn);

		$sqlQuery->setNumber($fournisseur->idFrn);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM fournisseur';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdFa($value){
		$sql = 'SELECT * FROM fournisseur WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNomFrn($value){
		$sql = 'SELECT * FROM fournisseur WHERE nom_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrenomFrn($value){
		$sql = 'SELECT * FROM fournisseur WHERE prenom_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailFrn($value){
		$sql = 'SELECT * FROM fournisseur WHERE email_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMdpFrn($value){
		$sql = 'SELECT * FROM fournisseur WHERE mdp_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelFrn($value){
		$sql = 'SELECT * FROM fournisseur WHERE tel_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdFa($value){
		$sql = 'DELETE FROM fournisseur WHERE id_fa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNomFrn($value){
		$sql = 'DELETE FROM fournisseur WHERE nom_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrenomFrn($value){
		$sql = 'DELETE FROM fournisseur WHERE prenom_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailFrn($value){
		$sql = 'DELETE FROM fournisseur WHERE email_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMdpFrn($value){
		$sql = 'DELETE FROM fournisseur WHERE mdp_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelFrn($value){
		$sql = 'DELETE FROM fournisseur WHERE tel_frn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FournisseurMySql 
	 */
	protected function readRow($row){
		$fournisseur = new Fournisseur();
		
		$fournisseur->idFrn = $row['id_frn'];
		$fournisseur->idFa = $row['id_fa'];
		$fournisseur->nomFrn = $row['nom_frn'];
		$fournisseur->prenomFrn = $row['prenom_frn'];
		$fournisseur->emailFrn = $row['email_frn'];
		$fournisseur->mdpFrn = $row['mdp_frn'];
		$fournisseur->telFrn = $row['tel_frn'];

		return $fournisseur;
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
	 * @return FournisseurMySql 
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