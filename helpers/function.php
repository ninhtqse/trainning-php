<?php

function view($path, $params = [])
{
    return readfile("../views/$path");
}