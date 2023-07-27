<?php

define("DEVELOPMENT", true); 
function dbconnect()
{
	$db = new mysqli("localhost", "root", "", "unibookstore");
	return $db;
}
function getDataBuku($ID_Buku)
{
	$db = dbconnect();
	if ($db->errno == 0) {
		$res = $db->query(" SELECT buku.ID_Buku,buku.Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
		penerbit.Penerbit, kategori.`Nama_Kategori`
		FROM buku
		JOIN penerbit ON buku.Penerbit = penerbit.ID_Penerbit
JOIN kategori ON buku.`Kategori`=kategori.`ID_Kategori` WHERE buku.`ID_Buku` = '$ID_Buku' ");
		if ($res) {
			$data = $res->fetch_assoc();
			return $data;
		} else
			return False;
	} else
		return False;
}

function getListKategori()
{
	$db = dbconnect();
	if ($db->connect_errno == 0) {
		$res = $db->query("SELECT * FROM kategori ORDER BY ID_Kategori");
		if ($res) {
			$data = $res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		} else
			return False;
	} else
		return false;
}
function getListPenerbit()
{
	$db = dbconnect();
	if ($db->connect_errno == 0) {
		$res = $db->query("select * from Penerbit order by ID_Penerbit");
		if ($res) {
			$data = $res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		} else
			return False;
	} else
		return false;
}
function CariBuku($cari)
{
	$db = dbconnect();
	$sql = "Select buku.ID_Buku,kategori.Nama_Kategori AS Kategori,buku.Nama_Buku,buku.Harga,buku.Stok,
	penerbit.Penerbit 
	FROM buku
	JOIN penerbit ON buku.Penerbit = penerbit.ID_Penerbit
	JOIN kategori ON buku.Kategori = kategori.ID_Kategori where Nama_Buku LIKE '%$cari%' ";
	$res = $db->query($sql);
	return $res;
}
function getDataPenerbit($IdPenerbit)
{
	$db = dbconnect();
	$IdPenerbit = $IdPenerbit;
	if ($db->errno == 0) {
		$res = $db->query("SELECT * from Penerbit where ID_Penerbit = '$IdPenerbit' ");
		if ($res) {
			$data = $res->fetch_assoc();
			return $data;
		} else
			return False;
	} else
		return False;
}
