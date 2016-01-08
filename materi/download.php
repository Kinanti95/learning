<!DOCTYPE html>
<html>
<head>
<title>Simple Upload dan Download File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<div id="container">
     <div id="header">
     <!-- <h1>Simple Upload dan Download File</h1>
         <span>Dibuat oleh Pino @tutorialweb.net</span>
        </div>
 
        <div id="menu">
         <a href="index.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
        </div> -->
 
       <!--  <div id="content">
         <h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
  -->
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
             <tr>
                 <th width="30">No.</th>
                    <th width="70">Tgl. Upload</th>
                    <th width="80">File</th>
                    <th width="60">Judul</th>
                    <th width="40">Konten</th>
                </tr>
                <?php
                include('../../koneksi.php');
                 $stmt = $this->db->prepare("SELECT * FROM materi ORDER BY id_materi DESC");
                 // $stmt->execute(array($id));
                 $res = $stmt->fetch();
                 return $res;

                if($sql > 0){
                    $no = 1;
                    while($data = mysql_fetch_assoc($sql)){
                        
                        echo '<tr bgcolor="#fff">';
                            echo '<td align="center">'.$no.'</td>';
                            echo '<td align="center">'.$data['tanggal_upload'].'</td>';
                            echo '<td><a href="'.$data['file'].'">'.$data['judul'].'</a></td>';
                            echo '<td align="center">'.$data['konten'].'</td>';
                            echo '<td align="center">'.formatBytes($data['ukuran_file']).'</td>'; 
                        echo "</tr>";
                        
                        $no++;
                    }
                }else{
                    
                    echo '<tr bgcolor="#fff">';
                        echo '<td align="center" colspan="4" align="center">Tidak ada data!</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            </p>
        </div>
    </div>
 
</body>
</html>