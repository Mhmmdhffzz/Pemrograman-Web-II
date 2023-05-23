<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 20px;
            font-size: 20px;
        }
        
        h1 {
            color: #333333;
        }
        
        .biodata-container {
            border-radius: 10px;
            border: 1px solid ;
            padding: 20px;
            display: flex;
            width: fit-content;
            height: fit-content;
            margin: auto;
            margin-top: 10%;    
        }
        
        .biodata-container img {
            width: 200px;
            margin-right: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .biodata-details {
            flex: 1;

        }
        
        p {
            margin: 0;
            padding: 5px 0;
        }
        
        strong {
            font-weight: bold;
        }

        .btn{
    color: black;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 16px 16px;
    border-radius: 500px;
    display: inline-block;
    font-weight: 500;
    transition: all .4s ease-in-out;
    background-size: 152% 100%;
    background: white;
    border: 2px solid turquoise;
    margin-top: 70px;
}


img {
    border-radius: 50%;
    max-height: 400px;
}

    </style>
</head>
<body>
    <div class="biodata-container">
        <img src="<?= base_url('img/Hafiz.jpg') ?>" alt="Foto Profil">
        <div class="biodata-details">
            <table>
                <tr>
                    <td><b>BIODATA</b></td>
                </tr><tr><td><br></td></tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama;?></td>
                </tr>
                <tr>
                    <td>NIM:</td>
                    <td>:</td>
                    <td><?= $nim;?></td>
                </tr>
                <tr>
                    <td>Prodi:</td>
                    <td>:</td>
                    <td><?= $prodi;?></td>
                </tr>
                <tr>
                    <td>Hobi:</td>
                    <td>:</td>
                    <td><?= $hobi;?></td>
                </tr>
                <tr>
                    <td>Skill:</td>
                    <td>:</td>
                    <td><?= $skill;?></td>
                </tr>
            </table>


            <form action="/home/index">
        <button class="btn" type="submit">Home Page</button>

        </form>
        </div>
        
    </div>
</body>
</html>