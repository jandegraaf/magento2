<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

if (isset($_GET['path'])) {
    $path = urldecode($_GET['path']);

    if (file_exists('../../../../' . $path)) {
        echo 'path exists: true';
    } else {
        echo 'path exists: false';
    }
} else {
    throw new \InvalidArgumentException("GET parameter 'path' is not set.");
}
