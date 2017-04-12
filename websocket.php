#!/usr/bin/php
<?php

$socket = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errstr);

