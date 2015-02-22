<?php 
	
	require __DIR__ . '/../functions/sql.php';

	function news_getAll() {

		$sql = 'SELECT * FROM news';
		
		return sql_query($sql);
	}

    function news_insert($data) {
    
        $sql = "INSERT INTO news
        (title, new)
        VALUES
        ('" . $data['title'] ."', '" . $data['new'] ."')";
        sql_exec($sql);
    }
?>