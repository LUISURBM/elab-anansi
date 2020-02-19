# elab-broker
 
php -S 127.0.0.1:8000 -t public

 php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
 php bin/console make:migration
 
 `vlsm_instance_id` BIGINT(8) unsigned zerofill not null,
 CONSTRAINT _pk PRIMARY KEY (_id)