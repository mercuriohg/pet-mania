<?php
class Database{
	private static $pdo;

	public static function getConnection(): PDO {
		if (self::$pdo === null) {
			$dbPath = __DIR__ . '/../data/petmania.db';
			$needCreate = !file_exists($dbPath);

			$dsn = 'sqlite:' . $dbPath;
			self::$pdo = new PDO($dsn);
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$pdo->exec('PRAGMA foreign_keys = ON;');

			if ($needCreate) {
				self::migrate(self::$pdo);
			}
		}

		return self::$pdo;
	}

	private static function migrate(PDO $pdo) {
		$schemaFile = __DIR__ . '/../data/petmania.sql';
		if (file_exists($schemaFile)) {
			$sql = file_get_contents($schemaFile);
			$pdo->exec($sql);
		}
	}
}