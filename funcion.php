<?php
class funcion {
	public static function data(string $data) {
		$request = $_REQUEST [$data];
		$tmp = (isset ( $request )) ? trim ( htmlentities ( $request, ENT_QUOTES, 'UTF-8' ) ) : "";
		return $tmp;
	}
	public static function mostrar(array $array) {
		foreach ( $array as $item ) {
			print_r ( ' ' . $item . '<br>' );
		}
	}
}
?>
