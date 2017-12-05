<!DOCTYPE html>
<html>
  <head>

    <title>Documentation - Materialize</title>
    <? include "../sitewide-mat/globals-top.php"; ?>
  </head>
  <body>
<div id="work-in-progress">
        <div class="sk-chasing-dots">
            <div class="sk-child sk-dot1"></div>
            <div class="sk-child sk-dot2"></div>
        </div>
    </div>
 <? include "../sitewide-mat/header.php"; ?>
      <!--page title start-->
      <section class="page-title ptb-50">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2>Waves</h2>
                      <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Shortcodes</a></li>
                          <li class="active">Waves</li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>
      <!--page title end-->
<div class="row" id="portion1">

  <div class="col s3">
    <h4>Image waves</h4>
    <div class="waves-effect waves-block waves-light">
      <img src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?q=80&fm=jpg&s=643e44f5177366de6cc914c8bcfbe064" width="100%">
    </div>
  </div>
  <div class="col s3">
    <h4>Card image waves</h4>
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?q=80&fm=jpg&s=643e44f5177366de6cc914c8bcfbe064">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>

        <p><a href="#!">This is a link</a></p>
      </div>
    </div>
  </div>
  <div class="col s3">
    <h4>Card reveal image waves</h4>
     <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?q=80&fm=jpg&s=643e44f5177366de6cc914c8bcfbe064">
        </div>
        <div class="card-content" id="portion2">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
  </div>
</div>
      <? include "../sitewide-mat/footer.php"; ?>
      <? include "../sitewide-mat/globals-bottom.php"; ?>
    <script type="text/javascript">
  $( document ).ready(function() {



  });
    </script>
  </body>
</html>