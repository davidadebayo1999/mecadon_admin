<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;


/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $usertype
 * @property string $firstname
 * @property string $lastname
 * @property string $fullname
 * @property string $phone
 * @property string $address
 * @property string $town
 * @property string $state
 * @property string $country
 * @property string $postalcode
 * @property bool $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }

      // full_name virtual field
      protected function _getFullName()
      {
          return $this->_properties['firstname'] . ' ' . $this->_properties['lastname'];
      }

}
