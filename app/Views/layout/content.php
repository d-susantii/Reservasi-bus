<?php
if (isset($pages)) {
    echo view($pages);
} else {
    echo view('pages/dashoard');
}