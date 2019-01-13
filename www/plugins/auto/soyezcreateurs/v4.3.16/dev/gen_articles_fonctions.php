<?php

function sc_extension($filename) {
	return substr(strrchr($filename,'.'),1);
}
