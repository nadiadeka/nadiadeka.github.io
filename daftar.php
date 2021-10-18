            <?php
   
    if(isset($_GET['act']) AND $_GET['act']=='sign_up') {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $telephone=$_POST['telephone'];
        $kelas=$_POST['kelas'];
        $level=$_POST['level'];
        
        if($_POST['password'] == $_POST['password_confirmation']){
            $qry="INSERT INTO member (nama_depan, nama_belakang, alamat, email, username, password, telepon, kelas, level) VALUES ('$firstname', '$lastname','$address','$email','$username','$password','$telephone','$kelas','$level')";
	    	$tambah=mysqli_query($connect, $qry);
          
            
            if($tambah) {
                echo "<script src='sweetalert/sweetalert.min.js'></script>
                    <script language='JavaScript'>
                    swal({
                      title: 'SELAMAT!',
                      text: 'Kamu berhasil mendaftar!',
                      icon: 'success',
                      button : false
                    });</script>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				echo "<button> <a href='index.php' /> </button> ";
            } else {
                echo "<h4>Data gagal disimpan.</h4>";
            }
        } else {
            echo "<h4>Password harus sama!</h4>";
        }
    }
    
?>