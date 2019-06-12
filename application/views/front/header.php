<!doctype html>
<html lang="en">
<head>
  <title><?php echo $title;?> | <?php echo $company_data->company_name;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if($this->uri->segment('1') == 'produk' and $this->uri->segment('2') != 'katalog' and $this->uri->segment('2') != 'cari_produk'){ ?>
    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $produk->judul_produk ?> | <?php echo $company_data->company_name ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="<?php echo current_url() ?>" />
    <meta property="og:image" content="<?php echo base_url('assets/images/produk/').$produk->foto.$produk->foto_type ?>" />
    <meta property="og:description" content="<?php echo character_limiter($produk->deskripsi, '50') ?>" />
  <?php } ?>
	<!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/fronted1/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/fronted1/style/style.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.2/devicon.min.css"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114929317-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114929317-1');
  </script>
    <script>
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
    </script>
</head>

<body>
