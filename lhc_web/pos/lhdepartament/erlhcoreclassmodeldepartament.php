<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_departament";
$def->class = "erLhcoreClassModelDepartament";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['name'] = new ezcPersistentObjectProperty();
$def->properties['name']->columnName   = 'name';
$def->properties['name']->propertyName = 'name';
$def->properties['name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['instance_id'] = new ezcPersistentObjectProperty();
$def->properties['instance_id']->columnName   = 'instance_id';
$def->properties['instance_id']->propertyName = 'instance_id';
$def->properties['instance_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['email'] = new ezcPersistentObjectProperty();
$def->properties['email']->columnName   = 'email';
$def->properties['email']->propertyName = 'email';
$def->properties['email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>