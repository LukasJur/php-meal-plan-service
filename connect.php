<?php
$db = parse_url(getenv("postgres://qkgvshezxcspyo:05aeb16c0337e86bcb5a8744bf76ce3d50292aae13a9458463493632a7de657d@ec2-54-225-241-25.compute-1.amazonaws.com:5432/d93kd16emp4032"));
$db["path"] = ltrim($db["path"], "/");


?>