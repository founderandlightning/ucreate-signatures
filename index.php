<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <body>
    <?php
    $json = file_get_contents('data.json');
    $obj = json_decode( $json );
    //var_dump($obj);
    ?>
<style media="screen">
  span {
    color: #ccc;
  }
</style>
    <?php foreach($obj as $member): ?>
      <span style="display: block; margin: 20px 0;">copy from here</span>
     <div style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;">
       <style media="screen">
         .grad {
           /* rect: */
          background-image: linear-gradient(-114deg, #E36850 0%, #B323F5 100%);
          /* rect: */
          /*background-image: linear-gradient(-49deg, #50D7E3 0%, #FF9F00 39%, #E36850 60%, #B323F5 100%);*/
          width: 60px;
          height:60px;
          border-radius: 8px;
          margin-right: 10px;
          line-height: 60px;
          font-weight: 900;
          color: white;
         }
       </style>
       <table border="0" cellspacing="0">
          <tr>
            <td style="vertical-align: top;">
              <div class="" style="width: 48px; height: 48px; margin-right:10px; background-image: url(data:image/png;base64,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);">

              </div>
            </td>
            <td style="padding-top: 5px;">
              <p style="color: black; margin: 0px; padding-bottom: 2px; font-size: 18px!important; font-weight: 600;"><?php echo $member->name; ?></p>
              <?php if(!empty($member->position)): ?><p style="margin: 0px; padding: 0; font-size: 16px;color: #797D7B;"><?php echo $member->position; ?></p><?php endif; ?>
              <?php if(!empty($member->mobile)): ?><p style="margin-bottom: 0;padding: 0; font-size: 14px;color: #797D7B;">+44 <?php echo $member->mobile; ?></p><?php endif; ?>
                <hr style="border: 0; border-top: 1px solid #f5f5f5;">
                <p style="font-size: 12px; color: #f5f5f5;"><a href="#/" style="color: #50D7E3; text-decoration: none;">facebook</a> | <a href="#/" style="color: #50D7E3; text-decoration: none;">twitter</a> | <a href="#/" style="color: #50D7E3; text-decoration: none;">our blog</a> |  <a style="color: #B423F6; text-decoration: none;" href="http://www.ucreate.it">ucreate.it</a></p>
            </td>
          </tr>
       </table>
     </div>
      <span style="display: block; margin: 20px 0;">to here</span>
    <?php endforeach; ?>
  </body>
</html>
