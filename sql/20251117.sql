ALTER TABLE `room_guests` ADD `id_proof` VARCHAR(50) NULL AFTER `id_number`;

ALTER TABLE `raw_materials` DROP `expiry_date`;

ALTER TABLE `purchase_inward_logs` ADD `expiry_date` DATE NULL AFTER `total_qty`;

ALTER TABLE `stocks` CHANGE `stock_id` `expiry_date` DATE NULL DEFAULT NULL;

ALTER TABLE `inventory_management` ADD `expiry_date` DATE NULL AFTER `department_id`;

ALTER TABLE `inventory_management` ADD `status` INT NULL DEFAULT '1' AFTER `balance`;

ALTER TABLE `store_requests` ADD `expiry_date` DATE NULL AFTER `department_id`;

ALTER TABLE `store_return_requests` ADD `expiry_date` DATE NULL AFTER `department_id`;