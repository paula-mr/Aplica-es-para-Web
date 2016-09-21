<?php
	$GLOBALS['ip'] = 'localhost'; // = 'http://www.seteaum.com.de'
	$GLOBALS['usuario'] = 'root';
	$GLOBALS['senha'] = '';
	$GLOBALS['database'] = 'Micro';

	function questao1() {
		$con = new mysqli($GLOBALS['ip'], $GLOBALS['usuario'], $GLOBALS['senha']) or die ("ERRO AO ABRIR");
		$con->query("CREATE DATABASE Micro");
		$con->select_db($GLOBALS['database']);
		$con->query("CREATE TABLE info (id INTEGER AUTO_INCREMENT, Produto TEXT, Valor REAL, Quantidade INTEGER, PRIMARY KEY(id))");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('Mouse', 8.00, 2)");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('Teclado', 20.00, 3)");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('Gabinete', 40.00, 4)");
		$con->close();
	}

	function questao2() {
		$con = new msqli($GLOBALS['ip'], $GLOBALS['usuario'], $GLOBALS['senha'], $GLOBALS['database']) or die("ERRO AO ABRIR");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('Fonte', 50.00, 3)");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('Monitor', 250.00, 4)");
		$con->query("INSERT INTO info (Produto, Valor, Quantidade) VALUES ('HD', 180.00, 6)");
		$con->close();
	}

	function questao3() {
		$con = new msqli($GLOBALS['ip'], $GLOBALS['usuario'], $GLOBALS['senha'], $GLOBALS['database']) or die ("ERRO AO ABRIR");
		$table = $con->query("SELECT * FROM info WHERE Valor > 30.00 AND Valor < 300.00");
		echo $table . "<br>";
		$con ->close();
	}

	function questao4() {
		$con = new msqli($GLOBALS['ip'], $GLOBALS['usuario'], $GLOBALS['senha'], $GLOBALS['database']) or die ("ERRO AO ABRIR");
		$con->query("UPDATE info SET Valor = 12.00 WHERE Produto = 'Mouse'");
		$con->close();
	}

	function questao5() {
		$con = new msqli($GLOBALS['ip'], $GLOBALS['usuario'], $GLOBALS['senha'], $GLOBALS['database']) or die ("ERRO AO ABRIR");
		$con->query("DELETE FROM info WHERE id = 6");
		$con->close();
	}

	questao1();
	questao2();
	questao3();
	questao4();
	questao5();
?>