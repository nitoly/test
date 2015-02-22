<?php 
	require __DIR__ . '/models/news_sort.php';

	$items = news_getAll();

	include __DIR__ . '/views/index.php';
?>