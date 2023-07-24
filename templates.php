<?php

function co1($args)
{

  $imagenumber = generate_image_number($args['num']);
  $tmpl = '<tr>
    <td>
        <a style="text-decoration: none;" conversion="true" href="%%=RedirectTo(@link1_tmplnumber)=%%" alias="%%=v(@alttmplnumber)=%%">
            <img style="width: 100% !important;display: flex; max-width: 600px; height: auto !important; display: block;"
                alt="%%=v(@alttmplnumber)=%%"
                src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber.jpg" width="600"
                border="0" align="middle">
        </a>
    </td>
    </tr>';
  if ($args['env'] == 'prod') {
    $tmpl = str_replace('tmplnumber', $args['num'], $tmpl);
    $tmpl = str_replace('imagenumber', $imagenumber, $tmpl);
    $tmpl = str_replace('base_folder', $args['base_folder'], $tmpl);
  } else {
    $src = $args['lang'] . '/' . $args['src'] . $imagenumber . '.jpg';
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber)=%%', $args['href'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber)=%%', $args['alt'], $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber.jpg', $src, $tmpl);
  }

  return $tmpl;
}


function co2($args)
{
  $num1 = $args['num'];
  $base_folder = $args['base_folder'];
  $num2 = $num1;
  $num2++;
  $imagenumber1 = generate_image_number($num1);
  $imagenumber2 = generate_image_number($num2);
  $tmpl = '<tr>
    <td>
        <table style="max-width: 600px;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
            <tr>
                <td width="50%">
                    <a href="%%=RedirectTo(@link1_tmplnumber1)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber1)=%%">
                        <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg"
                            alt="%%=v(@alttmplnumber1)=%%"
                            style="width: 100% !important;display: flex; max-width: 300px; height: auto !important;" width="300"
                            border="0" align="middle">
                    </a>
                </td>
                <td width="50%">
                    <a href="%%=RedirectTo(@link1_tmplnumber2)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber2)=%%">
                        <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg"
                            alt="%%=v(@alttmplnumber2)=%%"
                            style="width: 100% !important;display: flex; max-width: 300px; height: auto !important;" width="300"
                            border="0" align="middle">
                    </a>
                </td>
            </tr>

        </table>
    </td>
</tr>';
  if ($args['env'] == 'prod') {
    $tmpl = str_replace('tmplnumber1', $num1, $tmpl);
    $tmpl = str_replace('tmplnumber2', $num2, $tmpl);
    $tmpl = str_replace('imagenumber1', $imagenumber1, $tmpl);
    $tmpl = str_replace('imagenumber2', $imagenumber2, $tmpl);
    $tmpl = str_replace('base_folder', $base_folder, $tmpl);
  } else {
    $src1 = $args['lang'] . '/' . $args['src1'] . $imagenumber1 . '.jpg';
    $src2 = $args['lang'] . '/' . $args['src2'] . $imagenumber2 . '.jpg';
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber1)=%%', $args['href1'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber2)=%%', $args['href2'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber1)=%%', $args['alt1'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber2)=%%', $args['alt2'], $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg', $src1, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg', $src2, $tmpl);
  }
  return $tmpl;
}



function co3($args)
{
  $num1 = $args['num'];
  $base_folder = $args['base_folder'];
  $num2 = $num1;
  $num2++;
  $num3 = $num2;
  $num3++;
  $imagenumber1 = generate_image_number($num1);
  $imagenumber2 = generate_image_number($num2);
  $imagenumber3 = generate_image_number($num3);
  $tmpl = '<tr>
  <td>
      <table style="max-width: 600px;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">

          <tr>
              <td width="33%">
                  <a href="%%=RedirectTo(@link1_tmplnumber1)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber1)=%%">
                      <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg" alt="%%=v(@alttmplnumber1)=%%" style="width: 100% !important;display: flex; max-width: 200px; height: auto !important;" width="200" border="0" align="middle">
                  </a>
              </td>
              <td width="33%">
                  <a href="%%=RedirectTo(@link1_tmplnumber2)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber2)=%%">
                      <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg" alt="%%=v(@alttmplnumber2)=%%" style="width: 100% !important;display: flex; max-width: 200px; height: auto !important;" width="200" border="0" align="middle">
                  </a>
              </td>
              <td width="33%">
                  <a href="%%=RedirectTo(@link1_tmplnumber3)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber3)=%%">
                      <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber3.jpg" alt="%%=v(@alttmplnumber3)=%%" style="width: 100% !important;display: flex; max-width: 200px; height: auto !important;" width="200" border="0" align="middle">
                  </a>
              </td>
          </tr>

      </table>
  </td>
</tr>';
  if ($args['env'] == 'prod') {
    $tmpl = str_replace('tmplnumber1', $num1, $tmpl);
    $tmpl = str_replace('tmplnumber2', $num2, $tmpl);
    $tmpl = str_replace('tmplnumber3', $num3, $tmpl);
    $tmpl = str_replace('imagenumber1', $imagenumber1, $tmpl);
    $tmpl = str_replace('imagenumber2', $imagenumber2, $tmpl);
    $tmpl = str_replace('imagenumber3', $imagenumber3, $tmpl);
    $tmpl = str_replace('base_folder', $base_folder, $tmpl);
  } else {
    $src1 = $args['lang'] . '/' . $args['src1'] . $imagenumber1 . '.jpg';
    $src2 = $args['lang'] . '/' . $args['src2'] . $imagenumber2 . '.jpg';
    $src3 = $args['lang'] . '/' . $args['src3'] . $imagenumber3 . '.jpg';
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber1)=%%', $args['href1'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber2)=%%', $args['href2'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber3)=%%', $args['href3'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber1)=%%', $args['alt1'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber2)=%%', $args['alt2'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber3)=%%', $args['alt3'], $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg', $src1, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg', $src2, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber3.jpg', $src3, $tmpl);
  }
  return $tmpl;
}


function co4($args)
{
  $num1 = $args['num'];
  $base_folder = $args['base_folder'];
  $num2 = $num1;
  $num2++;
  $num3 = $num2;
  $num3++;
  $num4 = $num3;
  $num4++;
  $imagenumber1 = generate_image_number($num1);
  $imagenumber2 = generate_image_number($num2);
  $imagenumber3 = generate_image_number($num3);
  $imagenumber4 = generate_image_number($num4);
  $tmpl = '<tr>
  <td>
    <table style="max-width: 600px;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
     
       <tr>
        <td width="25%">
          <a href="%%=RedirectTo(@link1_tmplnumber1)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber1)=%%">
            <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg" alt="%%=v(@alttmplnumber1)=%%" style="width: 100% !important;display: flex; max-width: 150px; height: auto !important;" width="150" border="0" align="middle">
         </a>
       </td>
       <td width="25%">
        <a href="%%=RedirectTo(@link1_tmplnumber2)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber2)=%%">
          <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg" alt="%%=v(@alttmplnumber2)=%%" style="width: 100% !important;display: flex; max-width: 150px; height: auto !important;" width="150" border="0" align="middle">
        </a>
       </td>
       <td width="25%">
         <a href="%%=RedirectTo(@link1_tmplnumber3)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber3)=%%">
           <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber3.jpg" alt="%%=v(@alttmplnumber3)=%%" style="width: 100% !important;display: flex; max-width: 150px; height: auto !important;" width="150" border="0" align="middle">
         </a>
      </td>
      <td width="25%">
         <a href="%%=RedirectTo(@link1_tmplnumber4)=%%" style="text-decoration: none;" conversion="true" alias="%%=v(@alttmplnumber4)=%%">
           <img src="http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber4.jpg" alt="%%=v(@alttmplnumber4)=%%" style="width: 100% !important;display: flex; max-width: 150px; height: auto !important;" width="150" border="0" align="middle">
         </a>
      </td>
    </tr>
  
 </table>
</td>
</tr>';
  if ($args['env'] == 'prod') {
    $tmpl = str_replace('tmplnumber1', $num1, $tmpl);
    $tmpl = str_replace('tmplnumber2', $num2, $tmpl);
    $tmpl = str_replace('tmplnumber3', $num3, $tmpl);
    $tmpl = str_replace('tmplnumber4', $num4, $tmpl);
    $tmpl = str_replace('imagenumber1', $imagenumber1, $tmpl);
    $tmpl = str_replace('imagenumber2', $imagenumber2, $tmpl);
    $tmpl = str_replace('imagenumber3', $imagenumber3, $tmpl);
    $tmpl = str_replace('imagenumber4', $imagenumber4, $tmpl);
    $tmpl = str_replace('base_folder', $base_folder, $tmpl);
  } else {
    $src1 = $args['lang'] . '/' . $args['src1'] . $imagenumber1 . '.jpg';
    $src2 = $args['lang'] . '/' . $args['src2'] . $imagenumber2 . '.jpg';
    $src3 = $args['lang'] . '/' . $args['src3'] . $imagenumber3 . '.jpg';
    $src4 = $args['lang'] . '/' . $args['src4'] . $imagenumber4 . '.jpg';
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber1)=%%', $args['href1'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber2)=%%', $args['href2'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber3)=%%', $args['href3'], $tmpl);
    $tmpl = str_replace('%%=RedirectTo(@link1_tmplnumber4)=%%', $args['href4'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber1)=%%', $args['alt1'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber2)=%%', $args['alt2'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber3)=%%', $args['alt3'], $tmpl);
    $tmpl = str_replace('%%=v(@alttmplnumber4)=%%', $args['alt4'], $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber1.jpg', $src1, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber2.jpg', $src2, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber3.jpg', $src3, $tmpl);
    $tmpl = str_replace('http://image.emails.laura.ca/lib/fe9915747467067e7d/m/base_folder/%%=v(@ImgName)=%%-imagenumber4.jpg', $src4, $tmpl);
  }
  return $tmpl;
}

function generate_image_number($num)
{
  if ($num < 10) {
    $imagenumber = '0' . $num;
  } else {
    $imagenumber = $num;
  }
  return $imagenumber;
}