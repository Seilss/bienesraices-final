<?php

	function checkAccess(): bool {
		session_start();
		if (isset($_SESSION['username']) && $_SESSION['uid'] == 1) {
			// Redirigir si no estás logueado y no eres el administrador.
			return TRUE;
		} 
		return FALSE;
	}
    
?>
