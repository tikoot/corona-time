<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            border:0;
        }
    </style>
  </head>
  <body style="font-size: 19px; max-width: 500px; margin: 0 auto; padding:3%">
    <div style="background-color: #fff;">
    
      <div>
        <img src="https://files.fm/thumb_show.php?i=ssnnn4xy9" alt="" style="max-width: 100%"
        />
      </div>
      <div style="text-align: center; background-color: #fff;">
        <h1 style="font-size: 25px; font-weight: 900; margin-top: 40px; text-align:center; padding-bottom:16px;">{{__('register.recover_password')}}</h1>

        <p style="font-size: 18px; padding-bottom:40px; text-align:center;">{{__('register.click_this_button_to_recover_password')}}</p>


        <a href="{{$url}}" 
           style="background: #0FBA68; border-radius: 8px; text-decoration: none; padding: 19px 80px; max-width:392px;
                  color: #fff; font-size: 16px; font-weight: 900; margin:auto;
"
            >  {{ strtoupper(__('register.recover_password'))}}
         </a>

        <hr />
      </div>
    </div>
  </body>
</html>