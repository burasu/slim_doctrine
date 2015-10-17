<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping;
use Doctrine\DBAL\Types\IntegerType;

/**
 * @Entity
 * @Table(name="users")
 * @author burasu
 */
class User
{
	/**
	 * @var integer
	 * 
	 * @Id
	 * @Column(name="id", type="integer)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @var string
	 * @Column(type="string", length=64)
	 */
	protected $name;
	
	/**
	 * @var string
	 * @Column(type="string", length=255)
	 */
	protected $email;
	
	// Definimos setters/getters para todas las propiedades...
}