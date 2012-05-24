<?php

function facebook_like()
{
  return sprintf('<iframe src="http://www.facebook.com/plugins/like.php?href=%s&amp;layout=standard&amp;show_faces=true&amp;width=650&amp;action=recommend&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:650px;" allowTransparency="true"></iframe>',
                 urlencode(sprintf('http://%s%s', 
                                                    $_SERVER['SERVER_NAME'],
                                                    $_SERVER['REQUEST_URI']))
                );
}