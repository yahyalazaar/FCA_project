<?php
/**
 * Class that operate on table 'acheteur'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class AcheteurMySqlDAO implements AcheteurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AcheteurMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM acheteur WHERE id_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM acheteur';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM acheteur ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param acheteur primary key
 	 */
	public function delete($id_acht){
		$sql = 'DELETE FROM acheteur WHERE id_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_acht);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AcheteurMySql acheteur
 	 */
	public function insert($acheteur){
		$sql = 'INSERT INTO acheteur (nom_acht, prenom_acht, email_acht, mdp_acht, tel_acht, etat_acht) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($acheteur->nomAcht);
		$sqlQuery->set($acheteur->prenomAcht);
		$sqlQuery->set($acheteur->emailAcht);
		$sqlQuery->set($acheteur->mdpAcht);
		$sqlQuery->set($acheteur->telAcht);
		$sqlQuery->setNumber($acheteur->etatAcht);

		$id = $this->executeInsert($sqlQuery);	
		$acheteur->idAcht = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AcheteurMySql acheteur
 	 */
	public function update($acheteur){
		$sql = 'UPDATE acheteur SET nom_acht = ?, prenom_acht = ?, email_acht = ?, mdp_acht = ?, tel_acht = ?, etat_acht = ? WHERE id_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($acheteur->nomAcht);
		$sqlQuery->set($acheteur->prenomAcht);
		$sqlQuery->set($acheteur->emailAcht);
		$sqlQuery->set($acheteur->mdpAcht);
		$sqlQuery->set($acheteur->telAcht);
		$sqlQuery->setNumber($acheteur->etatAcht);

		$sqlQuery->setNumber($acheteur->idAcht);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM acheteur';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNomAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE nom_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrenomAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE prenom_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE email_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMdpAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE mdp_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE tel_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEtatAcht($value){
		$sql = 'SELECT * FROM acheteur WHERE etat_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNomAcht($value){
		$sql = 'DELETE FROM acheteur WHERE nom_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrenomAcht($value){
		$sql = 'DELETE FROM acheteur WHERE prenom_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAcht($value){
		$sql = 'DELETE FROM acheteur WHERE email_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMdpAcht($value){
		$sql = 'DELETE FROM acheteur WHERE mdp_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelAcht($value){
		$sql = 'DELETE FROM acheteur WHERE tel_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEtatAcht($value){
		$sql = 'DELETE FROM acheteur WHERE etat_acht = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AcheteurMySql 
	 */
	protected function readRow($row){
		$acheteur = new Acheteur();
		
		$acheteur->idAcht = $row['id_acht'];
		$acheteur->nomAcht = $row['nom_acht'];
		$acheteur->prenomAcht = $row['prenom_acht'];
		$acheteur->emailAcht = $row['email_acht'];
		$acheteur->mdpAcht = $row['mdp_acht'];
		$acheteur->telAcht = $row['tel_acht'];
		$acheteur->etatAcht = $row['etat_acht'];

		return $acheteur;
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
	 * @return AcheteurMySql 
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