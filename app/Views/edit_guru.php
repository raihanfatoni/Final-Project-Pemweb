<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
    <style>
    body{
        background-image: url('https://telegra.ph/file/00447a4f3112c485abaa8.jpg');
    }
	a:link, a:visited {
        margin : 20px auto;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

	label,h3{
		color: white;
        font-size: 20px;
	}
    .box{
		width: 400px;
  		padding: 10px;
  		border: 5px solid white;
  		margin-top: 100px;
		background: transparent;
	}
	input{
         background: white;
         text-align: center;
         border: 2px solid #3498db;
         padding: 16px 20px;
         outline: none;
         color: black;
         border-radius: 10px;
         margin: 30px;
        }
        a,button{
            background-color: #3498db;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
        }
    </style>
</head>

<center><body>
    <form action=<?= base_url("/guru/update") ?> method="post">
    <div class="box">
        <h3>EDIT Guru</h3>
        <div><label>NUPTK : </label><input type="text" name="NUPTK" class="form-control"></div>
        <div><label>Nama : </label><input type="text" name="Nama" class="form-control"></div>
        <div><label>Matpel: </label><input type="text" name="MataPelajaran" class="form-control"></div>
        <div><label>Telefon: </label><input type="text" name="NoTelefon" class="form-control"></div>
        <div><label>Alamat : </label><input type="text" name="Alamat" class="form-control"></div>
        <div><label>Jenis Kelamin: </label><input type="text" name="JenisKelamin" class="form-control"></div>
        <div><label>ID Admin: </label><input type="text" name="id_admin" class="form-control"></div>
        <input type="hidden" name="id" value="<?= $guru->NUPTK; ?>">
        <button type="submit">Update</button>

        </div>
    </form>
</body><center>

</html>
