<?php

namespace App;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class AbstractResource
{
	/**
	 * @var \Doctrine\ORM\EntityManager
	 */
	private $entityManager = null;
	
	/**
	 * @return \Doctrine\ORM\EntityManager
	 */
	public function getEntityManager()
	{
		if ($this->entityManager === null)
		{
			$this->entityManager = $this->createEntityManager();
		}
		
		return $this->entityManager;
	}
	
	
	/**
	 * @return EntityManager
	 */
	public function createEntityManager()
	{
		$path 	 = array('Path/To/Entity');
		$devMode = true;
		
		$config = Setup::createAnnotationMetadataConfiguration($path, $devMode);
		
		// Definimos las credenciales...
		$connectionOptions = array(
				'driver'   => '',
				'host'	   => '',
				'dbname'   => '',
				'user'	   => '',
				'password' => '',
		);
		
		return EntityManager::create($connectionOptions, $config);
	}
}