<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form style="max-width: 50%;margin: 10px auto;" method="post">
  <div class="form-group row">
    <label for="laura_images" class="col-4 col-form-label">Laura images</label>
    <div class="col-8">
      <input id="laura_images" name="laura_images" type="text" class="form-control" required="required" value="<?php echo htmlspecialchars($_POST['laura_images'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="petites_images" class="col-4 col-form-label">Petites images</label>
    <div class="col-8">
      <input id="petites_images" name="petites_images" type="text" class="form-control" required="required" value="<?php echo htmlspecialchars($_POST['petites_images'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="plus_images" class="col-4 col-form-label">Plus images</label>
    <div class="col-8">
      <input id="plus_images" name="plus_images" type="text" class="form-control" required="required" value="<?php echo htmlspecialchars($_POST['plus_images'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="laura_en_links" class="col-4 col-form-label">Laura En links</label>
    <div class="col-8">
      <textarea id="laura_en_links" name="laura_en_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['laura_en_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="laura_fr_links" class="col-4 col-form-label">Laura Fr links</label>
    <div class="col-8">
      <textarea id="laura_fr_links" name="laura_fr_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['laura_fr_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="petites_en_links" class="col-4 col-form-label">Petites En links</label>
    <div class="col-8">
      <textarea id="petites_en_links" name="petites_en_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['petites_en_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="petites_fr_links" class="col-4 col-form-label">Petites Fr links</label>
    <div class="col-8">
      <textarea id="petites_fr_links" name="petites_fr_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['petites_fr_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="plus_en_links" class="col-4 col-form-label">Plus En links</label>
    <div class="col-8">
      <textarea id="plus_en_links" name="plus_en_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['plus_en_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="plus_fr_links" class="col-4 col-form-label">Plus Fr links</label>
    <div class="col-8">
      <textarea id="plus_fr_links" name="plus_fr_links" cols="40" rows="5" class="form-control" required="required"><?php echo htmlspecialchars($_POST['plus_fr_links'] ?? '', ENT_QUOTES); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="template" class="col-4 col-form-label">Template</label>
    <div class="col-8">
      <input id="template" name="template" type="text" class="form-control" required="required" value="<?php echo htmlspecialchars($_POST['template'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <div class="form-group row" style="display: none;">
    <label for="gifs" class="col-4 col-form-label">Gifs</label>
    <div class="col-8">
      <input id="gifs" name="gifs" type="text" class="form-control" value="<?php echo htmlspecialchars($_POST['gifs'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="folder_number" class="col-4 col-form-label">Folder number</label>
    <div class="col-8">
      <input id="folder_number" name="folder_number" type="text" class="form-control" value="<?php echo htmlspecialchars($_POST['folder_number'] ?? '', ENT_QUOTES); ?>">
    </div>
  </div>
  <!-- <div class="form-group row">
    <label class="col-4">Language</label>
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="lang" id="lang_0" type="radio" checked class="custom-control-input" value="en">
        <label for="lang_0" class="custom-control-label">EN</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="lang" id="lang_1" type="radio" class="custom-control-input" value="fr">
        <label for="lang_1" class="custom-control-label">FR</label>
      </div>
    </div>
  </div> -->
  <div class="form-group row">
    <label class="col-4 col-form-label">Environment</label>
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="env" id="env_0" type="radio" checked class="custom-control-input" value="qa">
        <label for="env_0" class="custom-control-label">QA</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="env" id="env_1" type="radio" class="custom-control-input" value="prod">
        <label for="env_1" class="custom-control-label">Prod</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      <button name="reset" type="reset" class="btn btn-primary">Reset</button>
    </div>
  </div>
</form>
<style>
  .col-form-label {
    text-align: right;
  }

  .alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    max-width: 50%;
    margin: 0 auto 50px auto;
    text-align: center;
  }
</style>
<?php

include 'templates.php';


if (!empty($_POST)) {

  $laura_en_links_string = $_POST['laura_en_links'];
  $laura_fr_links_string = $_POST['laura_fr_links'];
  $petites_en_links_string = $_POST['petites_en_links'];
  $petites_fr_links_string = $_POST['petites_fr_links'];
  $plus_en_links_string = $_POST['plus_en_links'];
  $plus_fr_links_string = $_POST['plus_fr_links'];

  $laura_src = $_POST['laura_images'];
  $petites_src = $_POST['petites_images'];
  $plus_src = $_POST['plus_images'];

  $rows = $_POST['template'];

  //$lang = $_POST['lang'];
  $lang = 'en';

  $env = $_POST['env'];

  $folder_number = $_POST['folder_number'];

  $laura_en_alts = array();
  $laura_en_links = array();
  $laura_fr_alts = array();
  $laura_fr_links = array();
  $petites_en_alts = array();
  $petites_en_links = array();
  $petites_fr_alts = array();
  $petites_fr_links = array();
  $plus_en_alts = array();
  $plus_en_links = array();
  $plus_fr_alts = array();
  $plus_fr_links = array();


  function generate_links_alts($links_alts, &$brand_lang_links, &$brand_lang_alts)
  {
    $alts = array();
    $links = array();
    $brief = $links_alts;
    $brief = explode("\n", $brief);
    foreach ($brief as $item) {
      $item = explode('=', $item,2);
      if (strpos($item[0], 'link')) {
        $temp = explode('link', $item[0]);
        
        $i = (int)$temp[1];
        $links[$i] = str_replace('"', '', $item[1]);
        //echo '<pre>';
    //print_r($links[$i]);
    //echo '</pre><br>';
      }
      if (strpos($item[0], 'alt')) {
        $temp = explode('alt', $item[0]);
        $i = (int)$temp[1];
        $alts[$i] = str_replace('"', '', $item[1]);
      }
    }
    //echo '<pre>';
    $brand_lang_links = $links;
    $brand_lang_alts = $alts;
    //print_r($alts);
    //print_r($links);
    //echo '</pre><br>';
  }

  generate_links_alts($laura_en_links_string, $laura_en_links, $laura_en_alts);
  generate_links_alts($laura_fr_links_string, $laura_fr_links, $laura_fr_alts);
  generate_links_alts($petites_en_links_string, $petites_en_links, $petites_en_alts);
  generate_links_alts($petites_fr_links_string, $petites_fr_links, $petites_fr_alts);
  generate_links_alts($plus_en_links_string, $plus_en_links, $plus_en_alts);
  generate_links_alts($plus_fr_links_string, $plus_fr_links, $plus_fr_alts);

  function generate_template($src, $rows, $links, $alts, $lang, $env, $filename, $folder_number)
  {
    //echo $src.'<br>';
    $src = $src . $lang . '-';
    $rows = explode(",", $rows);
    $data = '<table style="max-width: 600px;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">';
    foreach ($rows as $item) {
      if (!strpos($item, '-')) {
        $arg1 = array(
          "num" => $item,
          "base_folder" => $folder_number,
          "env" => $env,
          "href" => $links[$item],
          "alt" => $alts[$item],
          "src" => $src,
          "lang" => $lang,
        );
        $data .= co1($arg1);
      } else {
        $items = explode("-", $item);
        $cols = sizeof($items);

        if($cols == 2){
          $i = $items[0];
          $j = $i + 1;
          $arg2 = array(
            "num" => $items[0],
            "base_folder" => $folder_number,
            "env" => $env,
            "href1" => $links[$i],
            "alt1" => $alts[$i],
            "src1" => $src,
            "href2" => $links[$j],
            "alt2" => $alts[$j],
            "src2" => $src,
            "lang" => $lang,
          );
          $data .= co2($arg2);
        }

        if($cols == 3){
          $i = $items[0];
          $j = $i + 1;
          $k = $j + 1;
          $arg3 = array(
            "num" => $items[0],
            "base_folder" => $folder_number,
            "env" => $env,
            "href1" => $links[$i],
            "alt1" => $alts[$i],
            "src1" => $src,
            "href2" => $links[$j],
            "alt2" => $alts[$j],
            "src2" => $src,
            "href3" => $links[$k],
            "alt3" => $alts[$k],
            "src3" => $src,
            "lang" => $lang,
          );
          $data .= co3($arg3);
        }

        if($cols == 4){
          $i = $items[0];
          $j = $i + 1;
          $k = $j + 1;
          $m = $k + 1;
          $arg4 = array(
            "num" => $items[0],
            "base_folder" => $folder_number,
            "env" => $env,
            "href1" => $links[$i],
            "alt1" => $alts[$i],
            "src1" => $src,
            "href2" => $links[$j],
            "alt2" => $alts[$j],
            "src2" => $src,
            "href3" => $links[$k],
            "alt3" => $alts[$k],
            "src3" => $src,
            "href4" => $links[$m],
            "alt4" => $alts[$m],
            "src4" => $src,
            "lang" => $lang,
          );
          $data .= co4($arg4);
        }

    
      }
    }

    $data .= ' </table>';
    //echo $data;
    //$fh = fopen($filename, "w");
    //fwrite($fh, $data);
    //fclose($fh);
    //echo "<a href='" . $filename . "'>Click Here</a> to download the ".$filename."<br>";
    return $data;
  }

  if ($env == 'qa') {
    $laura_en = generate_template($laura_src, $rows, $laura_en_links, $laura_en_alts, 'en', $env, 'laura-en.html', $folder_number);
    $laura_fr = generate_template($laura_src, $rows, $laura_fr_links, $laura_fr_alts, 'fr', $env, 'laura-fr.html', $folder_number);
    $petites_en = generate_template($petites_src, $rows, $petites_en_links, $petites_en_alts, 'en', $env, 'petites-en.html', $folder_number);
    $petites_fr = generate_template($petites_src, $rows, $petites_fr_links, $petites_fr_alts, 'fr', $env, 'petites-fr.html', $folder_number);
    $plus_en = generate_template($plus_src, $rows, $plus_en_links, $plus_en_alts, 'en', $env, 'plus-en.html', $folder_number);
    $plus_fr = generate_template($plus_src, $rows, $plus_fr_links, $plus_fr_alts, 'fr', $env, 'plus-fr.html', $folder_number);


    $res = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script language="javascript">
        var popupWindow = null;
        var w = 1200;
        var h = 900;
        var scroll = "yes"
        var winName = "link-test"
        function centeredPopup(url) {
            LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
            TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
            settings =
                "height=" + h + ",width=" + w + ",top=" + TopPosition + ",left=" + LeftPosition + ",scrollbars=" + scroll + ",resizable"
            popupWindow = window.open(url, winName, settings);
        }
        $(document).ready(function () {
            $("a").click(function (event) {
                event.preventDefault();
                centeredPopup(this.href)
            });
        });
    </script><style type="text/css">
  body{background: #000;color: #fff;};
  </style><table class="tg">
  <thead>
    <tr>
      <th class="tg-0lax">Laura EN</th>
      <th class="tg-0lax">Laura FR</th>
      <th class="tg-0lax">Petites EN</th>
      <th class="tg-0lax">Petites FR</th>
      <th class="tg-0lax">Plus EN</th>
      <th class="tg-0lax">Plus FR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tg-0lax">Laura-EN</td>
      <td class="tg-0lax">Laura-FR</td>
      <td class="tg-0lax">Petites-EN</td>
      <td class="tg-0lax">Petites-FR</td>
      <td class="tg-0lax">Plus-EN</td>
      <td class="tg-0lax">Plus-FR</td>
    </tr>
  </tbody>
  </table>';

    $res = str_replace('Laura-EN', $laura_en, $res);
    $res = str_replace('Laura-FR', $laura_fr, $res);
    $res = str_replace('Petites-EN', $petites_en, $res);
    $res = str_replace('Petites-FR', $petites_fr, $res);
    $res = str_replace('Plus-EN', $plus_en, $res);
    $res = str_replace('Plus-FR', $plus_fr, $res);

    $filename = 'preview.html';
    $fh = fopen($filename, "w");
    fwrite($fh, $res);
    fclose($fh);
    echo "<div class='alert alert-success' role='alert'><a download href='" . $filename . "'>Click Here</a> to download preview</div>";
  } else {
    $template = generate_template($laura_src, $rows, $laura_en_links, $laura_en_alts, 'en', $env, 'template.html', $folder_number);
    include 'prod_body.php';


    $filename = 'template.html';
    $fh = fopen($filename, "w");
    fwrite($fh, $prod_body);
    fclose($fh);
    echo "<div class='alert alert-success' role='alert'><a download href='" . $filename . "'>Click Here</a> to download template</div>";
  }
}
