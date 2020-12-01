<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>

    <style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'DM Sans', sans-serif;
    }

    body {
        background-color: #fff
    }

    a {
        text-decoration: none;
        color: black;
    }
        
    .banner {
        height: 200px;
        width: 100%;
        background-repeat: repeat;
        background-size: cover; 
        background-position-y: -33rem;
        /* background-position-x: 10rem; */
    }

    .text-center-title {
        text-align: center;
    }

    .banner > h2 {
        color: #fefefe;
        font-size:45px;
        padding: 60px 0;
    } 

    .banner > a {
        padding:10px 20px;
        background-color: #50a376;
        border-radius: 5px;
        color: #fefefe;
    }

    </style>
</head>
<body>    
    <div class="text-center-title banner">
        <h2>Tambah Artikel</h2>
    </div>

    <?php validation_errors(); ?>
    <?php echo $error;?>

    <div class="container mt-5">
        <?php echo form_open_multipart('home/tambahArticles'); ?>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Artikel">
                <p><?php echo  form_error('title'); ?></p>
            </div>
            <div class="form-group">
                <label>Artikel</label>
                <textarea class="form-control" name="article" rows="4"></textarea>
                <p><?php echo  form_error('article'); ?></p>
            </div>
            <div class="form-group">
                <label>Input Cover Artikel (.jpg/.png)</label><br>
                <input type="file" name="cover_img">
            </div>
            <?php echo form_error('cover_img'); ?>
            <br>
            <input type="submit" value="Tambah Artikel" class="btn btn-primary w-100">
        </form>
    </div>

</body>
</html> 