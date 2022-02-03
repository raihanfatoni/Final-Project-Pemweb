<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customer</title>
</head>
<style>
    * {margin:-6px; padding:0;}
    body{
        background-image: url('https://telegra.ph/file/00447a4f3112c485abaa8.jpg');
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

    nav ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: white;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#666;
    }

    nav ul li:hover a{
     color:black;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: black;
     text-decoration: none;
    }

    nav ul ul{
     background: #53bd84;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #fff;
    }

    nav ul ul li a:hover{
     background-color: #666;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
		tr, td{ 
  		border: 1px solid black;
		padding: 15px;
		color : black;

	}
        table {
            margin: 20px;
            align-content: center;
            background: white;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        }
        input, textarea, {
         background: none;
         text-align: center;
         border: 2px solid #3498db;
         padding: 16px 20px;
         outline: none;
         color: black;
         border-radius: 24px;
        }
        .new{
            background-color: #3498db;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
        }
    </style>
<body>
    <center><table border="1">
        <thead>
            <tr>
                <th>NUPTK</th>
                <th>Nama</th>
                <th>Matpel</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>ID Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($karyawan as $row) : ?>
                <tr>
                    <td><?= $row['id_karyawan']; ?></td>
                    <td><?= $row['Nama']; ?></td>
                    <td><?= $row['RanahKerja']; ?></td>
                    <td><?= $row['NoTelefon']; ?></td>
                    <td><?= $row['Alamat']; ?></td>
                    <td><?= $row['JenisKelamin']; ?></td>
                    <td><?= $row['id_admin1']; ?></td>
                    <td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>