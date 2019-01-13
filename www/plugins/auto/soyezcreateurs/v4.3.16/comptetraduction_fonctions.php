
<?php

/***
* This simple utf-8 word count function (it only counts)
* is a bit faster then the one with preg_match_all
* about 10x slower then the built-in str_word_count
*
* If you need the hyphen or other code points as word-characters
* just put them into the [brackets] like [^\p{L}\p{N}\'\-]
* If the pattern contains utf-8, utf8_encode() the pattern,
* as it is expected to be valid utf-8 (using the u modifier).
**/

// Jonny 5's simple word splitter
function str_word_count_utf8($str) {
  return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
}
?>
